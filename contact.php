<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Us - Alpha Strength Gym</title>
  <link rel="stylesheet" href="style.css" />
  <style>
    .contact-section {
      padding: 10rem 8%;
      background: var(--snd-bg-color);
      color: var(--text-color);
      min-height: 100vh;
      text-align: center;
    }
    .contact-section h2 {
      font-size: 4rem;
      margin-bottom: 3rem;
      color: var(--maun-color);
    }
    .contact-container {
      max-width: 600px;
      margin: 0 auto;
      text-align: left;
    }
    .contact-info {
      margin-bottom: 3rem;
      font-size: 1.8rem;
      line-height: 1.6;
    }
    .contact-info p {
      margin: 0.8rem 0;
    }
    form.contact-form {
      display: flex;
      flex-direction: column;
      gap: 1.8rem;
    }
    form.contact-form label {
      font-size: 1.6rem;
      margin-bottom: 0.5rem;
    }
    form.contact-form input,
    form.contact-form textarea {
      padding: 1rem;
      font-size: 1.6rem;
      border-radius: 5px;
      border: 1px solid #444;
      background: #222;
      color: var(--text-color);
      resize: vertical;
    }
    form.contact-form textarea {
      min-height: 120px;
    }
    form.contact-form button {
      padding: 1rem 2rem;
      font-size: 1.8rem;
      background: var(--maun-color);
      color: #000;
      font-weight: bold;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background 0.3s ease;
    }
    form.contact-form button:hover {
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
    <li><a href="products.html">Product</a></li>
    <li><a href="about.html">About</a></li>
    <li><a href="contact.html" class="active">Contact</a></li>
  </ul>
  <div class="top-btn">
    <a href="#" class="nav-btn">Join Now</a>
  </div>
</header>

<!-- Contact Section -->
<section class="contact-section">
  <h2>Contact Us</h2>
  <div class="contact-container">
    <div class="contact-info">
      <p><strong>Address:</strong> 123 Fitness St, Workout City, SL</p>
      <p><strong>Phone:</strong> +94 123 456 789</p>
      <p><strong>Email:</strong> contact@alphastrengthgym.com</p>
    </div>
    <form class="contact-form" action="#" method="POST">
      <label for="name">Full Name</label>
      <input type="text" id="name" name="name" required placeholder="Your full name" />
      
      <label for="email">Email Address</label>
      <input type="email" id="email" name="email" required placeholder="Your email address" />
      
      <label for="message">Message</label>
      <textarea id="message" name="message" required placeholder="Write your message here"></textarea>
      
      <button type="submit">Send Message</button>
    </form>
  </div>
</section>

</body>
</html>
