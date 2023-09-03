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
