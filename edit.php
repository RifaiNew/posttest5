<?php
require "koneksi.php";
$id = $_GET["id"];

$result = mysqli_query($conn, "select * from stiker where id_stiker = '$id'");

$mainan = [];

while ($row = mysqli_fetch_assoc($result)) {
    $mainan[] = $row;
}

$mainan = $mainan[0];

if (isset($_POST["ubah"])) {
    $nama = $_POST["nama_stiker"];
    $jenis = $_POST["jenis_stiker"];
    $deskripsi = $_POST["deskripsi_stiker"];
    $harga = $_POST["harga_stiker"];

    // Gambar
    $gambar = $_FILES["gambar"]['name'];
    $explode = explode('.', $gambar);
    $ekstensi = strtolower(end($explode));
    $gambar_baru = "$nama.$ekstensi";
    $temp = $_FILES['gambar']['tmp_name'];

    if (move_uploaded_file($temp, 'img/'.$gambar_baru)){
        $result = mysqli_query($conn, "update stiker set nama_stiker = '$nama', jenis_stiker = '$jenis', deskripsi_stiker = '$deskripsi', harga_stiker = '$harga', gambar = '$gambar_baru' where id_stiker = '$id'");

        if ($result) {
            echo "
                    <script>
                    alert('Data Berhasil Diubah!');
                    document.location.href = 'data.php';
                    </script>
                ";
        } else {
            echo "
                <script>
                alert('Data Gagal Diubah!');
                </script>
            ";
        }   
    }
    else{
        echo "Gagal Menghapus";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleform.css">
    <title>Tambah Data</title>
</head>

<body>
    <div class="kotak_login">

        <form action="" method="post" enctype="multipart/form-data">
            <div class="txt_field">
                <input type="text" name="nama_stiker" id="" value="<?=$mainan["nama_stiker"]?>" required> <br>
            </div>
            
            <div class="txt_field">
                <input type="text" name="deskripsi_stiker" value="<?=$mainan["deskripsi_stiker"]?>" required> <br>
            </div>
            
            <div class="txt_field">
                <input type="number" name="harga_stiker" value="<?=$mainan["harga_stiker"]?>" required> <br>
            </div>
            
            <label for="">Jenis Stiker</label> <br>
            <select class="select" name="jenis_stiker" id="" required>
                <option value="penyanyi">penyanyi</option>
                <option value="kartun">kartun</option>
                <option value="anime">anime</option>
                <option value="logo">logo</option>
                <option value="doodle">doodle</option>
            </select>
    
            <div class="gambar"> 
                <input type="file" name="gambar" id="" required>
            </div>
            <div class="button">
                <input type="submit" name="ubah"></input>
                <a href="data.php">Kembali</a>
            </div>
        </form>
    </div>
</body>

</html>