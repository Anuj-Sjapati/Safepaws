// Show the modal when the SignUp / LogIn button is clicked
document.getElementById('sign-up-button').addEventListener('click', function() {
    document.getElementById('signup-modal').classList.remove('hidden');
});

// Close the modal when the close button is clicked or "Escape" key is pressed
const closeModal = () => document.getElementById('signup-modal').classList.add('hidden');
document.getElementById('close-modal').addEventListener('click', closeModal);
document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') closeModal();
});

// Handle signup form submission with AJAX
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

    // Prepare data for submission
    const formData = new FormData();
    formData.append('username', username);
    formData.append('email', email);
    formData.append('phone', phone);
    formData.append('password', password);

    // AJAX request for sign-up
    fetch('signup.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        if (data.includes('Success')) {
            alert('Sign-up successful!');
            window.location.href = 'ad.html'; // Redirect on success
        } else {
            document.getElementById('password-error').innerText = data;
        }
    })
    .catch(error => console.error('Error:', error));
});

// Highlight password fields if validation fails
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

// Handle login form submission with AJAX
document.getElementById('login-form').addEventListener('submit', function(event) {
    event.preventDefault();

    const loginEmail = document.getElementById('login-email').value;
    const loginPassword = document.getElementById('login-password').value;

    const formData = new FormData();
    formData.append('login-email', loginEmail);
    formData.append('login-password', loginPassword);

    fetch('login.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        if (data.includes('Success')) {
            alert('Login successful!');
            window.location.href = 'ad.html';
        } else {
            alert('Login failed: ' + data);
        }
    })
    .catch(error => console.error('Error:', error));
});
