<?php
    $conn = mysqli_connect("localhost", "root", "", "digilib");

    $new_query = "SELECT id, title, folder, author FROM books ORDER BY id DESC LIMIT 5";

    $new_find = mysqli_query($conn, $new_query);

    $popular_query = "SELECT id, title, folder, author FROM books WHERE stats > 0 ORDER BY stats DESC LIMIT 5";

    $popular_find = mysqli_query($conn, $popular_query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | DigiLib</title>
    <link rel="shortcut icon" href="/img/icon/favicon.webp" type="image/webp">
    <link rel="stylesheet" href="/style/home.css">
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
        <h1>DigiLib, your one-stop destination for all your reading needs.</h1>

        <img src="/img/head.webp" alt="Head Image">
    </section>

    <section id="new-sect">
        <h1>New Collection</h1>

        <div class="horizontal-slide">
            <div class="book-container">
                <?php while ( $new_result = mysqli_fetch_row($new_find)) : ?>
                <a href="/book?title=<?= $new_result[2]; ?>">
                    <div class="book">
                        <div class="book-cover">
                            <img src="/book/<?= $new_result[2]; ?>/cover.webp" alt="Book Cover <?= $new_result[0]; ?>">
                        </div>
    
                        <h2><?= $new_result[1]; ?></h2>
                    </div>
                </a>
                <?php endwhile; ?>
            </div>
        </div>
    </section>

    <section id="popular-sect">
        <h1>Popular Collection</h1>

        <div class="horizontal-slide">
            <div class="book-container">
                <?php while ( $popular_result = mysqli_fetch_row($popular_find)) : ?>
                <a href="/book?title=<?= $popular_result[2]; ?>">
                    <div class="book">
                        <div class="book-cover">
                            <img src="/book/<?= $popular_result[2]; ?>/cover.webp" alt="Book Cover <?= $popular_result[0]; ?>">
                        </div>
    
                        <h2><?= $popular_result[1]; ?></h2>
                    </div>
                </a>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
</body>
</html>