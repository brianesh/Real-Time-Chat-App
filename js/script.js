document.addEventListener('DOMContentLoaded', function () {
    // Variables for login and register modals
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

    closeLogin.addEventListener('click', closeModals);
    closeRegister.addEventListener('click', closeModals);

    window.addEventListener('click', (event) => {
        if (event.target === loginModal || event.target === registerModal) {
            closeModals();
        }
    });

    // Chat functionality: Sending and receiving messages
    const chatForm = document.getElementById('chatForm');
    const messageInput = document.getElementById('messageInput');
    const chatBox = document.querySelector('.chat-box');

    // Handle message sending via AJAX
    chatForm.addEventListener('submit', function (event) {
        event.preventDefault(); // Prevent form from refreshing the page

        const message = messageInput.value.trim();

        if (message) {
            // Send the message via AJAX to send_message.php
            const xhr = new XMLHttpRequest();
            xhr.open('POST', 'send_message.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    messageInput.value = ''; // Clear the input
                    fetchMessages(); // Refresh the chat
                }
            };
            xhr.send(`message=${encodeURIComponent(message)}`);
        }
    });

    // Fetch chat messages every 2 seconds
    function fetchMessages() {
        const xhr = new XMLHttpRequest();
        xhr.open('GET', 'fetch_messages.php', true);
        xhr.onload = function () {
            if (xhr.status === 200) {
                chatBox.innerHTML = xhr.responseText;
                chatBox.scrollTop = chatBox.scrollHeight; // Scroll to the latest message
            }
        };
        xhr.send();
    }

    // Fetch messages initially
    fetchMessages();

    // Continuously fetch messages every 2 seconds
    setInterval(fetchMessages, 2000);
});
