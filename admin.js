
const adminCredentials = {
  username: 'Lifebridger',
  password: '1234'
};

// Get form elements
const loginForm = document.getElementById('login-form');
const loginBtn = document.getElementById('login-btn');
const adminContent = document.getElementById('admin-content');

// Add event listener to login button
loginBtn.addEventListener('click', (e) => {
  e.preventDefault();
  const username = document.getElementById('username').value;
  const password = document.getElementById('password').value;

  if (username === adminCredentials.username && password === adminCredentials.password) {
    // Login successful, show admin content
    loginForm.style.display = 'none';
    adminContent.style.display = 'block';
  } else {
    alert('Invalid credentials');
  }
});
