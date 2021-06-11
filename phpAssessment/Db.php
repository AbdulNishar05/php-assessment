<?php
try {
  if($connection = mysqli_connect("localhost", "root", "Admin@123", "plp"))
  {
    
  }
    
else
    {
        throw new Exception('Unable to connect');
    }
}    
catch(Exception $e)
{
    echo $e->getMessage();
}

?>
