<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Loyalty Anchor</title>
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>
    <div class="container">
        <aside class="sidebar">
            <div class="logo">
                <h1>Customer Loyalty Anchor</h1>
                <span class="anchor-icon">&#9875;</span>
            </div>
            <nav>
                <ul>
                    <li class="active"><a href="#">Dashboard</a></li>
                    <li><a href="#">Customers</a></li>
                    <li><a href="#">Company</a></li>
                    <li><a href="#">Transactions</a></li>
                    <li><a href="#">Sells</a></li>
                </ul>
            </nav>
        </aside>
        
        <main class="main-content">
            <header class="header">
                <div class="profile-icon" onclick="toggleDropdown()">
                    <img src="images.png" alt="Profile" id="profile-pic">
                    <div class="dropdown" id="dropdown-menu">
                        <a href="index.php" onclick="logout()">Logout</a>
                    </div>
                </div>
            </header>
            
            <section class="dashboard">
                <div class="card">
                    <h2>Liferaft</h2>
                    <p>350</p>
                </div>
                <div class="card">
                    <h2>Fire Extinguisher</h2>
                    <p>450</p>
                </div>
                <div class="card">
                    <h2>Food Ration</h2>
                    <p>3500</p>
                </div>
                <div class="card">
                    <h2>Hydrostatic Release Unit</h2>
                    <p>350</p>
                </div>
            </section>
        </main>
    </div>

    <script>
        function toggleDropdown() {
            var dropdown = document.getElementById('dropdown-menu');
            dropdown.classList.toggle('show');
        }

        function logout() {
            alert("Logging out...");
            window.location.href = 'index.php';
        }

        window.onclick = function(event) {
            if (!event.target.matches('#profile-pic')) {
                var dropdown = document.getElementById('dropdown-menu');
                if (dropdown.classList.contains('show')) {
                    dropdown.classList.remove('show');
                }
            }
        }
    </script>
</body>
</html>