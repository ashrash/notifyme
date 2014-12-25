<?php
$first_id=$_POST['last_id_in_app'];
$connect=mysqli_connect("mysql15.000webhost.com","a4613629_ashwin","myaz290d","a4613629_post");
	if (!mysqli_connect_errno()) 
	{		
			$result= mysqli_query($connect,"SELECT * FROM POST ORDER BY id DESC");
			while($row=mysqli_fetch_array($result)) 
			{
				if($id_no= $row['id'] > $first_id)
                                {
								$user=$row['username'];
								$date=$row['pdate'];
								$msg=$row['message'];
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
                                 else if($id_no == $first_id)
                                     {echo "no new data";
                                      break;}
	  		}
			
		
	}
	mysqli_close($connect);
?>				