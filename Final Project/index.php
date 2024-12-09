<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Wellness Spa</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
 
  <!-- Hero Section -->
  <header class="hero">
    <div class="hero-content">
      <h1>Your Wellness Journey Starts Here</h1>
      <div class="hero-buttons">
          <nav>
                <a  class="cta-btn" href="booknow.php" id="about-link">Book Now</a>
                <a  class="cta-btn .secondary" href="viewservice.php" id="contact-link">View Service</a>
            </nav>
    </nav>
    </div>
  </header>

  <div class="container">
    <!-- Services Overview -->
    <section class="services">
      <h2>Our Popular Services</h2>
      <div class="services-grid" id="services-grid">
        <!-- JavaScript dynamically loads services here -->
      </div>
    </section>

 
    <!-- Testimonials -->
    <section class="testimonials">
      <h2>What Our Clients Say</h2>
      <div class="testimonial-slider" id="testimonial-slider">
        <!-- JavaScript dynamically loads testimonials here -->
      </div>
    </section>

    <!-- Call to Action -->
    <section class="cta">
      <h2>Take the First Step to Wellness</h2>
      <nav>
                <a  class="cta-btn1" href="#" id="create-link">Create an Account</a>
                <a class="cta-btn1 secondary" href="#" id="login-link">Login</a>
                <a class="cta-btn1 .secondary" href="schedule.php" id="schedule-link">Schedule Your First Session</a>
            </nav>

    </section>
  </div>

  <div class="popup-login" id="popup-login">
    <div class="login-form">
      <h2>Login</h2>
      <form action="login.php" method="POST">
        <input type="email" id="email" name="email" placeholder="Email" required><br>
        <input type="password" id="password" name="password" placeholder="Password" required><br>
        <button type="submit">Login</button>
      </form>
      <button class="close-btn" id="close-popup">Close</button>
    </div>
  </div>

  <div class="popup-create-account" id="popup-create-account">
  <div class="create-account-form">
    <h2>Create an Account</h2>
    <form action="create_account.php" method="POST">
      <input type="email" id="email" name="email" placeholder="Email" required><br>
      <input type="password" id="password" name="password" placeholder="Password" required><br>
      <button type="submit">Create Account</button>
    </form>
    <button class="close-btn" id="close-create-account">Close</button>
  </div>
</div>

  <script>
    // Get the login button, popup and close button
    const loginButton = document.getElementById('login-link');
    const popup = document.getElementById('popup-login');
    const closePopupButton = document.getElementById('close-popup');
    const createAccountButton = document.getElementById('create-link');
    const createAccountPopup = document.getElementById('popup-create-account');
    const closeCreateAccountButton = document.getElementById('close-create-account');

    createAccountButton.addEventListener('click', function(event) {
  event.preventDefault();
  createAccountPopup.style.display = 'flex'; // Show the popup
});

// Close the create account popup when close button is clicked
closeCreateAccountButton.addEventListener('click', function() {
  createAccountPopup.style.display = 'none'; // Hide the popup
});

// Close the create account popup when clicked outside the form
window.addEventListener('click', function(event) {
  if (event.target === createAccountPopup) {
    createAccountPopup.style.display = 'none'; // Hide the popup if clicked outside
  }
});
    loginButton.addEventListener('click', function(event) {
      event.preventDefault();
      popup.style.display = 'flex'; // Show the popup
    });

    // Close the popup when close button is clicked
    closePopupButton.addEventListener('click', function() {
      popup.style.display = 'none'; // Hide the popup
    });

    // Close the popup when clicked outside the form
    window.addEventListener('click', function(event) {
      if (event.target === popup) {
        popup.style.display = 'none'; // Hide the popup if clicked outside
      }
    });
  </script>


  <script src="script.js"></script>
</body>
</html>