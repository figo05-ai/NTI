document.getElementById('passwordForm').addEventListener('submit', function(event) {
    event.preventDefault();
    
    const passwordInput = document.getElementById('password').value;
    const errorMessage = document.getElementById('errorMessage');
    const successMessage = document.getElementById('successMessage');
    
    const requiredSymbols = /[%*+=_]/;

    errorMessage.style.display = 'none';
    successMessage.style.display = 'none';

    if (passwordInput.length < 10) {
        errorMessage.innerText = "Password must be at least 10 characters or numbers.";
        errorMessage.style.display = 'block';
        return;
    }

    if (!requiredSymbols.test(passwordInput)) {
        errorMessage.innerText = "Password must contain at least one of these symbols: % * + = _";
        errorMessage.style.display = 'block';
        return;
    }

    successMessage.style.display = 'block';
});

setTimeout(function() {
    document.body.style.backgroundColor = "black";
    document.body.style.color = "white"; 
}, 10000);