<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About - Alpha Strength Gym</title>
  <link rel="stylesheet" href="style.css">
  <style>
    .about-section {
      padding: 10rem 8%;
      background: var(--snd-bg-color);
      color: var(--text-color);
    }

    .about-section h2 {
      font-size: 4rem;
      margin-bottom: 3rem;
      color: var(--maun-color);
      text-align: center;
    }

    .about-container {
      display: flex;
      flex-direction: column;
      gap: 4rem;
      align-items: center;
      text-align: center;
    }

    .about-image img {
      max-width: 600px;
      width: 100%;
      border-radius: 1rem;
      box-shadow: 0 0 10px rgba(17, 216, 37, 0.2);
    }

    .about-text {
      max-width: 800px;
    }

    .about-text p {
      font-size: 1.8rem;
      line-height: 1.6;
      color: #ccc;
    }

    @media (min-width: 768px) {
      .about-container {
        flex-direction: row;
        justify-content: space-between;
        text-align: left;
      }

      .about-image,
      .about-text {
        flex: 1;
      }

      .about-text {
        padding-left: 3rem;
      }
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
    <li><a href="index.html#about" class="active">About</a></li>
    <li><a href="index.html#contact">Contact</a></li>
  </ul>
  <div class="top-btn">
    <a href="#" class="nav-btn">Join Now</a>
  </div>
</header>

<!-- About Section -->
<section class="about-section">
  <h2>About Alpha Strength Gym</h2>
  <div class="about-container">
    <div class="about-image">
      <img src="Gymphotos/gymab1.png" alt="Alpha Strength Gym">
    </div>
    <div class="about-text">
      <p>
        At Alpha Strength Gym, we believe that strength is more than muscle — it's about mindset, commitment,
        and building a better you. Whether you're a beginner or seasoned athlete, our facility, trainers, and
        supportive community are here to help you crush your goals. Get ready to elevate your fitness journey
        with us!
      </p>
    </div>
  </div>
</section>
</body>
</html>
