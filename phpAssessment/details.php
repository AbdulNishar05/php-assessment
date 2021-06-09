<?php include 'Db.php' ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <link rel="stylesheet" href="css/index.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
     
   </head>
   <body class="body">
      <div class="container">
      <h1 align="center">PDP</h1>
      <div class="row">
      <h3>Details</h3>
      <?php
if (isset($_GET['Id']))
{
    $query = "select * from products where Id={$_GET['Id']}";
    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) > 0)
    {
        $row = mysqli_fetch_assoc($result);
?>
      <table class="table table-bordered">
      <tr id="tr">
         <td > <img src="<?php echo $row["image"]; ?>" width="300" height="300" ></td>
      <tr>
         <td>
            <p>Name:<strong><?php echo $row['Name']; ?></p>
            </strong>
      <tr>
         <td>
            <p>Sku:<strong><?php echo $row['Sku']; ?></p>
            </strong>
      <tr>
         <td>
            <p>Description:<strong><?php echo $row['Description']; ?></p>
            </strong>
      <tr>
         <td>
            <p>Price:<strong><?php echo $row['Price']; ?></p>
            </strong>
            <?php
    }
    else
    {
        header("location:index.php");
    }
}
else
{
    header("location:index.php");
}
?>
   </body>
</html>
