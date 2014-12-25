<?php
        $connect=mysqli_connect("mysql15.000webhost.com","a4613629_ashwin","myaz290d","a4613629_post");
	if (!mysqli_connect_errno()) 
	{		
                       
                        $r=mysqli_query($connect,"SELECT MAX(id) FROM POST");
                        $ro=mysqli_fetch_array($r);
                        echo  $ro['id'];
                        $query="SELECT * FROM POST WHERE id='$num'";
			$result= mysqli_query($connect,$query);
                        $row=mysqli_fetch_array($result);
			$user=$row['username'];
	      		$date=$row['pdate'];
	                $msg=$row['message'];
                        echo $resul;
         	
	                echo "<h2><b>$user</b></h2>";
                        echo "$msg";
                        echo "<footer><i>$date</i></footer>";
                    
                        echo '<a hre="">Like</a>';

                       
	  		   
                        
	}
	mysqli_close($connect);
?>