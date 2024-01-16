<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
    <link href="/backend/css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <style>
        .costom-gallery img {
            margin-right: 40px;
            margin-left: 40px;
        }
    </style>

</head>



<body>
    <main class="flex-shrink-0">

        <nav class="navbar navbar-expand-lg navbar-dark bg-success">
            <div class="container px-5">
                <a class="navbar-brand" href="index.html">
                    <!-- Sesuaikan path dan style sesuai kebutuhan Anda -->
                </a>
                <a class="navbar-brand" href="index.html">OLAHRAGA NEWS</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"><span
                        class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="{{ route('halaman-index') }}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="">About</a></li>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('login') }}">Login</a>
                                </li>
                            </ul>
                    </ul>
                </div>
            </div>
        </nav>


        <style>
            .bg-dark.py-5 {
                background-image: url('/pict/honkaibg.png');
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
                color: rgb(250, 250, 250);
                /* Warna teks untuk kontras dengan background */
            }
        </style>
        <header style="position: relative; text-align: center; color: white;">
            <img src="/backend/bg/bg.jpg" class="bg" alt="" style="width: 100%; height: auto;">
            <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
                <h1 style="font-size: 3rem;">MENS SANA IN CORPORE SANO</h1>
                <p style="font-size: 1.5rem;">di dalam tubuh yang sehat terdapat jiwa yang kuat!</p>
            </div>
        </header>


        <br>
        <br>
        <br>

        <section id="about" class="about">
            <div class="container course pb-5 pt-5">
                <h2 class="text-center">Lapangan</h2>
                <br>
                <div class="row row-cols-1 row-cols-md-3 g-4 text-center custom-gallery">
                    @forelse ($data as $row)
                        <div class="col">
                            <div class="card shadow-sm">
                                <div class="text-center mt-5 mb-2">
                                    <img src="/images/{{ $row->image }}" alt="{{ $row->image }}" width="350"
                                        height="200">
                                </div>

                                <div class="card-body">
                                    <p><strong>Nama Lapangan: </strong> {{ $row->nama_lapangan }}</p>
                                    <p><strong>Alamat: </strong>{{ $row->alamat }}</p>
                                    <p><strong>Status: </strong>{{ $row->status }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="alert alert-danger">
                            Data news belum tersedia
                        </div>
                    @endforelse
                </div>
            </div>
        </section>
        <br>
        <br>
        <br>

        <footer class="text-center text-lg-start bg-dark py-3 text-white">

            <!-- Section: Social media -->

            <!-- Section: Links  -->
            <section class="">
                <div class="container text-center text-md-start mt-5">
                    <!-- Grid row -->
                    <div class="row mt-3">
                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                            <!-- Content -->
                            <p>
                                INI DI BUAT UNTUK MENYELESAIKAN TUGAS AKHIR WEB LANJUT
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4">
                                Sosial Media
                            </h6>
                            <p>
                                <i class="fa-brands fa-instagram"></i>
                                <a href="https://instagram.com/doni.lmt_?r=nametag" class="text-reset">Instagram

                                </a>
                            </p>
                            <p>
                                <i class="fa-brands fa-facebook"></i>
                                <a href="https://www.facebook.com/doni.ajm.79" class="text-reset">Facebook</a>
                            </p>
                            <p>
                                <i class="fa-brands fa-twitter"></i>
                                <a href="https://twitter.com/shiroitsme" class="text-reset">Twitter</a>
                            </p>
                            <p>
                                <i class="fa-brands fa-youtube"></i>
                                <a href="https://youtube.com/@officialshiro18?si=2TU-hYgxiPvQEzNB"
                                    class="text-reset">YouTube</a>
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4">
                                Hubungi Saya
                            </h6>
                            <p>
                                <i class="fa-solid fa-location-dot"></i>
                                Alamat: Jalan Batunyala, Kec. Tengah, Kab. Lombok TENGAH, NTB.
                            </p>
                            <p>
                                <i class="bi bi-envelope"></i>
                                reza@gmail.com
                            </p>
                            <p><i class="bi bi-phone"></i> (+62) 82339263185</p>
                        </div>
                        <!-- Grid column -->
                    </div>
                    <!-- Grid row -->
                </div>
            </section>
            <!-- Section: Links  -->

            <!-- Copyright -->
            <div class="text-center py-4" style="background-color: rgba(0, 0, 0, 0.05);">
                Copyright &copy; 2024 Your Handsome Dev REZA ID | Design by reza ID
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->

    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>

    <script src="/backend/js/scripts.js"></script>
</body>

</html>
