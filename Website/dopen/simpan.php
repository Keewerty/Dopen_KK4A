<?php
    include './koneksi.php';

    $nama_donatur = $_POST['nama_donatur'];
    $media_transaksi = $_POST['media_transaksi'];
    $jumlah_donasi = $_POST['jumlah_donasi'];
    
    $sql = "INSERT INTO dopen1 (nama_donatur, media_transaksi, jumlah_donasi) VALUES ('$nama_donatur','$media_transaksi','$jumlah_donasi')";
    
    if($conn->query($sql) === TRUE){
        echo "Donasi Berhasil!! <br>";
        echo "<a href='home/home.html'>Kembali</a><br>";
    }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>