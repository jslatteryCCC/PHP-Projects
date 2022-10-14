<?php 

$dsn = 'mysql:host=localhost;dbname=it1150';
$username = 'root';
$password = '';

try{
    $db = new PDO($dsn, $username, $password);
    echo '<div class="db_msg_div"><p class="db_msg">Connection to database successful</p></div>';
}catch (PDOException $e){
    $error_message = $e->getMessage();
    include('db_error.php');
    exit();
}
?>