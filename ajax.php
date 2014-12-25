<?php
$a[]    ="";
	$connect=mysqli_connect("mysql15.000webhost.com","a4613629_ashwin","myaz290d","a4613629_post");
// get the q parameter from URL
$q = $_REQUEST["q"];
$search=explode(" ",$q);
$qry1="SELECT * FROM POST";
			$result= mysqli_query($connect,$qry1);
$flag=0;
$c=0;
for($i=0;$i<strlen($q);$i++)
{
	if($q[$i] == ' ')
		$c++;
}

    while($row=mysqli_fetch_array($result)) 
{
				$user=$row['username'];
				$date=$row['pdate'];
				$msg=$row['message'];
            if($msg!="")
            {
                for($i=0;$i<=$c;$i++)
                {
					if($search[$i]!="")
					{
                    	if(strpos(strtolower($msg),strtolower($search[$i])) !== false)
                    	{
							$flag=1;
                        	echo "<blockquote>";
		                	echo "<h2><b>$user</b></h2>";
				        	echo "$msg";
				        	echo "<footer><i>$date</i></footer>";
				        	echo"</blockquote>";
                    	}
					}
                }
            }
	}
if($flag==0)
                echo "No results found!!!";
?>