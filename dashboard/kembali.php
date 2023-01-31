<?php
    session_start();

    if (!isset($_SESSION["login"])) {
        header("Location: /auth");
        exit;
    }

    if (empty($_GET["id"])) {
        header("Location: /dashboard");
        exit;
    }

    $id = $_GET["id"];

    $conn = mysqli_connect("localhost", "root", "", "digilib");

    $query = "UPDATE lokal SET `status`='0' WHERE id = '$id'";

    $run = mysqli_query($conn, $query);

    header("Location: /dashboard");
    exit;
?>