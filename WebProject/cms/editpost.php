<!DOCTYPE html>
<html dir="rtl" lang="fa-IR">
<head>
    <title>ویرایش مطلب</title>
    <meta charset="utf-8" />
</head>
<body style="font-family: tahoma; font-size:14px;">
<?php 
include ("config.php");
$pid = $_GET['id'];
//select post that its id = pid
$query="SELECT * FROM `posts` WHERE `id` = '$pid' ";
$get_query = mysqli_query($con,$query);   // Go or run query

$fetch_result = mysqli_fetch_array($get_query); // آرایه انجمنی است که کل ردیف را در بر دارد
$postTitle = $fetch_result['title'];
$postText = $fetch_result['text'];

?>
<center>
<form action="editpost2.php" method="post">
عنوان مطلب : <input type="text" name="postTitle" size="40" value="<?php echo $postTitle;?>"><br>
متن مطلب: <br>
<textarea name="postText" rows="10" cols="50"> <?php echo $postText;?> </textarea>
<br>
<input type="hidden" name="postID" value="<?php echo $pid;?>">
<input type="submit" value="ثبت مطلب">
</form>
</center>
</body>
</html>