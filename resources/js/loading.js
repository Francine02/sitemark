export function loading() {
    document.addEventListener("submit", function (e) {
        const form = e.target;
        const button = form.querySelector('button[type="submit"]');

        if (!button) return;

        button.disabled = true;

        const text = button.querySelector(".btn-text");
        const loading = button.querySelector(".btn-loading");

        if (text) text.classList.add("hidden");
        if (loading) loading.classList.remove("hidden");
    });
}
