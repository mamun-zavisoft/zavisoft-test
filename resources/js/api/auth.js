import { useAuthStore } from "@/stores/auth";

export async function loginApi(credentials) {
    const response = await fetch("/api/login", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            Accept: "application/json",
        },
        body: JSON.stringify(credentials),
    });

    const data = await response.json();

    if (!response.ok) {
        throw new Error(data.message || "Login failed");
    }

    return data;
}

export async function logoutApi() {
    const { token } = useAuthStore();

    await fetch("/api/logout", {
        method: "POST",
        headers: {
            Authorization: `Bearer ${token}`,
            "Content-Type": "application/json",
        },
    });

    return true;
}

export async function verifyTokenApi() {
    const { token } = useAuthStore();

    const response = await fetch("/api/verify-token", {
        headers: {
            Authorization: `Bearer ${token}`,
        },
    });

    if (!response.ok) {
        throw new Error("Token verification failed");
    }

    return await response.json();
}

export async function resendEmailApi() {
    const { token } = useAuthStore();

    const response = await fetch("/api/email/resend", {
        method: "POST",
        headers: {
            Authorization: `Bearer ${token}`,
            "Content-Type": "application/json",
        },
    });

    const data = await response.json();

    if (!response.ok) {
        throw new Error(data.message || "Login failed");
    }

    return data;
}

export async function verifyEmailApi(otp) {
    const { token, user } = useAuthStore();

    const response = await fetch("/api/email/verify", {
        method: "POST",
        headers: {
            Authorization: `Bearer ${token}`,
            "Content-Type": "application/json",
        },
        body: JSON.stringify({ otp: otp }),
    });

    const data = await response.json();

    if (!response.ok) {
        throw new Error(data.message || "Email verification failed");
    }

    // Update local user data
    if (user) {
        user.email_verified = true;
        localStorage.setItem("user", JSON.stringify(user));
    }

    return data;
}

export async function registerApi(credentials) {
    const response = await fetch("/api/register", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            Accept: "application/json",
        },
        body: JSON.stringify(credentials),
    });

    const data = await response.json();

    if (!response.ok) {
        throw new Error(data.message || "Login failed");
    }

    return data;
}
