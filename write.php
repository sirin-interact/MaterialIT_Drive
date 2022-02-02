<html>
   <meta charset="utf-8">
   <style>
    body {
            background-image: url("https://itmaterial.co.kr/attempt/mitlogo.jpg");
            background-repeat:no-repeat;
        }
        </style>

<?php

$host = 'localhost';
$user = 'seunghalee14';
$pw = 'seunghalee14@';
$dbName = 'seunghalee14';
$mysqli = new mysqli($host, $user, $pw, $dbName);

	
$id = $_POST['id'];
$subject = $_POST['subject'];
$memo = $_POST['memo'];
$file = $_FILES['file']['name'];

 $date = date("YmdHis", time());
 $dir = "./files/";
 $file_hash = $date.$_FILES['file']['name'];
 $file_hash = md5($file_hash);
 $upfile = $dir.$file_hash;



if(is_uploaded_file($_FILES['file']['tmp_name']))
    {
            if(!move_uploaded_file($_FILES['file']['tmp_name'], $upfile))
            {
                    echo "upload error";
                    exit;
            }
    }


 
	
  $sql = "insert into a (name, id, subject, memo, hash, time)"; 	
  $sql = $sql. "values('$file','$id','$subject','$memo','$file_hash','$date')"; 
  
    $result = $mysqli->query($sql);
	
	
	
	if(!$result)
    {
        echo "DB upload error";
        exit;
    }
	
	
mysqli_close($mysqli);
	echo("<script>location.href='index.php';</script>");
    echo "<script>alert('업로드 성공');";


	
	?>
	</html>