<!DOCTYPE html>
<?php session_start(); ?>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Material IT Public Drive Login</title>
        <style>
        body {
            background-image: url("https://itmaterial.co.kr/attempt/mitlogo.jpg");
            background-repeat:no-repeat;
        }
        h1 { text-align: center; }
        </style>
    </head>
    <body>
        <h1>로그인</h1>
        <?php if(!isset($_SESSION['user_id']) || !isset($_SESSION['user_name'])) { ?>
            <div id="login_box">					
			<form method="post" action="login_ok.php">
				<table align="center" border="0" cellspacing="0" width="300">
        			<tr>
            			<td width="130" colspan="1"> 
                		<input type="text" name="user_id" class="inph">
            		</td>
            		<td rowspan="2" align="center" width="100" > 
                		<button type="submit" id="btn" >로그인</button>
            		</td>
        		</tr>
        		<tr>
            		<td width="130" colspan="1"> 
               		<input type="password" name="user_pw" class="inph">
            	</td>
        	</tr>
        <?php } else {
            $user_id = $_SESSION['user_id'];
            $user_name = $_SESSION['user_name'];
            echo "<center><strong>$user_name</strong>($user_id)님은 이미 로그인하고 있습니다. ";
            echo "<a href=\"index.php\">[돌아가기]</a> ";
            echo "<a href=\"logout.php\">[로그아웃]</a></p>";
        } ?>
    </body>
</html>