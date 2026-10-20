
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <h1>Detail Mahasiswa</h1>

        <p class="data">
            <strong>NIM:</strong> <?= $_GET["nim"] ?>
        </p>

        <p class="data">
            <strong>Nama:</strong> <?= $_GET["nama"] ?>
        </p>

        <p class="data">
            <strong>Jurusan:</strong> <?= $_GET["jurusan"] ?>
        </p>

        <p class="data">
            <strong>Email:</strong> <?= $_GET["email"] ?>
        </p>

        <p class="data">
            <strong>Nilai:</strong> <?= $_GET["nilai"] ?>
        </p>

        <p class="data">
            <strong>Grade:</strong>
            <?php
            if ($_GET["nilai"] >= 85) {
                echo "A";
            } elseif ($_GET["nilai"] >= 70) {
                echo "B";
            } elseif ($_GET["nilai"] >= 60) {
                echo "C";
            } else {
                echo "D";
            }
            ?>
        </p>

        <p class="data">
            <strong>Status:</strong>
            <?php
            if ($_GET["nilai"] >= 70) {
                echo "Lulus";
            } else {
                echo "Tidak Lulus";
            }
            ?>
        </p>

        <a href="index.php">Kembali</a>
    </div>

</body>
</html>
