<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<!-- Beranda Section -->
   <!-- Main Content Area -->
    <div class="main-content">
        <!-- Beranda Section -->
        <section id="beranda" class="section-content active-section">
<!-- Carousel Start -->
<div class="container-fluid p-0 pb-5">
    <div class="owl-carousel header-carousel position-relative mb-5">
        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="asset/img/carousel-1.jpg" alt="Pengiriman Nanas">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(6, 3, 21, .5);">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-10 col-lg-8">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Pengiriman Nanas Terbaik</h5>
                            <h1 class="display-3 text-white animated slideInDown mb-4">
                                Dari Pemalang <span class="text-primary">untuk Nusantara</span><br>
                                Kirim Nanas Tanpa Batas!
                            </h1>
                            <p class="fs-5 fw-medium text-white mb-4 pb-2">
                                Layanan pengiriman nanas cepat dan aman langsung dari sumbernya, dengan sistem rantai dingin agar tetap segar sampai tujuan.
                            </p>
                            <a href="<?= base_url('layanan') ?>" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Lihat Layanan</a>
                            <a href="<?= base_url('tracking') ?>" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Cek Pengiriman</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

                    <div class="owl-carousel-item position-relative">
                        <img class="img-fluid" src="asset/img/carousel-2.jpg" alt="Distribusi Nanas">
                        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(6, 3, 21, .5);">
                            <div class="container">
                                <div class="row justify-content-start">
                                    <div class="col-10 col-lg-8">
                                        <h5 class="text-white text-uppercase mb-3 animated slideInDown">Distribusi Nasional</h5>
                                        <h1 class="display-3 text-white animated slideInDown mb-4">Mitra Terbaik <span class="text-primary">Pengiriman Nanas</span> Anda</h1>
                                        <p class="fs-5 fw-medium text-white mb-4 pb-2">Melayani pengiriman nanas segar ke seluruh Indonesia dengan jaminan kualitas terbaik.</p>
                                        <a href="<?= base_url('tarif') ?>" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Cek Tarif</a>
                                        <a href="<?= base_url('kontak') ?>" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Hubungi Kami</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Carousel End -->
             
             <!-- About Start -->
            <div class="container-fluid overflow-hidden py-5 px-lg-0">
                <div class="container about py-5 px-lg-0">
                    <div class="row g-5 mx-lg-0">
                        <div class="col-lg-6 ps-lg-0 wow fadeInLeft" data-wow-delay="0.1s" style="min-height: 400px;">
                            <div class="position-relative h-100">
                                <img class="position-absolute img-fluid w-100 h-100" src="asset/img/about.jpg" style="object-fit: cover;" alt="Tentang NAPEKULOGISTIK">
                            </div>
                        </div>
                        <div class="col-lg-6 about-text wow fadeInUp" data-wow-delay="0.3s">
                            <h6 class="text-secondary text-uppercase mb-3">TENTANG KAMI</h6>
                            <h1 class="mb-4">NAPEKU - Ahlinya Pengiriman Nanas dari Pemalang ke Seluruh Indonesia</h1>
                            <p class="mb-5">
                                Sejak 2010, NAPEKU hadir sebagai solusi logistik nanas terpercaya langsung dari Pemalang.
Kami menjadi penghubung antara petani, distributor, dan pelaku bisnis di seluruh Indonesia.
Dengan teknologi rantai dingin modern dan jaringan pengiriman luas, kami memastikan nanas tetap segar, berkualitas, dan tiba tepat waktu ke tempat tujuan Anda.
NAPEKU bukan sekadar jasa pengiriman — kami adalah mitra pertumbuhan usaha buah lokal.
                            </p>
                            <div class="row g-4 mb-5">
                                <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                                    <i class="fa fa-truck fa-3x text-primary mb-3"></i>
                                    <h5>Distribusi Cepat</h5>
                                    <p class="m-0">Jaringan logistik luas ke seluruh Indonesia dalam 1-3 hari</p>
                                </div>
                                <div class="col-sm-6 wow fadeIn" data-wow-delay="0.7s">
                                    <i class="fa fa-snowflake fa-3x text-primary mb-3"></i>
                                    <h5>Rantai Dingin</h5>
                                    <p class="m-0">Sistem pendinginan untuk menjaga kesegaran nanas</p>
                                </div>
                            </div>
                            <a href="<?= base_url('layanan') ?>" class="btn btn-primary py-3 px-5">Lihat Layanan Kami</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About End -->

            

