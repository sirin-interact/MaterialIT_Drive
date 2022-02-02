<?php    
 
    if(!$_GET['num'])
    {
        echo "<script>alert('이상하게 접근하셨습니다;;');";
        echo "history.back();</script>";
    }
    
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
    
    $sql = "select hash from a where num=".$_GET['num'];
    $res = $mysqli->query($sql);
    if(!$res)
    {
        echo "select query error";
        exit;
    }
    $res = $res->fetch_assoc();
    
    $dir = "./files/";
    $filehash = $res['hash'];
    
    if(!unlink($dir.$filehash))
    {
            echo "file delete error";
            exit;
    }
    
    $sql = "delete from a where num=".$_GET['num'];
    $res = $mysqli->query($sql);
    if(!$res)
    {
        echo "delete query error";
        exit;
    }
    
    echo "<script>alert('파일이 삭제되었습니다.');";
    echo "history.back();</script>";
 
 mysqli_close($mysqli);
    
?>