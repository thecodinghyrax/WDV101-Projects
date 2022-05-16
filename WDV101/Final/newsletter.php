<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="Css/AT.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="description" content="Aventure Travel Home Page">
    <meta name="keywords" content="Adventure travel, Home Page, filght, getaway, deals, travel packages, best in calss, credibility newsletter, signup, current information">
    <link rel="icon" href="Images/AT_logo.ico">
    <title>Newsletter Signup</title>
    <style>
        .container>.thank-you {
            background-color: rgba(103, 202, 248, 0.6);
            box-shadow: 5px 10px 10px black;

        }
        .thank-you div img {
            text-align: center;
        }
        </style>
    <!-- Coded by Drew Crawford 29-Apr-2022 -->
</head>

<body class="text-white">

    <div class="banner">
        <img src="Images/banner.jpg" alt="Adventure banner image">
        <div class="text-uppercase text-center banner-text">Adventure</div>
        <div class="text-uppercase text-center banner-text">Travel</div>
    </div>

    <nav id="nav" class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Adventure Travel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="Index.html">Home <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="advantages.html">Advantages</a>
                <a class="nav-item nav-link" href="destinations.html">Destinations</a>
                <a class="nav-item nav-link" href="faq.html">FAQ</a>
                <a class="nav-item nav-link" href="contact.html">Contact Us</a>
            </div>
        </div>
    </nav>

    <div class="container">

        <div class="row thank-you">

            <div class="col-lg-6 center">

                <?php
                if (isset($_POST['signup-email'])){

                    $email = $_POST['signup-email'];
                }
                else{
                    echo "<h1 class=\"text-danger\">Email address was not found </h1>";
                }
                    echo "<h1 class=\"text-white mb-5\">Thank you for signing up for Adventure Travel's newsletter!</h1>";
                    echo "<h3 class=\"text-white mb-5\">*You should receive you first edition soon at $email.</h3>";
                    echo "<br/><br/><br/><br/><br/><br/><br/><br/>";
                    echo "<p class=\"mb-5\"><small>*Please note: This is a student project and you will in fact <b>not</b> actually receive a newsletter.</small></p>";
                ?>

            </div>

            <div class="col-lg-6 center">
                <img src="Images/success.webp" alt="Man on mountian" title="Man on mountain">
            </div>

        </div>

    </div>

    <nav class="navbar navbar-dark bg-dark fixed-bottom">

        <div class="col-auto">
            <a href="#" class="navbar-brand"><img class="logo-footer" src="Images/AT_logo.gif" alt="Advantage Travel Logo"></a>
        </div>

        <div class="col-auto mr-auto">
            <div class="row">Adventure Travel</div>
            <div class="row">3405 Conhost Avenue</div>
            <div class="row">Boulder Colorado 12345</div>
            <div class="row">(317) 555-7414</div>
        </div>

        <form class="form-inline col-auto" action="newsletter.php" method="post">
            <label for="signup-email" class="text-white text-large mr-2">Sign up for our newsletter&nbsp; <i class="fa fa-arrow-right" aria-hidden="true"></i></label>
            <input class="form-control mr-sm-2" placeholder="Email" aria-label="fake" name="signup-email" type="email" id="signup-email">
            <button class="btn btn-info my-2 my-sm-0" type="submit">Sign Up</button>
        </form>

    </nav>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
</body>

</html>