<?php
    session_start();

    if (!isset($_SESSION["login"])) {
        header("Location: /auth");
        exit;
    }

    if (empty($_GET["id"])) {
        header("Location: /dashboard");
        exit;
    }

    $id = $_GET["id"];

    $nisp = $_SESSION["nisp"];

    $conn = mysqli_connect("localhost", "root", "", "digilib");

    $query = "SELECT * FROM lokal WHERE id = '$id'";

    $run = mysqli_query($conn, $query);

    $result = mysqli_fetch_row($run);

    $profile = "SELECT * FROM users WHERE nisp = '$nisp'";

    $p_run = mysqli_query($conn, $profile);

    $p_result = mysqli_fetch_row($p_run);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status <?= $result[1] ?> | DigiLib</title>
</head>
<body>
    <h1>Status Buku <?= $result[1] ?></h1>
    <p>Status : <?php if($result[3] == 0){echo "Buku Tersedia 🟢";}else{echo "Buku Terpinjam 🔴";} ?></p>

    <?php if($result[3] == 1){echo "<p>Tanggal Buku Kembali : $result[4]  (YYYY-MM-DD)</p>";} ?>
    <?php if ($p_result[0] == 1){echo "<a href=kembali.php?id=$result[0]>Buku Telah Dikembalikan</a>";} ?>
</body>
</html>


