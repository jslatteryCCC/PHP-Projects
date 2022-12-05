<?php
 $title = "Login:";
 include 'view/shared/header.php';
?>
<body>
    <div class="main_container">
        
        <div class="login_form_container">
                <form class="signup" action="controllers/login_controller.php" method="post">
                    <label for="user_id">Username: </label>
                    <input type="text" name="user_id" id="user_id" required><br>
                    <label for="password">Password: </label>
                    <input type="password" name="password" id="password" 
                    pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
                    title="Must contain at least one number and one uppercase and lowercase letter, 
                    and at least 8 or more characters" required><br>
                    <button class="submit" type="submit">Login!</button>
                    <button class="goback" type="button" onclick="window.location.href='index.html'">Go Back</button>
                    <div id="message">
                        <h3>Password must contain the following:</h3>
                        <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                        <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                        <p id="number" class="invalid">A <b>number</b></p>
                        <p id="length" class="invalid">Minimum <b>8 characters</b></p>
                    </div>
                </form>
        </div>
        <script src="script/validate.js"></script>
    </div>

<?php include "view/shared/footer.php"; ?>
