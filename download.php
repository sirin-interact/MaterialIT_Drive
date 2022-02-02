<?php

    header("Content-type: text/html; charset=utf-8");

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

    $sql = "select name, hash from a where num=".$_GET['num'];
    $res = $mysqli->query($sql);
    if(!$res)
    {
        echo "query error";
        exit;
    }
    $res = $res->fetch_assoc();

    $dir = "./files/";
    $filename = $res['name'];
    $filehash = $res['hash'];

    if(file_exists($dir.$filehash))
    {
            header("Content-Type: Application/octet-stream");
            header("Content-Disposition: attachment; filename=".$filename);
            header("Content-Transfer-Encoding: binary");
            header("Content-Length: ".filesize($dir.$filehash));

            $fp = fopen($dir.$filehash, "rb");
            while(!feof($fp))
            {
                echo fread($fp, 1024);
            }
            fclose($fp);

            $sql = "update a set down=(down+1) where num=".$_GET['num'];
            $res = $mysqli->query($sql);
            if(!$res)
            {
                echo "down counter update error";
                exit;
            }
    }
    else
    {
            echo "<script>alert('파일이 없습니다.);";
            echo "history.back();</script>";
            exit;
    }
 mysqli_close($mysqli);

?>
