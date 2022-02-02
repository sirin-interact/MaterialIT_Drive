<html>
    <meta charset="utf-8"/>
    <title>Material IT Public Drive Uploader</title>
    <style>
    body {
            background-image: url("https://itmaterial.co.kr/attempt/mitlogo.jpg");
            background-repeat:no-repeat;
        }
        </style>
</html>
<body>
    <form action="write.php" method="POST" enctype="multipart/form-data" />
	<table  align= "center" >
	<col width=100></col><col width=100></col>
		<tr>
			<td>아이디:</td>
			<td><input type="text" name="id" /></td>
		</tr>
		<tr>
			<td>제목:</td>
			<td><input type="text" name="subject" /></td>
		</tr>
		<tr>
			<td>내용:</td>
			<td><textarea name="memo" rows="20"></textarea></td>
		</tr>
		<tr>
			<td>첨부파일:</td>
			<td><input type="file" id="file" name="file" required /></td>
		</tr>
		<tr>
			<td>
				<input type="submit" value="업로드" />
			</td>
		</tr>
		</table>
    </form>
</body>
</html>