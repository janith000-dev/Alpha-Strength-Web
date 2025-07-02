<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Your Cart - Alpha Strength Gym</title>
  <link rel="stylesheet" href="style.css">
  <style>
    .cart-section {
      padding: 10rem 8%;
      background: var(--snd-bg-color);
      color: var(--text-color);
    }

    .cart-section h2 {
      font-size: 4rem;
      margin-bottom: 2rem;
      color: var(--maun-color);
      text-align: center;
    }

    .cart-table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 3rem;
      color: white;
    }

    .cart-table th, .cart-table td {
      border: 1px solid #333;
      padding: 1.2rem;
      text-align: center;
      font-size: 1.6rem;
    }

    .cart-table th {
      background: #222;
    }

    .cart-total {
      text-align: right;
      margin-top: 2rem;
      font-size: 2rem;
      color: var(--maun-color);
    }

    .checkout-btn {
      display: inline-block;
      margin-top: 2rem;
      padding: 1rem 2rem;
      background: var(--maun-color);
      color: #000;
      font-weight: bold;
      border-radius: 5px;
      text-decoration: none;
    }
  </style>
</head>
<body>

<!-- Header -->
<header>
  <a href="index.html#home" class="logo">Alpha <span>Strength</span></a>
  <ul class="navbar">
    <li><a href="index.html#home">Home</a></li>
    <li><a href="index.html#products">Product</a></li>
    <li><a href="index.html#about">About</a></li>
    <li><a href="index.html#contact">Contact</a></li>
  </ul>
  <div class="top-btn">
    <a href="#" class="nav-btn">Join Now</a>
  </div>
</header>

<!-- Cart Section -->
<section class="cart-section">
  <h2>Your Shopping Cart</h2>

  <table class="cart-table">
    <thead>
      <tr>
        <th>Product</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Total</th>
        <th>Remove</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Dumbbell Set</td>
        <td>$49.99</td>
        <td>2</td>
        <td>$99.98</td>
        <td><a href="#" style="color: red;">Remove</a></td>
      </tr>
      <tr>
        <td>Protein Powder</td>
        <td>$29.99</td>
        <td>1</td>
        <td>$29.99</td>
        <td><a href="#" style="color: red;">Remove</a></td>
      </tr>
    </tbody>
  </table>

  <div class="cart-total">
    <strong>Total: $129.97</strong>
  </div>

  <div style="text-align: right;">
    <a href="#" class="checkout-btn">Proceed to Checkout</a>
  </div>
</section>
</body>
</html>
