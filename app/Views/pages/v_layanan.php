<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<!-- Layanan Pengiriman Pulau Jawa Section -->
<section id="layanan-jawa" class="section-content bg-light">
    <div class="container-xxl py-5">
        <div class="container py-5">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-secondary text-uppercase">LAYANAN KAMI</h6>
                <h1 class="mb-5">Jaringan Pengiriman di Pulau Jawa</h1>
                <p class="lead">Melayani pengiriman nanas segar ke seluruh wilayah Jawa dengan jaminan kualitas terbaik</p>
            </div>

            <div class="row g-4">
                <!-- Layanan 1 -->
                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-card bg-white p-4 rounded-4 shadow-sm h-100">
                        <div class="service-icon mb-4">
                            <i class="fas fa-truck-fast fa-3x text-primary"></i>
                        </div>
                        <h4 class="mb-3">Jabodetabek</h4>
                        <p class="mb-3">Pengiriman cepat ke wilayah Jakarta, Bogor, Depok, Tangerang, Bekasi dengan estimasi 1-2 hari kerja.</p>
                        <div class="service-features">
                            <p><i class="fas fa-check-circle text-success me-2"></i> Gratis pendingin</p>
                            <p><i class="fas fa-check-circle text-success me-2"></i> Tracking real-time</p>
                            <p><i class="fas fa-check-circle text-success me-2"></i> Jadwal fleksibel</p>
                        </div>
                        <div class="mt-4 pt-3 border-top">
                            <h5 class="text-primary">Mulai Rp 15.000/kg</h5>
                        </div>
                    </div>
                </div>

                <!-- Layanan 2 -->
                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="service-card bg-white p-4 rounded-4 shadow-sm h-100">
                        <div class="service-icon mb-4">
                            <i class="fas fa-map-marked-alt fa-3x text-success"></i>
                        </div>
                        <h4 class="mb-3">Jawa Barat</h4>
                        <p class="mb-3">Cakupan seluruh Jawa Barat termasuk Bandung, Cirebon, Sukabumi dengan estimasi 2-3 hari kerja.</p>
                        <div class="service-features">
                            <p><i class="fas fa-check-circle text-success me-2"></i> Sistem rantai dingin</p>
                            <p><i class="fas fa-check-circle text-success me-2"></i> Asuransi pengiriman</p>
                            <p><i class="fas fa-check-circle text-success me-2"></i> Laporan harian</p>
                        </div>
                        <div class="mt-4 pt-3 border-top">
                            <h5 class="text-success">Mulai Rp 12.000/kg</h5>
                        </div>
                    </div>
                </div>

                <!-- Layanan 3 -->
                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="service-card bg-white p-4 rounded-4 shadow-sm h-100">
                        <div class="service-icon mb-4">
                            <i class="fas fa-mountain fa-3x text-warning"></i>
                        </div>
                        <h4 class="mb-3">Jawa Tengah & Timur</h4>
                        <p class="mb-3">Pengiriman ke Semarang, Surabaya, Malang, Yogyakarta dan sekitarnya dengan estimasi 3-4 hari kerja.</p>
                        <div class="service-features">
                            <p><i class="fas fa-check-circle text-success me-2"></i> Pengemasan khusus</p>
                            <p><i class="fas fa-check-circle text-success me-2"></i> Jadwal rutin mingguan</p>
                            <p><i class="fas fa-check-circle text-success me-2"></i> Prioritas pengiriman</p>
                        </div>
                        <div class="mt-4 pt-3 border-top">
                            <h5 class="text-warning">Mulai Rp 10.000/kg</h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.8s">
                    <div class="bg-white p-4 rounded-4 shadow-sm h-100">
                        <h4 class="mb-4"><i class="fas fa-map-marker-alt text-danger me-2"></i> Cakupan Wilayah</h4>
                        <img src="asset/img/peta-jawa.jpeg" alt="Peta Cakupan Pengiriman Pulau Jawa" class="img-fluid rounded-3 mb-3">
                        <p class="mb-0">Kami melayani pengiriman ke seluruh kota dan kabupaten di Pulau Jawa dengan jaringan logistik terpadu.</p>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="1s">
                    <div class="bg-white p-4 rounded-4 shadow-sm h-100">
                        <h4 class="mb-4"><i class="fas fa-clock text-primary me-2"></i> Jadwal Pengiriman</h4>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead class="bg-primary text-white">
                                    <tr>
                                        <th>Rute</th>
                                        <th>Hari Pengiriman</th>
                                        <th>Estimasi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Pemalang - Jakarta</td>
                                        <td>Setiap Hari</td>
                                        <td>1-2 Hari</td>
                                    </tr>
                                    <tr>
                                        <td>Pemalang - Bandung</td>
                                        <td>Senin, Rabu, Jumat</td>
                                        <td>2 Hari</td>
                                    </tr>
                                    <tr>
                                        <td>Pemalang - Surabaya</td>
                                        <td>Selasa, Kamis</td>
                                        <td>3 Hari</td>
                                    </tr>
                                    <tr>
                                        <td>Pemalang - Yogyakarta</td>
                                        <td>Senin, Kamis</td>
                                        <td>2 Hari</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <p class="mb-0 small text-muted">*Estimasi bisa berubah tergantung kondisi lalu lintas</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* Custom CSS untuk layanan pengiriman */
.service-card {
    transition: all 0.3s ease;
    border: 1px solid rgba(0,0,0,0.05);
}

.service-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important;
}

.service-icon {
    color: #0d6efd;
}

.service-features p {
    margin-bottom: 0.5rem;
}

.table-responsive {
    border-radius: 8px;
    overflow: hidden;
}

.table thead th {
    border-bottom: none;
}
</style>

            <div class="container-xxl py-5">
                <div class="container py-5">
                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                        <h6 class="text-secondary text-uppercase">PROSES KAMI</h6>
                        <h1 class="mb-5">Bagaimana Kami Bekerja</h1>
                    </div>
                    <div class="row g-4">
                        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="service-item text-center pt-3">
                                <div class="p-4">
                                    <i class="fa fa-calendar-check fa-3x text-primary mb-4"></i>
                                    <h5 class="mb-3">Pemesanan</h5>
                                    <p>Pesan layanan melalui website, WhatsApp, atau telepon</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="service-item text-center pt-3">
                                <div class="p-4">
                                    <i class="fa fa-box fa-3x text-primary mb-4"></i>
                                    <h5 class="mb-3">Penjemputan</h5>
                                    <p>Tim kami menjemput nanas di lokasi Anda</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="service-item text-center pt-3">
                                <div class="p-4">
                                    <i class="fa fa-temperature-low fa-3x text-primary mb-4"></i>
                                    <h5 class="mb-3">Penyimpanan</h5>
                                    <p>Nanas disimpan dalam cold storage sebelum dikirim</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                            <div class="service-item text-center pt-3">
                                <div class="p-4">
                                    <i class="fa fa-truck-fast fa-3x text-primary mb-4"></i>
                                    <h5 class="mb-3">Pengiriman</h5>
                                    <p>Pengiriman dengan kendaraan berpendingin</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<?= $this->endsection() ?>