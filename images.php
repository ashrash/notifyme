<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Notify mE</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="CODE" content="">
  <meta name="Ashwin" content="">
 <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<style>
   body { 
  background: url("wallpaper.jpg") no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
    #hd
    {
        background-color: #333333;
    }

    </style>
</head>
<body>
	</br>
	</br>
	</br>
<?php

chdir('uploads');
foreach (glob("*.jpg") as $image) 
{
?>
	<center><img height="600" width="620" id="img" src=<?php echo 'uploads/'.$image; ?>></img></center> </br></br></br>
	<?php
}

?>
	</body>
</html>