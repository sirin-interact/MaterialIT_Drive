<!DOCTYPE html>
<?php session_start(); ?>
<html>
<head>
  <!-- meta -->
  <meta property="og:url" content="https://itmaterial.co.kr/drive/index.php">
  <meta property="og:title" content="Material IT Public Drive">
  <meta property="og:type" content="website">
  <meta property="og:image" content="https://itmaterial.co.kr/attempt/mitlogo.jpg">
  <meta property="og:description" content="Material IT를 위한 공용 드라이브">
  <!-- link -->
  <link rel="stylesheet" type="text/css" href="./index_style.css" />
</head>
    <head>
        <meta charset="utf-8" />
        <title>Material IT Public Drive</title>
        <style>
        body {
            background-image: url("https://itmaterial.co.kr/attempt/mitlogo.jpg");
            background-repeat:no-repeat;
            width:100%;
            height:100%;
        }
        h1 { text-align: center; }
        
        </style>
    </head>
    <body>
        <div class="center">
        <h1>Material IT 공용 드라이브<br>Supported By Square</h1>
        <?php
            if(!isset($_SESSION['user_id']) || !isset($_SESSION['user_name'])) {
                echo "<center>로그인을 해 주세요. <a href=\"login.php\">[로그인]</a></center>";
            } else {
                $user_id = $_SESSION['user_id'];
                $user_name = $_SESSION['user_name'];
                echo "<center><strong>$user_name</strong>($user_id)님 환영합니다.";
                echo "<a href=\"logout.php\">[로그아웃]</a>";
                $host = 'localhost';
                $user = 'seunghalee14';
                $pw = 'seunghalee14@';
                $dbName = 'seunghalee14';
                $mysqli = new mysqli($host, $user, $pw, $dbName);

                if(mysqli_connect_errno())
                {
                echo "DB connect error";
                    }
		
		        $sql = "select * from a";
		        $res = $mysqli->query($sql);
		        $num_result = $res->num_rows;

        
                require './thread.php';
                    

		            
             } ?>

            
            </div>
    </body>
</html>

