import { createApp } from "vue";
import App from "./App.vue";
import router from "./router";
import { createPinia } from "pinia";
import Toast from "vue-toastification";
import "vue-toastification/dist/index.css";
import { i18nVue } from "laravel-vue-i18n";

const app = createApp(App);

const options = {
    position: "bottom-right",
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

app.use(Toast, options);
app.use(i18nVue, {
    lang: import.meta.env.VITE_APP_LOCALE,
    resolve: (lang) => import(`../../lang/${lang}.json`),
});
app.use(createPinia());
app.use(router);

app.mount("#app");
