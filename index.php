<!DOCTYPE html>

<html>
	
	<head><meta charset="utf-8">
	<title>Example 2</title>
	</head>
	
	<body>
	    <p>Hello</p>

	    <?php

			$dbuser = "root";
			$dbpass = "wutang2218";

			$db = mysqli_connect("localhost", $dbuser, $dbpass, "refbookdb");

			if ( ! $db ) // connection failed
			{
				print "<p>Could not connect to database</p>";
				print ( mysqli_connect_error() );
				print "</body></html>";
				mysqli_close($db);
				die();	// go no further than this line!
			}
			else
			{
				print "<p>Connection succeeded</p>";
				//	var_dump($db);

				/*
					this is also a comment
				*/
	
				error_log("Hi I am an error and db username is " . $dbuser . "\r\n");			
	    }
	?>
	    
	    <form method="get" action="https://google.com/search">
	    	<label>Search keywords: <input type="text" name="q"></label>
	    	<input type="submit">
	    	<input type="reset">
	    </form>
	    
	    	
	</body>

</html>