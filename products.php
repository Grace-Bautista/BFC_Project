<?php
include 'db.php'; // your database connection file

// Fetch categories with products
$sql = "
  SELECT c.id AS category_id, c.name AS category_name,
         p.id AS product_id, p.name AS product_name,
         p.description, p.price, p.image
  FROM categories c
  LEFT JOIN products p ON c.id = p.category_id
  ORDER BY c.id, p.id
";

$result = $conn->query($sql);

$categories = [];
while ($row = $result->fetch_assoc()) {
    $categories[$row['category_name']][] = $row;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BUT FIRST, COFFEE | Products</title>
  <link rel="stylesheet" href="products.css">
</head>

<body>

  <!-- Navigation Bar -->
  <nav class="navbar">
    <div class="logo">
      <a href="index.php"><img src="/image/OIP.jpg" alt="Logo"></a>
    </div>
    <div class="nav-links">
      <a href="index.php">Home</a>
      <a href="products.php" class="active">Products</a>
      <a href="#About Us">About Us</a>
      <a href="#contact">Contact</a>
    </div>
  </nav>

  <!-- Page Title -->
 <header class="page-header">
  <h1>Products</h1>
  </header>
                                                   <!-- REtrive data from database -->

  <!-- Main Content -->
  <div class="content-wrapper">
    <!-- Product Grid -->
    <section class="product-grid">
      <div class="product-section">
        <?php foreach ($categories as $categoryName => $products): ?>
            <div class="category-block">
                <h2 class="category-title"><?= $categoryName ?></h2>
                <div class="category-products">

                    <?php foreach ($products as $product): ?>
                        <a href="#<?= $product['product_id'] ?>" class="product-box">
                            <img src="<?= $product['image'] ?>" alt="<?= $product['product_name'] ?>">
                            <h3><?= $product['product_name'] ?></h3>
                            <h4><?= $product['price'] ?></h4>                            
                        </a>
                    <?php endforeach; ?>

                </div>
            </div>
        <?php endforeach; ?>
      </div>
    </section>


    <!-- Product Details (shown when clicked) -->
     
    <section class="product-details">
      <?php foreach ($categories as $categoryName => $products): ?>
        <?php foreach ($products as $product): ?>
            <div id="<?= $product['product_id'] ?>" class="details-box">
                <img src="<?= $product['image'] ?>" alt="<?= $product['product_name'] ?>">
                <h2><?= $product['product_name'] ?></h2>
                <p><?= $product['description'] ?></p>
                <button class="add-to-cart"
                        data-name="<?= $product['product_name'] ?>"
                        data-price="<?= $product['price'] ?>">
                    Add to Cart
                </button>
            </div>
        <?php endforeach; ?>
      <?php endforeach; ?>
    </section>

    <div class="cart">
      <h2>🛒 Your Cart</h2>
      <ul class="cart-items"></ul>
      <p>Total: <span class="total-price">₱0</span></p>
      <button class="checkout-btn">Checkout</button>
      <button class="close-cart">Close</button>
    </div>

  <button class="open-cart">🛒 View Cart</button>
    

  </div>

  <!-- Footer -->
  <footer>
    <p>© 2025 CHOCOCRAVE | Indulge in Sweet Cravings</p>
  </footer>

  <script src="script.js"></script>


</body>
</html>
