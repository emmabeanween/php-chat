<?php 

require "connect.php";




$chatquery = "SELECT * FROM messages";
$result = mysqli_query($con, $chatquery);
while ($row = mysqli_fetch_assoc($result)){


// format the time stamp into hours and minutes
$timestamp = $row["time_stamp"];
$shortened_stamp = date("h:i", strtotime($timestamp));


// get the current time in hours and minutes
$date = date("H:i"); 
$current_time =  date('h:i', strtotime($date));

// get the minutes ago that the chat message was added
$minutes = (strtotime($current_time) - strtotime($shortened_stamp) )/ 60  ."m" ; 
if ($minutes > 60){

  $minutes = round((strtotime($current_time) - strtotime($shortened_stamp) )/ 3600, 0) ."h" ;



}





  echo "<div style='background-color: #d897c3; border: 0.5px solid maroon; padding: 10px;'><span style='color: red; margin-left: 10px;'> ".$row["username"]."</span>:&nbsp;&nbsp;".$row["content"]. "&ensp;&ensp;&ensp;<i>".$minutes." </i></div></br>";

}





?>