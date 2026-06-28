<?php
session_start();

if(!isset($_SESSION['student_id']))
{
    header("Location: login.php");
}
?>

<h2>Welcome <?php echo $_SESSION['fullname']; ?></h2>

<a href="course_registration.php">Register Courses</a><br><br>

<a href="student_details.php">View Details</a><br><br>

<a href="logout.php">Logout</a>