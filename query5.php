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
	   $query = "SELECT distinct posted_by FROM comments WHERE posted_by NOT IN
			(SELECT posted_by FROM comments WHERE sentiment = 'positive');";
	   $result = mysqli_query($db, $query);
	   ?><div>5. Display all the users who posted some comments, but each of them is negative.</div> <?php
	   while($row=$result->fetch_assoc())
	   { ?>
	      <div class="blog-title"><?php echo $row['posted_by'];?></div>
	   <?php
	   }
	?>
        <form method="post" action="queries.html">
        <input type="submit" class="btn" id="returnQueriesButton" value="Return to Queries Page">
        </form>
      </div>
   </div>
</body>
</html>