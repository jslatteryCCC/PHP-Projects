<?php
require('db.php');

$query = 'SELECT * FROM courses';
$statement = $db->prepare($query);
$statement->execute();
$courses = $statement->fetchAll();
$statement->closeCursor();

?>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="main.css">
    </head>
    <body>
        <table class="crs_tbl">
            <tr>
                <th>Course ID</th>
                <th>Title</th>
                <th>Credit Hrs.</th>
                <th>Description</th>
                <th>Prerequisites</th>
            </tr>
            <?php foreach ($courses as $courses) : ?>
                <tr>
                    <td class="crs_id"><?php echo $courses['course_id'] ?></td>
                    <td class="crs_title"><?php echo $courses['title'] ?></td>
                    <td class="crs_hours"><?php echo $courses['credit_hrs'] ?></td>
                    <td class="crs_desc"><?php echo $courses['description'] ?></td>
                    <td class="prereq"><?php echo $courses['prerequisites'] ?></td>
                </tr>
                <?php endforeach;?>
        </table>
        
        <script src="" async defer></script>
    </body>
</html>