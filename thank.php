<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Thank you page</title>
</head>
<?php
$name=$_POST['name'];
$email=$_POST['email'];
$event=$_POST['event'];
$mno=$_POST['mobile'];
$collage=$_POST['collage'];
$rate=$_POST['rate'];
echo 'Thank for registering';
echo $name.$email.$event.$mno.$collage.$rate;
?>
<body>
</body>
</html>