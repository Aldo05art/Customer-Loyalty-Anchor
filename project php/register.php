<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.1/css/boxicons.min.css">
    <link rel="stylesheet" href="register.css">
</head>
<body>
    <div class="background">
        <div class="wrapper">
            <h2>Register <i class='bx bx-anchor'></i></h2>
            <!-- Form yang mengarah langsung ke dashboard.html -->
            <form action="dashboard.php" method="POST">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" placeholder="Username" required>
                <label for="email">Email address:</label>
                <input type="email" id="email" name="email" placeholder="Email" required>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Password ?" required>
                <input type="submit" value="Register">
            </form>
            <p><a href="#">Forgot Password?</a></p>
            <p><a href="#">Have Account?</a></p>
        </div>
    </div>
</body>
</html>
