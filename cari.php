	<form action="" method="POST">
	<a href="form.php"><input type="submit" name="submit" value="Input Data"></a>
	<input type="text" name="search"><input type="submit" name="cari" value="cari"></a>
	<a href="tampil.php"><input type="submit" name="tampil" value="tampil"></a>
	</form>

<?php 
if ((isset($_POST['cari'])) AND ($_POST['search'] <> "")) {
  $search = $_POST['search'];
  $sql = mysqli_query("SELECT * FROM data WHERE nim LIKE '%$nim%' ");
  $hasil = mysqli_query($con,$sql);
  //menampilkan jumlah hasil pencarian
  $jumlah = mysqli_num_rows($hasil); 
  if ($jumlah > 0) {
    echo '<p>Ada '.$jumlah.' data yang sesuai.</p>';
   
        while ($data=mysqli_fetch_rows($hasil)) {
        echo $data['nama'].'<br>';
        echo $data['jenis_kelamin'].'<br>';
      }
  }
  else {
   // menampilkan pesan zero data
    echo 'Maaf, hasil pencarian tidak ditemukan.';
  }
} 
else { echo 'Masukkan dulu kata kuncinya';}
?>