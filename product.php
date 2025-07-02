<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Products - Alpha Strength Gym</title>
  <link rel="stylesheet" href="style.css" />
  <style>
    .products-section {
      padding: 10rem 8%;
      background: var(--snd-bg-color);
      color: var(--text-color);
      text-align: center;
      min-height: 100vh;
    }
    .products-section h2 {
      font-size: 4rem;
      margin-bottom: 4rem;
      color: var(--maun-color);
      font-weight: 600;
    }
    .product-container {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 3rem;
    }
    .product-box {
      background: #1b1b1b;
      padding: 2rem;
      border-radius: 1rem;
      box-shadow: 0 0 10px rgba(17, 216, 37, 0.2);
      transition: 0.3s ease;
    }
    .product-box:hover {
      transform: scale(1.05);
    }
    .product-box img {
      width: 100%;
      height: auto;
      border-radius: 0.5rem;
      margin-bottom: 1.5rem;
    }
    .product-box h3 {
      font-size: 2.2rem;
      margin-bottom: 1rem;
    }
    .product-box p {
      font-size: 1.8rem;
      margin-bottom: 1.5rem;
    }
    .product-btn {
      padding: 1rem 2rem;
      background: var(--maun-color);
      color: #000;
      font-weight: bold;
      border-radius: 0.5rem;
      display: inline-block;
      transition: 0.3s;
      cursor: pointer;
      text-decoration: none;
    }
    .product-btn:hover {
      background: #0fbb1c;
    }
  </style>
</head>
<body>

<!-- Header -->
<header>
  <a href="index.html#home" class="logo">Alpha <span>Strength</span></a>
  <ul class="navbar">
    <li><a href="index.html#home">Home</a></li>
    <li><a href="products.html" class="active">Product</a></li>
    <li><a href="about.html">About</a></li>
    <li><a href="index.html#contact">Contact</a></li>
  </ul>
  <div class="top-btn">
    <a href="#" class="nav-btn">Join Now</a>
  </div>
</header>

<!-- Products Section -->
<section class="products-section">
  <h2>Our Products</h2>
  <div class="product-container">
    <div class="product-box">
      <img src="Gymphotos/gym11.webp" alt="Dumbbell Set" />
      <h3>Dumbbell Set</h3>
      <p>$49.99</p>
      <a href="#" class="product-btn">Buy Now</a>
    </div>
    <div class="product-box">
      <img src="Gymphotos/gym12.jpg" alt="Protein Powder" />
      <h3>Protein Powder</h3>
      <p>$29.99</p>
      <a href="#" class="product-btn">Buy Now</a>
    </div>
    <div class="product-box">
      <img src="Gymphotos/gym13.webp" alt="Workout Gloves" />
      <h3>Workout Gloves</h3>
      <p>Rs.15,000.00</p>
      <a href="#" class="product-btn">Buy Now</a>
    </div>
     <div class="product-box">
      <img src="Gymphotos/gym13.webp" alt="Workout Gloves" />
      <h3>Workout Gloves</h3>
      <p>Rs.15,000.00</p>
      <a href="#" class="product-btn">Buy Now</a>
    </div>
    <!-- Add more product boxes as needed -->
  </div>
</section>

</body>
</html>
