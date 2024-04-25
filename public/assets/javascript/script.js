const togglePassword = document.getElementById('togglePassword');
const passwordInput = document.getElementById('password');
const toggleconfirmPassword = document.getElementById('toggleconfirmPassword');
const confirmPasswordInput = document.getElementById('confirmPassword');

togglePassword.addEventListener('click', function(){
    const type = passwordInput.setAttribute('type') === 'password' ? 'text' : 'password';
    passwordInput.setAttribute('type', type);
    this.classList.toggle('fa-eye');
    this.classList.toggle('fa-eye-slash');
});

toggleconfirmPassword.addEventListener('click', function(){
    const type = confirmPasswordInput.setAttribute('type') === 'password' ? 'text' : 'password';
    confirmPasswordInput.setAttribute('type', type);
    this.classList.toggle('fa-eye');
    this.classList.toggle('fa-eye-slash');
});

