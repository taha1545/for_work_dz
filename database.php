<?php
// for connect data base
try {
    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "acount";
    $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
      if($conn){
        echo"you are connected". "<br>";
      }
    if (!$conn) {
        throw new Exception("Failed to connect to MySQL: " . mysqli_connect_error());
    }
} catch (Exception $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>