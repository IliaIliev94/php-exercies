<?php
//$output = substr('Hello', 1);
//echo $output;

//$output = strlen('Hello World');
//echo $output;

//$output = strpos('Hello World', 'o');
//echo $output;

//$output = strrpos('Hello Word', 'o');
//echo $output;

//$text = 'Hello World                   ';
//var_dump($text);

//$trimmed = trim($text);
//var_dump($trimmed);

//$output = strtoupper('Hello Word');
//echo $output;

/* $output = ucwords('hello word');
echo $output; */

$text = 'Hello World';
$output = str_replace('World', 'Everyone', $text);
echo $output;
?>