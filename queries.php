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
           <div>
	      <p>1. List all the blogs of user X, such that all the comments are positive for these blogs.</p>
	   </div>
	      <form method="get' action="">
		<label class="input-label">Enter the username:</label>
		<input type="text" id="username1" placeholder="Username" class="input">
	        <input type="button" class="btn" id="submit1" value="Submit query">
	      </form>
           <br /><br />
           <div>
	      <p>2. List the user who posted the most number of blogs on 10/10/2021; if there is a tie,
		list all the users who have a tie.</p>
	   </div>
	      <input type="button" class="btn" id="submit2" value="Submit query">
	   <br /><br />
           <div>
	      <p>3. List the users who are followed by both X and Y. Usernames X and Y are inputs
		from the user.</p>
	   </div>
	      <form method="get' action="">
		<label class="input-label">Enter the username for X:</label>
		<input type="text" id="username3X" placeholder="Username" class="input">
	        <label class="input-label">Enter the username for Y:</label>
		<input type="text" id="username3Y" placeholder="Username" class="input">
	        <input type="button" class="btn" id="submit3" value="Submit query">
	      </form>
        </div>
     </div>
  </body>
  </html>