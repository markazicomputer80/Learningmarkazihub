<!DOCTYPE html>
<html dir="rtl" lang="fa-IR">
<head>
    <title>صفحه اصلی</title>
    <meta charset="utf-8" />
	<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body style="font-family: tahoma; font-size:16px;">
<!-- -------------------------- -->  
 <ul>
  <li> <a href="index.php"> صفحه اصلی </a> </li>
  <li> <a href="insert.php"> ورود اطلاعات </a> </li>
  <li>درباره ما</li>
  </ul>
<!-- -------------------------- -->
<br><br> <br><br> 
<center>
<?php
include("config.php");
$query = "SELECT * FROM `posts`";
$result = mysqli_query($con,$query);
if ($result) {
	echo "<h3> اخبار روز از کانال آموزشگاه مرکزی </h1>";
    echo "<table style=width:90% border=1><tr><th>ردیف</th><th>عنوان خبر</th><th>متن خبر</th><th> ویرایش / حذف</th></tr>";	
	
	while ($row = mysqli_fetch_array($result))
	{
		echo "<tr>";
		$postTitle = $row['title'];
		$postText = $row['text'];
		$postId = $row['id'];
		
		echo "<td>" .$postId. "</td>" ;	
		/* برای نمایش اطلاعات در یک صفحه جداگانه حکم ادامه مطلب را دارد*/
		echo "<td>  <a href=single.php?id=$postId>".$postTitle. "</td>";
		/* -----------------------------------------------------------*/
		
		echo "<td >" .$postText. "</td>" ;
	    echo "<td>  <a href=editpost.php?id=$postId> ویرایش </a> 
		             <a href=deletepost.php?id=$postId>حذف </a> 
		             </td>";
	}
	echo '</table>';
	
	
/*	echo "<h2> (<a href=editpost.php?id=$postId>ویرایش</a>) - (<a href=deletepost.php?id=$postId>حذف</a>)</h2>"; */
 }
?>

</center>
</body>
</html>