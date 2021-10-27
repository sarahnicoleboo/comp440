<!DOCTYPE html>
<html>
	<head>
		<title>idk</title>
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
        print "<p>Connection succeeded</p>";
        //  var_dump($db);
              error_log("Hi I am an error and db username is " . $dbuser . "\r\n");     
    	}

	$newUsername = $_POST["username"];
	$newPassword = $_POST["password"];
	$newFirstName = $_POST["firstName"];
	$newLastName = $_POST["lastName"];
	$newEmail = $_POST["email"];

	//$insertQ = "INSERT INTO user (username, password, firstName, lastName, email) VALUES (?), (?), (?), (?), (?)";
	$insertQ = "INSERT INTO user (username) VALUES (?)";

	$stmt = $db->prepare($insertQ);
	//$stmt->bind_param("sssss", $newUsername, $newPassword, $newFirstName, $newLastName, $newEmail);
	$stmt->bind_param("s", $newUsername);
	$stmt->execute();
	?>
	</body>
</html>
