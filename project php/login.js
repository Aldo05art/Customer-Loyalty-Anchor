// toast.js
document.querySelector("form").addEventListener("submit", function (event) {
    event.preventDefault(); // Prevent form submission
    const email = document.getElementById("email").value;
    const password = document.getElementById("password").value;

    if (email && password) {
        showToast("Login successful!", "success");
    } else {
        showToast("Please fill out all fields!", "error");
    }
});

function showToast(message, type) {
    const toast = document.getElementById("toast");
    toast.textContent = message;
    toast.className = `toast ${type}`;
    toast.style.display = "block";

    setTimeout(() => {
        toast.style.display = "none";
    }, 3000);
}
