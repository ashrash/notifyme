<?php
$a[]    ="";
	$connect=mysqli_connect("mysql15.000webhost.com","a4613629_ashwin","myaz290d","a4613629_post");
	$qry1="SELECT * FROM POST";
			$result= mysqli_query($connect,$qry1);

// get the q parameter from URL
$q = $_REQUEST["q"];
$i=2;  
    while($row=mysqli_fetch_array($result)) 
{
				$user=$row['username'];
				$date=$row['pdate'];
				$msg=$row['message'];
            if($msg!="")
            {
                if(strpbrk($q,$msg) !== false)
                {
                    echo "<blockquote>";
		           echo "<h2><b>$user</b></h2>";
				   echo "$msg";
				   echo "<footer><i>$date</i></footer>";
				   echo"</blockquote>";
                }
            }
 
	}
?>