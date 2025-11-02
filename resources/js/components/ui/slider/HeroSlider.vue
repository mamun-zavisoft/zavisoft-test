<template>
    <div class="relative w-full">
        <div class="relative mt-[-11%] md:mt-[-10%] xl:mt-[-8%]  w-full aspect-[3/2] sm:aspect-[16/9] xl:aspect-[21/9]">
            <div ref="curvedSlider" class=" h-full w-full"></div>
        </div>
    </div>
</template>

<script>
import { onMounted, onUnmounted, ref } from 'vue';
import * as THREE from 'three';

THREE.Cache.enabled = true;

const textureCache = new Map();
const MAX_PIXEL_RATIO = 1.5;

if (typeof window !== 'undefined' && !window.THREE) {
    window.THREE = THREE;
}

export default {
    name: 'CurvedSlider3D',
    setup() {
        const curvedSlider = ref(null);
        let resizeObserver;
        let windowResizeHandler;

        // Image index
        const images = [
            {
                id: 1,
                name: 'Wade Cooper',
                image: new URL('@/assets/images/grbimage/hero_1.webp', import.meta.url).href,
            },
            {
                id: 2,
                name: 'Wade Cooper',
                image: new URL('@/assets/images/grbimage/hero_5.webp', import.meta.url).href,
            },
            {
                id: 3,
                name: 'Wade Cooper',
                image: new URL('@/assets/images/grbimage/hero_4.webp', import.meta.url).href,
            },
            {
                id: 4,
                name: 'Wade Cooper',
                image: new URL('@/assets/images/grbimage/hero_3.webp', import.meta.url).href,
            },
            {
                id: 5,
                name: 'Wade Cooper',
                image: new URL('@/assets/images/grbimage/hero_2.webp', import.meta.url).href,
            },
            {
                id: 6,
                name: 'Wade Cooper',
                image: new URL('@/assets/images/grbimage/hero_1.webp', import.meta.url).href,
            },

        ]

        // extract URLs
        let imageUrls = images.map(item => item.image)

        if (imageUrls.length < 12) {
            const repeatCount = Math.ceil(12 / imageUrls.length)
            imageUrls = Array.from({ length: repeatCount }, () => imageUrls).flat().slice(0, 12)
        }

        // Three.js variables
        let scene, camera, renderer, group;
        const loader = new THREE.TextureLoader();
        loader.setCrossOrigin("anonymous");
        let animationFrameHandle;
        let clock;
        const autoRotateSpeed = 0.002;
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
            } else if (width < 1024) {
                return {
                    radius: 3.2,
                    planeWidth: 2.8,
                    planeHeight: 1.87,
                    cameraZ: 1.5,
                    fov: 50
                };
            } else if (width < 1440) {
                return {
                    radius: 3.2,
                    planeWidth: 2.8,
                    planeHeight: 1.87,
                    cameraZ: 0.75,
                    fov: 50
                };
            }
            else {
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

        const getPixelRatio = () => {
            if (typeof window === "undefined" || !window.devicePixelRatio) {
                return 1;
            }
            return window.devicePixelRatio;
        };

        const loadTexture = (url) => new Promise((resolve, reject) => {
            loader.load(url, resolve, undefined, reject);
        });

        const getTexture = (url) => {
            if (!textureCache.has(url)) {
                const texturePromise = loadTexture(url)
                    .then((texture) => {
                        texture.colorSpace = THREE.SRGBColorSpace;
                        texture.generateMipmaps = false;
                        texture.minFilter = THREE.LinearFilter;
                        texture.magFilter = THREE.LinearFilter;
                        texture.needsUpdate = true;
                        return texture;
                    })
                    .catch((error) => {
                        textureCache.delete(url);
                        throw error;
                    });
                textureCache.set(url, texturePromise);
            }
            return textureCache.get(url);
        };

        const loadImages = async (config) => {
            if (!group) {
                return;
            }

            const angleStep = (Math.PI * 2) / imageUrls.length;
            const origin = new THREE.Vector3(0, 0, 0);

            const textures = await Promise.all(
                imageUrls.map(async (url) => {
                    try {
                        return await getTexture(url);
                    } catch (error) {
                        console.warn("Image failed to load:", { url, error });
                        return null;
                    }
                })
            );

            textures.forEach((texture, index) => {
                if (!texture) {
                    return;
                }

                const geometry = new THREE.PlaneGeometry(
                    config.planeWidth,
                    config.planeHeight
                );
                const material = new THREE.MeshBasicMaterial({
                    map: texture,
                    transparent: true
                });
                const plane = new THREE.Mesh(geometry, material);

                const angle = index * angleStep;
                plane.position.set(
                    Math.sin(angle) * config.radius,
                    0,
                    Math.cos(angle) * config.radius
                );
                plane.lookAt(origin);

                group.add(plane);
            });
        };

        const initThreeJS = async () => {
            if (typeof window === "undefined") {
                return;
            }

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
            renderer.setPixelRatio(Math.min(getPixelRatio(), MAX_PIXEL_RATIO));
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

            // Create clock
            clock = new THREE.Clock();

            // Create image planes
            await loadImages(currentConfig);

            // Kick off sizing observer
            setupResizeObserver();
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
            renderer.setPixelRatio(Math.min(getPixelRatio(), MAX_PIXEL_RATIO));

            // Update plane positions and sizes
            if (group && group.children.length > 0) {
                const angleStep = (Math.PI * 2) / imageUrls.length;
                const origin = new THREE.Vector3(0, 0, 0);

                group.children.forEach((child, index) => {
                    if (child.isMesh) {
                        // Update geometry size
                        child.geometry.dispose();
                        child.geometry = new THREE.PlaneGeometry(
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
                        child.lookAt(origin);
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
                            child.material.map = null;
                        }
                        child.material.dispose();
                    }
                });
                group.clear();
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

        onMounted(async () => {
            try {
                await initThreeJS();
                animate();
            } catch (error) {
                console.error("Failed to initialize CurvedSlider3D:", error);
            }
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
