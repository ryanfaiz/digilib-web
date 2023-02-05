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
                $_SESSION["nisp"] = $nisp;
                $_SESSION["admin"] = 1;
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
    <style>
        *{
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #form-container{
            width: 80%;
            padding: 20px;
            left: 0;
            right: 0;
            margin: 0 auto;
            border-style: outset;
            border-color: black black black black;
            border-radius: 25px;
            text-align: left;
            width: fit-content;
            position: absolute;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
    <div id="form-container">
        <form action="" method="post">
            <h2>NISP</h2>
            <input type="text" name="nisp" id="nisp" autofocus required autocomplete="off"><br><br>
    
            <h2>Password</h2>
            <input type="password" name="pass" id="pass" required><br><br>
    
            <input type="submit" name="login">
        </form><br><br>
    
        <?php if( isset($error) ) :?>
            <p style="color: red; font-style: italic;">NISP / Password salah</p>
        <?php endif ?>

    </div>
</body>
</html>