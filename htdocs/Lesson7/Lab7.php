<?php
    $lifetime = 84000;
    session_set_cookie_params($lifetime, '/');
    session_start();
    $_SESSION['fullname'] = 'Joseph Slattery';
    $_SESSION['courseid'] = "IT-2600";
    $_SESSION['favlanguage'] = "PHP";
    $_SESSION['favoperatingsystem'] = "Windows 7";

    $languages = ["PHP", "ASP.NET", "Ruby", "Java", "Scala", "JavaScript","Python"];
    $percentages = [
        'Python' => 1.4,
        'ASP.NET'=> 8.3,
        'Ruby' => 5.2,
        'PHP' => 78.9,
        'Java' => 3.6,
        'Scala' => 2.0
    ];


?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Play:wght@700&family=Russo+One&display=swap"
              rel="stylesheet">
        <link rel="stylesheet" href="main.css">
        <title>Document</title>
    </head>
    <body>
        <nav>
            <div>
                <a href="Lab7favorites.php">Link to Lab7favorites</a>
            </div>
        </nav>
        <p class="top">Popular programming languages include: </p>
        <?php sort($languages);
            foreach ($languages as $l) {
            echo $l . "<br>";
        }
        echo '<br>';
         ?>
        <table>
            <tr>
                <th>Language</th>
                <th> &nbsp;%Usage</th>
            </tr>
            <?php arsort($percentages);
                foreach ($percentages as $l => $r) {
                    $r = number_format($r, 1, '.', ',');
                    echo "<tr>
                            <td>$l</td>
                            <td>$r%</td>
                          </tr>";
            }
            ?>
        </table>
    </body>
</html>
