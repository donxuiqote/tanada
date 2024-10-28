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





      <section>
        <div class="container">
            <h2>Kontak Kami</h2>
            <div class="row">
                <div class="col-md-6 bgm p-5">
                    <div class="text-center">
                        <div class="container">
                            <p>Jika Anda memiliki pertanyaan atau butuh informasi lebih lanjut, silakan hubungi kami melalui form berikut</p>
                            <object data="icons/undraw_opened_re_i38e.svg" type="image/svg+xml" width="250" height="250"></object>
                        </div>
    
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="container row p-5">
                        <div class="col">
                            <form action="">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Nama</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                                <div class="mb-3">
                                    <label for="message" class="form-label">Pesan</label>
                                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                </div>
                                <button id="email" type="" class="btn btn-success">Kirim</button>
                            </form>
                        </div>
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