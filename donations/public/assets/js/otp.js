const otpInputs = document.querySelectorAll('.otp-input');
otpInputs.forEach((input, index) => {
    input.addEventListener('input', (e) => {
        if (e.target.value.length === 1 && index < otpInputs.length - 1) {
            otpInputs[index + 1].focus();
        }
    });
    input.addEventListener('keydown', (e) => {
        if (e.key === 'Backspace' && index > 0 && e.target.value.length === 0) {
            otpInputs[index - 1].focus();
        }
    });
});

document.querySelector('form').addEventListener('submit', (e) => {
    let otp = '';
    otpInputs.forEach(input => {
        otp += input.value;
    });
    document.getElementById('otp').value = otp;
});

// Countdown timer
let timeLeft = 60;
const countdownElement = document.getElementById('countdown');
const countdownInterval = setInterval(() => {
    timeLeft--;
    countdownElement.textContent = timeLeft;

    if (timeLeft <= 0) {
        clearInterval(countdownInterval);
        document.querySelector('.countdown').style.display = 'none';
    }
}, 1000);