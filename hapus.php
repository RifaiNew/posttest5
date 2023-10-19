<?php
require "koneksi.php";

$id = $_GET["id"];

$result = mysqli_query($conn, "delete from stiker where id_stiker = '$id'");


if ($result) {
    echo "
    <script>
    alert('Data Berhasil Dihapus!');
    document.location.href = 'data.php';
    </script>
    ";
} else {
    echo "
    <script>
    alert('Data Gagal Dihapus!');
    document.location.href = 'index.php';
</script>
";
}
