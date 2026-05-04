export function openModal() {
    const modal = document.getElementById("modal");
    const buttons = document.querySelectorAll(".open-modal-btn");

    const form = document.getElementById("form-modal");
    const methodInput = document.getElementById("form-method");

    const titleInput = document.getElementById("input-title");
    const urlInput = document.getElementById("input-url");
    const platformInput = document.getElementById("input-platform");
    const imagePreview = document.getElementById("preview-input-image");

    const modalTitle = document.getElementById("modal-title");

    buttons.forEach((btn) => {
        btn.addEventListener("click", () => {
            const action = btn.dataset.action;

            form.reset();

            if (action === "edit") {
                const id = btn.dataset.id;

                modalTitle.innerText = "Editar link";

                form.action = `/links/update/${id}`;
                methodInput.value = "PUT";

                titleInput.value = btn.dataset.title;
                urlInput.value = btn.dataset.url;
                platformInput.value = btn.dataset.platform;
                imagePreview.src = btn.dataset.image;
            } else {
                modalTitle.innerText = "Adicionar link";

                form.action = "/links/store";
                methodInput.value = "POST";
            }

            modal.classList.remove("opacity-0", "pointer-events-none");
        });
    });

    modal.addEventListener("click", (e) => {
        if (e.target === modal) {
            modal.classList.add("opacity-0", "pointer-events-none");
        }
    });

    document.querySelectorAll("[data-dialog-close]").forEach((btn) => {
        btn.addEventListener("click", () => {
            modal.classList.add("opacity-0", "pointer-events-none");
        });
    });
}
