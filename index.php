
<?php

    $mahasiswa = [
        [
            "nim" => "25001",
            "nama" => "Andi Pratama",
            "jurusan" => "Pendidikan Sistem dan Teknologi Informasi",
            "email" => "andi@upi.edu",
            "nilai" => "88",
        ],
        [
            "nim" => "25002",
            "nama" => "Budi Santoso",
            "jurusan" => "Sistem Telekomunikasi",
            "email" => "budi@upi.edu",
            "nilai" => "76",
        ],
        [
            "nim" => "25003",
            "nama" => "Citra Lestari",
            "jurusan" => "Mekatronika dan Kecerdasan Buatan",
            "email" => "citra@upi.edu",
            "nilai" => "67",
        ],
        [
            "nim" => "25004",
            "nama" => "Dina Maharani",
            "jurusan" => "Pendidikan Sistem dan Teknologi Informasi",
            "email" => "dina@upi.edu",
            "nilai" => "92",
        ],
        [
            "nim" => "25005",
            "nama" => "Eko Saputra",
            "jurusan" => "Sistem Telekomunikasi",
            "email" => "eko@upi.edu",
            "nilai" => "58"
        ]
    ];

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="index">
        <h1>Daftar Mahasiswa</h1>
        <p>Mini Website PHP Dasar</p>

        <div class="tombol-form">
    <a href="form_pesan.php">Isi Form Pesan</a>
    </div>

        <div class="table">
            <table>
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Jurusan</th>
                        <th>Nilai</th>
                        <th>Grade</th>
                        <th>Status</th>
                        <th>Detail</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $no = 1; ?>

                    <?php foreach ($mahasiswa as $data): ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $data["nim"]; ?></td>
                        <td><?= $data["nama"]; ?></td>
                        <td><?= $data["jurusan"]; ?></td>
                        <td><?= $data["nilai"]; ?></td>

                        <td>
                            <?php
                            if ($data["nilai"] >= 85) {
                                echo "A";
                            } elseif ($data["nilai"] >= 70) {
                                echo "B";
                            } elseif ($data["nilai"] >= 60) {
                                echo "C";
                            } else {
                                echo "D";
                            }
                            ?>
                        </td>
        
                        <td>
                            <?php
                            if ($data["nilai"] >= 70) {
                                echo "<span class='lulus'>Lulus</span>";
                            } else {
                                echo "<span class='tidak-lulus'>Tidak Lulus</span>";
                            }
                            ?>
                        </td>

                        <td>
                            <a href="detail_mahasiswa.php?nim=<?=$data["nim"] ?>&nama=<?= $data["nama"] ?>&jurusan=<?= $data["jurusan"] ?>&email=<?= $data["email"] ?>&nilai=<?= $data["nilai"] ?>">
                                Lihat Detail
                            </a>
                        </td>
                    </tr>

                    <?php $no++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>
