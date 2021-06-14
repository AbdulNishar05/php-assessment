<?php
try {
  ($connection = mysqli_connect("localhost", "root", "Admin@123", "plp");
}    
catch(Exception $e)
{
    echo $e->getMessage();
}

?>
