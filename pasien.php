<?php
include("koneksi.php");
?>
<html>
    <head>
    </head>
    <body>
    <h1>Data pendartaran pasien</h1>
    <h4> <a href=tambah.php>tambah pasien</a></h4>
    <table border="1">
        <tr>
            <th>id</th>
            <th>Nama Lengkap</th>
            <th>Alamat</th>
            <th>Jk</th>
            <th>no_tlpn</th>
            <th>Agama</th>
            <th>Tanggal Masuk</th>
            <th>Gejala</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>no Kamar</th>
</tr>


<?php
include("koneksi.php");
$sql='SELECT * FROM tb_pasien';
$query = mysqli_query($koneksi, $sql);

while($Pasien=mysqli_fetch_array($query)){
    echo "<tr>";
    echo "<td>" .$Pasien['id']."</td>";
    echo "<td>" .$Pasien['nama']."</td>";
    echo "<td>" .$Pasien['alamat']."</td>";
    echo "<td>" .$Pasien[ 'Jk']."</td>";
    echo "<td>" .$Pasien[ 'no_tlpn']."</td>";
    echo "<td>" .$Pasien[ 'agama']."</td>";
    echo "<td>" .$Pasien[ 'tanggal_masuk']."</td>";
    echo "<td>" .$Pasien[ 'gejala']."</td>";
    echo "<td>" .$Pasien[ 'tempat_lahir']."</td>";
    echo "<td>" .$Pasien[ 'tanggal_lahir']."</td>";
    echo "<td>" .$Pasien[ 'no_kamar']."</td>";
    echo "<td>";
    echo "<a href='edit-pasien.php?id=". $Pasien['id']. "'>Edit</a>|";
    echo "<a href='hapus-pasien.php?id=". $Pasien['id']. "'>Hapus</a>|";
    echo "</tr>";
}

?>
</table>
</body>
</html>