<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="stylelogin.css">
</head>
<body>
    <div class="kotak_login">
        <h1>Login</h1>
        <form action="proseslogin.php" method="POST">
            <div class="txt_field">
                <input type="text" name="usernamebaru" placeholder="usernamebaru" required>
            </div>
            <div class="txt_field">
                <input type="password" name="passwordbaru" placeholder="passwordbaru" required>
            </div>
            <div class="button">
                <input type="submit" value="Login">
                <div class="regis_link">
                    Tidak Punya Akun? <a href="regis.php">Register</a><br>
                    <a href="index.php">Halaman Utama</a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>