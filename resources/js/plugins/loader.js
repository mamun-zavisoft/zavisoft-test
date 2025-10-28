import { useTopLoader } from "@/composables/useTopLoader";

export function loaderPlugin({ store }) {
    const loader = useTopLoader();

    store.$onAction(({ after, onError }) => {
        loader.start(); 

        let finished = false;
        const stop = () => {
            if (finished) return;
            finished = true;
            loader.done(); 
        };

        after(stop);
        onError(stop);
    });
}
