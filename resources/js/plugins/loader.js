import { useTopLoader } from "@/composables/useTopLoader";

export function loaderPlugin({ store }) {
    const loader = useTopLoader();
    const hasWindow = typeof window !== "undefined"; 

    store.$onAction(({ after, onError }) => {
        let timer = 0;
        if (hasWindow) {
            timer = window.setTimeout(() => {
                timer = 0;
                loader.start(); 
            }, 200);
        } else {
            loader.start();
        }

        const stop = () => {
            if (timer) {
                clearTimeout(timer);
                timer = 0;
                return; 
            }
            loader.done(); 
        };

        after(stop);
        onError(stop);
    });
}
