<!DOCTYPE html>
<?php
   $dbuser = "comp440";
   $dbpass = "pass1234";
   $db = mysqli_connect("127.0.0.1", $dbuser, $dbpass, "comp440project");
   session_start();
   $username = $_SESSION['username'];
   $subject = $_POST['subject'];
   $description = $_POST['description'];

   $query = mysqli_query($db, "CALL Insert_Blog_Procedure($subject, $description, $username);");
?>