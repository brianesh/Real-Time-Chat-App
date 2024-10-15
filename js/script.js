document.addEventListener('DOMContentLoaded', () => {
    const loginBtn = document.getElementById('loginBtn');
    const registerBtn = document.getElementById('registerBtn');
    const loginModal = document.getElementById('loginModal');
    const registerModal = document.getElementById('registerModal');
    const mainModalContent = document.querySelector('.modal-content-main');
    
    const closeLogin = document.getElementById('closeLogin');
    const closeRegister = document.getElementById('closeRegister');

    function openModal(modalToOpen) {
        mainModalContent.classList.add('shift');
        modalToOpen.style.display = 'block';
    }

    function closeModals() {
        loginModal.style.display = 'none';
        registerModal.style.display = 'none';
        mainModalContent.classList.remove('shift');
    }

    loginBtn.addEventListener('click', () => {
        closeModals();
        openModal(loginModal);
    });

    registerBtn.addEventListener('click', () => {
        closeModals();
        openModal(registerModal);
    });

    // Close login modal
    closeLogin.addEventListener('click', closeModals);

    // Close register modal
    closeRegister.addEventListener('click', closeModals);

    // Close modals when clicking outside of them
    window.addEventListener('click', (event) => {
        if (event.target === loginModal || event.target === registerModal) {
            closeModals();
        }
    });
});
