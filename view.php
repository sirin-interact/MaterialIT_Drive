
<html>
 <meta charset="utf-8"/>
    <title>Material IT Public Drive Uploader</title>

<?php

$host = 'localhost';
$user = 'seunghalee14';
$pw = 'seunghalee14@';
$dbName = 'seunghalee14';
	$mysqli = new mysqli($host, $user, $pw, $dbName);
	

    if(mysqli_connect_errno())
        {
            echo "DB connect error";
        
            exit;
		}
    
   $sql = "select * from a where num=".$_GET['num'];
       $res = $mysqli->query($sql);
    $res = $res->fetch_assoc();
	



	echo "id:" .$res['id'];
	echo '<p/>';



	echo "subject:" .$res['subject'];
	echo '<p/>';


	echo "memo:" .$res['memo'];
	echo '<p/>';

	echo "<td align='left'>
          <a href='./download.php?num=".$res['num']."'>".$res['name']."</a></td>";
	
	 mysqli_close($mysqli);
 
 ?>
   



</html>


