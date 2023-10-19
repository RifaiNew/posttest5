<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Form</title>
</head>
<body>

    <div class="kotak_login">
        <p>Halo <?php echo $_SESSION['usernamebaru']; ?></p>
        <p>No.hp anda adalah <?php echo $_SESSION['nohp'] ?></p>
        <a href="index.php">Logout</a>
    </div>
    
</body>
</html>