<!-- NAPEKU dalam Angka Section -->
<section id="stats" class="section-content py-5" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9f5ff 100%);">
    <div class="container-xxl py-5">
        <div class="container py-5">
            <div class="text-center mb-5 wow fadeIn" data-wow-delay="0.1s">
                <h6 class="text-primary text-uppercase mb-3">NAPEKU DALAM ANGKA</h6>
                <h1 class="mb-4">Mengukir Prestasi, Menjaga Kualitas</h1>
                <p class="lead">Dalam setiap angka, terkandung komitmen kami untuk memberikan yang terbaik</p>
            </div>

            <div class="row g-4 justify-content-center">
                <!-- Statistik 1 -->
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="stats-card bg-white p-4 rounded-4 shadow-sm text-center h-100">
                        <div class="stats-icon mb-3">
                            <div class="icon-circle bg-primary-light">
                                <i class="fas fa-truck fa-2x text-primary"></i>
                            </div>
                        </div>
                        <h2 class="display-4 fw-bold text-primary mb-2" data-toggle="counter-up">2,500</h2>
                        <h5 class="mb-3">Ton Nanas Terkirim</h5>
                        <p class="mb-0 small text-muted">Per tahun dengan tingkat kesegaran 98%</p>
                    </div>
                </div>

                <!-- Statistik 2 -->
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="stats-card bg-white p-4 rounded-4 shadow-sm text-center h-100">
                        <div class="stats-icon mb-3">
                            <div class="icon-circle bg-success-light">
                                <i class="fas fa-users fa-2x text-success"></i>
                            </div>
                        </div>
                        <h2 class="display-4 fw-bold text-success mb-2" data-toggle="counter-up">350</h2>
                        <h5 class="mb-3">Mitra Usaha</h5>
                        <p class="mb-0 small text-muted">Petani dan distributor yang bergabung</p>
                    </div>
                </div>

                <!-- Statistik 3 -->
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="stats-card bg-white p-4 rounded-4 shadow-sm text-center h-100">
                        <div class="stats-icon mb-3">
                            <div class="icon-circle bg-warning-light">
                                <i class="fas fa-globe-asia fa-2x text-warning"></i>
                            </div>
                        </div>
                        <h2 class="display-4 fw-bold text-warning mb-2" data-toggle="counter-up">8</h2>
                        <h5 class="mb-3">Negara Tujuan</h5>
                        <p class="mb-0 small text-muted">Ekspor nanas kualitas premium</p>
                    </div>
                </div>

                <!-- Statistik 4 -->
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="stats-card bg-white p-4 rounded-4 shadow-sm text-center h-100">
                        <div class="stats-icon mb-3">
                            <div class="icon-circle bg-info-light">
                                <i class="fas fa-percentage fa-2x text-info"></i>
                            </div>
                        </div>
                        <h2 class="display-4 fw-bold text-info mb-2" data-toggle="counter-up">97</h2>
                        <h5 class="mb-3">Kepuasan Pelanggan</h5>
                        <p class="mb-0 small text-muted">Rating positif dari seluruh transaksi</p>
                    </div>
                </div>
            </div>

            <div class="text-center mt-5 wow fadeIn" data-wow-delay="1s">
                <div class="d-inline-block px-4 py-2 rounded-pill bg-primary text-white">
                    <i class="fas fa-award me-2"></i> Terpercaya sejak 2010
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* Custom CSS untuk bagian statistik */
.stats-card {
    transition: all 0.3s ease;
    border: none;
    position: relative;
    overflow: hidden;
}

.stats-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 30px rgba(0,0,0,0.1) !important;
}

.stats-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 5px;
    background: linear-gradient(90deg, #0d6efd, #0dcaf0);
}

