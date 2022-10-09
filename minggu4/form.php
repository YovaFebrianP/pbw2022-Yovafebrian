<?php
$nama_siswa=$_POST['nama_siswa'];
$jenis_kelamin=$_POST['jk'];
$ttl=$_POST['ttl'];
$alamat=$_POST['alamat'];
$no_telpon=$_POST['no_telp'];
$agama=$_POST['agama'];
$asal_sekolah=$_POST['asal_sekolah'];
$foto=$_POST['choose_file'];

$nama_ayah=$_POST['nama_ayah'];
$ttl=$_POST['ttl'];
$agama=$_POST['agama_1'];
$pekerjaan=$_POST['pekerjaan_1'];
$alamat=$_POST['alamat_1'];

$nama_ibu=$_POST['nama_ibu'];
$ttl=$_POST['ttl'];
$agama=$_POST['agama_2'];
$pekerjaan=$_POST['pekerjaan_2'];
$alamat=$_POST['alamat_2'];


echo "nama siswa :".$nama_siswa."<br>";
echo "jenis kelamin :".$jk."<br>";
echo "tempat tanggal lahir :".$ttl."<br>";
echo "alamat :".$alamat."<br>";
echo "no telpon : ".$no_telp."<br>";
echo "agama :".$agama."<br>";
echo "asal sekolah :".$asal_sekolah."<br>";
echo "foto :".$choose_file."<br>";

echo "nama ayah :".$nama_ayah."<br>";
echo "tempat tanggal lahir :".$ttl."<br>";
echo "agama :".$agama_1."<br>";
echo "pekerjaan :".$pekerjaan_1."<br>";
echo "alamat :".$alamat_1."<br>";

echo "nama ibu :".$nama_ibu."<br>";
echo "tempat tanggal lahir :".$ttl."<br>";
echo "agama :".$agama_2."<br>";
echo "pekerjaan :".$pekerjaan_2."<br>";
echo "alamat :".$alamat_2."<br>";

?>