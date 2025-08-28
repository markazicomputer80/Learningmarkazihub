<!DOCTYPE html>
<html dir="rtl" lang="fa-IR">
<head>
    <title>حذف پست</title>
    <meta charset="utf-8" />
</head>
<body style="font-family: tahoma; font-size:14px;">
<center>
<?php
include ("config.php");
$pid = $_GET['id'];
//ِDelete all records from posts table
$query="DELETE FROM `posts` WHERE `id` = '$pid' ";
$get_query = mysqli_query($con,$query);

if($get_query){
	echo "حذف مطلب مورد نظر با شناسه $pid با موفقیت انجام شد.";
}else{
	echo "مشکلی در حذف پست مورد نظر رخ داده است.";
}
?>
</center>
</body>
</html>