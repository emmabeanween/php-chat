
<?php



require "connect.php";
session_start();
ob_start();

if (!$_SESSION["username"])
{

 header("Location: startchat.php");
}
// if session username
echo " <i>Welcome to the chat,</i> <span style='font-style: bold; color: navy; font-size: 15px;'>".$_SESSION["username"]."!</span> ";
echo "<a href='endchat.php'>leave chat</a>";

if (isset($_POST["submit"])){

	// allow blank messages to be sent
$message = $_POST["message"];
$time_stamp  = date("H:i");
$addquery = "INSERT INTO messages(`username`, `content`, `time_stamp`) VALUES('".$_SESSION["username"]."', '".$message."', '".$time_stamp."')";
if ( mysqli_query($con, $addquery)) {

      // do not echo anything
}

}



?>




<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body style=" background-color: #c5d2e8;">
    
	<div style="overflow-y: auto; width: 500px; height: 400px; background-color: lightskyblue; margin-top: 100px;
	margin-left: 400px; padding: 10px; border: 3px solid black; box-shadow: 5px 10px #888888;" id="messageList"></div>
     <form method="POST" action="">
	<input style="margin-left: 410px; margin-top: 50px; width: 430px; height: 30px; font-size: 20px; background-color: #d897c3;" type = "text" name="message" >
	<input type="submit" name="submit" value="send" style="width: 80px; border-radius: 20%; height: 35px; background-color: lightskyblue; font-size: 16px; border: 0.5px solid gray;">
</form>
		







<div id="show"></div>

	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			setInterval(function () {
				$('#messageList').load('loadchat.php')
			}, 1000);
		});
	</script>





</body>
</html>