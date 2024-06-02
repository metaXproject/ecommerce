<?php
session_start();
include 'functions.php';

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="container">
            <div class="logo">
                <h1>PORTO</h1>
                <p>eCommerce</p>
            </div>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php#products">Products</a></li>
                    <li><a href="cart.php">Cart</a></li>
                    <li><a href="tel:+1235678890"><i class="fas fa-phone"></i> +123 5678 890</a></li>
                    <li class="user-info">
                        <p>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</p>
                    </li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <section class="cart" id="cart">
            <h2>Cart</h2>
            <ul id="cartItems"></ul>
            <p>Total: $<span id="total">0</span></p>
            <button onclick="checkout()">Checkout</button>
        </section>
    </main>

    <footer>
        <div class="social-share">
            <ul>
                <li><i class="fab fa-facebook"></i></li>
                <li><i class="fab fa-instagram"></i></li>
                <li><i class="fab fa-twitter"></i></li>
                <li><i class="fab fa-linkedin-in"></i></li>
                <li><i class="fab fa-github"></i></li>
            </ul>
        </div>
        <div class="general-info">
            <div class="help">
                <h3>Help</h3>
                <ul>
                    <li>frequently asked questions</li>
                    <li>delivery information</li>
                    <li>return</li>
                    <li>product recall</li>
                    <li>customer care</li>
                </ul>
            </div>
            <div class="store-location">
                <h3>our location</h3>
                <ul>
                    <li>Jhansi</li>
                    <li>Kanpur</li>
                    <li>Delhi</li>
                    <li>Bangalore</li>
                    <li>Gurgaon</li>
                </ul>
            </div>
            <div class="legal">
                <h3>privacy & legal </h3>
                <ul>
                    <li>cookies & privacy policy</li>
                    <li>terms & conditions</li>
                </ul>
            </div>
        </div>
    </footer>

    <script src="scripts.js"></script>
</body>
</html>
