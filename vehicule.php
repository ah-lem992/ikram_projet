
<?php 
include 'nav.php';
include 'formveh.php';
try {
    $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
    $bdd = new PDO('mysql: host=localhost; dbname=vtcbase; charset=utf8', 'root', '', $options);        
} 
catch (Exception $e) 
{
    die($e->getMessage());

}







?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vehicule</title>
</head>

<body>
    
</body>
</html>