.stats-card:nth-child(2)::before {
    background: linear-gradient(90deg, #198754, #20c997);
}

.stats-card:nth-child(3)::before {
    background: linear-gradient(90deg, #ffc107, #fd7e14);
}

.stats-card:nth-child(4)::before {
    background: linear-gradient(90deg, #0dcaf0, #6610f2);
}

.icon-circle {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    display: inline-flex;
    align-items: center;
    justify-content: center;
}

.bg-primary-light {
    background-color: rgba(13, 110, 253, 0.1);
}

.bg-success-light {
    background-color: rgba(25, 135, 84, 0.1);
}

.bg-warning-light {
    background-color: rgba(255, 193, 7, 0.1);
}

.bg-info-light {
    background-color: rgba(13, 202, 240, 0.1);
}

.display-4 {
    font-size: 2.5rem;
    font-weight: 700;
}

@media (max-width: 768px) {
    .display-4 {
        font-size: 2rem;
    }
}
</style>

   <!-- Fitur Unggulan Section -->
<section id="fitur" class="section-content bg-light">
    <div class="container-xxl py-5">
        <div class="container py-5">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-secondary text-uppercase">KEUNGGULAN KAMI</h6>
                <h1 class="mb-5">Mengapa Memilih NAPEKULOGISTIK?</h1>
            </div>
            
            <div class="accordion" id="fiturAccordion">
                <!-- Fitur 1 -->
                <div class="accordion-item wow fadeInUp" data-wow-delay="0.1s">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 bg-primary rounded-circle p-3 me-3">
                                    <i class="fa fa-snowflake text-white"></i>
                                </div>
                                <h5 class="mb-0">Rantai Dingin Terintegrasi</h5>
                            </div>
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#fiturAccordion">
                        <div class="accordion-body">
                            <p>Sistem pendinginan dari pengambilan hingga pengiriman untuk menjaga kesegaran nanas optimal. Kami menggunakan teknologi terbaru dengan suhu terkontrol antara 10-12°C selama proses distribusi.</p>
                            <ul>
                                <li>Cold storage berstandar internasional</li>
                                <li>Kendaraan berpendingin khusus buah</li>
                                <li>Monitoring suhu real-time</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <!-- Fitur 2 -->
                <div class="accordion-item wow fadeInUp" data-wow-delay="0.3s">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 bg-primary rounded-circle p-3 me-3">
                                    <i class="fa fa-map-marked-alt text-white"></i>
                                </div>
                                <h5 class="mb-0">Jaringan Distribusi Luas</h5>
                            </div>
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#fiturAccordion">
                        <div class="accordion-body">
                            <p>Melayani pengiriman ke seluruh Indonesia dan 8 negara tujuan ekspor dengan jaringan logistik terpercaya.</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <h6>Domestik:</h6>
                                    <ul>
                                        <li>Jawa, Sumatra, Kalimantan</li>
                                        <li>Sulawesi, Bali, Nusa Tenggara</li>
                                        <li>Maluku dan Papua</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <h6>Internasional:</h6>
                                    <ul>
                                        <li>Singapura, Malaysia</li>
                                        <li>Timor Leste, Australia</li>
                                        <li>China, Jepang, Korea Selatan</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Fitur 3 -->
                <div class="accordion-item wow fadeInUp" data-wow-delay="0.5s">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 bg-primary rounded-circle p-3 me-3">
                                    <i class="fa fa-shield-alt text-white"></i>
                                </div>
                                <h5 class="mb-0">Asuransi Pengiriman</h5>
                            </div>
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#fiturAccordion">
                        <div class="accordion-body">
                            <p>Proteksi maksimal dengan asuransi khusus produk pertanian yang mencakup berbagai risiko selama pengiriman.</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <h6>Cakupan Asuransi:</h6>
                                    <ul>
                                        <li>Kerusakan fisik selama transit</li>
                                        <li>Kehilangan barang</li>
                                        <li>Keterlambatan pengiriman</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <h6>Keuntungan:</h6>
                                    <ul>
                                        <li>Klaim mudah dan cepat</li>
                                        <li>Diverifikasi dalam 3 hari kerja</li>
                                        <li>Ganti rugi hingga 100%</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Fitur 4 -->
                <div class="accordion-item wow fadeInUp" data-wow-delay="0.7s">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 bg-primary rounded-circle p-3 me-3">
                                    <i class="fa fa-clock text-white"></i>
                                </div>
                                <h5 class="mb-0">Pengiriman Tepat Waktu</h5>
                            </div>
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#fiturAccordion">
                        <div class="accordion-body">
                            <p>Garansi ketepatan waktu pengiriman dengan sistem tracking real-time dan komitmen waktu yang jelas.</p>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead class="bg-primary text-white">
                                        <tr>
                                            <th>Jenis Layanan</th>
                                            <th>Estimasi Waktu</th>
                                            <th>Garansi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Reguler</td>
                                            <td>2-4 hari kerja</td>
                                            <td>+1 hari toleransi</td>
                                        </tr>
                                        <tr>
                                            <td>Kilat</td>
                                            <td>24 jam</td>
                                            <td>+6 jam toleransi</td>
                                        </tr>
                                        <tr>
                                            <td>Ekspor</td>
                                            <td>3-7 hari kerja</td>
                                            <td>+2 hari toleransi</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Fitur 5 -->
                <div class="accordion-item wow fadeInUp" data-wow-delay="0.9s">
                    <h2 class="accordion-header" id="headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 bg-primary rounded-circle p-3 me-3">
                                    <i class="fa fa-headset text-white"></i>
                                </div>
                                <h5 class="mb-0">Layanan 24/7</h5>
                            </div>
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#fiturAccordion">
                        <div class="accordion-body">
                            <p>Customer service siap membantu kapan saja melalui berbagai channel dengan respon cepat.</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <h6>Kontak Kami:</h6>
                                    <ul class="list-unstyled">
                                        <li><i class="fa fa-phone-alt text-primary me-2"></i> 0819-1047-0281</li>
                                        <li><i class="fa fa-envelope text-primary me-2"></i> napekupemalang21@gmail.com</li>
                                        <li><i class="fab fa-whatsapp text-primary me-2"></i> +62 819 1047 0281</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <h6>Jam Operasional:</h6>
                                    <ul class="list-unstyled">
                                        <li><i class="fa fa-calendar-alt text-primary me-2"></i> Senin - Minggu</li>
                                        <li><i class="fa fa-clock text-primary me-2"></i> 24 Jam Non-Stop</li>
                                        <li><i class="fa fa-user-clock text-primary me-2"></i> Respon < 15 menit</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section Peta dengan Rute -->
<section id="cakupan-wilayah" class="section-content py-5 bg-light">
  <div class="container">
    <div class="text-center mb-5">
      <h6 class="text-primary text-uppercase fw-bold">JARINGAN PENGIRIMAN</h6>
      <h2 class="fw-bold mb-3">Rute Distribusi <span class="text-primary">Nanas NAPEKU</span></h2>
      <p class="lead">Dari Pemalang ke seluruh Jawa melalui jaringan logistik terintegrasi</p>
    </div>

    <!-- Peta dengan Garis Rute -->
    <div class="ratio ratio-16x9 shadow-lg rounded-3 overflow-hidden mb-4">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2480045.5461057965!2d109.91309047572054!3d-7.441448705508294!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1753629173795!5m2!1sid!2sid" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
        width="100%"
        height="500"
        style="border:0;"
        allowfullscreen
        loading="lazy"
        title="Rute Pengiriman NAPEKU">
      </iframe>
    </div>

    <!-- Legenda -->
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="bg-white p-3 rounded-3 shadow-sm">
          <div class="row text-center">
            <div class="col-4">
              <div class="d-flex align-items-center justify-content-center">
                <div class="me-2" style="width:20px;height:20px;background-color:#0d6efd;border-radius:50%;"></div>
                <small>Pusat Distribusi</small>
              </div>
            </div>
            <div class="col-4">
              <div class="d-flex align-items-center justify-content-center">
                <div class="me-2" style="width:20px;height:3px;background-color:#0d6efd;margin-top:8px;"></div>
                <small>Rute Pengiriman</small>
              </div>
            </div>
            <div class="col-4">
              <div class="d-flex align-items-center justify-content-center">
                <i class="fas fa-city text-warning me-2"></i>
                <small>Kota Tujuan</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Daftar Rute -->
    <div class="row mt-5 g-4">
      <div class="col-md-4">
        <div class="card h-100 border-0 shadow-sm">
          <div class="card-body">
            <h5 class="card-title text-primary">
              <i class="fas fa-route me-2"></i>Rute Barat
            </h5>
            <ul class="list-group list-group-flush">
              <li class="list-group-item d-flex justify-content-between align-items-center border-0">
                Pemalang - Jakarta
                <span class="badge bg-primary rounded-pill">240 km</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center border-0">
                Pemalang - Bandung
                <span class="badge bg-primary rounded-pill">320 km</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card h-100 border-0 shadow-sm">
          <div class="card-body">
            <h5 class="card-title text-primary">
              <i class="fas fa-route me-2"></i>Rute Tengah
            </h5>
            <ul class="list-group list-group-flush">
              <li class="list-group-item d-flex justify-content-between align-items-center border-0">
                Pemalang - Semarang
                <span class="badge bg-primary rounded-pill">120 km</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center border-0">
                Pemalang - Yogyakarta
                <span class="badge bg-primary rounded-pill">200 km</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card h-100 border-0 shadow-sm">
          <div class="card-body">
            <h5 class="card-title text-primary">
              <i class="fas fa-route me-2"></i>Rute Timur
            </h5>
            <ul class="list-group list-group-flush">
              <li class="list-group-item d-flex justify-content-between align-items-center border-0">
                Pemalang - Surabaya
                <span class="badge bg-primary rounded-pill">380 km</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center border-0">
                Pemalang - Malang
                <span class="badge bg-primary rounded-pill">420 km</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>
<script>
Swal.fire({
  icon: 'error',
  title: 'Tes Error',
  text: 'Ini hanya tes notifikasi',
});
</script>

<!-- Template Javascript -->
<script src="asset/js/main.js"></script>
<?= $this->endsection() ?>