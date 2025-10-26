<template>
    <div class="relative w-full">
        <div class="relative mt-[-11%] md:mt-[-10%] xl:mt-[-8%]  w-full aspect-[3/2] sm:aspect-[16/9] xl:aspect-[21/9]">
            <div ref="curvedSlider" class=" h-full w-full"></div>
        </div>
    </div>
</template>

<script>
import { onMounted, onUnmounted, ref } from 'vue';

export default {
    name: 'CurvedSlider3D',
    setup() {
        const curvedSlider = ref(null);
        let resizeObserver;
        let windowResizeHandler;

        // Image data
        const imageIds = [1015, 1016, 1018, 1019, 1020, 1021, 1022, 1023, 1024, 1025];
        const imageUrls = imageIds.map((id) => `https://picsum.photos/id/${id}/720/480`);

        // Three.js variables
        let scene, camera, renderer, group, loader;
        let animationFrameHandle;
        let clock;
        const autoRotateSpeed = 0.003;
        let currentConfig;

        // Responsive configuration
        const getResponsiveConfig = (width) => {
            if (!width || Number.isNaN(width)) {
                width = window.innerWidth;
            }

            if (width < 640) { // Mobile
                return {
                    radius: 2.5,
                    planeWidth: 2.2,
                    planeHeight: 1.47,
                    cameraZ: 2,
                    fov: 40
                };
            } else if (width < 1024) { // Tablet
                return {
                    radius: 3.2,
                    planeWidth: 2.8,
                    planeHeight: 1.87,
                    cameraZ: 0.5,
                    fov: 60
                };
            } else { // Desktop
                return {
                    radius: 4,
                    planeWidth: 3.6,
                    planeHeight: 2.4,
                    cameraZ: 0.5,
                    fov: 55
                };
            }
        };

        const measureContainer = () => {
            const el = curvedSlider.value;
            if (!el) {
                const width = window.innerWidth;
                const height = Math.max(window.innerHeight * 0.6, 1);
                return { width, height };
            }
            const rect = el.getBoundingClientRect();
            const width = Math.max(1, rect.width);
            const height = Math.max(1, rect.height || rect.width * 0.6);
            return { width, height };
        };

        const initThreeJS = () => {
            // Check if Three.js is available
            if (!window.THREE) {
                console.error("Three.js is not available");
                return;
            }

            const { THREE } = window;
            const { width, height } = measureContainer();
            currentConfig = getResponsiveConfig(width);

            // Create scene
            scene = new THREE.Scene();

            // Create camera
            camera = new THREE.PerspectiveCamera(
                currentConfig.fov,
                width / height,
                0.1,
                100
            );
            camera.position.set(0, 0, currentConfig.cameraZ);

            // Create renderer
            renderer = new THREE.WebGLRenderer({
                antialias: true,
                alpha: true,
            });
            renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
            renderer.setSize(width, height, false);
            renderer.domElement.style.width = '100%';
            renderer.domElement.style.height = '100%';
            renderer.outputColorSpace = THREE.SRGBColorSpace;

            // Add renderer to DOM
            if (curvedSlider.value) {
                curvedSlider.value.appendChild(renderer.domElement);
            }

            // Create group for images
            group = new THREE.Group();
            scene.add(group);

            // Create texture loader
            loader = new THREE.TextureLoader();
            loader.setCrossOrigin("anonymous");

            // Create clock
            clock = new THREE.Clock();

            // Create image planes
            loadImages(currentConfig);

            // Kick off sizing observer
            setupResizeObserver();
        };

        const loadImages = (config) => {
            const angleStep = (Math.PI * 2) / imageUrls.length;

            imageUrls.forEach((url, index) => {
                loader.load(
                    url,
                    (texture) => {
                        texture.colorSpace = window.THREE.SRGBColorSpace;
                        const geometry = new window.THREE.PlaneGeometry(
                            config.planeWidth,
                            config.planeHeight
                        );
                        const material = new window.THREE.MeshBasicMaterial({
                            map: texture,
                            transparent: true
                        });
                        const plane = new window.THREE.Mesh(geometry, material);

                        // Position the plane in a circular pattern
                        const angle = index * angleStep;
                        plane.position.set(
                            Math.sin(angle) * config.radius,
                            0,
                            Math.cos(angle) * config.radius
                        );
                        plane.lookAt(new window.THREE.Vector3(0, 0, 0));

                        group.add(plane);
                    },
                    undefined,
                    (error) => {
                        console.warn("Image failed to load:", { url, error });
                    }
                );
            });
        };

        const animate = () => {
            animationFrameHandle = requestAnimationFrame(animate);
            const delta = clock.getDelta();

            // Continuous auto-rotation
            group.rotation.y += autoRotateSpeed * (delta * 60);

            renderer.render(scene, camera);
        };

        const handleResize = (width, height) => {
            const size = width && height ? { width, height } : measureContainer();
            const config = getResponsiveConfig(size.width);
            currentConfig = config;

            // Update camera
            camera.aspect = size.width / size.height;
            camera.fov = config.fov;
            camera.position.z = config.cameraZ;
            camera.updateProjectionMatrix();

            // Update renderer
            renderer.setSize(size.width, size.height, false);
            renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));

            // Update plane positions and sizes
            if (group && group.children.length > 0) {
                const angleStep = (Math.PI * 2) / imageUrls.length;

                group.children.forEach((child, index) => {
                    if (child.isMesh) {
                        // Update geometry size
                        child.geometry.dispose();
                        child.geometry = new window.THREE.PlaneGeometry(
                            config.planeWidth,
                            config.planeHeight
                        );

                        // Update position
                        const angle = index * angleStep;
                        child.position.set(
                            Math.sin(angle) * config.radius,
                            0,
                            Math.cos(angle) * config.radius
                        );
                        child.lookAt(new window.THREE.Vector3(0, 0, 0));
                    }
                });
            }
        };

        const setupResizeObserver = () => {
            if (!window.ResizeObserver || !curvedSlider.value) {
                windowResizeHandler = () => handleResize();
                window.addEventListener("resize", windowResizeHandler, { passive: true });
                handleResize();
                return;
            }

            resizeObserver = new ResizeObserver((entries) => {
                for (const entry of entries) {
                    const { width, height } = entry.contentRect;
                    handleResize(width, height);
                }
            });
            resizeObserver.observe(curvedSlider.value);
        };

        const cleanup = () => {
            if (animationFrameHandle) {
                cancelAnimationFrame(animationFrameHandle);
            }

            if (renderer) {
                renderer.dispose();
                if (curvedSlider.value && curvedSlider.value.contains(renderer.domElement)) {
                    curvedSlider.value.removeChild(renderer.domElement);
                }
            }

            if (group) {
                group.children.forEach((child) => {
                    if (child.isMesh) {
                        child.geometry.dispose();
                        if (child.material.map) {
                            child.material.map.dispose();
                        }
                        child.material.dispose();
                    }
                });
            }

            if (resizeObserver && curvedSlider.value) {
                resizeObserver.unobserve(curvedSlider.value);
                resizeObserver.disconnect();
                resizeObserver = null;
            }

            if (windowResizeHandler) {
                window.removeEventListener("resize", windowResizeHandler);
                windowResizeHandler = null;
            }
        };

        onMounted(() => {
            initThreeJS();
            animate();
        });

        onUnmounted(() => {
            cleanup();
        });

        return {
            curvedSlider
        };
    }
};
</script>

<style scoped>
/* Ensure full responsiveness */
div {
    touch-action: none;
}
</style>
