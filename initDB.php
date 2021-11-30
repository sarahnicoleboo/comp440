<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Database Design</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        function iButtonClicked()
    {
            window.location.href="initDB.php";
    }
    function returnToHomePage()
    {
        window.location.href="home.php";
    }

          function init() 
    {
        initButton.addEventListener("click", iButtonClicked);
        returnHomepageButton.addEventListener("click", returnToHomePage);

    }

          window.addEventListener("DOMContentLoaded", init);
    </script>
  </head>
  <body>

<?php 
    $mysql_host = "127.0.0.1";
    $mysql_database = "comp440project";
    $mysql_user = "comp440";
    $mysql_password = "pass1234";
    # MySQL with PDO_MYSQL  
    $db = new PDO("mysql:host=$mysql_host;dbname=$mysql_database", $mysql_user, $mysql_password);

    //$query = file_get_contents("university-1.sql");
    $query = file_get_contents("ProjDB.sql");

    $stmt = $db->prepare($query);

    if ($stmt->execute()){
         //echo "Success";
    }else{ 
         echo "Fail";
    }
?>


  <div class="wrapper">
    <div class="header">
      <label class="header-title">Database Design</label>
      <br />
      <label class="header-sub">By: Sarah & Ale</label>
    </div>

    <div class="container">
      <div class="home-style">
        <label id="welcome-sign">Welcome to the Home Page!</label>
	<div style='color: purple;'> Success </div>
        <input type="button" class="btn" id="initButton" value="Initialize DB">
        <input type="button" class="btn" id="returnHomepageButton" value="Return to HomePage">
      </div>
    </div>
    
  </div>
</body>
  </html>
