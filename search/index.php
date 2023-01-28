<?php
    $conn = mysqli_connect("localhost", "root", "", "digilib");

    session_start();

    if ( isset($_POST["search"])) {
        $_SESSION["search"] = $_POST["search"];
        
        header("Location: /result");
        exit;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search | Digilib</title>
    <link rel="shortcut icon" href="/img/icon/favicon.webp" type="image/webp">
    <link rel="stylesheet" href="/style/search.css">
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

    <section id="search-sect">
            <form id="search-box" action="" method="post">
                <!-- <select name="type" id="type">
                    <option value="tiitle">Title</option>
                    <option value="author">Author</option>
                    <option value="publisher">Publisher</option>
                </select> -->
                <input type="text" name="search" id="search" autofocus placeholder="Type here ...">
                <button type="submit" name="submit"><img src="/img/icon/search.webp" alt="Search Icon"></button>
            </form>
    </section>
</body>
</html>