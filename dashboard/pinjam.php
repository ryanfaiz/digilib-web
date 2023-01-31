<?php
    session_start();

    if (!isset($_SESSION["login"])) {
        header("Location: /auth");
        exit;
    }

    if (empty($_GET["isbn"])) {
        header("Location: /dashboard");
        exit;
    }

    $isbn = $_GET["isbn"];
    
    $conn = mysqli_connect("localhost", "root", "", "digilib");
    $query = "SELECT * FROM lokal WHERE isbn = '$isbn'";
    $run = mysqli_query($conn, $query);
    $result = mysqli_fetch_row($run);

    if ($result[3] == 1) {
        echo '<script type="text/javascript">'; 
        echo 'alert("Buku ini masih dalam status peminjaman");'; 
        echo 'window.location.href = "index.php";';
        echo '</script>';       
    }
    
    $nisp = $_GET["isbn"];

    $today = date("Y-m-d");
    $return = date("Y-m-d", strtotime($today . ' +5 day'));

    if (!empty($_GET["nisp"])){
        $conn = mysqli_connect("localhost", "root", "", "digilib");
        $pinjam_query = "UPDATE lokal SET `status`='1',`return_date`='$return' WHERE isbn = '$isbn'";
        $pinjam_run = mysqli_query($conn, $pinjam_query);
        header("Location: status.php?id=$result[0]");
        exit;
    }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pinjam | DigiLib</title>
    <script src="/js/html5-qrcode.min.js"></script>
</head>
<body>
    <div>
        <h1>Pinjam Buku</h1>
        <p>Judul Buku : <?= $result[1] ?></p>
        <p>Nomor ISBN : <?= $result[2] ?></p>
        <p>Tanggal Peminjaman : <?= $today ?> (YYYY-MM-DD)</p>
        <p>Tanggal Pengembalian : <?= $return ?> (YYYY-MM-DD)</p>
    </div>
    <div id="qr-reader" style="width:300px"></div>
    <div id="qr-reader-results"></div>

    <script>
        var isbn = <?= $result[2] ?>;
        console.log(isbn);
        var resultContainer = document.getElementById('qr-reader-results');
        function onScanSuccess(decodedText, decodedResult) {
            alert('Nomor NISP Peminjam:  ' + decodedText);
            window.location.href = 'pinjam.php/?isbn='+ isbn + '&nisp=' + decodedText;
        }

        var html5QrcodeScanner = new Html5QrcodeScanner(
            "qr-reader", { fps: 10, qrbox: 250 });
        html5QrcodeScanner.render(onScanSuccess);
    </script>
</body>
</html>