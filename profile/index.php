<?php
    session_start();

    $conn = mysqli_connect("localhost", "root", "", "digilib");

    if (!isset($_SESSION["login"])) {
        header("Location: /auth");
        exit;
    }
    
    $admin = $_SESSION['admin'];

    $nisp = $_SESSION["nisp"];

    $query = "SELECT name, nisp FROM users WHERE nisp = '$nisp'";

    $run = mysqli_query($conn, $query);

    $result = mysqli_fetch_row($run);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $result[1] ?> 's Profile | DigiLib</title>
    <link rel="shortcut icon" href="/img/icon/favicon.webp" type="image/webp">
    <script src="/js/qrcode.min.js"></script>
    <link rel="stylesheet" href="/style/profile.css">
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

    <section id="profile-sect">
        <b><a href="/auth/logout.php">Logout</a></b>
        <?php if($admin == 1){echo "<b style='margin-left:50px'><a href='/dashboard'>Go To Dashboard</a></b>";} ?>

        <br><br>
        <h1>Profile</h1><br>

        <p>Nama: <?= $result[0] ?></p>
        <p>NISP: <?= $result[1] ?></p><br><br>

        <h2>My QR Code</h2><br>
        <div id="qrcode"></div>
    </section>
    
    <script>
        var qrcode = new QRCode("qrcode");
        function makeCode () {qrcode.makeCode("<?= $result[1] ?>");}
        makeCode();
    </script>
</body>
</html>