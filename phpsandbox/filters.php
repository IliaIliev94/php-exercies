<?php
   /*  if(filter_has_var(INPUT_POST, 'data')) {
        echo 'Data found';
    } else {
        echo 'No data';
    } */

    /* if(filter_has_var(INPUT_POST, 'data')) {
        $email = $_POST['data'];

        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        echo $email. '<br>';
        if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo 'Email is valid';
        } else {
            echo 'Email is not valid';
        }
    } */

    /* $var = $_POST['data'];

    if(filter_var($var, FILTER_VALIDATE_INT)) {
        echo $var. ' is a number';
    } else {
        echo $var. ' is NOT a number';
    } */

    //$var = '<script>alert(1)</script>';
    //echo $var;
    //echo filter_var($var, FILTER_SANITIZE_SPECIAL_CHARS);
    //var_dump(filter_var($var, FILTER_SANITIZE_NUMBER_INT));

   /*  $filters = array(
        "data" => FILTER_VALIDATE_EMAIL,
        "data2" => array(
            "filter" => FILTER_VALIDATE_INT,
            "options" => array(
                "min_range" => 1,
                "max_range" => 100
            )
        )
    );

    print_r(filter_input_array(INPUT_POST, $filters)); */
    $arr = array(
        "name" => "ilia iliev",
        "age" => "130",
        "email" => "ilia_iliev94@abv..bg"
    );

    $filters = array(
        "name" => array(
            "filter" => FILTER_CALLBACK,
            "options" => "ucwords",
        ),
        "age" => array(
            "filter" => FILTER_VALIDATE_INT,
            "options" => array(
                "min_range" => 1,
                "max_range" => 120
            )
        ),
        "email" => FILTER_VALIDATE_EMAIL
    );
    print_r(filter_var_array($arr, $filters));
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
    <input type="text" name="data">
    <input type="text" name="data2">
    <button type="submit">Submit</button>
</form>