<?php
    session_start();

    $conn = mysqli_connect("localhost", "root", "", "digilib");

    if (!isset($_SESSION["login"])) {
        header("Location: /auth");
        exit;
    }

    $nisp = $_SESSION["nisp"];

    $query = "SELECT * FROM users WHERE nisp = '$nisp'";

    $run = mysqli_query($conn, $query);

    $result = mysqli_fetch_row($run);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="/js/qrcode.min.js"></script>
</head>
<body>
    <a href="/auth/logout.php">Logout</a>
    <a href="/dashboard">Dashboard</a>
    <h1>Profile</h1>
    <p><?= $result[1] ?></p>
    <p><?= $result[2] ?></p>

    <p><b>QR Code</b></p><br>
    <div id="qrcode"></div>
    
    <script>
        var qrcode = new QRCode("qrcode");
        function makeCode () {qrcode.makeCode("<?= $result[2] ?>");}
        makeCode();
    </script>
</body>
</html>