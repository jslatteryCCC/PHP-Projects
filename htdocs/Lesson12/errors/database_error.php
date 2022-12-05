<?php include '../view/header.php'; ?>
<main>
    <h1>Database Error</h1>
    <p>There was an error connecting to the database.</p>
    <p>Error message: <?php echo $error_message; ?></p>
    <p><a href="../index.html">Click Here</a> to return to Sign In. </p>
</main>
<?php include '../view/footer.php'; ?>