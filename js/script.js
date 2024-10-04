// Get elements
const loginBtn = document.getElementById("loginBtn");
const registerBtn = document.getElementById("registerBtn");
const closeLogin = document.getElementById("closeLogin");
const closeRegister = document.getElementById("closeRegister");
const loginModal = document.getElementById("loginModal");
const registerModal = document.getElementById("registerModal");
const container = document.querySelector(".modal-container");

// Function to show a modal and slide main content
function showModal(modalToShow, modalToHide, direction) {
    // Hide the other modal if it's open
    if (modalToHide.classList.contains("show")) {
        modalToHide.classList.remove("show");
    }

    // Add the appropriate slide class to the main content
    container.classList.add(`slide-${direction}`);

    // Show the modal
    modalToShow.classList.add("show");

    // Add a class to darken the background
    document.body.classList.add("modal-active");
}

// Function to close modals and reset the sliding
function closeModal(modalToClose) {
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

// Close modals when clicking outside the modal
window.addEventListener("click", (event) => {
    if (event.target === loginModal || event.target === registerModal) {
        closeModal(loginModal);
        closeModal(registerModal);
    }
});

// Close modals using "Esc" key
document.addEventListener("keydown", (event) => {
    if (event.key === "Escape") {
        closeModal(loginModal);
        closeModal(registerModal);
    }
});
