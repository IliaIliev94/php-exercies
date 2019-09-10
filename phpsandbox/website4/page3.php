<?php
    session_start();

    print_r($_SESSION);

    $name = isset($_SESSION['name']) ? $_SESSION['name'] : 'Guest';
    $email = $_SESSION['email'];
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>PHP Sessions</title>
    </head>
    <body>
        <h5>Hello <?php echo $name; ?></h5>
    </body>
</html>