const form = document.getElementById('login-form');
const passwordInput = document.getElementById('password');
const correctPassword = 'password123'; // Replace with your correct password

form.addEventListener('submit', function(event) {
  event.preventDefault(); // Prevent the form from submitting

  const password = passwordInput.value;

  if (password === correctPassword) {
    window.location.href = 'index.html'; // Replace with the URL of the page you want to redirect to
  } else {
    alert('Incorrect password. Please try again.'); // Show an error message
  }
});