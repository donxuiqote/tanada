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


    <section class="">
      <div class="container text-center">
        <h2>Visi & Misi</h2>
        <div class="row mt-4 visi-misi">
          <div class="col-md-6 container">
            <h3 class="">Visi</h3>
            <p>
              Menjadi sekolah unggulan di Sidoarjo dengan menghasilkan lulusan
              yang takwa, cerdas, dan kompetitif.
            </p>
          </div>
          <div class="col-md-6 container">
            <h3 class="">Misi</h3>
            <p>
              Memberikan pendidikan berkualitas yang berorientasi pada
              perkembangan zaman. Membentuk karakter siswa dengan nilai-nilai
              moral dan etika. Mengembangkan kreativitas dan potensi siswa dalam
              berbagai bidang.
            </p>
          </div>
        </div>
        <div
          class="container d-flex align-items-center justify-content-center py-4"
        >
          <img
            src="icons/undraw_books_re_8gea.svg"
            alt="Books"
            width="250"
            height="250"
          />
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