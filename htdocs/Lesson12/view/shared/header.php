<?php 
 if(isset($_COOKIE['username'])) {
    $username = $_COOKIE['username'];
 }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;900&display=swap" rel="stylesheet">
    <title><?php echo $title ?></title>
</head>
<nav>
    <a href="index.html"><img class="icon"src="image/u_500x500.jpeg" alt="" width="40px" height="40px"></a>
</nav>

<!-- .signup {
    font-size: 1rem;
    display: grid;
    grid: auto-flow /800px;
    row-gap: .5em;
    padding: .5em;
    margin: .5rem auto 0 auto;
    max-width: 50%;
    align-items: center;
    color: white;
} -->