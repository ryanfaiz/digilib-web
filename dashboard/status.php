<?php
    session_start();

    if (!isset($_SESSION["admin"])) {
        header("Location: /profile");
        exit;
    }

    if (empty($_GET["id"])) {
        header("Location: /dashboard");
        exit;
    }

    $id = $_GET["id"];

    $nisp = $_SESSION["nisp"];

    $conn = mysqli_connect("localhost", "root", "", "digilib");

    $query = "SELECT id, title, isbn, publisher, author, status, return_date, borrower FROM books WHERE id = '$id'";

    $run = mysqli_query($conn, $query);

    $result = mysqli_fetch_row($run);

    if($result[5] == 1){
        $nisp = $result[7];
        $query_2 = "SELECT name FROM users WHERE nisp = $nisp";
        $run_2 = mysqli_query($conn, $query_2);
        $name =  mysqli_fetch_row($run_2);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status <?= $result[1] ?> | DigiLib</title>
    <link rel="shortcut icon" href="/img/icon/favicon.webp" type="image/webp">
    <style>
        *{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        a {
            color: inherit;
        }
    </style>
</head>
<body>
    <h1>Status Buku <?= $result[1] ?></h1>
    <p>Status : <?php if($result[5] == 0){echo "Buku Tersedia 🟢";}else{echo "Buku Terpinjam 🔴";} ?></p>

    <?php if($result[5] == 1){
        echo "<p>Tanggal Pengembalian : $result[6]  (YYYY-MM-DD)</p>";
        echo "<p>NISP Peminjam: $nisp";
        echo "<p>Nama Peminjam: $name[0]";
    } ?>

    <p><a href="/dashboard/kembali.php?id=<?=$result[0]?>">Kembalikan Buku</a></p>
    <p><a href="/dashboard/pinjam.php?isbn=<?=$result[2]?>">Pinjamkan Buku</a></p>
</body>
</html>


