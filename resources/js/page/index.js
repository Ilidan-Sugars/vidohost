document.addEventListener("DOMContentLoaded", () => {
    const modalElement = document.getElementById("exampleModal");
    const inputInsideModal = modalElement?.querySelector("input");

    if (modalElement && inputInsideModal) {
        modalElement.addEventListener("shown.bs.modal", () => {
            inputInsideModal.focus();
        });
    }
});
