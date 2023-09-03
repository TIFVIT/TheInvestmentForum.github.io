<?php
include 'connection.php';

if (isset($_POST['Submit'])) {
    $name = $_POST['name'];
    $contact = $_POST['phone'];
    $prn = $_POST['prn'];
    $year = $_POST['year'];
    $email = $_POST['email'];
    $confirmpassword = $_POST['confirm'];

    $username = 'TIF_' . $prn;

    // Check if PRN is already registered
    $prnCheckQuery = "SELECT * FROM reg WHERE prn = '$prn'";
    $prnCheckResult = mysqli_query($conn, $prnCheckQuery);

    if (mysqli_num_rows($prnCheckResult) > 0) {
        echo "<script>alert('PRN $prn is already registered')</script>";
    } else {
        $sql = "INSERT INTO reg (name, phone, prn, year, email, cfpassword, username)
                VALUES ('$name', '$contact', '$prn', '$year', '$email', '$confirmpassword', '$username')";
  
        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Hello $name, Your Username is $username')</script>";
        } else {
            echo "<script>alert('Error: Registration failed')</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <!-- Title Page-->
    <title>Au Register Forms by Colorlib</title>
    <link href="images/android-chrome-512x512.png" rel="icon">
  

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <header class="l-header">
        <nav class="nav bd-grid">
            <div>
                <a href="" class="nav__logo"><img src="images/tif-logo.png" alt=""></a>
            </div>
            
            <div class="nav__toggle" id="nav-toggle">
                <i class='bx bx-menu'></i>
            </div>

            <div class="nav__menu" id="nav-menu">
                <div class="nav__close" id="nav-close">
                    <i class='bx bx-x'></i>
                </div>

                <ul class="nav__list">
                    <li class="nav__item"><a href="#home" class="nav__link active">Home</a></li>
                    <li class="nav__item"><a href="#about" class="nav__link">About</a></li>
                    <li class="nav__item"><a href="#skills" class="nav__link">News</a></li>
                    <li class="nav__item"><a href="#contact" class="nav__link">Contact</a></li>
                </ul>
            </div>
        </nav>
    </header>
    
    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
  
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Registration Form</h2>
                    <form method="POST" action="#">
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Name" name="name">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Phone" name="phone">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="PRN" name="prn">
                        </div>
                        <!-- <div class="input-group">
                            <input class="input--style-3 js-datepicker" type="text" placeholder="Birthdate" name="birthday">
                            <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                        </div> -->
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="gender">
                                    <option disabled="disabled" selected="selected">Year</option>
                                    <option>First Year</option>
                                    <option>Second Year</option>
                                    <option>Third Year</option>
                                    <option>Fourth Year</option>
                                </select>
                                <div class="select-dropdown" name="year"></div>
                            </div>
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="email" placeholder="Email" name="email">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Password" name="Password">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Confirm Password" name="confirm">
                        </div>
                        <div class="p-t-10">
                        <input type="submit" value="Submit" name="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>
    <script src="js/main.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->