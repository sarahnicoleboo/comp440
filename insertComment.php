<!DOCTYPE html>
<html lang="en">
     <head>
        <meta charset="UTF-8">
        <title>Database Design</title>
        <link rel="stylesheet" href="styles.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     </head>
<body>
<?php
   $dbuser = "comp440";
   $dbpass = "pass1234";
   $db = mysqli_connect("127.0.0.1", $dbuser, $dbpass, "comp440project");
   session_start();
   $username = $_SESSION['username'];
   $sentiment = $_POST['sentiment'];
   $description = $_POST['commentdes'];
   $blogid = $_POST['theID'];
   $poster = $_POST['user'];
   if ($username <> $poster) {
      $query = mysqli_query($db, "CALL Insert_Comment_Procedure('$sentiment', '$description', '$blogid', '$username');");
   }
   //header("Location: /viewBlog.php");
?>
</body>
</html>