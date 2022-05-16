<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="Css/AT.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="description" content="Aventure Travel Home Page">
    <meta name="keywords" content="Adventure travel, Home Page, filght, getaway, deals, travel packages, best in calss, credibility">
    <link rel="icon" href="Images/AT_logo.ico">
    <title>Contact Submission</title>
    <!-- Coded by Drew Crawford  29-Apr-2022 -->
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

        <?php
            $fname = $_POST['first_name'];
            $lname = $_POST['last_name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $cmethod = $_POST['contact_method'];
            $time = $_POST['time'];
            $destination = $_POST['destination'];
            $reference = $_POST['reference'];
            $comments = $_POST['comments'];

            echo "<div class=\"container\">";

            echo "<div class=\"main interests left\">";

            echo "<h1 class=\"mt-5\">Thank you for submitting our contact form!</h1>";

            echo "<p class=\"mt-5 text-spaced\">Please review your submission and verify that all information is correct. Feel free to submit the form again if there are errors.</p>";

            echo "<form action=\"#\">";

            echo "<fieldset disabled>";
            echo "<legend class=\"mt-5\">Your information</legend>";

            echo "<div class=\"form-group\">";
            echo "<label for=\"first_name\">First Name</label>";
            echo "<input type=\"text\" name=\"first_name\" class=\"form-control\" id=\"first_name\" value=\"$fname\">";
            echo "</div>";

            echo "<div class=\"form-group\">";
            echo "<label for=\"last_name\">Last Name</label>";
            echo "<input type=\"text\" name=\"last_name\" class=\"form-control\" id=\"last_name\" value=\"$lname\">";
            echo "</div>";

            echo "<div class=\"form-group\">";
            echo "<label for=\"email\">Email</label>";
            echo "<input type=\"email\" name=\"email\" class=\"form-control\" id=\"email\" value=\"$email\">";
            echo "</div>";

            echo "<div class=\"form-group\">";
            echo "<label for=\"phone\">Phone Number</label>";
            echo "<input type=\"text\" name=\"phone\" class=\"form-control\" id=\"phone\" value=\"$phone\">";
            echo "</div>";

            echo "<div class=\"form-group\">";
            echo "<label for=\"contact_method\">Contact preference</label>";
            echo "<select name=\"contact_method\" id=\"contact_method\" class=\"form-control\">";
            echo "<option value=\"$cmethod\">$cmethod</option>";

            echo "</select>";
            echo "</div>";

            echo "<div class=\"form-group\">";
            echo "<label for=\"time\">Good contact time</label>";
            echo "<input type=\"text\" name=\"time\" class=\"form-control\" id=\"time\" value=\"$time\">";
            echo "</div>";

            echo "<div class=\"form-group\">";
            echo "<label for=\"destination\">Which destionation interests you the most?</label>";
            echo "<select name=\"destination\" id=\"destination\" class=\"form-control\">";
            echo "<option value=\"$destination\">$destination</option>";
            echo "</select>";
            echo "</div>";

            echo "<fieldset class=\"form-group\" disabled>";

            echo "<legend class=\"col-form-label\">How did you hear about Adventure Travel?</legend>";

            echo "<div class=\"col\">";

            echo "<div class=\"form-check\">";
            echo "<input class=\"form-check-input\" type=\"radio\" name=\"reference\" id=\"reference1\" value=\"$reference\" checked>";
            echo "<label class=\"form-check-label\" for=\"reference1\">";
            echo "$reference";
            echo "</label>";
            echo "</div>";

            echo "</div>";

            echo "</fieldset>";

            echo "<div class=\"form-group\">";
            echo "<label for=\"comments\">Any additional information we might need to know?</label>";
            echo "<textarea class=\"form-control\" name=\"comments\" id=\"comments\" cols=\"51\" rows=\"5\">$comments</textarea>";
            echo "</div>";
            echo "</fieldset>";
            echo "</form>";

            echo "</div>";

            echo "</div>";

        ?>

        <a href="contact.html" class="btn btn-success">Submit Again?</a>

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