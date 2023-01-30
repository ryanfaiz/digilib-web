<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Dashboard | DigiLib</title>
    <script src="/js/html5-qrcode.min.js"></script>
</head>
<body>
    <div id="qr-reader" style="width:300px"></div>
    <div id="qr-reader-results"></div>

    <script>
        var resultContainer = document.getElementById('qr-reader-results');
        function onScanSuccess(decodedText, decodedResult) {
            alert('Nomor ISBN ' + decodedText);
            window.location.href = "index.php/?isbn=" + decodedText;
        }

        var html5QrcodeScanner = new Html5QrcodeScanner(
            "qr-reader", { fps: 10, qrbox: 250 });
        html5QrcodeScanner.render(onScanSuccess);
    </script>
</body>
</html>