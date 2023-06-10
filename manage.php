<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google Fonts  -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap"
      rel="stylesheet"
    />

    <!-- Favicon  -->
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">

    <!-- CSS Style Sheet  -->
    <link rel="stylesheet" href="styles/manage.css" />

    <!-- Font Awesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <script src="https://kit.fontawesome.com/38f42574c5.js" crossorigin="anonymous"></script>

    <title>Manage</title>
</head>

<body>
    <nav>
        <div class="top-logo">
            <img src="images/logo_with_txt.png" height="66px" style="margin-top: 20px; margin-left: 10px" />
        </div>
        <!------------------ Navigation bar --------------------->

        <?php include "./components/navbar.php" ?>

    </nav>
    <div class="main-container">


    <h1 >Manage Your Flight</h1>
    <p class="title-description">Effortlessly Manage Your Flight Bookings: Update, Modify, and Enhance Your Itinerary with Ease. Access your booking details, make changes to dates, seats, and services, and ensure a seamless travel experience through our user-friendly 'Manage Flights' feature.</p>
    </div>

    <div class="manage-box">
        <div class="input-boxes">
            <input type="text" class="last-name" placeholder="Last Name"/>
            <input type="text" class="ref-number" placeholder="Booking Reference Number"/>
            <button class="manage-buttons">
                Retrieve Booking
              </button>
        </div>
    </div>
    

    <div class="manage-description-box">
        <div class="manage-description">
            <h3>How to Manage your flights with NovaAir</h3>
            <ul>
                <li>Sign in to your account on the website and navigate to the "Manage Flights" section.</li>
                <li>Enter your booking reference number or flight details to access your itinerary.</li>
                <li>Make desired changes to your flight, such as modifying dates, upgrading seats, or adding extra services, and save the updated details.</li>
            </ul>
        </div>
    </div>

    
    <footer class="footer-distributed">

      <div class="footer-left">
  
        <h3>Nova Airways</h3>
  
        <p class="footer-links">
            <a href="./index.php">Home</a>
            <a href="./book.php">Book</a>
            <a href="./manage.php">Manage</a>
            <a href="./wherewefly.php">Where we fly</a>
            <a href="./destinations.php">Best Destinations</a>
            <a href="./contact.php">Contact Us</a>
        </p>
  
        <p class="footer-company-name">Nova Airways © 2023</p>
      </div>
  
      <div class="footer-center">
  
        <div>
          <i class="fa fa-map-marker"></i>
          <p>Katunayake, Sri Lanka</p>
        </div>
  
        <div>
          <i class="fa fa-phone"></i>
          <p>+94 11 223 3118</p>
        </div>
        
  
        <div>
          <i class="fa fa-envelope"></i>
          <p><a href="mailto:novaairways@company.com">novaairways@company.com</a></p>
        </div>
      </div>
  
      <div class="footer-right">
        <p class="footer-company-about">
          <span>About the company</span>
          Soaring to new heights, we offer exceptional service, unmatched comfort, and seamless travel experiences. Fly with us today!
        </p>
        <div>
          <i class="social-icon fab fa-facebook-f"></i>
          <i class="social-icon fab fa-twitter"></i>
          <i class="social-icon fab fa-instagram"></i>
          <i class="social-icon fas fa-envelope"></i>
        </div>
      </div>
    </footer>

</body>

</html>