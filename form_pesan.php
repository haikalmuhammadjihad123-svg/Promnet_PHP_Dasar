
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pesan Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <h1>Form Pesan Mahasiswa</h1>

        <form action="hasil_pesan.php" method="POST">

            <p>Nama</p>
            <input
                type="text"
                id="nama_lengkap"
                name="nama_lengkap"
            >

            <p>Kelas</p>
            <input
                type="text"
                id="kelas"
                name="kelas"
            >

            <p>Pesan / Kesan</p>
            <textarea
                name="pesan"
                id="pesan"
                rows="5"
            ></textarea>

            <div class="form-actions">
                <button type="submit" name="tombol_kirim">
                    Kirim
                </button>

                <a href="index.php" class="btn-kembali">
                    Kembali
                </a>
            </div>

        </form>
    </div>

</body>
</html>
