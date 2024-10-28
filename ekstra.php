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
  <?php include('header.php'); ?>


    <section class="bgm">
      <div class="container">
        <h2>Ekstrakurikuler</h2>
        <p>Kegiatan Kesiswaan sebagai berikut :
        </p>
        <ol>
          <li>
            Organisasi Intra Sekolah (OSIS)
            <p>Organisasi yang mengelola kegiatan siswa di sekolah.</p>
          </li>
          <li>
            Pramuka
            <p>Aktivitas pendidikan karakter melalui kegiatan luar ruangan.</p>
          </li>
                    <li>
            Banjari
            <p>Grup musik yang menyajikan lagu-lagu religi.</p>
          </li>
                    <li>
            Futsal
            <p>Permainan sepak bola dalam ruangan dengan dua tim.</p>
          </li>
          <li>
            Fotografi
            <p>Mendokumentasikan momen melalui teknik pemotretan.</p>
          </li>
          <li>
            Badminton
            <p>Olahraga raket yang dimainkan satu lawan satu atau beregu.</p>
          </li>
          <li>
            Jurnalistik
          </li>
          
          <li>
            Musik Elektone
          </li>
        </ol>
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
