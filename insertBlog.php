<!DOCTYPE html>
<?php
   $dbuser = "comp440";
   $dbpass = "pass1234";
   $db = mysqli_connect("127.0.0.1", $dbuser, $dbpass, "comp440project");
   session_start();
   $username = $_SESSION['username'];
   $subject = $_POST['subject'];
   $description = $_POST['description'];
   $tags = $_POST['tags'];
   $array=explode(',',$tags);

   $query = mysqli_query($db, "CALL Insert_Blog_Procedure('$subject', '$description', '$username');");
   $query1 = "SELECT max(blogid) FROM blogs;";
   $result = mysqli_query($db, $query1);
   while ($therow = mysqli_fetch_row($result)){
      print($therow[0]);
      $id = $therow[0];
   }

   $num = 0;
   foreach($array as $row){
      print($array[$num]);
      $insertQ = "INSERT INTO blogstags (blogid, tag) VALUES (?, ?)";
      $stmt = $db->prepare($insertQ);
      $stmt->bind_param("ss", $id, $array[$num]);
      $stmt->execute();
      $num = $num + 1;
   }
   
   header("Location: /newsFeed.php");
?>