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
        <div>
            <h1><?= $result[1]; ?></h1>
            <h2><?= $result[8]; ?></h2>
            <a href="/read?title=<?= $title ?>">Mulai Baca</a>
            
        </div>

        <div class="book-cover">
            <img src="/book/<?= $result[2]; ?>/cover.webp" alt="<?= $result[1]; ?> Book Cover">
        </div>

        <div>
            <p><?= $result[3]; ?></p>
        </div>
        
    </section>

    <section id="stat-sect">
        <div class="card">
            <p>Viewed</p>
            <p><?= $result[11]; ?></p>
        </div>
        <div class="card">
            <p>Pages</p>
            <p><?= $result[4]; ?></p>
        </div>
        <div class="card">
            <p>Publisher</p>
            <p><?= $result[7]; ?></p>
        </div>
        <div class="card">
            <p>Tag</p>
            <p><?= $result[9]; ?></p>
        </div>
    </section>
</body>