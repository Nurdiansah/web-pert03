<?php
if (isset($_POST['submit'])) {
    // studio 1
    $studio_f1 = $_POST['studio_f1'];
    $jam_tayang_f1 = $_POST['jam_tayang_f1'];
    $jml_tiket_f1 = $_POST['jml_tiket_f1'];
    $makan_f1 = $_POST['makan_f1'];
    $jml_makan_f1 = $_POST['jml_makan_f1'];
    $minum_f1 = $_POST['minum_f1'];
    $jml_minum_f1 = $_POST['jml_minum_f1'];

    switch ($studio_f1) {
        case 'Studio 1':
            $judul_film_f1 = "Extraction";
            break;
        case 'Studio 2':
            $judul_film_f1 = "Bloodshot";
            break;
        case 'Studio 2':
            $judul_film_f1 = "Bad Boys For Life";
            break;
    }

    $bayar_tiket_f1 = $jml_tiket_f1 * 75000;
    $bayar_makan_f1 = $jml_makan_f1 * 50000;
    $bayar_minum_f1 = $jml_minum_f1 * 30000;

    $total_f1 = $bayar_tiket_f1 + $bayar_makan_f1 + $bayar_minum_f1;


    // studio 2
    $studio_f2 = $_POST['studio_f2'];
    $jam_tayang_f2 = $_POST['jam_tayang_f2'];
    $jml_tiket_f2 = $_POST['jml_tiket_f2'];
    $makan_f2 = $_POST['makan_f2'];
    $jml_makan_f2 = $_POST['jml_makan_f2'];
    $minum_f2 = $_POST['minum_f2'];
    $jml_minum_f2 = $_POST['jml_minum_f2'];

    switch ($studio_f2) {
        case 'Studio 1':
            $judul_film_f2 = "Extraction";
            break;
        case 'Studio 2':
            $judul_film_f2 = "Bloodshot";
            break;
        case 'Studio 2':
            $judul_film_f2 = "Bad Boys For Life";
            break;
    }

    $bayar_tiket_f2 = $jml_tiket_f2 * 75000;
    $bayar_makan_f2 = $jml_makan_f2 * 50000;
    $bayar_minum_f2 = $jml_minum_f2 * 30000;

    $total_f2 = $bayar_tiket_f2 + $bayar_makan_f2 + $bayar_minum_f2;

    $grandTotal = $total_f1 + $total_f2;

    $totalTiket = $jml_tiket_f1 + $jml_tiket_f2;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web2 | Nurdiansah</title>

    <link rel="stylesheet" href="../assets/style.css">
    <link rel="stylesheet" href="../assets/grid.css">
</head>

<body>
    <div class="container mt-3">
        <h2 class="text-center">Pemograman Web 2 <br>Tugas Pertemuan 03<br>Nurdiansah</h2>
        <!-- Form -->
        <?php if (isset($_POST['submit'])) { ?>
            <div class="alert alert-success mt-3" role="alert">
                Berhasil di proses!
            </div>
        <?php } ?>
        <h3>Form Pembelian Tiket</h3>
        <form action="" method="POST">
            <div class="row">
                <!-- Form  1-->
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-header bg-warning">
                            Pembelian Tiket Cinema
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="studio">Studio</label>
                                <br>
                                <select name="studio_f1" id="" required>
                                    <option value="">Pilih Studio</option>
                                    <option value="Studio 1">Studio 1</option>
                                    <option value="Studio 2">Studio 2</option>
                                    <option value="Studio 3">Studio 3</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Jam Tayang</label><br>
                                <input type="radio" name="jam_tayang_f1" value="10.00 - 12.00"> 10.00 - 12.00
                                <input type="radio" name="jam_tayang_f1" value="13.00 - 15.00"> 13.00 - 15.00
                                <input type="radio" name="jam_tayang_f1" value="16.00 - 18.00"> 16.00 - 18.00
                            </div>
                            <div class="form-group">
                                <input type="number" name="jml_tiket_f1" placeholder="Jumlah Beli Tiket">
                            </div>
                            <b>Pembelian Tambahan</b>
                            <div class="form-group">
                                <input type="checkbox" name="makan_f1" id=""> Makan
                                <input type="number" name="jml_makan_f1" placeholder="Jumlah Beli">
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="minum_f1" id=""> Minum
                                <input type="number" name="jml_minum_f1" placeholder="Jumlah Beli">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Form 2-->
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-header bg-warning">
                            Pembelian Tiket Cinema
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="studio">Studio</label>
                                <br>
                                <select name="studio_f2" id="">
                                    <option value="">Pilih Studio</option>
                                    <option value="Studio 1">Studio 1</option>
                                    <option value="Studio 2">Studio 2</option>
                                    <option value="Studio 3">Studio 3</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Jam Tayang</label><br>
                                <input type="radio" name="jam_tayang_f2" value="10.00 - 12.00"> 10.00 - 12.00
                                <input type="radio" name="jam_tayang_f2" value="13.00 - 15.00"> 13.00 - 15.00
                                <input type="radio" name="jam_tayang_f2" value="16.00 - 18.00"> 16.00 - 18.00
                            </div>
                            <div class="form-group">
                                <input type="number" name="jml_tiket_f2" placeholder="Jumlah Beli Tiket">
                            </div>
                            <b>Pembelian Tambahan</b>
                            <div class="form-group">
                                <input type="checkbox" name="makan_f2" id=""> Makan
                                <input type="number" name="jml_makan_f2" placeholder="Jumlah Beli">
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="minum_f2" id=""> Minum
                                <input type="number" name="jml_minum_f2" placeholder="Jumlah Beli">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" name="submit" class="btn bg-primary mt-2 mb-2 float-right"> Proses </button>
        </form>
        <!-- Endform -->

        <?php if (isset($_POST['submit'])) { ?>
            <!-- Table -->
            <div class="col-sm-12 col-md-12 mt-3">
                <table class="table table-striped">
                    <caption>Daftar Pemesanan Tiket Cinema</caption>
                    <thead>
                        <tr>
                            <td>STUDIO</td>
                            <td>Judul Film</td>
                            <td>Jam Tayang</td>
                            <td>Jml Tiket</td>
                            <td>Jml Beli Makan</td>
                            <td>Jml Beli Minum</td>
                            <td>Bayar Tiket</td>
                            <td>Bayar Makan</td>
                            <td>Bayar Minum</td>
                            <td>Total</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?= $studio_f1; ?></td>
                            <td><?= $judul_film_f1; ?></td>
                            <td><?= $jam_tayang_f1; ?></td>
                            <td><?= $jml_tiket_f1; ?></td>
                            <td><?= $jml_makan_f1; ?></td>
                            <td><?= $jml_minum_f1; ?></td>
                            <td><?= 'Rp. ' . number_format($bayar_tiket_f1, 0, ",", "."); ?></td>
                            <td><?= 'Rp. ' . number_format($bayar_makan_f1, 0, ",", "."); ?></td>
                            <td><?= 'Rp. ' . number_format($bayar_minum_f1, 0, ",", "."); ?></td>
                            <td><?= 'Rp. ' . number_format($total_f1, 0, ",", "."); ?></td>
                        </tr>
                        <tr>
                            <td><?= $studio_f2; ?></td>
                            <td><?= $judul_film_f2; ?></td>
                            <td><?= $jam_tayang_f2; ?></td>
                            <td><?= $jml_tiket_f2; ?></td>
                            <td><?= $jml_makan_f2; ?></td>
                            <td><?= $jml_minum_f2; ?></td>
                            <td><?= 'Rp. ' . number_format($bayar_tiket_f2, 0, ",", "."); ?></td>
                            <td><?= 'Rp. ' . number_format($bayar_makan_f2, 0, ",", "."); ?></td>
                            <td><?= 'Rp. ' . number_format($bayar_minum_f2, 0, ",", "."); ?></td>
                            <td><?= 'Rp. ' . number_format($total_f2, 0, ",", "."); ?></td>
                        </tr>
                        <tr>
                            <td class="text-right" colspan="9">Jumlah Pendapatan Seluruhnya </td>
                            <td><b><?= 'Rp. ' . number_format($grandTotal, 0, ",", "."); ?></b></td>
                        </tr>
                        <tr>
                            <td class="text-right" colspan="9">Jumlah Tiket Terjual </td>
                            <td><b><?= $totalTiket; ?></b></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- Endtable -->
        <?php } ?>

        <h3 class="mt-5">Pilihan Film Terbaru</h3>
        <div class="row">
            <div class="col-sm-4 mb-2">
                <div class="card" style="width: 100%;">
                    <img src="../assets/extraction.jpg" height="400px" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Extraction</h5>
                        <p class="card-text">Studio 1</p>
                        <a href="#" class="btn btn-primary">Rp.70.000</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-2">
                <div class="card" style="width: 100%;">
                    <img src="../assets/bloodshot.jpeg" height="400px" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Bloodshot</h5>
                        <p class="card-text">Studio 2</p>
                        <a href="#" class="btn btn-primary">Rp.70.000</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-2">
                <div class="card" style="width: 100%;">
                    <img src="../assets/bad.jpg" height="400px" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Bad</h5>
                        <p class="card-text">Studio 3</p>
                        <a href="#" class="btn btn-primary">Rp.70.000</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-sm-6">
                <div class="card text-white bg-primary mb-3" style="max-width: 30rem;">
                    <div class="card-header">Makan</div>
                    <div class="card-body">
                        <h5 class="card-title">Rp.50.000</h5>
                        <p class="card-text">Tambahan makanan untuk menemani menonton film kamu bareng si dia .</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card text-white bg-success mb-3" style="max-width: 30rem;">
                    <div class="card-header">Minum</div>
                    <div class="card-body">
                        <h5 class="card-title">Rp.30.000</h5>
                        <p class="card-text">Tambahan minum untuk menemani menonton film kamu bareng si dia .</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>