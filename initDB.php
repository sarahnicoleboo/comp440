<?php 
    $mysql_host = "127.0.0.1";
    $mysql_database = "comp440project";
    $mysql_user = "comp440";
    $mysql_password = "pass1234";
    # MySQL with PDO_MYSQL  
    $db = new PDO("mysql:host=$mysql_host;dbname=$mysql_database", $mysql_user, $mysql_password);

    $query = file_get_contents("university-1.sql");

    $stmt = $db->prepare($query);

    if ($stmt->execute()){
         echo "Success";
    }else{ 
         echo "Fail";
    }
?>