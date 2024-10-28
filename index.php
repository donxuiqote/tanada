<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" type="image/x-icon" href="/icons/tanada.png">
    <title>SMK Tanada</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net" />
    <link
        href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap"
        rel="stylesheet" />
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        rel="stylesheet" />

    <!-- Styles -->
    <script src="app.js"></script>
    <link rel="stylesheet" href="app.css" />
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous" />
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <!-- Latest compiled and minified CSS -->
</head>

<body class="">
    <?php include('navbar.php'); ?>
    <?php include('header.php'); ?>
    <section>
        <div class="container">
            <div class="">
                <div class="">
                    <h2>Sambutan Kepala Sekolah</h2>
                </div>
                <img
                    src="foto/Pak Hammam.JPG"
                    alt="Kepala Sekolah"
                    class="images-pendidik" />
                <p class="name">Hammam Labib S.P., S.Kom., M.Pd</p>
                <p class="context">
                    "Kami berkomitmen untuk menyediakan pendidikan terbaik bagi setiap
                    siswa. Kami percaya bahwa setiap anak memiliki potensi untuk
                    berkembang dengan bimbingan yang tepat."
                </p>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="">
                <h2>Informasi</h2>
            </div>
            <div class="card-container">
                <div class="card">
                    <img src="informasi/informasi1.jpg" alt="News Image" />
                    <div class="">
                        <h3 class="">
                            Kegiatan LDKS SMK Tanada Berlangsung dengan Sukses
                        </h3>
                        <p class="">
                            Kegiatan LDKS SMK Tanada Berlangsung dengan Sukses SMK Tanada
                            sukses menggelar kegiatan Latihan Dasar Kepemimpinan Siswa
                            (LDKS) yang berlangsung pada 13-14 September 2024. Kegiatan ini
                            bertujuan untuk membentuk jiwa kepemimpinan, melatih tanggung
                            jawab, serta meningkatkan kedisiplinan para siswa. LDKS tahun
                            ini diikuti oleh seluruh pengurus OSIS serta perwakilan dari
                            setiap kelas yang telah dipilih. Dengan berbagai kegiatan
                            menarik seperti outbound, diskusi kelompok, serta simulasi
                            kepemimpinan, peserta diajak untuk mengembangkan kemampuan
                            kerjasama tim, berkomunikasi dengan baik, dan menjadi pemimpin
                            yang bertanggung jawab. Kegiatan ini merupakan bagian dari upaya
                            kami untuk mencetak siswa yang tidak hanya berprestasi di bidang
                            akademik, tetapi juga memiliki jiwa kepemimpinan yang kuat,"
                            ujar Kepala Sekolah SMK Tanada. Dengan adanya LDKS ini,
                            diharapkan siswa SMK Tanada dapat menjadi pemimpin masa depan
                            yang berintegritas dan berkarakter.
                        </p>
                        <div class="">
                            <a href="berita.php" class="read-more">Read more</a>
                            <span class="date">12 September 2024</span>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <img src="informasi/informasi_berita_2_2.jpg" alt="News Image" />
                    <div class="">
                        <h3 class="">
                            Kegiatan UKK SMK Tanada Bersama Dunia Usaha dan BPK Khamim Edilux
                        </h3>
                        <p class="">
                            SMK Tanada menggelar kegiatan Uji Kompetensi Keahlian (UKK) yang berlangsung pada tanggal 7 Mei 2024, bekerja sama dengan Dunia Usaha dan Dunia Industri. Acara ini dihadiri oleh Bapak Khamim dari Edilux, yang memberikan dukungan penuh dalam pelaksanaan UKK ini.

                            Kegiatan UKK bertujuan untuk mengukur kompetensi siswa di bidang keahlian masing-masing dan mempersiapkan mereka untuk menghadapi dunia kerja. Siswa-siswa SMK Tanada menunjukkan keterampilan yang telah mereka pelajari selama ini, baik dalam teori maupun praktik.

                            Bapak Khamim juga memberikan wawasan berharga tentang tuntutan industri saat ini, serta tips untuk sukses dalam memasuki dunia kerja. Peserta sangat antusias mengikuti sesi tanya jawab, yang semakin memperkaya pengalaman mereka.

                            Dengan adanya kegiatan ini, SMK Tanada berkomitmen untuk terus menjalin kemitraan yang erat dengan industri demi menciptakan lulusan yang siap pakai dan berdaya saing tinggi.

                            Semoga kegiatan UKK ini dapat memberikan manfaat maksimal bagi siswa dan mendukung mereka dalam mencapai cita-cita di dunia kerja.
                        </p>
                        <div class="">
                            <a href="berita2.php" class="read-more">Read more</a>
                            <span class="date">7 Mei 2024</span>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <img src="informasi/informasi2.jpg" alt="News Image" />
                    <div class="">
                        <h3 class="">
                            Pemilihan Ketua OSIS 2024
                        </h3>
                        <p class="">
                            Pada tanggal 23 Agustus 2024, SMK Tanada mengadakan pemilihan ketua OSIS yang diikuti dengan antusias oleh seluruh siswa. Acara ini berlangsung di aula sekolah dengan dihadiri oleh seluruh siswa kelas X, XI, dan XII, serta guru-guru.

                            Pemilihan ketua OSIS tahun ini mengusung tema “Bersama Membangun Kreativitas dan Kepemimpinan”. Sebelum pemilihan, para calon ketua OSIS melakukan kampanye dengan menyampaikan visi dan misi mereka di depan siswa. Masing-masing calon menunjukkan kreativitas dan kemampuan orasi yang memukau, menjadikan pemilihan ini penuh semangat dan kompetisi yang sehat.

                            Setelah proses pemungutan suara yang berlangsung selama satu hari, hasil pemilihan akan diumumkan pada tanggal 26 Agustus 2024. Ketua OSIS terpilih diharapkan dapat menjadi pemimpin yang inspiratif dan membawa banyak perubahan positif bagi siswa dan sekolah.

                            Dengan semangat kebersamaan, diharapkan pemilihan ini tidak hanya menghasilkan ketua OSIS yang berkualitas, tetapi juga dapat meningkatkan rasa kepemimpinan dan tanggung jawab di kalangan siswa SMK Tanada. Selamat kepada semua calon dan semoga terpilih pemimpin yang terbaik!
                        </p>
                        <div class="">
                            <a href="berita3.php" class="read-more">Read more</a>
                            <span class="date">12 September 2024</span>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <img src="galeri/galeri14.jpg" alt="News Image" />
                    <div class="">
                        <h3 class="">
                            Kegiatan Ujian Tengah Semester (UTS) Ganjil 2024
                        </h3>
                        <p class="">
                            SMK Tanada akan mengadakan Ujian Tengah Semester (UTS) untuk semester ganjil pada tanggal 30 September hingga 7 Oktober 2024. Kegiatan ini diharapkan berjalan lancar dan memberikan kesempatan bagi siswa untuk menunjukkan kemampuan akademis mereka.

                            Seluruh siswa diharapkan mempersiapkan diri dengan baik, belajar secara efektif, dan mengikuti jadwal ujian yang telah ditentukan. Diharapkan, hasil UTS ini dapat mencerminkan usaha dan dedikasi siswa dalam belajar.

                            Mari kita doakan agar semua siswa SMK Tanada mendapatkan nilai yang baik. Semoga usaha dan persiapan yang dilakukan membuahkan hasil yang memuaskan. Aamiin!
                        </p>
                        <div class="">
                            <a href="berita4.php" class="read-more">Read more</a>
                            <span class="date">23 Agustus 2024</span>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <section class="bgm">
        <div class="container py-4 text-center">
            <div class="">
                <img
                    src="icons/tanada.png"
                    alt="Logo SMK TANADA"
                    class="logo-tentang" />
            </div>
            <h2 class="mt-4">Tentang Kami</h2>
            <p class="">
                SMK TANADA didirikan oleh Yayasan TANADA yang merupakan pengembangan
                dari TK, MI, MTS, dan MA. SMK TANADA hadir dengan metode pembelajaran
                yang tidak hanya membekali siswa di bidang akademik saja tetapi juga
                membekali keterampilan dan agama. Pola pendidikan diarahkan pada
                penggalian potensi siswa secara maksimal dengan memanfaatkan potensi
                dan fasilitas yang dimiliki siswa. Para lulusan betul-betul
                diproyeksikan pada penguasaan kemampuan dan keterampilan untuk mandiri
                dan dapat memenangkan persaingan di dunia kerja serta mampu berkarya
                dalam kehidupan bermasyarakat.
            </p>
        </div>
    </section>

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
                class="container d-flex align-items-center justify-content-center py-4">
                <img
                    src="icons/undraw_books_re_8gea.svg"
                    alt="Books"
                    width="250"
                    height="250" />
            </div>
        </div>
    </section>

    <section class="bgm" id="stats">
        <div class="row text-center">
            <div class="col-md-4">
                <h2 id="jumlah-siswa">0</h2>
                <p>Jumlah Siswa</p>
            </div>
            <div class="col-md-4">
                <h2 id="tenaga-pendidik">0</h2>
                <p>Tenaga Pendidik</p>
            </div>
            <div class="col-md-4">
                <h2 id="tata-usaha">0</h2>
                <p>Tata Usaha</p>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="">
                <h2 class="">Program Jurusan</h2>
            </div>
            <div class="card-container">
                <div class="card">
                    <img
                        src="galeri/ulw.jpg"
                        alt="News Image" />
                    <div class="card-body">
                        <h5 class="">Usaha Layanan Wisata</h5>
                        <p class="card-text">
                            Menyediakan keterampilan dalam manajemen pariwisata, perencanaan
                            perjalanan, dan pelayanan pelanggan dengan fokus pada pengalaman
                            praktis.
                        </p>
                        <div class="text-end">
                            <a href="ulw.php" class="btn btn-program">Pelajari Lebih Lanjut</a>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <img
                        src="galeri/dkv2.jpg"
                        alt="News Image" />
                    <div class="card-body">
                        <h5 class="">Desain Komunikasi Visual (DKV)</h5>
                        <p class="card-text">
                            Program ini fokus pada pengembangan keterampilan desain dan
                            komunikasi visual yang dibutuhkan untuk karier kreatif di
                            berbagai industri.
                        </p>
                        <div class="text-end">
                            <a href="dkv.php" class="btn btn-program">Pelajari Lebih Lanjut</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="">
        <div class="container">
            <div class="">
                <h2>Galeri Sekolah</h2>
            </div>
            <div class="galeri-grid container">
                <div>
                    <img
                        src="galeri/galeri1.jpg"
                        alt="Galeri 1"
                        class="img-fluid " />
                </div>
                <div>
                    <img
                        src="galeri/galeri2.jpg"
                        alt="Galeri 2"
                        class="img-fluid " />
                </div>
                <div>
                    <img
                        src="galeri/galeri7.jpg"
                        alt="Galeri 3"
                        class="img-fluid " />
                </div>
                <div>
                    <img
                        src="galeri/galeri4.jpg"
                        alt="Galeri 4"
                        class="img-fluid " />
                </div>
                <div>
                    <img
                        src="galeri/galeri5.jpg"
                        alt="Galeri 5"
                        class="img-fluid " />
                </div>
                <div>
                    <img
                        src="galeri/galeri6.jpg"
                        alt="Galeri 6"
                        class="img-fluid " />
                </div>
            </div>
        </div>
    </section>
    <?php include('footer.php'); ?>
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
</body>

</html>
