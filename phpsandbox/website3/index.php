<?php
   $name = $_POST['name'];
   $email = $_POST['email'];
   $message = $_POST['message'];

   $msg = '';
   $msgClass = '';

   if(!empty($name) && !empty($email) && !empty($message)) {
        echo 'PASSED';
        if(filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            $msg = 'Please enter a valid email';
            $msgClass = 'alert-danger';
        } else {
            $toemail = 'ilia_iliev94@abv.bg';
            $subject = 'Contact Request From '.$name;
            $body = '<h2>Contact Request<h2>
                    <h4>Name</h4><p>'.$name.'</p>
                    <h4>Email</h4><p>'.$email.'</p>
                    <h4>Message</h4><p>'.$message.'</p>';

            $headers = "MIME-Version: 1.0" ."\r\n";
            $headers .= "Content-Type:text/html;charset=UTF-8" . "\r\n";

            $headers .= 'From: ' .$name. '<'.$email. '>' . '\r\n';

            if(mail($toemail, $subject, $body, $headers)) {
                $msg = 'Your Email has been sent';
                $msgClass = 'alert-success';
            } else {
                $msg = 'Your Email was NOT sent';
                $msgClass = 'alert-danger';
            }
        }
   } else {
        $msg = 'Please fill in all fields';
        $msgClass = 'alert-danger';
   }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Contact us</title>
        <link rel="stylesheet" href="bootstrap.min.css">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">My Website</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
        <div class="container">
            <?php if($msg != ''): ?>
                <div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
            <?php endif; ?>
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" value="<?php echo isset($_POST['name']) ? $name : '' ?>">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control" value="<?php echo isset($_POST['email']) ? $email : '' ?>">
                </div>
                <div class="form-group">
                    <label>Message</label>
                    <textarea name="message" class="form-control"><?php echo isset($_POST['message']) ? $message : '' ?></textarea>
                </div>
                <br>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </body>
</html>