<?php
require_once "./config/constants.php";
include_once "./models/ContentModel.php";
include_once ENTITIES . '/Content.php';

$getAllEmployeesContent = new ContentModel();
$getAllEmployees = $getAllEmployeesContent->get();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" href="#">
</head>
<body>
    <?php echo json_encode($getAllEmployees)?>
</body>
</html>