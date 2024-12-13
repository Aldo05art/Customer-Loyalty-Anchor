<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.1/css/boxicons.min.css">
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="">
        <div class="wrapper">
            <h2>Login <i class='bx bx-anchor'></i></h2>
            <form>
                <label for="email">Email address:</label>
                <input type="email" id="email" name="email" placeholder="Email" required>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Password ?" required>
                <button class="tombol
                "><a href="dashboard.php">login</a></button>
                <p><a href="#">Forgot Password?</a></p>
            </form>
        </div>
    </div>
    <!-- Toast Notification -->
    <div id="toast" class="toast"></div>
    <script src="login.js"></script>
</body>
</html>
