<?php 
ob_start();
session_start();

$username = $_SESSION['username'];
?>

<html>
    <head></head>
    <body>
        <h2 style="text-align: center;">Hello <?php echo $username; ?></h2>
    </body>
</html>

<?php ob_end_flush(); ?>