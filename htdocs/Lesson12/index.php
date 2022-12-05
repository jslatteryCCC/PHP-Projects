<?php
    $title = "Slatts U.";
    include 'view/shared/header.php';
    session_start();
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
                    echo "Welcome $username.";
                    }
                else if($_SESSION['login_status'] == FALSE)
                    echo "Login Unsuccessful. Please try again.";
            }
            echo "</h1>"
        ?>
    </div>
<?php include "view/shared/footer.php"; ?>