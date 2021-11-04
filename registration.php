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
        //print "<p>Connection succeeded</p>";
        //  var_dump($db);
              error_log("Hi I am an error and db username is " . $dbuser . "\r\n");     
    	}

	$newUsername = $_POST["username"];
	$newPassword = $_POST["password"];
	$newFirstName = $_POST["firstName"];
	$newLastName = $_POST["lastName"];
	$newEmail = $_POST["email"];

	//here i'm gonna check for duplicate username and email
	$query = "SELECT username, email FROM user;";
	$result = mysqli_query($db, $query);

	while ($row = mysqli_fetch_row($result))
	{
	    if($row[0] == $newUsername) //if the username is already in the database
	    {
		header("Location: /registrationFail.php?flag1=true");
	    }

	    if($row[1] == $newEmail) //if the email is already in the database
	    {
	        header("Location: /registrationFail.php?flag2=true");
	    }

	}

	$insertQ = "INSERT INTO user (username, password, firstName, lastName, email) VALUES (?, ?, ?, ?, ?)";

	$stmt = $db->prepare($insertQ);
	$stmt->bind_param("sssss", $newUsername, $newPassword, $newFirstName, $newLastName, $newEmail);
	$stmt->execute();
	?>

	<p>Registration successful</p>
	</body>
</html>
