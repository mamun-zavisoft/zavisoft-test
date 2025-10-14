import { defineStore } from "pinia";
import { computed, ref } from "vue";
import { useRouter } from "vue-router";
import { useToast } from "vue-toastification";
import {
    loginApi,
    logoutApi,
    verifyTokenApi,
    resendEmailApi,
    verifyEmailApi,
    registerApi
} from "@/api/auth";

export const useAuthStore = defineStore("auth", () => {
    const router = useRouter();
    const toast = useToast();
    const user = ref(JSON.parse(localStorage.getItem("user")));
    const token = ref(localStorage.getItem("token"));
    const tokenExpiry = ref(localStorage.getItem("tokenExpiry"));

    const isAuthenticated = computed(() => {
        if (!token.value) return false;
        if (tokenExpiry.value && new Date() > new Date(tokenExpiry.value)) {
            logout();
            return false;
        }
        return true;
    });

    const emailVerified = computed(() => user.value?.email_verified || false);

    const role = computed(() => user.value?.role || null);

    async function verifyToken() {
        if (!token.value) return false;
        try {
            await verifyTokenApi();
            return true;
        } catch {
            logout();
            return false;
        }
    }

    async function login(credentials) {
        try {
            const data = await loginApi(credentials);
            setAuthData(data);
            toast.success("Login successful");
            return true;
        } catch (error) {
            toast.error(error.message || "Login failed");
            return false;
        }
    }

    async function logout() {
        if (!token.value) return false;
        try {
            await logoutApi();
            toast.success("Logged out successfully");
            return true;
        } catch (error) {
            toast.error("Logout error: " + error.message);
            return false;
        } finally {
            clearAuthData();
            router.push("/login");
        }
    }

    function setAuthData(responseData) {
        user.value = responseData.data.user;
        token.value = responseData.data.access.token;
        tokenExpiry.value = responseData.data.access.expire_at;

        localStorage.setItem("user", JSON.stringify(responseData.data.user));
        localStorage.setItem("token", responseData.data.access.token);
        localStorage.setItem("tokenExpiry", responseData.data.access.expire_at);
    }

    function clearAuthData() {
        user.value = null;
        token.value = null;
        tokenExpiry.value = null;
        localStorage.removeItem("user");
        localStorage.removeItem("token");
        localStorage.removeItem("tokenExpiry");
    }

    async function resendEmail() {
        if (!token.value) return false;

        try {
            await resendEmailApi();
            toast.success("Verification email resent successfully");
            return true;
        } catch (error) {
            toast.error(error.message || "Failed to resend verification email");
            return false;
        }
    }

    async function verifyEmail(otp) {
        if (!token.value) return false;
        try {
            await verifyEmailApi(otp);
            toast.success("Email verified successfully");
            return true;
        } catch (error) {
            toast.error(error.message || "Email verification failed");
            console.error(error);
            return false;
        }
    }

    async function register() {
        try {
            const data = await registerApi(credentials);
            setAuthData(data);
            toast.success("Registration successful");
            return true;
        } catch (error) {
            toast.error(error.message || "Registration failed");
            return false;
        }
    }

    return {
        user,
        token,
        isAuthenticated,
        emailVerified,
        role,
        verifyToken,
        login,
        logout,
        resendEmail,
        verifyEmail,
        register
    };
});
