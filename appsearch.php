<?php
$word=$_POST['search_word'];
$connect=mysqli_connect("mysql15.000webhost.com","a4613629_ashwin","myaz290d","a4613629_post");
	if (!mysqli_connect_errno()) 
	{		
			$result= mysqli_query($connect,"SELECT * FROM POST ORDER BY id DESC");
			while($row=mysqli_fetch_array($result)) 
			{
				
				$msg=$row['message'];
				if(strpos($msg,$word) !== false)
				{
					$user=$row['username'];
					$date=$row['pdate'];
					$id_no=$row['id'];
					echo $id_no;
					echo "line-limit";
					echo $user;
					echo "line-limit";
					echo $msg;
					echo "line-limit";
					echo $date;
					echo "line-limit";
				 }
				 else
					  break;
	  		}
			
		
	}
	mysqli_close($connect);
?>		