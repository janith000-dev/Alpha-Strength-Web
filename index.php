<?php include 'db_connect.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Alpha Strength Gym</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <!-- Header -->
  <header>
    <a href="#home" class="logo">Alpha <span>Strength</span></a>
    <ul class="navbar">
      <li><a href="#home">Home</a></li>
      <li><a href="#products">Product</a></li>
      <li><a href="#about">About</a></li>
      <li><a href="contact.php">Contact</a></li>
    </ul>
    <div class="top-btn">
      <a href="#" class="nav-btn">Join Now</a>
    </div>
  </header>

  <!-- Home -->
  <section class="home" id="home">
    <div class="home-content">
      <h1>Welcome to Alpha Strength Gym</h1>
      <p>Your fitness journey starts here!</p>
    </div>
    <div class="home-img">
      <img src="Gymphotos/gym1.png" alt="home-image">
    </div>
  </section>

  <!-- Products -->
  <section class="products" id="products">
    <h2 class="section-title">Our Products</h2>
    <div class="product-container">
      <div class="product-box">
        <img src="Gymphotos/gym11.webp" alt="Dumbbell">
        <h3>Dumbbell Set</h3>
        <p>$49.99</p>
        <a href="#" class="product-btn">Buy Now</a>
      </div>
      <div class="product-box">
        <img src="Gymphotos/gym12.jpg" alt="Protein Powder">
        <h3>Protein Powder</h3>
        <p>$29.99</p>
        <a href="#" class="product-btn">Buy Now</a>
      </div>
      <div class="product-box">
        <img src="Gymphotos/gym13.webp" alt="Gloves">
        <h3>Workout Gloves</h3>
        <p>Rs.15,000.00</p>
        <a href="#" class="product-btn">Buy Now</a>
      </div>
    </div>
    <a href="product.php"><button class="moreProduct">See More</button></a>
  </section>

  <!-- About -->
  <section class="about" id="about">
    <div class="about-container">
      <div class="about-image">
        <img src="Gymphotos/gymab1.png" alt="Alpha Strength Gym" />
      </div>
      <div class="about-text">
        <h2>About Us</h2>
        <p>
          Alpha Strength Gym is your space to build strength, burn fat, and push limits.
          Train smart. Stay strong.
        </p>
        <div>
          <a href="about.php" target="_blank"><button class="moreAbout">More</button></a>
        </div>
      </div>
    </div>
  </section>

  <!-- Buy Now Popup Modal -->
  <div id="buyModal" class="modal">
    <div class="modal-content">
      <span class="close">&times;</span>
      <h2 id="modalProductName">Product Name</h2>
      <p id="modalProductPrice">$0.00</p>
      <div class="quantity-control">
        <button id="decreaseQty">−</button>
        <span id="quantity">1</span>
        <button id="increaseQty">+</button>
      </div>
      <button  id="addToCartBtn">Add to Cart</button>
      <a href="cart.php">
        <button id="checkOutBtn">Check Out</button>
      </a>
    </div>
  </div>

  <!-- JavaScript -->
  <script>
    const modal = document.getElementById("buyModal");
    const modalProductName = document.getElementById("modalProductName");
    const modalProductPrice = document.getElementById("modalProductPrice");
    const quantityDisplay = document.getElementById("quantity");
    const closeBtn = document.querySelector(".close");
    const increaseBtn = document.getElementById("increaseQty");
    const decreaseBtn = document.getElementById("decreaseQty");

    let currentQuantity = 1;

    document.querySelectorAll(".product-btn").forEach(button => {
      button.addEventListener("click", function (event) {
        event.preventDefault();
        const productBox = this.parentElement;
        const name = productBox.querySelector("h3").innerText;
        const price = productBox.querySelector("p").innerText;

        modalProductName.innerText = name;
        modalProductPrice.innerText = price;
        currentQuantity = 1;
        quantityDisplay.innerText = currentQuantity;
        modal.style.display = "flex";
      });
    });

    closeBtn.onclick = () => {
      modal.style.display = "none";
    };

    window.onclick = (event) => {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    };

    increaseBtn.onclick = () => {
      currentQuantity++;
      quantityDisplay.innerText = currentQuantity;
    };

    decreaseBtn.onclick = () => {
      if (currentQuantity > 1) {
        currentQuantity--;
        quantityDisplay.innerText = currentQuantity;
      }
    };

    document.getElementById("addToCartBtn").onclick = () => {
      const name = modalProductName.innerText;
      const price = modalProductPrice.innerText;
      alert(`✅ Added ${currentQuantity} x ${name} (${price}) to cart!`);
      modal.style.display = "none";
    };
  </script>
</body>
</html>
