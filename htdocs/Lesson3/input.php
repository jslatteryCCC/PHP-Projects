<?php 
    $name = $_GET['name'];
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Week 2</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="main.css">
    </head>
    <body>
    </html>
        <form action="summary.php" method="post">
            <p>
            Name<br>
            <input type="input" id="name" name="name" placeholder="Name" value=<?php echo $name;?>>
            </p>
            <p>
            Major<br>
            <input type="input" id="major" name="major" placeholder="Major">
            </p>
            <p>
            Favorite Web Language<br>
            <input type="radio" id="html" name="fav_language" value="HTML">
            <label for="html">HTML</label><br>
            <input type="radio" id="css" name="fav_language" value="CSS">
            <label for="css">CSS</label><br>
            <input type="radio" id="javascript" name="fav_language" value="JavaScript">
            <label for="javascript">JavaScript</label><br>
            <input type="radio" id="PHP" name="fav_language" value="PHP">
            <label for="PHP">PHP</label>
            </p>
            <p>
            Development Evironment<br>
            <input type="checkbox" id="ide1" name="vscode" value="vscode">
            <label for="ide1"> Visual Studio Code</label><br>
            <input type="checkbox" id="ide2" name="brackets" value="brackets">
            <label for="vehicle2"> Brackets</label><br>
            <input type="checkbox" id="ide3" name="other" value="other">
            <label for="vehicle3"> Other</label> 
            <input type="text" id="othername" name="othername">
            </p>
            <button type="submit">Submit</button>
        </form> 
        <script src="" async defer></script>
    </body>
