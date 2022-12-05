<?php 
require('../models/db.php');
require('../models/users.php');

$firstname = filter_input(INPUT_POST, 'firstname');
$lastname = filter_input(INPUT_POST, 'lastname');
$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');
if($firstname == NULL || $lastname == NULL || $email == NULL || $password == NULL) {
    $error = "Invalid information entered. Please try again.";
    include('../errors/error.php');
} else {
    $addUsername = substr($firstname, 0, 1) . '.' . $lastname;
    $addUsername = &strtolower($addUsername);
    add_user($addUsername, $email, $password);
    setcookie('username', $addUsername, 0, '/');
    header("Location: ../login.php");
}
?>