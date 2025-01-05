<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Armada Kami</title>

    <!--My Css-->
    <link rel="stylesheet" href="assets/css/armada.css" />

    <!--Material Icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=location_on" />

    <!--Bootstrap Css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <!-- Navigation Bar -->
    <nav class="navbar fixed-top p-4">
        <div class="nav-left" style="padding-left:2rem;">
            <a href="{{route('landing.index')}}">
                <img src="assets/img/icon/left-arrow.png" alt="Kembali" class="icon" />
            </a>
        </div>
        <div class="nav-title">NextStation.Web</div>
        <div class="nav-right flex-row" style="padding-right: 2rem;">
        </div>
    </nav>

    <!-- Main Content -->
    <div class="content p-10">
        <h1 style="color: blue; font-weight: 700;">Armada Kami</h1>
        <!-- Gallery Section -->
        <div class="gallery-container">
            <h2>Executive</h2>
            <hr class="border border-primary border-3 opacity-75" style="margin: 2rem;">
            <div class="gallery">
                <a href="pemesanan.php">
                    <img src="assets/img/bus/bus1.jpg" alt="Gambar 1" />
                </a>
                <a href="pemesanan.php">
                    <img src="assets/img/bus/bus2.jpg" alt="Gambar 2" />
                </a>
                <a href="pemesanan.php">
                    <img src="assets/img/bus/bus3.jpg" alt="Gambar 3" />
                </a>
                <a href="pemesanan.php">
                    <img src="assets/img/bus/karyawan-bus.png" alt="Gambar 4" />
                </a>
            </div>
        </div>

        <div class="gallery-container">
            <h2>Ekonomi</h2>
            <hr class="border border-primary border-3 opacity-75" style="margin: 2rem;">
            <div class="gallery">
                <img src="assets/img/bus/bus1.jpg" alt="Gambar 1" />
                <img src="assets/img/bus/bus2.jpg" alt="Gambar 2" />
                <img src="assets/img/bus/bus3.jpg" alt="Gambar 3" />
                <img src="assets/img/bus/karyawan-bus.png" alt="Gambar 4" />
            </div>
        </div>
        <hr>
        <div class="gallery-container">
            <h2>Patas</h2>
            <hr class="border border-primary border-3 opacity-75" style="margin: 2rem;">
            <div class="gallery">
                <img src="assets/img/bus/bus1.jpg" alt="Gambar 1" />
                <img src="assets/img/bus/bus2.jpg" alt="Gambar 2" />
                <img src="assets/img/bus/bus3.jpg" alt="Gambar 3" />
                <img src="assets/img/bus/karyawan-bus.png" alt="Gambar 4" />
            </div>
        </div>
    </div>
    <script src="assets/js/armada.js"></script>
</body>

</html>