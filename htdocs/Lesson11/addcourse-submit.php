<?php
include('courses.php');
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
$course_id = filter_input(INPUT_POST, 'course_id');
$title = filter_input(INPUT_POST, 'title');
$credit_hrs = filter_input(INPUT_POST, 'credit_hrs');
$description = filter_input(INPUT_POST, 'description');
$prerequisites = filter_input(INPUT_POST, 'prerequisites');

$course_id_q = $conn->real_escape_string($course_id); 
$title_q = $conn->real_escape_string($title); 
$credit_hrs_q = $conn->real_escape_string($credit_hrs); 
$description_q = $conn->real_escape_string($description);
$prerequisites_q = $conn->real_escape_string($prerequisites);

$statement = $conn->prepare("INSERT INTO courses (course_id, credit_hrs, description, prerequisites, title) VALUES ('$course_id_q', $credit_hrs_q, '$description_q', '$prerequisites_q', '$title_q');");
$update_count = $statement->execute();
$_SESSION['update_count'] = $update_count;
mysqli_close($conn);
?>

