@include('partials.Landing.head')

<body>
    @include('partials.Landing.navbar')

    <section id="hero" class="hero">
        <div class="overlay"></div>
        <video autoplay muted loop>
            <source src="{{ asset ('assets/img/busjalan.mp4') }}" type="video/mp4" />
        </video>
        <div class="intro">
            <h3>
                Selamat Datang di <span style="color: blue">NextStation.Web</span>
            </h3>
            <p>
                Kami hadir untuk memberikan layanan transportasi bus terbaik
                dengan kenyamanan, keamanan, dan pengalaman perjalanan tak
                terlupakan
            </p>
            <p>
                <a href="{{route ('landing.armada')}}" class="tombol">Lihat Armada</a>
            </p>
        </div>
        <div class="gelombang">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#ffffff" fill-opacity="1"
                    d="M0,64L21.8,80C43.6,96,87,128,131,160C174.5,192,218,224,262,229.3C305.5,235,349,213,393,192C436.4,171,480,149,524,149.3C567.3,149,611,171,655,149.3C698.2,128,742,64,785,69.3C829.1,75,873,149,916,154.7C960,160,1004,96,1047,80C1090.9,64,1135,96,1178,101.3C1221.8,107,1265,85,1309,85.3C1352.7,85,1396,107,1418,117.3L1440,128L1440,320L1418.2,320C1396.4,320,1353,320,1309,320C1265.5,320,1222,320,1178,320C1134.5,320,1091,320,1047,320C1003.6,320,960,320,916,320C872.7,320,829,320,785,320C741.8,320,698,320,655,320C610.9,320,567,320,524,320C480,320,436,320,393,320C349.1,320,305,320,262,320C218.2,320,175,320,131,320C87.3,320,44,320,22,320L0,320Z">
                </path>
            </svg>
        </div>
    </section>

    <!--Hero end-->
    <!--Header end-->

    <!-- Team Profile -->
    <section id="team-profile" class="py-5 text-center">
        <div class="container">
            <h2 class="text-primary fw-bold">Team Profile</h2>
            <div class="row mt-4">
                <div class="col-md-3">
                    <img src="{{ asset ('assets/img/profil/ega2 (1).png') }}" class="rounded-circle mb-3"
                        alt="Team Member" />
                    <h5>Muhammad Nur Afiga Rohman</h5>
                    <p>2205101040</p>
                </div>
                <div class="col-md-3">
                    <img src="{{ asset ('assets/img/profil/bagong (1).png') }}" class="rounded-circle mb-3"
                        alt="Team Member" />
                    <h5>Riski Bagus Nugroho</h5>
                    <p>22051010</p>
                </div>
                <div class="col-md-3">
                    <img src="{{ asset ('assets/img/profil/nada2 (1).png')}} " class=" rounded-circle mb-3"
                        alt="Team Member" />
                    <h5>Haya Nada Hasanah</h5>
                    <p>22051010</p>
                </div>
                <div class="col-md-3">
                    <img src="{{ asset ('assets/img/profil/Jose.png') }}" class="rounded-circle mb-3"
                        alt="Team Member" />
                    <h5>Joseph Gusminarno Wijaya</h5>
                    <p>22051010</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Armada Terkini -->
    <section id="armada-terkini" class="py-5 bg-light text-center">
        <div class="container">
            <h2 class="text-primary fw-bold">Armada Terkini</h2>
            <div class="row mt-4">
                <div class="col-md-4">
                    <a href="{{ route('landing.armada')}}">
                        <img src="{{ asset ('assets/img/bus/bus3.jpg') }}" class="img-fluid rounded shadow-sm p-3" alt="Armada 1" />
                        <h5 class="mt-3">Armada 1</h5>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="{{ route('landing.armada')}}">
                        <img src="{{ asset ('assets/img/bus/bus1.jpg') }}" class="img-fluid rounded shadow-sm p-3" alt="Armada 2" />
                        <h5 class="mt-3">Armada 2</h5>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="{{ route('landing.armada')}}">
                        <img src="{{ asset ('assets/img/bus/bus2.jpg') }}" class="img-fluid rounded shadow-sm p-3" alt="Armada 3" />
                        <h5 class="mt-3">Armada 3</h5>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!--layanan kami-->
    <section id="layanan">
        <div class="container py-5">
            <h2 class="text-primary fw-bold text-center">Layanan</h2>
            <br />
            <div class="row g-4">
                <!-- Card 1 -->
                <div class="col-md-4">
                    <div class="custom-card shadow">
                        <img src="{{ asset ('assets/img/bus/sewa-bus.png') }}" class="img-fluid rounded-top"
                            alt="Sewa Bus Pariwisata" />
                        <div class="card-overlay">
                            <p class="card-description">
                                Layanan sewa bus untuk perjalanan wisata, dilengkapi AC,
                                kursi nyaman, dan pengemudi profesional, memastikan
                                perjalanan Anda nyaman dan aman.
                            </p>
                            <a href="{{ route('landing.pemesanan') }} ">
                                <button class="btn btn-primary card-button">
                                    Sewa Bus Pariwisata
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="col-md-4">
                    <div class="custom-card shadow">
                        <img src="{{ asset ('assets/img/bus/karyawan-bus.png') }}" class="img-fluid rounded-top"
                            alt="Antar-Jemput Karyawan" />
                        <div class="card-overlay">
                            <p class="card-description">
                                Layanan antar-jemput karyawan dengan jadwal fleksibel,
                                kendaraan nyaman, dan pengemudi berpengalaman untuk
                                memudahkan mobilitas karyawan.
                            </p>
                            <a href="{{ route('landing.pemesanan') }}">
                                <button class="btn btn-primary card-button">
                                    Antar-Jemput Karyawan
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="col-md-4">
                    <div class="custom-card shadow">
                        <img src="{{ asset ('assets/img/bus/transportasi-bus.png') }}" class="img-fluid rounded-top"
                            alt="Transportasi Antar Kota" />
                        <div class="card-overlay">
                            <p class="card-description">
                                Layanan transportasi antar kota menggunakan bus yang aman
                                dan nyaman, cocok untuk perjalanan bisnis, keluarga, atau
                                wisata.
                            </p>
                            <a href="{{ route('landing.pemesanan') }}">
                                <button class="btn btn-primary card-button">
                                    Transportasi Antar Kota
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--layanan kami end-->

    <!-- Gallery -->
    <section id="gallery" class="text-center py-5">
        <h2 class="text-primary fw-bold">Gallery</h2>
        <div class="gallery-container">
            <div class="galery-custom-one">
                <div class="gallery-item">
                    <img src="{{ asset ('assets/img/galeri/danau.jpg' ) }}" alt="danau" />
                </div>
                <div class="gallery-item">
                    <img src="{{ asset ('assets/img/galeri/image (2).png' ) }}" alt="wisata" />
                </div>
                <div class="gallery-item">
                    <img src="{{ asset ('assets/img/galeri/image (3).png' ) }}" alt="bali" />
                </div>
            </div>
            <div class="galery-custom-two">
                <div class="gallery-item">
                    <img src="{{ asset ('assets/img/galeri/image (5).png' ) }}" alt="pantai" />
                </div>
                <div class="gallery-item">
                    <img src="{{ asset ('assets/img/galeri/lawu.jpg' ) }}" alt="lawu" />
                </div>
                <div class="gallery-item">
                    <img src="{{ asset ('assets/img/galeri/Prambanan Temple, Indonesia.jpg' ) }}" alt="candi prambanan" />
                </div>
            </div>
        </div>
        <a href="{{route('landing.galeri')}}">
            <button class="read-more">Read More</button>
        </a>
    </section>

    <!-- Hubungi Kami -->
    <section id="hubungi-kami" class="py-5 text-center">
        <div class="container">
            <h2 class="text-primary fw-bold">Hubungi Kami</h2>
            <div class="row mt-4">
                <div class="col-md-6">
                    <h5>Address</h5>
                    <p>Jl. Sudarso No.71, Madiun</p>
                    <h5>Call Us</h5>
                    <p>085759330812</p>
                    <h5>Email</h5>
                    <p>devnext@gmail.com</p>
                </div>
                <div class="col-md-6">
                    <form>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Your Name" />
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" placeholder="Your Email" />
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Subject" />
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" rows="4" placeholder="Message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    @include('partials.Landing.footer')
</body>

</html>