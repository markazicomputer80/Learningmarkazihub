<!DOCTYPE html>
<html dir="rtl" lang="fa-IR">
<head>
    <title>حذف همه مطالب</title>
    <meta charset="utf-8" />
</head>
<body style="font-family: tahoma; font-size:14px;">
<center>
<?php
include ("config.php");
//select all records from posts table
$get_query = mysqli_query($con,"DELETE FROM `posts`");

if($get_query){
	echo "تمامی مطالب با موفقیت جذف شدند";
}else{
	echo "مشکلی در حذف همه پست ها رخ داده است";
}
?>
</center>
</body>
</html>