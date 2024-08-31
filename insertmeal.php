<?php 
session_start();
$store=$_SESSION['selectedMeal'];
$name=$_SESSION['name'];

echo $store,$name;