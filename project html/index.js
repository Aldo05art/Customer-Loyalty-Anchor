// Mengambil elemen DOM
const signInButton = document.getElementById('signInBtn');
const signUpButton = document.getElementById('signUpBtn');
const welcomeMessage = document.getElementById('welcome-message');
const navLinks = document.querySelectorAll('.nav a');

// Menambahkan event listener untuk tombol Sign in
signInButton.addEventListener('click', function () {
    alert('Sign in clicked!');
    welcomeMessage.style.color = 'blue'; // Ubah warna teks pada welcome message
});

// Menambahkan event listener untuk tombol Sign up
signUpButton.addEventListener('click', function () {
    alert('Sign up clicked!');
    welcomeMessage.textContent = 'Terima kasih telah bergabung dengan Customer Loyalty Anchor!';
});

// Menambahkan interaksi hover pada link navigasi
navLinks.forEach(link => {
    link.addEventListener('mouseover', function () {
        link.style.color = 'blue';
    });
    link.addEventListener('mouseout', function () {
        link.style.color = 'black';
    });
});

// Contoh manipulasi DOM dinamis: Tambahkan elemen baru
const newParagraph = document.createElement('p');
newParagraph.textContent = 'Selamat datang di platform digital kami!';
newParagraph.style.textAlign = 'center';
newParagraph.style.marginTop = '20px';
document.querySelector('.content').appendChild(newParagraph);
// Fungsi yang dijalankan saat halaman selesai dimuat
function halamanDimuat() {
    // Menampilkan pesan selamat datang ketika halaman dimuat
    alert("Selamat datang di Customer Loyalty Anchor!");
}
