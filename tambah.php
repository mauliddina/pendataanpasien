<html>
    <head>
    </head>
    <body>
        <h1>Form Tambah Pasien</h1>
        <form action="proses-tambah.php" method="POST">
        <form>
            <fieldset>
                <p>
                    <label for="nama">Nama Pasien:</label>
                    <input type="text" name="nama" />
                </p>
                <p> 
                    <label for="alamat">Alamat :</label>
                    <textarea name="alamat" row="5"></textarea>
                </p>
                <p> 
                    <label for="Jk">Jenis Kelamin:</label>
                    <input type="radio" name="JK" value="laki-laki" />laki-laki</td>
                    <input type="radio" name="JK" value="perempuan" />perempuan</td>
                </p>
                <p>
                    <label for="no_tlpn">No Telp:</label>
                    <input type="number" name="no_tlpn" />
                    
                </p>
                <p>
                    <label for="agama">agama:</label>
                    <select name="agama">
                        <option value="islam">Islam</option>
                        <option value="kristen">Kristen</option>
                        <option value="katolik">Katolik</option>
                        <option value="hindhu">Hindhu</option>
                        <option value="budha">Budha</option>
                        <option value="konghuchu">Konghuchu</option>
                    </select>
                </p>
                <p>
                    <label for="tanggal_masuk">tanggal masuk:</label>
                    <input type="date" name="tanggal_masuk" />
                </p>
                <p>
                    <label for="gejala">Gejala:</label>
                    <input type="text" name="gejala" />
                    
                </p>
                <p>
                    <label for="tempat_lahir">Tempat Lahir:</label>
                    <input type="text" name="tempat_
                    lahir" />
                    
                </p>
                <p>
                    <label for="tanggal_lahir">Tanggal_Lahir:</label>
                    <input type="date" name="tanggal_lahir" />
                    
                </p>
                <p>
                    <label for="no_kamar">No.Kamar:</label>
                    <input type="number" name="no_kamar" />
                    
                </p>
                    <input type="submit" value="Tambah pasien" name="tambah" />
                </p>
            </fieldset>
        </form>
    </body?>
</html>