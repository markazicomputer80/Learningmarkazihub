<?php
  include_once('include/connection.php');
  include_once('include/function.php');
  echo '<link rel="stylesheet" type="text/css" href="style/style.css"/>';
  echo '<div id="container" align="center">';
?>
  <form action="index.php" method="post" align="center" >
     Pish ghaza <input type="radio" value="1" name="type"/>
     Main course <input type="radio" value="2" name="type"/>
     Desert <input type="radio" value="3" name="type"/>

     <input type="submit" value="نمایش" />
  </form>
<?php
  echo '<div id="header"></div>';
   if($conn==false)
   {
      DisplayErrors();
      die();
   }
   else
   {
    if(isset($_POST['type']))
    {
    $type=$_POST['type'];
    switch($type)
    {
    case "1": // پیش غذا
    {
       $h= "پیش غذا";
       $div='<div id="starter">';
       break;
    }
    case "2": //غذای اصلی
    {
      $h= "غذای اصلی";
      $div='<div id="main">';
      break;
    }
    case "3": // دسر
    {
      $h= "دسر";
      $div='<div id="starter">';
      break;
    }
    }  // switch
    $sql="SELECT FoodInfo.*, FoodMaterial.Material
          FROM  FoodInfo INNER JOIN
          FoodMaterial ON FoodInfo.Foodcode = FoodMaterial.FoodCode  where type='$type' ";

     $stmt=sqlsrv_query($conn,$sql); //or die ('Query Error'.sqlsrv_error());

   //---------------------------------//
   echo $div;
   echo '<table dir="rtl" cellspacing="5px" border="1">';
   echo '<tr>';
     echo '<th>'; echo  $h;    echo '</th>' ;
     echo '<th>'; echo 'نام';  echo '</th> ';
     echo '<th>' ; echo 'مواد اولیه'; echo '</th>';
     echo '<th>';  echo 'قیمت'; echo '</th>';
   echo '</tr>';

 while( $row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC) )
   {
     echo ('<tr>');
     echo('<td>');
?>
     <img src="img/<?php echo $row['pic']; ?>" />
<?php
     echo('</td>');
     echo('<td>'.$row['FoodTitle'].'</td>');
     echo('<td>'.$row['Material'].'</td>') ;              // این فیلد متریال است که باید نمایش داده شود
     echo('<td>'.$row['Price'].'</td>');
     echo('</tr>');
   }  // End of While
   echo('</div>');
   echo('</table>');
   echo('<hr>');
  } // if
 }// esle
?>


