// Get elements
const loginBtn = document.getElementById("loginBtn");
const registerBtn = document.getElementById("registerBtn");
const closeLogin = document.getElementById("closeLogin");
const closeRegister = document.getElementById("closeRegister");
const loginModal = document.getElementById("loginModal");
const registerModal = document.getElementById("registerModal");
const container = document.querySelector(".container");

function showModal(modalToShow, modalToHide, direction) {
    // Close any currently open modal
    if (modalToHide.classList.contains("show")) {
        modalToHide.classList.remove("show");
    }

    // Add class to animate main modal to slide
    container.classList.add(`slide-${direction}`);

    // Show the selected modal
    modalToShow.classList.add("show");

    // Add modal active class for background
    document.body.classList.add("modal-active");
}

function closeModal(modalToClose) {
    // Close the modal and reset everything
    modalToClose.classList.remove("show");
    container.classList.remove("slide-left", "slide-right");
    document.body.classList.remove("modal-active");
}

// Button click events for opening modals
loginBtn.addEventListener("click", () => {
    showModal(loginModal, registerModal, "left");
});

registerBtn.addEventListener("click", () => {
    showModal(registerModal, loginModal, "right");
});

// Close modal events
closeLogin.addEventListener("click", () => closeModal(loginModal));
closeRegister.addEventListener("click", () => closeModal(registerModal));
