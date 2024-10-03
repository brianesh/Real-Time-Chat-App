// scripts.js
document.getElementById("loginBtn").onclick = function() {
    document.getElementById("loginModal").style.display = "block";
}

document.getElementById("registerBtn").onclick = function() {
    document.getElementById("registerModal").style.display = "block";
}

document.getElementById("closeLogin").onclick = function() {
    document.getElementById("loginModal").style.display = "none";
}

document.getElementById("closeRegister").onclick = function() {
    document.getElementById("registerModal").style.display = "none";
}

// Close the modal when clicking outside of it
window.onclick = function(event) {
    if (event.target == document.getElementById("loginModal")) {
        document.getElementById("loginModal").style.display = "none";
    }
    if (event.target == document.getElementById("registerModal")) {
        document.getElementById("registerModal").style.display = "none";
    }
}
