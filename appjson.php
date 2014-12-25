<?php
$first_id=0;
$arr = array();
$connect=mysqli_connect("mysql15.000webhost.com","a4613629_ashwin","myaz290d","a4613629_post");
	if (!mysqli_connect_errno()) 
	{		
			$result= mysqli_query($connect,"SELECT * FROM POST ORDER BY id DESC");
			while($row=mysqli_fetch_array($result)) 
			{
				if($id_no= $row['id'] > $first_id)
                                {
								$arr[] = array('name' => $row['username'], 'time' => $row['pdate'],'msg' => $row['message'], 'id_no' => $row['id']);
								 }
                                 else if($id_no == $first_id)
                                    { echo "no new data";
                                      break;
									  }
			}
			$contentArr = str_split(json_encode($arr), 65536);
				foreach ($contentArr as $part) 
					{
						echo $part;
					}
	}
	mysqli_close($connect);
?>	