<?php
$num = 5;

if($num === 5){
    //echo '5 passed';
}
$favColor = 'purple';

switch($favColor){
    case 'red':
        echo 'Your favourite color is red';
        break;
    case 'blue':
        echo 'Your favorite color is blue';
        break;
    case 'green':
        echo 'Your favourite color is green';
        break;
    default:
        echo 'Your favourite color is something else';

}
?>