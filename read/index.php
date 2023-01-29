<?php
    $conn = mysqli_connect("localhost", "root", "", "digilib");

    if( empty($_GET["title"])) {
        header("Location: /home");
        exit;
    }

    $title = $_GET["title"];

    $query = "SELECT id, title, folder, stats FROM books WHERE folder = '$title'";

    $start = mysqli_query($conn, $query);

    $result = mysqli_fetch_row($start);

    $update = "UPDATE books SET stats = stats + 1 WHERE id = '$result[0]'";

    $update_start = mysqli_query($conn, $update);
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $result[1]; ?> | DigiLib</title>
    <link rel="shortcut icon" href="/img/icon/favicon.webp" type="image/webp">
</head>
<style>
    *{margin:0px}
    body, html{height: 100vh; overflow: clip;}
    embed, iframe{width:100%; height: 100%}
</style>
<body>
    <embed src="/book/<?= $result[2]; ?>/book.pdf" frameborder=0 type="application/pdf"></embed>
<body>