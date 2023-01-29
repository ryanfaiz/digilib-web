<?php
    if ( empty($_GET["category"])) {
        header("Location: /categories");
        exit;
    }

    $category = $_GET["category"];

    $conn = mysqli_connect("localhost", "root", "", "digilib");

    $book_query = "SELECT id, title, folder, author FROM books WHERE category = '$category' ORDER BY title ASC";

    $book_find = mysqli_query($conn, $book_query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category <?= $category ?> | Digilib</title>
    <link rel="shortcut icon" href="/img/icon/favicon.webp" type="image/webp">
    <link rel="stylesheet" href="/style/collection.css">
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

    <section id="collection-sect">
        <h1>Collection</h1>
        <div id="booklist">
            <?php while ( $result = mysqli_fetch_row($book_find)) : ?>
                <a href="/book?title=<?= $result[2]; ?>">
                    <div class="book">
                        <div class="book-cover">
                            <img src="/book/<?= $result[2]; ?>/cover.webp" alt="Book Cover <?= $result[0]; ?>">
                        </div>
    
                        <h2><?= $result[1]; ?></h2>
                    </div>
                </a>
            <?php endwhile; ?>
        </div>
    </section>
</body>