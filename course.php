<?php
session_start();
include 'db.php';

if(isset($_POST['register_course']))
{
    $student_id = $_SESSION['student_id'];
    $course_id = $_POST['course_id'];

    $sql = "INSERT INTO registrations(student_id,course_id)
            VALUES('$student_id','$course_id')";

    mysqli_query($conn,$sql);

    echo "Course Registered Successfully";
}
?>

<form method="POST">

<select name="course_id">

<?php
$result = mysqli_query($conn,"SELECT * FROM courses");

while($row = mysqli_fetch_assoc($result))
{
?>
<option value="<?php echo $row['id']; ?>">
    <?php echo $row['course_name']; ?>
</option>
<?php
}
?>

</select>

<button name="register_course">
    Register Course
</button>

</form>