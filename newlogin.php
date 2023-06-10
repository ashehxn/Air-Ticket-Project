<?php include "./db/db.php" ?>
<?php 

    session_start();

    $error = "";

    if(isset($_POST["submit"])){

        $email = $_POST["email"];
        $password = $_POST["password"];

        $qur = "SELECT s.UserPassword, e.Email, e.UserID
                FROM users s, user_email e
                WHERE s.UserID = e.UserID AND s.UserPassword = '$password' AND e.Email = '$email';";

        $result = $conn->query($qur);

        if($row = $result->fetch_assoc()){

            $_SESSION['ID'] = $row['UserID'];
            header("Location: ./index.php");
        }else{

            $error = "Email or password incorrect";
        }
    }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Style Sheet -->
    <link rel="stylesheet" href="styles/newlogin.css">

    <!-- Font Awesome  -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <script src="https://kit.fontawesome.com/38f42574c5.js" crossorigin="anonymous"></script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet" />

    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
</head>

<body>
    <nav>
        <div class="top-logo">
          <img
            src="images/logo_with_txt.png"
            height="66px"
            style="margin-top: 20px; margin-left: 10px"
          />
        </div>
        <!------------------ Navigation bar --------------------->

        <?php include "./components/navbar.php" ?>

      </nav>
    <div class="main-container">
        <div class="container" id="container">
            <div class="form-container sign-in-container">

                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >
                    <h1>Sign in</h1>
                    <div class="social-container">
                        <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <span>or use your account</span>

                    <input name="email" type="email" placeholder="Email" />
                    <input name="password" type="password" placeholder="Password" />

                    <a href="adminlogin.php">Staff Login</a>
                    <button name="submit" type="submit" class="sign-in_btn">
                        <span>Sign In</span>
                    </button>
                </form>
            </div>
            <div class="right-container">
                <div class="overlay">
                    <div class="overlay-panel">
                        <h1>Don't have an account?</h1>
                        <h1><span>* <?php echo $error;?></span></h1>
                        <button type="submit" class="sign-up sign-in_btn" >
                            <a href="./registration.php" style ="text-decoration: none;">Sign up</a>
                        </button>
                    </div>
                </div>
            </div>
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

<?php $conn -> close() ?>