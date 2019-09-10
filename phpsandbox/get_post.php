<?php
    //if(isset($_GET['name'])){
        //echo htmlentities($_GET['name']);
    //}
    if(isset($_GET['name'])){
       // print_r($_POST);
       $name = htmlentities($_GET['name']);
       //echo $name;
    }
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>My Website</title>
    </head>
    <body>
        <form method="GET" action="get_post.php">
            <div>
                <label>Name</label><br>
                <input type="type" name="name">
            </div>
            <div>
                <label>Email</label><br>
                <input type="text" name="email">
            </div>
            <input type="submit" value="Submit">
        </form>
        <ul>
            <li>
                <a href="get_post.php?name=Ilia">Ilia</a>
            </li>
            <li>
                <a href="get_post.php?name=Steve">Steve</a>
            </li>
        </ul>
        <?php echo "$name's profile"; ?>
    </body>
</html>