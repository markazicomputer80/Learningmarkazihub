<?php
// insert.php   
$serverName = "pc0\muser";  /* معرفی متغیر سرور*/
$connectionInfo = array( "Database"=>"fastfood", "CharacterSet" => "UTF-8"); /* معرفی متغیر بانک اطلاعاتی و کدینگ فارسی*/
$conn = sqlsrv_connect( $serverName, $connectionInfo); /* اجرای دستور کوئری فوق*/
/* در صورتیکه ارتباط با بانک اطلاعاتی برقرار نشد پیام خطای زیر نمایش داده میشود*/
if( !$conn ){
     echo "اتصال برقرار نشد.<br />";
     die( print_r( sqlsrv_errors(), true));
   }

//-Insert into FoodInfo---------------------------------------------------------------------------------   
 /* درصورتیکه اطلاعات فیلدهای صفحه اچ تی ام ال خالی باشد به صفحه اصلی ورود اطلاعات غذا برمیگردد*/  
if($_POST['title']=='' || $_POST['type']=='' || $_POST['material']=='' || $_POST['price']=='' || $_POST['pic']=='')
{ header("Location:insert.html");}
/* اطلاعات نام - نوع - قیمت - عکس - در این فایل ثبت میگردد*/
$sql="insert into FoodInfo([type],[Price],[FoodTitle],[pic]) values(?,?,?,?)";
$params=array($_POST['type'],$_POST['price'],$_POST['title'],$_POST['pic']);
$stmt=sqlsrv_query($conn,$sql,$params); // Go

//-Insert Into Food material-----------------------------------------------------------------------------
/* برای پیدا کردن آخرین ردیف فودکد دستور زیر اجرا میگردد */
/* این متغیر برای درج در متریال اینفو لازم میباشد*/
$sql="select max(Foodcode) as mcode from FoodInfo";
$materialstmt=sqlsrv_query($conn,$sql); /* اجرای دستور کوئری فوق*/
$FCode = sqlsrv_fetch_array( $materialstmt, SQLSRV_FETCH_ASSOC);

/* اطلاعات مواد اولیه بر اساس فودکد در این فایل ثبت میگردد*/
$sql="insert into FoodMaterial(FoodCode,Material) values(?,?)";
$params=array($FCode['mcode'],$_POST['material']); /* واگذاری اطلاعات  ثبت شده در سایت به متغییر ها با پارامتر  */
$stmt=sqlsrv_query($conn,$sql,$params);/* اجرای دستور کوئری فوق*/
header("Location:insert.html");
?>