<!DOCTYPE html>
<html dir="rtl" lang="fa-IR">
<head>
    <title>درج مطلب</title>
    <meta charset="utf-8" />
</head>
<body style="font-family: tahoma; font-size:14px;">
<center>
<?php
include ("config.php");

$newtitle = trim ($_POST['postTitle']);
$newText = trim ($_POST['postText']);
$pid = $_POST['postID'];

if($newtitle != "" && $newText != ""){
	//do insert
	$query="UPDATE `posts` SET `title` = '$newtitle', `text` = '$newText' WHERE `id` = '$pid'";
	$query_res = mysqli_query($con,$query);
	if($query_res)
	{	
		echo "مطلب با موفقیت ویرایش شد.";
			echo '<a href=index.php>لیست مطالب</a>';
	}else{
		echo "مشکلی در ویرایش مطلب رخ داده است. مجددا تلاش کنید";
	}
}else{

}
?>
</center>
</body>
</html>