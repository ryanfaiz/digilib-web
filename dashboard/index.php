<?php
    session_start();

    if ($_SESSION["admin"] != 1) {
        header("Location: /profile");
        exit;
    }
    
    $conn = mysqli_connect("localhost", "root", "", "digilib");

    if (!empty($_GET["isbn"])) {
        $isbn = $_GET["isbn"];
        $query = "SELECT id, title, isbn, status FROM books WHERE `isbn` = '$isbn' AND `category` = 1";
    } else {
        $query = "SELECT id, title, isbn, status FROM books WHERE `category` = 1";
    }
    
    $run = mysqli_query($conn, $query);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | DigiLib</title>
    <link rel="shortcut icon" href="/img/icon/favicon.webp" type="image/webp">
    <style>
        *{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: white;
        }
        a {
            color: inherit;
        }
    </style>
</head>
<body>
    

    <section>
        <h1>Book Dashboard</h1>

        <div style="margin-bottom:25px">
            <a href="/dashboard/search.php" style="margin-right:15px">Cari Buku</a>
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