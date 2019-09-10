<?php
// Indexed
$people = array('Kevin', 'Jeremy', 'Sara');
$ids = array(23, 55, 12);
$cars = ['Honda', 'Toyota', 'Ford'];
$cars[3] = 'Chevy';
$cars[] = 'BMW';
$people = array('Brad' => 35, 'Joe' => 32, 'William' => 37);
$ids = [22 => 'Brad', 44 => 'Jose', 63 => 'William'];
$people['Jill'] = 42;
$cars = array(array('Honda', 20, 10), array('Toyota', 30, 20), array('Ford', 23, 12));
echo $cars[1][1];
?>