<?php
	
	$connect=mysqli_connect("mysql15.000webhost.com","a4613629_ashwin","myaz290d","a4613629_post");
	if (!mysqli_connect_errno()) 
	{		
			$pg=$_GET['page'];
			if($pg=="" || $pg=="1")
			{
				$page=0;
			}
			else
			{
				$page=($pg*10)-10;
			}
			$qry="SELECT * FROM POST ORDER BY id DESC LIMIT $page,10 ";
			$qry1="SELECT * FROM POST";
			$result= mysqli_query($connect,$qry);
			$res= mysqli_query($connect,$qry1);
			$c=mysqli_num_rows($res);
			$count=ceil($c/10);
	}
?>