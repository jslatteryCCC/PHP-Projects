<!DOCTYPE html>
<html>
<head>
<style>
    * { font-family: Arial, Helvetica, sans-serif; }
    table { max-width: 900px; margin-left: auto; margin-right: auto; border-collapse: collapse; }
    td, th { border: 1px solid teal; padding: 4px; }
    th { background-color: teal; color: white; font-size: 1.1em; font-weight: bold; }
    table tr:first-child td { border: 0px; }
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

<a href="courses.php"><i class="fas fa-arrow-alt-circle-left"></i> Go Back</a>
<form action="addcourse-submit.php" method="post">
<p>
Course Id<br>
<input type="text" name="course_id" id="courseid">
</p>
<p>
Title<br>
<input type="text" name="title" id="title">
</p>
<p>
Credit Hrs<br>
<input type="text" name="credit_hrs" id="credits">
</p>
<p>
Description<br>
<input type="text" name="description" id="desc">
</p>
<p>
Prerequisites<br>
<input type="text" name="prerequisites" id="prereq">
</p>
<p>
    <input type="submit">
</p>
</form>
</body>
</html>