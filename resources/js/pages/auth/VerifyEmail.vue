<template>
    <div class="bg-white p-6 rounded-lg shadow-md w-full max-w-md">
        <h1 class="text-2xl font-bold text-center mb-4" v-if="!isVerified">
            Verify Your Email
        </h1>
        <h1 class="text-2xl font-bold text-center mb-4" v-else>
            Email Verified Successfully!
        </h1>

        <div v-if="!isVerified">
            <p class="text-gray-700 text-center mb-2">
                A verification link has been sent to your email address.
            </p>
            <p class="text-gray-700 text-center mb-4">
                Please check your inbox and click the link to verify your
                email.
            </p>
            <button @click="resendVerification"
                class="w-full bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600 transition mb-4">
                Resend Verification Email
            </button>

            <div class="manual-verify">
                <p class="text-gray-700 text-center mb-2">
                    Enter the 6-digit verification code sent to your email:
                </p>
                <div class="otp-input flex justify-center mb-4">
                    <input v-for="i in 6" :key="i" v-model="otp[i - 1]"
                        @input="handleOtpInput(i - 1, $event)" @keydown.delete="handleOtpDelete(i - 1, $event)"
                        maxlength="1" ref="otpInputs" type="text" inputmode="numeric" pattern="[0-9]*"
                        class="w-10 h-10 mx-1 text-center border border-gray-300 rounded" />
                </div>
                <button @click="submitVerificationCode" :disabled="isSubmitting"
                    class="w-full bg-green-500 text-white py-2 px-4 rounded hover:bg-green-600 transition"
                    :class="{
                        'opacity-50 cursor-not-allowed': isSubmitting,
                    }">
                    {{ isSubmitting ? 'Verifying...' : 'Verify' }}
                </button>
                <p v-if="errorMessage" class="text-red-500 text-sm text-center mt-2">
                    {{ errorMessage }}
                </p>
            </div>
        </div>

        <div v-else>
            <p class="text-gray-700 text-center mb-4">
                Your email has been successfully verified!
            </p>
            <button @click="proceedToApp"
                class="w-full bg-green-500 text-white py-2 px-4 rounded hover:bg-green-600 transition">
                Continue to Application
            </button>
        </div>
    </div>
</template>

<script setup>
    import {
        useAuthStore
    } from "@/stores/auth";

    import {
        computed,
        ref,
        nextTick
    } from "vue";

    import {
        useRouter
    } from "vue-router";

    const authStore = useAuthStore();
    const router = useRouter();
    
    const otp = ref(Array(6).fill(""));
    const otpInputs = ref([]);
    const isSubmitting = ref(false);
    const errorMessage = ref("");

    const isVerified = computed(() => authStore.user?.email_verified || false);

    const resendVerification = async () => {
        await authStore.resendEmail();
    };

    const handleOtpInput = (index, event) => {
        // Only allow numbers
        otp.value[index] = event.target.value.replace(/\D/g, "");

        // Auto-focus to next input
        if (event.target.value && index < 5) {
            nextTick(() => {
                otpInputs.value[index + 1].focus();
            });
        }
    };

    const handleOtpDelete = (index, event) => {
        if (event.key === "Backspace" && !otp.value[index] && index > 0) {
            nextTick(() => {
                otpInputs.value[index - 1].focus();
            });
        }
    };

    const submitVerificationCode = async () => {
        const otpCode = otp.value.join("");

        if (otpCode.length !== 6) {
            errorMessage.value = "Please enter a 6-digit code";
            return;
        }

        isSubmitting.value = true;
        errorMessage.value = "";

        try {
            const result = await authStore.verifyEmail(otpCode);
            if (result) {
                // Verification successful
            } else {
                errorMessage.value = result.error || "Verification failed";
                resetOtpInput();
            }
        } catch (error) {
            console.error("Verification failed:", error);
            errorMessage.value = "Verification failed: " + error.message;
            resetOtpInput();
        } finally {
            isSubmitting.value = false;
        }
    };

    const resetOtpInput = () => {
        otp.value = Array(6).fill("");
        nextTick(() => {
            if (otpInputs.value[0]) {
                otpInputs.value[0].focus();
            }
        });
    };

    const proceedToApp = () => {
        const redirectPath =
            authStore.role === "admin" ? "/admin/dashboard" : "/user/dashboard";
        router.push(redirectPath);
    };
</script>
