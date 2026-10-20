
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan Terkirim</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <h1>Pesan Berhasil Terkirim</h1>

        <p>
            Terima kasih,
            <strong>
                <?= $_POST["nama_lengkap"]; ?>!
            </strong>
        </p>

        <p class="data">
            <strong>Nama:</strong>
            <?= $_POST["nama_lengkap"]; ?>
        </p>

        <p class="data">
            <strong>Kelas:</strong>
            <?= $_POST["kelas"]; ?>
        </p>

        <p class="data">
            <strong>Pesan / Kesan:</strong>
            <?= $_POST["pesan"]; ?>
        </p>

        <a href="index.php">Kembali ke Data Mahasiswa</a>
    </div>

</body>
</html>
