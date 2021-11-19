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

    	   if ( ! $db ) // connection failed
   	   {
       	      print "<p>Could not connect to database</p>";
       	      print ( mysqli_connect_error() );
       	      print "</body></html>";
              mysqli_close($db);
              die();  // go no further than this line!
   	   }
    	   else
    	   {
           //print "<p>Connection succeeded</p>";
           //var_dump($db);
           error_log("Hi I am an error and db username is " . $dbuser . "\r\n");     
    	   }

	   $query = "SELECT subject, created_by, pdate, description FROM blogs ORDER BY pdate DESC;";
	   $result = mysqli_query($db, $query);
	?>

        <div class="wrapper">
	<div class="container">
	    <input type="button" class="btn" id="postButton" value="Post a blog">
	    <br /><br />
	    <p> Welcome to your News Feed! </p>
	</div>
	<?php
	   while($rows=$result->fetch_assoc())
	   {
	?>
	<div class="container">
	<div>Blog: <?php echo $rows['subject'];?></div>
	<div>Created By: <?php echo $rows['created_by'];?></div>
	<div>Posted On: <?php echo $rows['pdate'];?></div>
	<div><?php echo $rows['description'];?></div>
	<br />
	<input type="button" class="btn" id="commentButton" value="Leave a comment">
	</div>
        </div>
	<?php
	   }
	?>
     </body>
</html>