<?php
 $connect=mysqli_connect("mysql15.000webhost.com","a4613629_ashwin","myaz290d","a4613629_post");
$r=mysqli_query($connect,"SELECT MAX(id) as max FROM POST");
$row=mysqli_fetch_array($r);
$max_id=$row['max'];
                
?>	