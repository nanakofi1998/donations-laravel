class PasswordManager {
    constructor(passwordSelector, confirmSelector, strengthSelector, matchMessageSelector) {
        this.passwordInput = document.querySelector(passwordSelector);
        this.confirmInput = document.querySelector(confirmSelector);
        this.strengthDisplay = document.querySelector(strengthSelector);
        this.matchMessageDisplay = document.querySelector(matchMessageSelector);
        this.toggleIcons = document.querySelectorAll('.toggle-password');

        this.init();
    }

    init() {
        // Toggle show/hide password
        this.toggleIcons.forEach(icon => {
            icon.addEventListener('click', () => {
                this.toggleVisibility(icon);
            });
        });

        // Password strength checker
        if (this.passwordInput) {
            this.passwordInput.addEventListener('input', () => {
                this.checkStrength();
                this.comparePasswords();
            });
        }

        // Confirm password checker
        if (this.confirmInput) {
            this.confirmInput.addEventListener('input', () => this.comparePasswords());
        }
    }

    toggleVisibility(icon) {
        const input = icon.previousElementSibling;
        const eyeIcon = icon.querySelector('i');

        if (input.type === 'password') {
            input.type = 'text';
            eyeIcon.classList.remove('fa-eye-slash');
            eyeIcon.classList.add('fa-eye');
        } else {
            input.type = 'password';
            eyeIcon.classList.remove('fa-eye');
            eyeIcon.classList.add('fa-eye-slash');
        }
    }

    checkStrength() {
        const password = this.passwordInput.value;
        const hasNumber = /\d/.test(password);
        const hasSpecialChar = /[!@#$%^&*(),.?":{}|<>]/.test(password);
        const hasUpperCase = /[A-Z]/.test(password);
        const hasLowerCase = /[a-z]/.test(password);
        const lengthValid = password.length >= 8;

        let strength = 0;
        if (hasNumber) strength++;
        if (hasSpecialChar) strength++;
        if (hasUpperCase) strength++;
        if (hasLowerCase) strength++;
        if (lengthValid) strength++;

        let strengthMessage = '';
        let color = 'text-danger';

        if (strength === 0) {
            strengthMessage = '';
        } else if (strength < 3) {
            strengthMessage = 'Weak password';
            color = 'text-danger';
        } else if (strength < 5) {
            strengthMessage = 'Moderate password';
            color = 'text-warning';
        } else {
            strengthMessage = 'Strong password';
            color = 'text-success';
        }

        this.strengthDisplay.textContent = strengthMessage;
        this.strengthDisplay.className = color + ' mt-1 d-block';
    }

    comparePasswords() {
        const password = this.passwordInput.value;
        const confirm = this.confirmInput.value;

        if (confirm === "") {
            this.matchMessageDisplay.textContent = '';
            return;
        }

        if (password === confirm) {
            this.matchMessageDisplay.textContent = 'Passwords match ✅';
            this.matchMessageDisplay.className = 'text-success mt-1 d-block';
        } else {
            this.matchMessageDisplay.textContent = 'Passwords do not match ❌';
            this.matchMessageDisplay.className = 'text-danger mt-1 d-block';
        }
    }
}
