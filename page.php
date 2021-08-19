<?php 
if(isset($_GET['email'])&&!empty($_GET['email'])){
    $email = $_GET['email'];
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
</head>
<body>
  <h2> Hello, <?php echo $email?> thanks for subscribing</h2>
  <button><a href="index.php">Back</a></button>
</body>
</html>