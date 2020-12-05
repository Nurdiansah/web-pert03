<?php
if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $matkul = $_POST['matkul'];
    $kehadiran = $_POST['kehadiran'];
    $tugas = $_POST['tugas'];
    $uts = $_POST['uts'];
    $uas = $_POST['uas'];

    // Kondisi
    $nilaiKehadiran = round(($kehadiran / 18) * 100);
    $kehadiranBobot = $nilaiKehadiran * 0.1;

    $tugasBobot = $tugas * 0.2;
    $utsBobot = $uts * 0.3;
    $uasBobot = $uas * 0.4;

    $nilaiAkhir = $kehadiranBobot + $tugasBobot + $utsBobot + $uasBobot;

    if ($nilaiAkhir <= 100 && $nilaiAkhir >= 0) {

        if ($nilaiAkhir >= 80) {
            $grade = "A";
        } else if ($nilaiAkhir >= 70) {
            $grade = "B";
        } elseif ($nilaiAkhir >= 60) {
            $grade = "C";
        } elseif ($nilaiAkhir >= 50) {
            $grade = "D";
        } else {
            $grade = "E";
        }
    } else {
        $grade = "Ada yang salah dalam penginputan";
    }

    if ($nilaiAkhir > 65) {
        $status = "Lulus";
    } else {
        $status = "Tidak Lulus";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web2 | Nurdiansah </title>

    <link rel="stylesheet" href="../assets/style.css">
    <link rel="stylesheet" href="../assets/grid.css">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center mb-">Web 2 | Pertemuan 03 | Nurdiansah</h1>
        <div class="row">
            <!-- Form  -->
            <div class="col-sm-6">
                <div class="card bg-primary">
                    <div class="card-body">
                        <form action="" method="POST">
                            <h3 class="mb-3">Input nilai </h3>
                            <div class="form-group">
                                <label class="col-sm-3">Nama</label>
                                <input type="text" name="nama" placeholder="Nama">
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3">Nim</label>
                                <input type="text" name="nim" placeholder="1701010101">
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3">Mata Kuliah</label>
                                <input type="text" name="matkul" placeholder="Web 2">
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3">Kehadiran</label>
                                <input type="number" name="kehadiran" placeholder="18" max="18" min="1">
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3">Tugas</label>
                                <input type="number" name="tugas" min="0" max="100">
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3">UTS</label>
                                <input type="number" name="uts" min="0" max="100">
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3">UAS</label>
                                <input type="number" name="uas" min="0" max="100">
                            </div>
                            <div class="form-group">
                                <button type="submit" name="simpan" class="bg-danger float-right">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Endform -->

            <?php if (isset($_POST['simpan'])) { ?>
                <!-- Table -->
                <table class="col-sm-6">
                    <thead class="text-center mb-3">
                        <tr>
                            <td colspan="4">NILAI AKADEMIK <?= $matkul ?></td>
                        </tr>
                        <tr>
                            <td colspan="4">Nama : <?= $nama ?></td>
                        </tr>
                        <tr>
                            <td colspan="4">Nim : <?= $nim ?></td>
                        </tr>
                    </thead>
                    <br>
                    <tbody>
                        <tr>
                            <td>Jumlah Kehadiran </td>
                            <td>: <?= $kehadiran ?></td>
                            <td>Nilai Kehadiran </td>
                            <td>: <?= $nilaiKehadiran ?></td>
                        </tr>
                        <tr>
                            <td>Nilai Tugas </td>
                            <td>: <?= $tugas ?></td>
                            <td>Nilai UTS </td>
                            <td>: <?= $uts ?></td>
                        </tr>
                        <tr>
                            <td>Nilai UAS </td>
                            <td>: <?= $uas ?></td>
                            <td>Nilai Akhir </td>
                            <td>: <?= $nilaiAkhir ?></td>
                        </tr>
                        <tr>
                            <td>Grade </td>
                            <td>: <?= $grade ?></td>
                            <td>Keterangan </td>
                            <td>: <?= $status ?></td>
                        </tr>
                    </tbody>
                </table>
                <!-- EndTable -->
            <?php } ?>
        </div>
    </div>
</body>

</html>