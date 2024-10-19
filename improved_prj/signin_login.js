// functionality for popup signin/login

// Show the modal when the SignUp / LogIn button is clicked
document.getElementById('sign-up-button').addEventListener('click', function() {
    document.getElementById('signup-modal').classList.remove('hidden');
});

// Close the modal when the close button is clicked
document.getElementById('close-modal').addEventListener('click', function() {
    document.getElementById('signup-modal').classList.add('hidden');
});

// Handle signup form submission
document.getElementById('signup-form').addEventListener('submit', function(event) {
    event.preventDefault();

    const username = document.getElementById('username').value;
    const email = document.getElementById('email').value;
    const phone = document.getElementById('phone').value;
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirm-password').value;

    clearPasswordHighlight();

    if (password !== confirmPassword || password.length < 6) {
        highlightPasswords();
        document.getElementById('password-error').innerText = "Passwords do not match or are less than 6 characters.";
        return;
    }

    window.location.href = 'idea2.1.html';
});

function highlightPasswords() {
    document.getElementById('password').style.border = '2px solid red';
    document.getElementById('confirm-password').style.border = '2px solid red';
}

function clearPasswordHighlight() {
    document.getElementById('password').style.border = '';
    document.getElementById('confirm-password').style.border = '';
    document.getElementById('password-error').innerText = '';
}

// Switch to the login form
document.getElementById('switch-to-login').addEventListener('click', function(event) {
    event.preventDefault();
    document.getElementById('signup-form-container').classList.add('hidden');
    document.getElementById('login-form-container').classList.remove('hidden');
});

// Switch to the signup form
document.getElementById('switch-to-signup').addEventListener('click', function(event) {
    event.preventDefault();
    document.getElementById('login-form-container').classList.add('hidden');
    document.getElementById('signup-form-container').classList.remove('hidden');
});