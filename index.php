  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Database Design</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
      $(document).ready(function(){
        $(".signup-form").hide();
        $(".signup").css("background","none");

        $(".login").click(function(){
          $(".signup-form").hide();
          $(".login-form").show();
          $(".signup").css("background","none");
          $(".login").css("background","#fff");
        });

        $(".signup").click(function(){
          $(".signup-form").show();
          $(".login-form").hide();
          $(".signup").css("background","#fff");
          $(".login").css("background","none");
        });

        $(".btn").click(function(){
          $(".input").val("");
        });
      });
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
  <div class="wrapper">
    <div class="header">
      <label class="header-title">Database Design</label>
      <br />
      <label class="header-sub">By: Sarah & Ale</label>
    </div>
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

          //here is where i need to get the input from html and put it into the database.
    ?>

    <div class="container">
      
      <div class="login">Log In</div>
      <div class="signup">Sign Up</div>
      
       <form class="signup-form" method="post" action='#'>
          <label class="input-label">Enter an email address:</label>
          <input type="text" id="email" placeholder="Email Address" class="input"><br />

          <label class="input-label">Enter your first name:</label>
          <input type="text" id="firstName" placeholder="First Name" class="input"><br />

          <label class="input-label">Enter your last name:</label>
          <input type="text" id="lastName" placeholder="Last Name" class="input"><br />

          <label class="input-label">Enter a username:</label>
          <input type="text" id="username" placeholder="Username" class="input"><br />

          <label class="input-label">Enter a password:</label>
          <input type="password" id="password" placeholder="Password" class="input"><br />

          <label class="input-label">Confirm password:</label>
          <input type="password" id="cpassword" placeholder="Password" class="input"><br />
          <!- this div is so we can check for matching password entries ->
          <div id="passwordCheck" class="input-label"> </div>
          <br />

          <div type="button" class="btn" id="regButton" value="Register">Create Account</div>
       </form>
      
      <form class="login-form" method="get" action='#'>
          <label class="input-label">Enter your username:</label>
          <input type="text" id="email" placeholder="Username" class="input"><br />
          <label class="input-label">Enter your password:</label>
          <input type="password" id="password" placeholder="Password" class="input"><br />
          <div class="btn">Log In</div>
          <span><a href="#">I forgot my username or password</a></span>
       </form>
      
    </div>
  </div>
  </html>
