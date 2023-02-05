<?php
    session_start();

    if (!isset($_SESSION["admin"])) {
        header("Location: /profile");
        exit;
    }

    if (empty($_GET["id"])) {
        header("Location: /dashboard");
        exit;
    }

    $id = $_GET["id"];

    $conn = mysqli_connect("localhost", "root", "", "digilib");

    $query = "UPDATE books SET `status`='0' WHERE id = '$id'";

    $run = mysqli_query($conn, $query);

    header("Location: /dashboard");
    exit;
?>