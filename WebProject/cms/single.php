<!DOCTYPE html>
<html dir="rtl" lang="fa-IR">
<head>
    <title>مشاهده پست</title>
    <meta charset="utf-8" />
</head>
<body style="font-family: tahoma; font-size:14px;">
<center>
<?php
include ("config.php");
$pid = $_GET['id'];
//select all records from posts table FOR ID = $PID
$get_query = mysqli_query($con,"SELECT * FROM `posts` WHERE `id` = '$pid' ");

$fetch_result = mysqli_fetch_array($get_query);   // جدا سازی هرردیف از کل اطلاعات
 
	$postTitle = $fetch_result['title'];
	$postText = $fetch_result['text'];
	echo "<h2>$postTitle</h2>"; 
	echo "<p>$postText</p><hr>";
?>
</center>
</body>
</html>