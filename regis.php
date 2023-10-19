<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="styleLogin.css">
</head>
<body>
    <div class="kotak_login">
        <h1>Registrasi</h1>
        <form action="prosesregis.php" method="POST">
            <div class="txt_field">
                <input type="text" name="username" placeholder="username" required>
            </div>
            <div class="txt_field">
                <input type="password" name="password" placeholder="password" required>
            </div>
            <div class="txt_field">
                <input type="number" name="nohp" placeholder="Nomor Hp" required>
            </div>
            <div class="button2">
                <input type="submit" value="Register">
                <div class="regis_link">
                    Sudah Punya Akun? <a href="login.php">Login</a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>