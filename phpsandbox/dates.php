<?php
    //echo date('d');
    //echo date('m');
    //echo date('Y');
    //echo date('l');
    //echo date('Y/m/d');
    //echo date('m-d-Y');

    //echo date('h');
    //echo date('i');
    //echo date('s');
    //echo date('a');

    //Set Time Zone
    //date_default_timezone_set('America/New_York');
    
    //echo date('h:i:sa');

    $timestamp = mktime(10, 14, 54, 9, 10, 1981);

    //echo date("m/d/Y h:i:sa", $timestamp);

    $timestamp2 = strtotime('7:00pm March 22 2016');
    $timestamp3 = strtotime('tomorrow');
    $timestamp4 = strtotime('next Saturday');
    $timestamp5 = strtotime('+2 Days');

    echo date('m/d/Y h:i:sa', $timestamp5);
?>