<?php
// Memasukkan file konfigurasi
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kegiatan = $_POST['kegiatan'];

    // Menyiapkan pernyataan SQL untuk menambahkan data
    $sql = "INSERT INTO kegiatan (kegiatan) VALUES ('$kegiatan')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Kegiatan kamu sudah ditambahkan');</script>";
    } else {
        echo "<script>alert('Terjadi masalah: " . $conn->error . "');</script>";
    }

}
$sql = "SELECT id, kegiatan FROM kegiatan";
$result = $conn->query($sql);
$conn->close(); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="daftar">
            <h1>Daftar kegiatanmu hari ini!..</h1>
            <ul>
                <?php
                if ($result->num_rows > 0) {
                    // Output data dari setiap baris
                    while($row = $result->fetch_assoc()) {
                        echo "<li>" . $row["kegiatan"] . "</li>";
                    }
                } else {
                    echo "<li>Belum ada kegiatan.</li>";
                }
                ?>
            </ul>
        </div>
        <div class="tambah">
            <form action="nama_kegiatan1" method="post">
                <h1>Daftar Nama</h1>
                <input type="text" name="kegiatan" id="kegiatan" required>
                <button type="submit">Tambahkan +</button>
            </form>
        </div>
    </div>
</body>
</html>
