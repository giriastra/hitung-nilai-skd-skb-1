<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="Aplikasi Hitung Nilai SKD SKB CPNS 2024">
    <meta name="description"
        content="Aplikasi sederhana untuk menghitung nilai integrasi SKD dan SKB CPNS 2024 dengan cepat dan mudah. Cocok untuk membantu persiapan seleksi CPNS Anda.">
    <meta name="keywords"
        content="Aplikasi SKD SKB CPNS, Hitung Nilai CPNS 2024, Integrasi Nilai CPNS, Kalkulator SKD SKB, Seleksi CPNS, Persiapan CPNS 2024">
    <meta name="author" content="Arjalika Studio">
    <meta name="robots" content="index, follow">
    <title>Form Perhitungan Nilai</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        

        @media (max-width: 767px) {

            .adsense.fixed-left,
            .adsense.fixed-right {
                display: none;
            }
        }

        .loading-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.8);
            z-index: 1000;
            display: none;
            align-items: center;
            justify-content: center;
        }

        .btn-left {
            background: linear-gradient(to right, #6a11cb, #2575fc);
            color: white;
            border: none;
            padding: 12px 30px;
            font-size: 16px;
            border-radius: 5px;
            text-align: center;
            display: inline-block;
            transition: background 0.3s ease-in-out;
        }

        .btn-left:hover {
            background: linear-gradient(to right, #2575fc, #6a11cb);
            text-decoration: none;
        }

        .btn-right {
            background: linear-gradient(to right, #ff7e5f, #feb47b);
            color: white;
            border: none;
            padding: 12px 30px;
            font-size: 16px;
            border-radius: 5px;
            text-align: center;
            display: inline-block;
            transition: background 0.3s ease-in-out;
        }

        .btn-right:hover {
            background: linear-gradient(to right, #feb47b, #ff7e5f);
            text-decoration: none;
        }

        .button-container {
            display: flex;
            justify-content: space-between;
            /* Membuat tombol berdampingan */
            gap: 20px;
        }
    </style>
</head>

<body>

    <!-- Loading Spinner -->
    <div class="loading-overlay" id="loading-overlay">
        <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>
 

    <div class="container mt-2">
        <h1 class="text-center mb-2">Form Integrasi Nilai SKD, SKB CAT, SKBT</h1>

        <!-- Iklan Kiri -->
        <div class="adsense fixed-left">
            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7273343221139360"
                crossorigin="anonymous"></script>
            <!-- skd-vertical -->
            <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-7273343221139360"
                data-ad-slot="5371928984" data-ad-format="auto" data-full-width-responsive="true"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>
 

        <div class="container mt-2 mb-2">
            <!-- Div Pembungkus untuk Tombol -->
            <div class="button-container">
                <!-- Tombol Kiri -->
                <a href="aplikasi-hitung-nilai-skd-skb-cpns-2024.php" class="btn-left">SKD - SKB</a>

                <!-- Tombol Kanan -->
                <a href="aplikasi-hitung-nilai-skd-skb-skbt-cpns-2024.php" class="btn-right">SKD - SKB - SKBT</a>
            </div>
        </div>

        <div class="card shadow-lg">
            <div class="card-body">
                <form method="post" action="" id="calculation-form">
                    <div class="mb-3">
                        <label for="nilai_skd" class="form-label">Nilai SKD:</label>
                        <input type="number" id="nilai_skd" name="nilai_skd" step="0.01" max="550"
                            class="form-control" placeholder="Maksimal 550" required>
                    </div>
                    <div class="mb-3">
                        <label for="skb_cat" class="form-label">Nilai SKB CAT:</label>
                        <input type="number" id="skb_cat" name="skb_cat" step="0.01" max="500"
                            placeholder="Maksimal 500" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="praker" class="form-label">Nilai Praktek Kerja:</label>
                        <input type="number" id="praker" name="praker" step="0.01" max="200"
                            placeholder="Maksimal 200" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="wawancara" class="form-label">Nilai Wawancara:</label>
                        <input type="number" id="wawancara" name="wawancara" step="0.01" max="50"
                            placeholder="Maksimal 50" class="form-control" required>
                    </div>
                    <button type="submit" name="hitung" class="btn btn-primary w-100">Hitung</button>
                </form>
            </div>
        </div>

        <?php
        if (isset($_POST['hitung'])) {
            $nilai_skd = $_POST['nilai_skd'];
            $skb_cat = $_POST['skb_cat'];
            $praker = $_POST['praker'];
            $wawancara = $_POST['wawancara'];

            if ($nilai_skd > 550) {
                echo '<div class="alert alert-danger mt-4">Nilai SKD tidak boleh lebih dari 550!</div>';
                exit;
            }

            $hasil_skd = ($nilai_skd / 5.5) * 0.4;
            $hasil_praker = ($praker / 2) * 0.4;
            $hasil_wawancara = ($wawancara / 0.5) * 0.1;
            $hasil_skbcat = ($skb_cat / 5) * 0.5;
            $hasil_skb_60 = ($hasil_praker + $hasil_wawancara + $hasil_skbcat) * 0.6;
            $nilai_akhir = ($hasil_skd + $hasil_skb_60);

           
            echo '
            <div class="mt-1">
                <h2 class="text-center">Hasil Perhitungan</h2>
                <table class="table table-bordered mt-4">
                    <thead style="background: linear-gradient(to right, #6a11cb, #2575fc); color: white;" class="text-center">
                        <tr>
                            <th rowspan="2" style="vertical-align: middle;">SKD (40%)</th>
                            <th colspan="3">SKB</th>
                            <th rowspan="2" style="vertical-align: middle;">SKB (60%)</th>
                            <th rowspan="2" style="vertical-align: middle;">Nilai Akhir</th>
                        </tr>
                        <tr>
                            <th>Praker (40%)</th>
                            <th>Wawancara (10%)</th>
                            <th>SKB CAT (50%)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-center">
                            <td>' . number_format($hasil_skd, 2) . '</td>
                            <td>' . number_format($hasil_praker, 2) . '</td>
                            <td>' . number_format($hasil_wawancara, 2) . '</td>
                            <td>' . number_format($hasil_skbcat, 2) . '</td>
                            <td>' . number_format($hasil_skb_60, 2) . '</td>
                            <td>' . number_format($nilai_akhir, 2) . '</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            ';
        }
        ?>


    </div>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const form = document.getElementById('calculation-form');
        const loadingOverlay = document.getElementById('loading-overlay');

        form.addEventListener('submit', function() {
            loadingOverlay.style.display = 'flex';
        });
    </script>
</body>

</html>
