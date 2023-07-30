<!DOCTYPE html>
<html>
<head>
    <title style= "color:white;">Pendaftaran Siswa Baru | SMAN 2 BAUBAU</title>
</head>

<body 
    style= "background-color:#1690A7 ;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;">
    <header>
        <h3 style= "color:white;">Pendaftaran Siswa Baru</h3>
        <h1 style= "color:white;">SMAN 2 BAUBAU</h1>
    </header>

    <h4 style= "color:white;">Menu</h4>
    <nav>
        <?php if(isset($_GET['status'])): ?>
            <p>
                <?php
                    if($_GET['status'] == 'sukses'){
                        echo "Pendaftaran siswa baru berhasil!";
                    } else {
                        echo "Pendaftaran gagal!";
                    }
                ?>
            </p>
        <?php endif; ?>
        <ul>
            <li><a href="form-daftar.php" style= "color:white;">Daftar Baru</a></li>
            <li><a href="list-siswa.php" style= "color:white;">Pendaftar</a></li>
        </ul>
    </nav>

    </body>
</html>