<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gallery</title>
    <link rel="stylesheet" href="assets/css/galeri.css">

    <!--Bootstrap Css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>

<header>
    <section class="semua">
        <!-- Navigation Bar -->
        <section class="navigasi">
            <nav class="navbar bg-white bg-opacity-75 fixed-top shadow-sm">
                <div class="container-fluid">
                    <a href="{{ route('landing.index') }}">
                        <img src="assets/img/icon/left-arrow.png" style="width: 50px; height: auto" alt="kembali" />
                    </a>
                    <h1 class="navbar-brand fw-bold"
                        style="margin-right: 45%; font-family: sans-serif; justify-content:center;">
                        Booking Yuk..
                    </h1>
                </div>
            </nav>
        </section>
        <!--Navigation end-->
</header>

<body>
    <main>
        <div class="gallery">
            <div class="gallery-item">
                <img src="assets/img/galeri/danau.jpg" alt="Deskripsi 1">
                <div class="overlay">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsa rerum ut illum alias reiciendis ex
                        impedit voluptatum molestias, aut explicabo.</p>
                </div>
            </div>
            <div class="gallery-item">
                <img src="assets/img/galeri/image (2).png" alt="Deskripsi 2">
                <div class="overlay">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur recusandae libero rerum.
                        Nobis ab quos culpa repellendus. Ea, blanditiis perspiciatis!</p>
                </div>
            </div>
            <div class="gallery-item">
                <img src="assets/img/galeri/image (3).png" alt="Deskripsi 3">
                <div class="overlay">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur recusandae libero rerum.
                        Nobis ab quos culpa repellendus. Ea, blanditiis perspiciatis!</p>
                </div>
            </div>
            <div class="gallery-item">
                <img src="assets/img/galeri/image (5).png" alt="Deskripsi 4">
                <div class="overlay">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur recusandae libero rerum.
                        Nobis ab quos culpa repellendus. Ea, blanditiis perspiciatis!</p>
                </div>
            </div>
            <div class="gallery-item">
                <img src="assets/img/galeri/lawu.jpg" alt="Deskripsi 4">
                <div class="overlay">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur recusandae libero rerum.
                        Nobis ab quos culpa repellendus. Ea, blanditiis perspiciatis!</p>
                </div>
            </div>
            <div class="gallery-item">
                <img src="assets/img/galeri/Prambanan Temple, Indonesia.jpg" alt="Deskripsi 4">
                <div class="overlay">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur recusandae libero rerum.
                        Nobis ab quos culpa repellendus. Ea, blanditiis perspiciatis!</p>
                </div>
            </div>
            <!-- Tambahkan foto lainnya sesuai kebutuhan -->
        </div>
    </main>

    </section>
    <!-- Bootstrap JS and Dependencies -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="assets/js/galeri.js"></script>
    </section>
</body>

</html>