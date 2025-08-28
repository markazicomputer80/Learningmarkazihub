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
$title = trim ($_POST['postTitle']);
$text = trim ($_POST['postText']);

if($title != "" && $text != ""){
	//do insert اطلاعات را داخل بانک اطلاعاتی اضافه کن
	$query = "INSERT INTO `posts` (`title`, `text`) VALUES ('$title','$text')"; // دستور کوئری
	$query_res = mysqli_query($con,$query); // اجرای کوئری  //GO IN MYSQL QUERY
	if($query_res){
		echo "مطلب شما با موفقیت در بانک داده درج شد.";
	}else{
		echo "مشکلی در ثبت مطلب رخ داده، لطفا مجددا تلاش کنید";
	}
}
else
{
	echo 'برای درج مطلب جدید باید عنوان و متن مطلب را وارد کنید. <a href=insert.php>بازگشت</a>';
}
?>
</center>
</body>
</html>