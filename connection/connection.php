<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$servername = "localhost";
$username = "root";
$password = "";
$database = "barbershop_db";

$connect = mysql_connect($servername, $username, $password);
mysql_select_db($database);
if(!$connect){
    die("<b>Could not connect at this time. Please try again later!</b>" . mysql_error());
}