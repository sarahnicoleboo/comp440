<!DOCTYPE html>
<html lang="en">
     <head>
        <meta charset="UTF-8">
        <title>Database Design</title>
        <link rel="stylesheet" href="styles.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     </head>
<body>
<div class="wrapper">
<div class="container">
<?php
   $dbuser = "comp440";
   $dbpass = "pass1234";
   $db = mysqli_connect("127.0.0.1", $dbuser, $dbpass, "comp440project");
   session_start();
   $id = $_GET['blogid'];
   $query = "SELECT * FROM blogs WHERE blogid = '$id';";
   $result = mysqli_query($db, $query);

   while($rows=$result->fetch_assoc())
   { ?>
      <div>Subject: <?php echo $rows['subject'];?></div>
      <div>Created By: <?php echo $rows['created_by'];?></div>
      <div>Posted On: <?php echo $rows['pdate'];?></div>
      <div><?php echo $rows['description'];?></div>
   <?php
   }

   $query = "SELECT * FROM blogstags WHERE blogid = '$id';";
   $result = mysqli_query($db, $query); ?>
   <p>Tags:</p>
   <?php
   while($rows=$result->fetch_assoc())
   { ?>
      <div><?php echo $rows['tag'];?></div>
   <?php
   }
?>
</div>
</div>
</body>
</html>