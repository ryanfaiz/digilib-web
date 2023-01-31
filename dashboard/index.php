<?php
    session_start();

    if (!isset($_SESSION["login"])) {
        header("Location: /auth");
        exit;
    }
    
    $conn = mysqli_connect("localhost", "root", "", "digilib");

    if (!empty($_GET["isbn"])) {
        $isbn = $_GET["isbn"];
        $query = "SELECT * FROM lokal WHERE `isbn` = '$isbn'";
    } else {
        $query = "SELECT * FROM lokal";
    }
    
    $run = mysqli_query($conn, $query);
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
    

    <section>
        <h1>Book Dashboard</h1>

        <div style="margin-bottom:25px">
            <a href="/dashboard/search.php" style="margin-right:15px">Search</a>
            <a href="/dashboard/tambah.php" style="margin-right:15px">Tambah Data</a>
        </div>

        <div style="overflow-x:auto;">
            <table border="1" cellpadding="10" cellspacing="2">
                <tr>
                    <th>ID</th>
                    <th>Aksi</th>
                    <th>Judul</th>
                    <th>ISBN</th>
                    <th>Status</th>
                </tr>

                <?php while ( $row = mysqli_fetch_row($run)) : ?>
                    <tr>
                        <td><?= $row[0]; ?></td>
                        <td>
                            <a href="status.php?id=<?= $row[0]; ?>">Status</a> |
                            <a href="pinjam.php?isbn=<?= $row[2]; ?>">Pinjam</a>
                        </td>
                        <td><?= $row[1]; ?></td>
                        <td><?= $row[2]; ?></td>
                        <td><?php if($row[3] == 0){echo "🟢";}else{echo "🔴";} ?></td>
                    </tr>
                <?php endwhile; ?>
            </table>
        </div>
    </section>
</body>
</html>