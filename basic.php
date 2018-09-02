<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h3>Stock Analysis</h3>
<?php
    $myPDO = new PDO('sqlite:/home/rizwan/Proj/sharemarket/sharemarket.db');
?>

<?php
    $result = $myPDO->query("SELECT stock FROM sharemarket");
?>

<?php
    foreach($result as $row)
    {
        print $row['stock'] . "\n";
    }
?>

    
</body>
</html>

