<?php
    include './koneksi.php';
    $id = $_POST['id'];
    $nama_donatur = $_POST['nama_donatur'];
    $media_transaksi = $_POST['media_transaksi'];
    $jumlah_donasi = $_POST['jumlah_donasi'];

    $sql = "UPDATE dopen1 SET nama_donatur='$nama_donatur', media_transaksi='$media_transaksi', jumlah_donasi='$jumlah_donasi' WHERE id='$id'";
    if($conn->query($sql) === TRUE){
        echo "Data Berhasil Diubah<br>";
        echo "<a href='tampil.php'>Kembali</a><br>";
    }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>