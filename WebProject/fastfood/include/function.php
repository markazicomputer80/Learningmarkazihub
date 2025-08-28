<?php
   function DisplayErrors()
{
     $errors = sqlsrv_errors(SQLSRV_ERR_ERRORS);
     foreach( $errors as $error )
     {
          echo "Error: ".$error['message']."\n";
     }
}
?>