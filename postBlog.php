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
	   session_start();
	?>
        <div class="wrapper">
	   <div class="container">
	      <form method="post" action="insertBlog.php">
	         <label class="input-label">Enter a blog subject:</label>
		 <input type="text" id="subject" name="subject" placeholder="Subject" required><br />

	         <label class="input-label">Enter a blog description:</label>
		 <input type="text" id="description" name="description" placeholder="Description" required><br />

		 <input type="submit" name="submit" id="postButton" value="Post">
	      </form>
	   </div>
	</div>
     </body>
</html>