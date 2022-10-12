<?php
include("koneksi.php");
if(isset($_POST['tambah'])){
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $Jk=$_POST['Jk'];
    $no_tlpn=$_POST['no_tlpn'];
    $agama=$_POST['agama'];
    $tanggal_masuk=$_POST['tanggal_masuk'];
    $gejala=$_POST['gejala'];
    $tempat_lahir=$_POST['tempat_lahir'];
    $tanggal_lahir=$_POST['tanggal_lahir'];
    $no_kamar=$_POST['no_kamar'];


    $sql = "INSERT INTO tb_pasien(nama, alamat, Jk, no_tlpn, agama, tanggal_masuk, gejala, tempat_lahir, tanggal_lahir, no_kamar) VALUES N('$nama', '$alamat', '$Jk', '$no_tlpn ', '$agama', '$tanggal_masuk', '$gejala', '$tempat_lahir', '$tanggal_lahir', '$no_kamar')";
    $query = mysqli_query($koneksi, $sql);

    if($squery){
       header('Location:index.php?status=sukses');
    }else{
        header('Location:index.php?status=gagal'); 
    }}
    ?>