<?php
          if($stmt = $conn->query("SELECT * FROM contact  ORDER BY id DESC")) {
              $ctr = 0;
                
              while($r = $stmt->fetch_array(MYSQLI_ASSOC)) {  
             $ctr++;
               
               /*  $from = "2015-01-01";
         $to = "2015-02-06";
         if($stmt = $conn->query("SELECT * FROM contact WHERE doj BETWEEN $from AND $to ORDER BY id DESC")) {*/
 ?>

 <!-- here
 contact = is the database column from where we are fetching the data 
 DESC = data in descending order OR  latest data comes first just like instagram or facebook  -->