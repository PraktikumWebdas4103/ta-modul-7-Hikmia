    <a href="form.php"><input type="submit" name="submit" value="Input Data"></a>
    <input type="text" name="search"><input type="submit" name="cari" value="cari"></a>
    <a href="tampil.php"><input type="submit" name="tampil" value="tampil"></a>
<?php
include "connect.php";
$query = mysqli_query($con,"SELECT * FROM data ORDER BY nim DESC");
?>
<form action="form.php" method="post">
    <table border="1" cellpadding="0" cellspacing="0">
        <tr>
            <th>nim</th>
            <th>nama</th>
            <th>aksi</th>
        </tr>
        <?php if(mysqli_num_rows($query)>0){ ?>
        <?php
            $no = 1;
            while($data = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?php echo $data["nim"];?></td>
            <td><?php echo $data["nama"];?></td>
            <td>
                <a href="hapus.php?ni=<?php echo $data['nim'];?>" onclick="return confirm('Yakin mau di hapus?');">|| Delete ||</a>
                <a href="tampil.php?ni=<?php echo $data['nim'];?>">|| Tampil ||</a>
            </td>
        </tr>
        <?php $no++; } ?>
        <?php } ?>
    </table>
</form>