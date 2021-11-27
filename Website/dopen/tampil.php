<?php
    include './koneksi.php';
    echo "
    <a href='formulir.php'>Tambah Data</a><br>
    <a href='home/home.html'>Kembali</a>
    ";

    $sql = "SELECT * FROM dopen1";
    $result = $conn->query($sql);
    $a = 1;

    while($baris = mysqli_fetch_array($result)){
        echo "<br>";
        echo "<$a";
        echo "<br>";
        echo "Nama donatur : " . $baris[1] . "<br>";
        echo "Media transaksi : " . $baris[2] . "<br>";
        echo "Jumlah donasi : " . $baris[3] . "<br>";
   
        echo "<a href='ubah_data.php?id_siswa=$baris[0]'>Ubah &nbsp</a><br>";
        echo "<a href='hapus.php?id_siswa=$baris[0]'>Hapus history ini</a>";
        $a++;
    }
    $conn->close();
?>