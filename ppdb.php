<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>SMK Tanada</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net" />
    <link
      href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
      rel="stylesheet"
    />

    <!-- Styles -->
    <script src="app.js"></script>
    <link rel="stylesheet" href="app.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    <!-- Latest compiled and minified CSS -->
  </head>

  <body class="">
  <?php include('navbar.php'); ?>


      




      <section class="">
        <div class="container">
            <h2>Informasi PPDB</h2>
            <div class="text-center mb-4">
                <img src="galeri/PPDB.jpg" alt="News Image" class="img-fluid mb-4"> 
                <h4>Tanggal Pendaftaran: 1 Januari - 30 Juni</h4>
            </div>
        </div>
    </section>
    
    <section class="bgm">
        <div class="container">
            <h2>PPDB Tahun Ajaran 2023/2024</h2>
            <div class="container">
                <h4>Kompetensi Keahlian</h4>
                <ul class="list-group">
                    <li class="list-group-item">DKV (Desain Komunikasi Visual)</li>
                    <li class="list-group-item">ULW (Usaha Layanan Wisata)</li>
                </ul>
            </div>
            <div class="my-5">
                <h4>Syarat-syarat Pendaftaran</h4>
                <ul class="list-group">
                    <li class="list-group-item">Mengisi Formulir</li>
                    <li class="list-group-item">Membayar Administrasi</li>
                    <li class="list-group-item">FotoCopy Ijazah di Legalisir</li>
                    <li class="list-group-item">FotoCopy Akta Kelahiran</li>
                    <li class="list-group-item">FotoCopy Kartu Keluarga</li>
                    <li class="list-group-item">FotoCopy Orang Tua atau Wali</li>
                    <li class="list-group-item">PAS Foto Terbaru 3x4 = 2 Lembar</li>
                </ul>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="table-responsive my-5">
                <h2>Informasi Pendaftaran</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Gelombang</th>
                            <th>Waktu Pendaftaran</th>
                            <th>Cashback</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Gelombang I</td>
                            <td>01 November - 31 Januari 2024</td>
                            <td>Rp. 1.000.000</td>
                        </tr>
                        <tr>
                            <td>Gelombang II</td>
                            <td>01 Februari - 30 April 2024</td>
                            <td>Rp. 500.000</td>
                        </tr>
                        <tr>
                            <td>Gelombang III</td>
                            <td>01 Mei 2024 - Kuota Terpenuhi</td>
                            <td>Rp. 200.000</td>
                        </tr>
                        <tr>
                            <td colspan="3" class="text-center">Setiap Siswa yang Mendaftarkan Mendapatkan 1 Voucher Undian Hadiah</td>
                        </tr>
                        <tr>
                            <td colspan="3" class="text-center">Syarat dan Ketentuan Berlaku</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="container">
                <div class="pendaftaran mb-4">
                    <div class="container">
                        <h2>Contact Person Pendaftaran</h2>
                        <ul>
                            <li><span>Bu Colbi : </span> <a href="https://wa.me/+6285785008870">0857 8500 8870</a></li>
                            <li><span>Pak Dirga : </span> <a href="https://wa.me/+6285785008870">0857 8500 8870</a></li>
                            <li><span>Bu Niswah : </span> <a href="https://wa.me/+6285785008870">0857 8500 8870</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>






    <?php include('footer.php'); ?>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"
      integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
      crossorigin="anonymous"
    ></script>
  </body>
</html>

