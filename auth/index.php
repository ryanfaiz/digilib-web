<?php
    session_start();

    $conn = mysqli_connect("localhost", "root", "", "digilib");

    if ( isset($_POST["login"])) {
        $nisp = $_POST["nisp"];
        $pass = $_POST["pass"];
        
        $result = mysqli_query($conn, "SELECT * FROM users WHERE nisp = '$nisp'");

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);

            if (password_verify($pass, $row["pass"])) {
                $_SESSION["login"] = true;
                $_SESSION['nisp'] = $nisp;
                header("Location: /profile");
                exit;
            }

            $error = true;
            
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="nisp" id="nisp" autofocus required>
        <input type="password" name="pass" id="pass" required>
        <input type="submit" name="login">
    </form>

    <?php if( isset($error) ) :?>
        <p style="color: red; font-style: italic;">Username / Password salah</p>
    <?php endif ?>
</body>
</html>