<?php
    $conn = mysqli_connect("localhost", "root", "", "digilib");

    session_start();

    if( !isset($_SESSION["search"])) {
        header("Location: /search");
        exit;
    } else {
        $search = $_SESSION["search"];
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search  | Digilib</title>
</head>
<body>
    
</body>
</html>