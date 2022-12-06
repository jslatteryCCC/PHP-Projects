<!-- require my models 

get the action out of the post 

figure out what the action is 
login a user 
return the index.php file showing the logged in user

-->
<?php 
require('../models/db.php');
require('../models/users.php');
session_start();

$user_id = filter_input(INPUT_POST, 'user_id');
$password = filter_input(INPUT_POST, 'password');
if($user_id == NULL || $password == NULL) {
    $error = "Invalid information entered. Please try again.";
    include('../errors/error.php');
} else {
    $user_id = strtolower($user_id);
    if (validate_login($user_id, $password)) {
        setcookie('username', $user_id, 0, '/');
        $_SESSION["login_status"] = TRUE;
        $_SESSION["username"] = $user_id;
        $_SESSION["password"] = $password;
        header("Location: ../index.php");
    } else {
        $_SESSION["login_status"] = FALSE;
        header("Location: ../index.php");
    }
}
?>