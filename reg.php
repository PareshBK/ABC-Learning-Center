<?php

$con = mysqli_connect("projects.lithan.net","INC0206","INC0206","inc0206");
if (!$con)
  {
  die('Could not connect: ' . mysqli_error());
  }
$name=$_POST['name'];
$email= $_POST['email']; // Fetching Values from URL.
$course=$_POST['course'];

$email = filter_var($email, FILTER_SANITIZE_EMAIL); // Sanitizing email(Remove unexpected symbol like <,>,?,#,!, etc.)
$result = mysqli_query($con,"INSERT INTO form(name,email,course) values ('$name', '$email', '$course')");

if($result){

mysqli_close ($con);}
?>
