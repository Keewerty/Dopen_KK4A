<?php
    include './koneksi.php';

    $id = $_GET['id_donatur'];

    $sql = "DELETE FROM dopen1 WHERE id='$id'";

    if($conn->query($sql) === TRUE){
        echo "History berhasil dihapus<br>";
        echo "<a href='tampil.php'>Kembali</a><br>";
    }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    };

    $conn->close();
?>