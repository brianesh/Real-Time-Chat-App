// Modal control
document.getElementById("loginBtn").addEventListener("click", function() {
    toggleModal("loginModal", "slide-in-left");
});

document.getElementById("registerBtn").addEventListener("click", function() {
    toggleModal("registerModal", "slide-in-right");
});

document.getElementById("closeLogin").addEventListener("click", function() {
    closeModal("loginModal");
});

document.getElementById("closeRegister").addEventListener("click", function() {
    closeModal("registerModal");
});

function toggleModal(modalId, animationClass) {
    const modal = document.getElementById(modalId);
    modal.classList.add("show-modal");
    modal.classList.add(animationClass);
    document.body.classList.add("modal-active");
}

function closeModal(modalId) {
    const modal = document.getElementById(modalId);
    modal.classList.remove("show-modal", "slide-in-left", "slide-in-right");
    document.body.classList.remove("modal-active");
}
