<?php
    if ( empty($_GET["isbn"])) {
        header("Location: /dashboard/search.php");
        exit;
    }

    $isbn = $_GET["isbn"];

    $conn = mysqli_connect("localhost", "root", "", "digilib");

    $query = "SELECT * FROM lokal WHERE isbn = '$isbn'";

    $run = mysqli_query($conn, $query);


?>