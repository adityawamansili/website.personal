<!DOCTYPE html>
<html>
<head>
    <title>Formulir Pendaftaran Siswa Baru | SMAN 2 BAUBAU</title>
</head>

<body 
    style= "background-color:#1690A7 ;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;">
    <header>
        <h3 style= "color:white;">Formulir Pendaftaran Siswa Baru</h3>
    </header>
    <link rel="stylesheet" href="../style.css">

    <form action="proses-pendaftaran.php" method="POST">

        <fieldset>

        <p>
            <label for="nama" style= "color:white;">Nama: </label>
            <input type="text" name="nama" placeholder="nama lengkap" />
        </p>
        <p>
            <label for="alamat" style= "color:white;">Alamat: </label>
            <textarea name="alamat"></textarea>
        </p>
        <p>
            <label for="jenis_kelamin" style= "color:white;">Jenis Kelamin: </label>
            <label style= "color:white;"><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
            <label style= "color:white;"><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
        </p>
        <p>
            <label for="agama" style= "color:white;">Agama: </label>
            <select name="agama">
                <option>Islam</option>
                <option>Kristen</option>
                <option>Hindu</option>
                <option>Budha</option>
                <option>Atheis</option>
            </select>
        </p>
        <p>
            <label for="sekolah_asal" style= "color:white;">Sekolah Asal: </label>
            <input type="text" name="sekolah_asal" placeholder="nama sekolah" />
        </p>
        <p>
            <input type="submit" value="Daftar" name="daftar" />
        </p>

        </fieldset>

    </form>

</body>
</html>
