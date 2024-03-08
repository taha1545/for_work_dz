<?php
   include("database.php");

   try{
       $sql = " SELECT * FROM `gig`";
       $res=mysqli_query($conn,$sql);
       if(mysqli_num_rows($res)>0){
        while ($row = mysqli_fetch_assoc($res)) {
            $type=$row["text"];
            echo "<p > $type</p>";
            echo " <style>
            p {
                color: blue; /* Change the text color */
                font-size: 20px; /* Change the font size */
                font-weight: bold; /* Make the text bold */
                text-align: center; /* Center the text */
                padding: 10px; /* Add padding around the text */
                border: 1px solid black; /* Add a border around the text */
            }
        </style>";
        }
       }
   }catch(mysqli_sql_exception $e){
       echo "There is a problem: " . $e->getMessage();
   
   }
?>