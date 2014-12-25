<html>
<head>
	<title>Notify mE</title>
	
 <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/css/jasny-bootstrap.min.css">
<!-- Latest compiled and minified JavaScript -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js"></script>
</head>
<style>
	
    body { 
  background: url("wallpaper.jpg") no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
body
{
	padding-left:2em;
     
}
blockquote#w
    {
        background-color:white;
        width:60%;
    }
    h1,h2
    {
		text-align: center;
		
    }
	#f{
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
	color:#fff;
  	background-color:#c0c0c0;
}
	
    
   
</style>
<body>
</br>
</br>
<section id="sec">
<div id="post">
    </br>
 <form action="notify.php" id="pform" method="post" class="form-horizontal" >
    <div class="form-group">
        <label class="col-sm-3 control-label"><font color="white"  >Name</font></label>
        <div class="col-sm-5">
            <input type="text" class="form-control" name="user_name" placeholder="Enter your name.."/>
        </div>
    </div>
	<div class="form-group">
        <label class="col-sm-3 control-label"><font color="white" >Message</font></label>
        <div class="col-sm-5">
			<textarea class="form-control" rows="5" name="notify_msg" placeholder="Type your message (max 2500 characters)" ></textarea>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-5 col-sm-offset-3">
            <button type="submit" class="btn btn-success" id="submit">Post</button>
        </div>
    </div>
    </form>
</div>
</section>
<br>
<hr width="80%">
<br>
<h3><center><font color="white">Upload Image</font></center></h3>

<form action="fupload.php" method="post" enctype="multipart/form-data">
</br>
	<center><font color="white"><input type="file" name="fileToUpload" id="fileToUpload"></font></center>
	</br>
	</br>
	<center><input type="submit" value="Upload Image" name="submit" class="btn btn-success"></center>
</form>
</br>
<hr width="80%">
<h1 id="search"><font color="white"><a href="search.html" >Search</a></font></h1>
<h2 id="search"><font color="white"><a href="images.php" >Images</a></font></h2>
</br>
    <table>
<?php

	$connect=mysqli_connect("mysql15.000webhost.com","a4613629_ashwin","myaz290d","a4613629_post");
	if(!mysqli_connect_errno()) 
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
			while($row=mysqli_fetch_array($result)) 
			{
				$fl=0;
				$user=$row['username'];
				$date=$row['pdate'];
				$msg=$row['message'];
                $row=mysqli_fetch_array($result);
				
                	$user1=$row['username'];
					$date1=$row['pdate'];
					$msg1=$row['message'];
				
                
        ?>
                   	<table style="width:100%" id="msg">
                        <tr>
                    <td colspan="1"><blockquote id="w">
                        <?php echo "<h2><b>$user</b></h2>";echo "<p>$msg<p>";echo "<footer><i>$date</i></br></footer>";?>
                    </blockquote></td>
							
                    		<td colspan="2"><blockquote id="w">
                        		<?php echo "<h2><b>$user1</b></h2>";echo "<p>$msg1<p>";echo "<footer><i>$date1</i></br></footer>";?>
                    			</blockquote></td>
                            </tr>
                        </table>
                <?php
               
 
  			}
	}
    ?>
        </table>
    <ul class="pagination">
    <li><a href="notify2.php?page=<?php if($pg>1)echo $pg-1;?>"><span aria-hidden="true">&laquo;</span><span class="sr-only">Previous</span></a></li>
    <?php
	for($i=1;$i<=$count;$i++)
    {
	       ?>
                    
                    <li><a href="notify2.php?page=<?php echo $i;?>"><?php echo $i?></a></li>
                    
           <?php	
    }
    ?>
    <li><a href="notify2.php?page=<?php echo $pg+1;?>"><span aria-hidden="true">&raquo;</span><span class="sr-only">Next</span></a></li>
    </ul>
</body>
</html>