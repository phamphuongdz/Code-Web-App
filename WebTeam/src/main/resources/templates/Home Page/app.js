// Simple login validation
const loginForm = document.getElementById('loginForm');
const loginError = document.getElementById('loginError');

loginForm.addEventListener('submit', function(event) {
    event.preventDefault();

    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    // Basic authentication (for demo purposes)
    if (username === "admin" && password === "12345") {
        alert("Login Successful!");
        // Redirect to dashboard or homepage after login
    } else {
        loginError.style.display = 'block';
    }
});
