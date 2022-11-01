<?php
include ("koneksi.php");
if(isset($_POST['simpan'])){
    $nama =$_POST['nama'];
    $jenis =$_POST['jenis'];

$sql ="INSERT INTO tb_parkir(jenis_kendaraan ,tarif_harga) VALUES ('$nama','$jenis')";
$query =mysqli_query($koneksi,$sql);
}
?>