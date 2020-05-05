<h1>Day là News</h1>
<?php
 echo "<pre>";
 print_r($data) ;
 echo "</pre>";
 

 while($row = mysqli_fetch_array($data["SV"]))
 {
    echo "<pre>";
    print_r($row) ;
    echo "</pre>";
 }

 while($row = mysqli_fetch_array($data["SV"]))
 {
     echo $row["hoten"];
     echo "<br>";
 }
?>