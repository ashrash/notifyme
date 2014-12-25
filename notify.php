<html>
<head>
	<title>Notifying</title>
</head>

<body>
<?php
	$connect=mysqli_connect("mysql15.000webhost.com","a4613629_ashwin","myaz290d","a4613629_post");
	if (mysqli_connect_errno()) 
	{
  			echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}		
        date_default_timezone_set('Asia/Kolkata');
        $dat= date("F j, Y, g:i a");		
	$user=mysqli_real_escape_string($connect,$_POST['user_name']);
	$msg=mysqli_real_escape_string($connect,$_POST['notify_msg']);
	$res="INSERT INTO POST(pdate,username,message) VALUES ('$dat','$user','$msg')";			
    mysqli_query($connect,$res);
	include("index.html");

?>
</body>
</html>	