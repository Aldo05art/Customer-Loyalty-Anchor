document.getElementById('registerForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Menghentikan pengiriman form default

    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;

    // Menampilkan alert box dengan informasi yang dimasukkan
    if(name && email && password) {
        alert('Registration Successful!\nName: ' + name + '\nEmail: ' + email);
    } else {
        alert('Please fill out all fields.');
    }
});
