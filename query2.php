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
	   //$date = $_POST['date2'];
	   $query = "CREATE VIEW daView AS SELECT created_by, count(*) AS c FROM blogs 
		WHERE pdate= .date();
		GROUP BY created_by;";
	   $result = mysqli_query($db, $query);
	   $query1 = "SELECT created_by FROM daView WHERE c = (SELECT max(c) FROM daView);";
	   $result1 = mysqli_query($db, $query1);
	   ?><div>2. List the user who posted the most number of blogs on 10/10/2021; if there is a tie,
		list all the users who have a tie.</div> <?php
	   while($row=$result1->fetch_assoc())
	   { ?>
	      <div class="blog-title"><?php echo $row['created_by'];?></div>
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