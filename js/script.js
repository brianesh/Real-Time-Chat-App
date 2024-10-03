// script.js
document.addEventListener('DOMContentLoaded', () => {
    const loginModal = document.getElementById('loginModal');
    const registerModal = document.getElementById('registerModal');
    const loginBtn = document.getElementById('loginBtn');
    const registerBtn = document.getElementById('registerBtn');
    const closeLogin = document.getElementById('closeLogin');
    const closeRegister = document.getElementById('closeRegister');

    // Open Login Modal
    loginBtn.onclick = function() {
        loginModal.style.display = 'block';
        registerModal.style.display = 'none'; // Close register modal if open
    }

    // Open Register Modal
    registerBtn.onclick = function() {
        registerModal.style.display = 'block';
        loginModal.style.display = 'none'; // Close login modal if open
    }

    // Close Login Modal
    closeLogin.onclick = function() {
        loginModal.style.display = 'none';
    }

    // Close Register Modal
    closeRegister.onclick = function() {
        registerModal.style.display = 'none';
    }

    // Close modal when clicking outside of it
    window.onclick = function(event) {
        if (event.target === loginModal) {
            loginModal.style.display = 'none';
        }
        if (event.target === registerModal) {
            registerModal.style.display = 'none';
        }
    }
});
