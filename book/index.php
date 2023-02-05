<?php
    $conn = mysqli_connect("localhost", "root", "", "digilib");

    if( empty($_GET["title"])) {
        header("Location: /home");
        exit;
    }
    
    $title = $_GET["title"];

    $query = "SELECT * FROM books WHERE folder = '$title'";

    $find = mysqli_query($conn, $query);

    if (mysqli_num_rows($find) == 0) {
        echo '<script type="text/javascript">'; 
        echo 'alert("Buku yang anda cari, tidak dapat ditemukan");'; 
        echo 'window.location.href = "/";';
        echo '</script>';
    }

    $result = mysqli_fetch_row($find);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $result[1]; ?> | DigiLib</title>
    <link rel="shortcut icon" href="/img/icon/favicon.webp" type="image/webp">
    <link rel="stylesheet" href="/style/book.css">
</head>
<body>
    <nav>   
        <a href="/"><h1>DigiLib</h1></a>

        <div>
            <a href="/collection">Collection</a>
            <a href="/tags">Tags</a>
            <a href="/categories">Categories</a>
        </div>

        <div>
            <a href="/search"><img src="/img/icon/search.webp" alt="Search Icon"></a>
            <a href="/profile"><img src="/img/icon/profile.webp" alt="Profile Icon"></a>
        </div>
    </nav>

    <section id="head-sect">
        <div style="margin-right:50px">
            <img src="/book/<?= $result[2]; ?>/cover.webp" alt="<?= $result[1]; ?> Book Cover">
            <h1><?= $result[1]; ?></h1>
            <h2>by <?= $result[8]; ?></h2><br>

            <?php if($result[10] == 0){ echo "<div><a href='/read?title=$title'>Mulai Baca</a></div><br><br>";} ?>
            <?php if($result[10] == 1 && $result[12] == 0){ echo "<div><a href='/profile'>Pinjam Buku</a></div><br><br>";} ?>
            
            <p>Viewed: <?= $result[11]; ?></p>
            <p>Pages: <?= $result[4]; ?></p>
            <p>Publisher: <?= $result[7]; ?></p>
            <p>Genre: <?= $result[9]; ?></p>
            <?php if($result[10] == 1){
                if($result[12] == 0){
                    echo "<p>Status Buku: Tersedia 🟢</p>";
                } else {
                    echo "<p>Status Buku: Terpinjam 🔴</p>";
                }
            } ?>
        </div><br><br>
        <div>
            <h2>Blurb</h2><br>
            <p><?= $result[3]; ?></p>
        </div>
    </section>
</body>