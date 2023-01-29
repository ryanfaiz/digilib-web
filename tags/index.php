<?php
    $conn = mysqli_connect("localhost", "root", "", "digilib");

    $tag_query = "SELECT DISTINCT tag FROM books ORDER BY tag ASC";

    $tag_find = mysqli_query($conn, $tag_query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tags | Digilib</title>
    <link rel="shortcut icon" href="/img/icon/favicon.webp" type="image/webp">
    <link rel="stylesheet" href="/style/tags.css">
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

    <?php while ( $tag_result = mysqli_fetch_row($tag_find)) : ?>
        <section id="tag-1-sect">
            <div class="tag-title">
                <h1>Tags <?= $tag_result[0]; ?></h1>
                <a href="/tag?tag=<?= $tag_result[0]; ?>">See more</a>
            </div>
            <?php
                $book_query = "SELECT id, title, folder, author FROM books WHERE tag = '$tag_result[0]' ORDER BY title ASC LIMIT 5";

                $book_find = mysqli_query($conn, $book_query);

            ?>

            <div class="horizontal-slide">
                <div class="book-container">
                    <?php while ( $book_result = mysqli_fetch_row($book_find)) : ?>
                        <a href="/book?title=<?= $book_result[2]; ?>">
                            <div class="book">
                                <div class="book-cover">
                                    <img src="/book/<?= $book_result[2]; ?>/cover.webp" alt="Book Cover <?= $book_result[0]; ?>">
                                </div>
            
                                <h2><?= $book_result[1]; ?></h2>
                            </div>
                        </a>
                    <?php endwhile; ?>
                </div>
            </div>
        </section>
    <?php endwhile; ?>
</body>
</html>