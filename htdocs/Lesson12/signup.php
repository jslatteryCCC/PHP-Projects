<?php
 $title = "Sign Up!";
 include 'view/shared/header.php';




?>

<body>
    <div class="main_container">
        <div class="signup_form_container">
            <form class="signup" action="controllers/signup_controller.php" method="post">
                <label for="firstname">First Name: </label>
                <input type="text" name="firstname" id="firstname" required><br>
                <label for="lastname">Last Name: </label>
                <input type="text" name="lastname" id="lastname" required><br>
                <label for="email">Email: </label>
                <input type="text" name="email" id="email"required><br>
                <label for="password">Password: </label>
                <input type="password" name="password" id="password" 
                pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
                title="Must contain at least one number and one uppercase and lowercase letter, 
                and at least 8 or more characters" required><br>
                <button class="submit" type="submit">Sign Up!</button>
                <button class="goback" onclick="history.back()">Go Back</button>
                <div id="message">
                    <h3>Password must contain the following:</h3>
                    <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                    <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                    <p id="number" class="invalid">A <b>number</b></p>
                    <p id="length" class="invalid">Minimum <b>8 characters</b></p>
                </div>
            </form>
        </div>
    </div>
    <?php include "view/shared/footer.php"; ?>
    <script src="script/validate.js"></script>
