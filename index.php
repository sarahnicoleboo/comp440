<!DOCTYPE html>

<html>
	
	<head><meta charset="utf-8">
	    <title>COMP 440 Project</title>
	
	    <script>

	    //invoked when the button labeled Register is clicked
	    //checks to make sure password and confirmed passwords match
	    function regButtonClicked()
	    {
	        var passContents = password.value;
	        var cPassContents = cpassword.value;
	        if (passContents === cPassContents)
	        {
	            //do nothing
	        }
	        else
	        {
	            passwordCheck.innerHTML = "password entries should match";
	        }
	    }

	    //init function
	    function init()
	    {
	        //variables
	        username = document.getElementById("username");
	        password = document.getElementById("password");
	        cpassword = document.getElementById("cpassword");
	        email = document.getElementById("email");

	        //buttons
	        regButton = document.getElementById("regButton");

	        //event listeners
	        regButton.addEventListener("click", regButtonClicked);
	    }
	
	    window.addEventListener("load", init);
	    </script>
	</head>
	
	<body>
	    <p>COMP 440 Project Phase 1</p>
	    <?php
	        $dbuser = "comp440";
		$dbpass = "pass1234";

		$db = mysqli_connect("localhost", $dbuser, $dbpass, "comp440project");

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
	            error_log("Hi I am an error and db username is " . $dbuser . "\r\n");			
	    	}

	        //here is where i need to get the input from html and put it into the database.
	    ?>

	    <form method="get" action='#'>
	        <label> Enter username:
		    <input type="text" id="username">
		</label>
		<!- can add div later to insert duplicate username error ->
		<br /><br />

		<label>Enter password:
		    <input type="password" id="password">
		</label>
		<br /><br />

		<label>Confirm password:
		    <input type="password" id="cpassword">
		</label>
		<!- this div is so we can check for matching password entries ->
		<div id = "passwordCheck"> </div>
		<br />

		<label>Enter first name:
		    <input type="text" id="firstName">
		</label>
		<br /><br />

		<label>Enter last name:
		    <input type ="text" id="lastName">
		</label>
		<br /><br />

		<label>Enter email:
		    <input type ="text" id="email">
		</label>
		<!- can add div later to insert duplicate email error ->
		<br /><br />

		<input type="button" id="regButton" value="Register">
	    </form>	
	</body>

</html>