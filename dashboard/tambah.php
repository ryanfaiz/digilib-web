<?php
    session_start();
    
    if (!isset($_SESSION["login"])) {
        header("Location: /auth");
        exit;
    }

    $conn = mysqli_connect("localhost", "root", "", "digilib");

    if ( isset($_POST["submit"])) {
        $title = htmlspecialchars($_POST["title"]);
        $isbn = htmlspecialchars($_POST["isbn"]);

        $insert = "INSERT INTO `lokal`(`id`, `title`, `isbn`, `status`) VALUES (NULL, '$title', '$isbn', 0)";

        mysqli_query($conn, $insert);

        header("Location: /dashboard");
        exit;
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tambah Data Buku Perpustakaan</h1>
    <form action="" method="post">
        <h3>Judul</h3>
        <input type="text" name="title" id="title" required autofocus>

        <h3>ISBN</h3>
        <input type="number" name="isbn" id="isbn" required><br><br>

        <input type="submit" name="submit">
    </form>
</body>
</html>