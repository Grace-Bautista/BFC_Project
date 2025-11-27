<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Butfirst, Coffee | Your Greater Start</title>
    <link rel="stylesheet" href="main.css">

    <style>
        /* ==========================================================
        PRODUCTS (HOME PAGE)
        ========================================================== */
        .products {
        text-align: center;
        padding: 60px 40px;
        }

        .products h2 {
        font-size: 36px;
        color: #4b2e05;
        margin-bottom: 30px;
        }

        .product-cards {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 25px;
        }

        .card {
        width: 280px;
        border-radius: 12px;
        overflow: hidden;
        background-color: #fff;
        box-shadow: 0 4px 10px rgba(0,0,0,0.15);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
        transform: translateY(-8px);
        box-shadow: 0 8px 15px rgba(0,0,0,0.25);
        }

        .card img {
        width: 100%;
        height: 200px;
        object-fit: cover;
        }

        .card h3 {
        color: #5c3317;
        margin: 15px 0 5px;
        }

        .card p {
        color: #555;
        padding: 0 15px 15px;
        font-size: 15px;
        }

    </style>
</head>
<body>

   <!-- Navigation Bar -->
<nav class="navbar">
  <div class="logo">
    <a href="index.php">
      <img src="image/OIP.jpg" alt="Butfirst Logo">
    </a>
  </div>

  <!-- Hamburger icon -->
  <div class="menu-toggle" id="menu-toggle">
    &#9776;
  </div>

  <div class="nav-links" id="nav-links">
    <a href="index.php">Home</a>
    <a href="products.php">Products</a>
    <a href="#about">About Us</a>
    <a href="#contact">Contact</a>
  </div>
</nav>


    <!-- Welcome Section -->
    <section class="welcome-section" id="home">
        <h1>BUT FIRST, COFFEE</h1>
        <p>“Your Greater Start”</p>
        <a href="products.php" class="shop-btn">Order Now</a>
        
    </section>

    <!-- Products Section -->
    <section class="products" id="products">
        <h2>Our Bestsellers</h2>
        <div class="product-cards">

            <div class="card">
                <img src="../Finish Product/Spanish Latte.jpg" alt="Spanish-Latte">
                <h3>Spanish Latte</h3>
                <p>Where bold espresso meets creamy condensed milk—every sip feels like a hug.</p>
            </div>

            <div class="card">
                <img src="../Finish Product/Black forest.jpg" alt="Black Forest Cake">
                <h3>Black Forest Cake</h3>
                <p>Layers of chocolatey goodness with a cherry on top.</p>
            </div>

            <div class="card">
                <img src="/Finish Product/Auro.jpg" alt="Auro choco Butter-Scotch">
                <h3>Auro Choco Butter-Scotch</h3>
                <p>Sweet, creamy, and oh-so-decadent! Chocolate and butterscotch in perfect harmony..</p>
            </div>

        </div>
    </section>
    

    <!-- About Section -->
    <section class="about" id="about">
        <h2>About But First, Coffee</h2>
        <p>But First, Coffee – Canlubang, we believe every great day starts with a cup of coffee. As part of the well-loved Filipino brand But First, Coffee, our mission is simple: serve high-quality, café-style coffee at prices everyone can enjoy.</p>
    </section>

    <!-- Contact Section -->
    <section class="contact" id="contact">
        <h2>Contact Us</h2>
        <p>📍 Located in Canlubang beside unioil, Calamba City, Laguna</p>
        <p>📞 09090338676 | ButfirstCanlubang@gmail.com</p>
        <p>Follow us on 
            <a href="https://www.facebook.com/butfirstcoffeecanlubang">Facebook</a> | 
            <a href="https://www.instagram.com/butfirstcoffeecanlubang/">Instagram</a>
        </p>
    </section>

    <!-- Footer -->
    <footer>
        <p>© 2025 BUTFIRST, COFFEE | YOUR GREATER START</p>
    </footer>

    <script src="Toggle.js"></script>
</body>
</html>
