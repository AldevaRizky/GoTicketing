<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sewa Bus</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset ('assets/css/sewa.css') }}" />
</head>

<body>
    <div class="semua">
        <!-- Navigation Bar -->
        <section class="navigasi">
            <nav class="navbar navbar-light bg-white bg-opacity-75 fixed-top shadow-sm">
                <div class="container-fluid">
                    <a href="{{ route('landing.index') }}">
                        <img src="{{ asset ('assets/img/icon/left-arrow.png') }}" style="width: 50px; height: auto"
                            alt="kembali" />
                    </a>
                    <h1 class="navbar-brand fw-bold" style="margin-right: 45%; font-family: sans-serif;">
                        Booking Yuk..
                    </h1>
                </div>
            </nav>
        </section>

        <!-- Header Section -->
        <section class="hider">
            <div class="header-section">
                <div class="overlay"></div>
                <img src="assets/img/bus/sewa-bus.png" alt="bg bus" class="header-image" />
                <div class="text-center text-white header-content">
                    <div class="gelombang">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                            <path fill="#0099ff" fill-opacity="1"
                                d="M0,160L48,170.7C96,181,192,203,288,186.7C384,171,480,117,576,128C672,139,768,213,864,229.3C960,245,1056,203,1152,192C1248,181,1344,203,1392,213.3L1440,224L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
                            </path>
                        </svg>
                    </div>
                    <h1 class="fw-bold">Jelajahi Indonesia Bersama Kami</h1>
                    <p>
                        Bersiaplah untuk petualangan yang tak terlupakan! NextStation.Web
                        adalah penyedia jasa transportasi bus pariwisata terbaik yang siap
                        mengantar Anda ke berbagai destinasi menarik di seluruh Indonesia.
                    </p>
                </div>
            </div>
        </section>

        <!-- Booking Card -->
        <section class="pemesanan">
            <div class="container mt-5">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white text-center">
                        <img src="assets/img/icon/logo (2).png" alt="" />
                        <h5 class="m-3">
                            Segera booking untuk perjalanan Anda yang menyenangkan..
                        </h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('booking.store') }}" method="POST">
                            @csrf
                            <div class="row g-3 align-items-center">
                                <!-- Dropdown Kota Asal -->
                                <div class="col-md-5">
                                    <select name="fromLocation" class="form-control" required>
                                        <option value="" disabled selected>Dari mana nih?</option>
                                        @foreach ($kota as $k)
                                        <option value="{{ $k->nama_kota }}">{{ $k->nama_kota }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-2 text-center">
                                    <button type="button" class="btn btn-light border" onclick="swapLocations()">
                                        <i class="bi bi-arrow-left-right"></i>
                                    </button>
                                </div>

                                <!-- Dropdown Kota Tujuan -->
                                <div class="col-md-5">
                                    <select name="toLocation" class="form-control" required>
                                        <option value="" disabled selected>Mau ke mana nih?</option>
                                        @foreach ($kota as $k)
                                        <option value="{{ $k->nama_kota }}">{{ $k->nama_kota }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="row g-3 mt-3">
                                <div class="col-md-6">
                                    <input type="date" name="tanggal_mulai" class="form-control" required />
                                </div>
                                <div class="col-md-6">
                                    <input type="date" name="tanggal_berakhir" class="form-control" />
                                </div>
                            </div>

                            <div class="row g-3 mt-3">
                                <div class="col-md-12">
                                    <input type="number" name="jumlah_kursi" class="form-control"
                                        placeholder="Mau kursi berapa?" required />
                                </div>
                            </div>

                            <div class="text-center mt-3">
                                <button type="submit" class="btn btn-primary w-100">
                                    Cari Bus
                                </button>
                            </div>
                        </form>


                    </div>
                </div>

            </div>
        </section>
    </div>
    <div id="notification" class="alert alert-success text-center" style="display: none; position: fixed; top: 20px; left: 50%; transform: translateX(-50%); z-index: 1050;">
        Pesanan berhasil terkirim!
    </div>
    
    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
        document.querySelector('form').addEventListener('submit', function (event) {
            event.preventDefault();

            const formData = new FormData(event.target);

            axios.post('{{ route('booking.store') }}', formData)
                .then(response => {
                    const notification = document.getElementById('notification');
                    notification.style.display = 'block';

                    setTimeout(() => {
                        notification.style.display = 'none';
                    }, 3000);

                    // Reset form jika diperlukan
                    event.target.reset();
                })
                .catch(error => {
                    console.error(error);
                    alert('Terjadi kesalahan saat mengirim pesanan.');
                });
        });
    </script>

</body>

</html>