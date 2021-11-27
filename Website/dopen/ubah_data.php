    <?php
         include './koneksi.php';
         $id = $_GET['id'];

         $sql = "SELECT * FROM dopen1 WHERE id='$id'";
         $result = $conn->query($sql);

         $result = $result->fetch_assoc();
    ?>

    <form action="ubah.php" method="post">
        <input type="hidden" name="id" value="<?php echo $result['id']?>">
        <table>

            <td>Ubah nama</td>
                <td>:</td>
                <td><input type="text" name="nama_donatur" value="<?php echo $result['nama_donatur']?>"></td>
            </tr>
            <tr>
            <td>Ubah media transaksi</td>
                <td>:</td>
                <td><input type="text" name="media_transaksi" value="<?php echo $result['media_transaksi']?>"></td>
            </tr>
            <tr>
            <td>Ubah nominal transaksi</td>
                <td>:</td>
                <td><input type="text" name="jumlah_donasi" value="<?php echo $result['jumlah_donasi']?>"></td>
            </tr>
            
        </table>
        <input type="submit" name="simpan" value="UBAH">
    </form>