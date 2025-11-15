import { createApp, nextTick } from "vue";
import App from "./App.vue";
import router from "./router";
import { createPinia } from "pinia";
import Toast from "vue-toastification";
import "vue-toastification/dist/index.css";
import { i18nVue } from "laravel-vue-i18n";
import { loaderPlugin } from "./plugins/loader";

import "animate.css";
import WOW from "wow.js";

const options = {
    position: "top-right",
    timeout: 3000,
    closeOnClick: true,
    pauseOnFocusLoss: true,
    pauseOnHover: true,
    draggable: true,
    draggablePercent: 0.6,
    showCloseButtonOnHover: false,
    hideProgressBar: true,
    closeButton: "button",
    icon: true,
    rtl: false,
};

let wow;
const appElement =
    typeof document !== "undefined" ? document.getElementById("app") : null;

if (appElement) {
    const app = createApp(App);
    const pinia = createPinia();

    pinia.use(loaderPlugin);

    app.use(Toast, options);
    app.use(i18nVue, {
        lang: import.meta.env.VITE_APP_LOCALE,
        resolve: (lang) => import(`../../lang/${lang}.json`),
    });
    app.use(pinia);
    app.use(router);

    app.mixin({
        mounted() {
            if (!wow) {
                wow = new WOW({
                    boxClass: "wow",
                    animateClass: "animate__animated",
                    offset: 0,
                    mobile: true,
                    live: true,
                });
                wow.init();
            }
        },
    });

    app.mount(appElement);
    router.afterEach(async () => {
        await nextTick();
        if (wow && typeof wow.sync === "function") wow.sync();
    });
}
