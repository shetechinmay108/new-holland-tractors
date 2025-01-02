<?php
$con = mysqli_connect('localhost', 'root');

if (!$con) {
    die("Booking failed :( Please check your form ");
}

mysqli_select_db($con, 'bookslotdata');

$user = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$rc = $_POST['rc'];
$problem = $_POST['problem'];
$date = $_POST['date'];
$slot = $_POST['slot'];

$squery = "INSERT INTO userinfodata (user, email, mobile, rc, problem, date, slot) 
           VALUES ('$user', '$email', '$mobile', '$rc', '$problem', '$date', '$slot')";

if (mysqli_query($con, $squery)) {
    // Redirect to index.php with a success message
    header("Location: index.php?message=success");
    exit();
} else {
    // Redirect to index.php with a failure message
    header("Location: index.php?message=failure");
    exit();
}
?>
