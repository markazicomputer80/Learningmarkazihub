<!DOCTYPE html>
<html dir="rtl" lang="fa-IR">
<head>
    <title>ویرایش مطلب</title>
    <meta charset="utf-8" />
</head>
<body style="font-family: tahoma; font-size:14px;">
<center>
<?php
include ("config.php");
//select all records from posts table
$query="SELECT * FROM `posts`";            // درخواست برای نمایش تمام اطلاعات جدول پست
$get_query = mysqli_query($con,$query);   // Run Go اجرای درخواست ما
//now using while for get each record sepratly and show it to web browser
while ($row = mysqli_fetch_array($get_query))
{
	$postTitle = $row['title'];
	$postText = $row['text'];
	$postId = $row['id'];
	echo "<h2><a href=single.php?id=$postId>$postTitle</a> (<a href=editpost.php?id=$postId>ویرایش</a>) - (<a href=deletepost.php?id=$postId>حذف</a>)</h2>";
}
?>
<hr>
<a href="deleteall.php">حذف همه مطالب</a>
</center>
</body>
</html>