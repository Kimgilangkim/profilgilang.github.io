<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>
</head>
    <link rel="stylesheet" href="style.css">
<body>
    <h1>Halaman Registrasi</h1>
    <form action="proses_register.php" method="post">
        <table>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" placeholder="Silahkan masukkan username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" placeholder="Silahkan masukkan password"></td>
            </tr>

            <tr>
                <td>Nama Lengkap</td>
                <td><input type="text" name="namalengkap" placeholder="Silahkan masukkan Nama Lengkap anda"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="textarea" name="alamat" placeholder="Silahkan masukkan Alamat dengan benar!"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Register"></td>
                <td><input type="reset" value"reset"></td>
            </tr>
        </table>
    </form>
</body>
</html>