<?php
$people = array('Brad' => 'brad@gmail.com', 'Jose' => 'jose@gmail.com', 'William' => 'william@gmail.com');

foreach($people as $person => $email){
    echo $person. ': ' .$email;
    echo '<br>';
}
?>