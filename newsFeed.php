 <!DOCTYPE html>
 <html lang="en">
     <head>
        <meta charset="UTF-8">
        <title>Database Design</title>
        <link rel="stylesheet" href="styles.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script>
	   function postButtonClicked()
	   {
	      window.location.href="postBlog.php";
	   }

	   function init()
	   {
	      postButton.addEventListener("click", postButtonClicked);
	   }

	   window.addEventListener("DOMContentLoaded", init);
	</script>
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

	   session_start();

	   $query = "SELECT blogid, subject FROM blogs ORDER BY pdate DESC;";
	   $result = mysqli_query($db, $query);
	?>

        <div class="wrapper">
	<div class="container">
	    <p>Welcome <?php echo $_SESSION['username']; ?></p>
	    <input type="button" class="btn" id="postButton" value="Post a blog">
	    <br /><br />
	    <p> Blogs news feed </p>
	</div>
	<?php
	   while($rows=$result->fetch_assoc())
	   {
	?>
	<div class="container">
      	    <form method="get" action="viewBlog.php">
 	        <input type ="hidden" name = "blogid" value="<?php echo $rows['blogid']; ?>">
		<?php $_SESSION['blogid'] = $rows['blogid']; ?>
		<input type="submit" value="<?php echo $rows['subject'];?>">
	    </form>
	</div>
        </div>
	<?php
	   }
	?>
     </body>
</html>