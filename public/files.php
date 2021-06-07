<html>
<head>
<meta charset="UTF-8">
<title>Document</title>
</head>
<body>
<?php 
echo "what is the f name?";
echo $name = $_FILES['file']['name'] . " ouf<br>";
echo $type = $_FILES['file']['type'] . " ouf2<br>";
echo $tmp_location = $_FILES['file']['tmp_name'] . " ouf3<br>";
echo $error = $_FILES['file']['error'] . " err line <br>";




?>
<form action="upload.php" method="post" enctype="multipart/form-data">
<input type="file" name="file">
<button name="uploadf" type="submit">Submit</button>
</form>
</body>
</html>