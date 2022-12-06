<?php
    session_start();
    $title = "Slatts U.";
    $_session_user = $_SESSION['username'];
    $_session_pass = $_SESSION['password'];
    include 'view/shared/header.php';

?>
<body>
    <div class="main_container">
        <?php 
            echo "<h1 class =\"login_status\">";
            if(isset($_SESSION['login_status'])){
                if($_SESSION['login_status'] == NULL || !$_SESSION ['login_status']) {
                    echo "Login Process Failed.";
                }
                else if($_SESSION['login_status'] == TRUE){
                    echo "Welcome $_session_user.<br>";
                    echo "Your password is $_session_pass.";
                    }
                else if($_SESSION['login_status'] == FALSE)
                    echo "Login Unsuccessful. Please try again.";
            }
            echo "</h1>"
        ?>
    </div>
<?php include "view/shared/footer.php"; ?>