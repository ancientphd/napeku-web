<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<!-- Testimoni Section -->
<section id="testimoni" class="section-content bg-light">
    <div class="container-xxl py-5">
        <div class="container py-5">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-secondary text-uppercase">TESTIMONI PELANGGAN</h6>
                <h1 class="mb-5">Apa Kata Mereka Tentang NAPEKU?</h1>
                <p class="lead">Dengarkan pengalaman langsung dari pelanggan kami yang puas dengan layanan pengiriman nanas kami.</p>
            </div>

            <div class="row g-4">
                <!-- Testimoni 1 -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="testimonial-card bg-white p-4 rounded shadow-sm h-100">
                        <div class="d-flex align-items-center mb-3">
                            <img src="https://randomuser.me/api/portraits/women/32.jpg" alt="Dian Sastro" class="rounded-circle me-3" width="60">
                            <div>
                                <h5 class="mb-0">Dian Sastro</h5>
                                <div class="text-warning mb-1">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <small>Pemilik Restoran, Jakarta</small>
                            </div>
                        </div>
                        <p class="mb-0">"Pengiriman nanas selalu tepat waktu dan buah sampai dalam kondisi segar. Pelayanan NAPEKU sangat profesional dan harga kompetitif!"</p>
                        <div class="testimonial-meta mt-3 pt-3 border-top">
                            <small class="text-muted"><i class="far fa-calendar-alt me-1"></i> 15 Juli 2023</small>
                            <small class="text-muted float-end"><i class="fas fa-shipping-fast me-1"></i> Pengiriman Reguler</small>
                        </div>
                    </div>
                </div>

                <!-- Testimoni 2 -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="testimonial-card bg-white p-4 rounded shadow-sm h-100">
                        <div class="d-flex align-items-center mb-3">
                            <img src="https://randomuser.me/api/portraits/men/45.jpg" alt="Budi Santoso" class="rounded-circle me-3" width="60">
                            <div>
                                <h5 class="mb-0">Budi Santoso</h5>
                                <div class="text-warning mb-1">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <small>Distributor Buah, Bandung</small>
                            </div>
                        </div>
                        <p class="mb-0">"Sudah 2 tahun menjadi mitra pengiriman nanas dengan NAPEKU. Kualitas buah selalu terjaga dan layanan customer service yang responsif."</p>
                        <div class="testimonial-meta mt-3 pt-3 border-top">
                            <small class="text-muted"><i class="far fa-calendar-alt me-1"></i> 3 Agustus 2023</small>
                            <small class="text-muted float-end"><i class="fas fa-shipping-fast me-1"></i> Pengiriman Kilat</small>
                        </div>
                    </div>
                </div>

                <!-- Testimoni 3 -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="testimonial-card bg-white p-4 rounded shadow-sm h-100">
                        <div class="d-flex align-items-center mb-3">
                            <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Anita Wijaya" class="rounded-circle me-3" width="60">
                            <div>
                                <h5 class="mb-0">Anita Wijaya</h5>
                                <div class="text-warning mb-1">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <small>Eksportir Buah, Surabaya</small>
                            </div>
                        </div>
                        <p class="mb-0">"Untuk pengiriman ekspor nanas, NAPEKU adalah pilihan terbaik. Dokumen lengkap dan buah sampai di Singapura dalam kondisi sempurna."</p>
                        <div class="testimonial-meta mt-3 pt-3 border-top">
                            <small class="text-muted"><i class="far fa-calendar-alt me-1"></i> 22 Agustus 2023</small>
                            <small class="text-muted float-end"><i class="fas fa-shipping-fast me-1"></i> Pengiriman Ekspor</small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Testimoni Carousel untuk Mobile -->
            <div class="d-lg-none mt-4 wow fadeIn" data-wow-delay="0.8s">
                <div class="owl-carousel testimonial-carousel">
                    <div class="testimonial-card bg-white p-4 rounded shadow-sm">
                        <div class="d-flex align-items-center mb-3">
                            <img src="https://randomuser.me/api/portraits/women/32.jpg" alt="Dian Sastro" class="rounded-circle me-3" width="60">
                            <div>
                                <h5 class="mb-0">Dian Sastro</h5>
                                <div class="text-warning mb-1">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <small>Pemilik Restoran, Jakarta</small>
                            </div>
                        </div>
                        <p class="mb-0">"Pengiriman nanas selalu tepat waktu dan buah sampai dalam kondisi segar. Pelayanan NAPEKU sangat profesional dan harga kompetitif!"</p>
                    </div>

                    <div class="testimonial-card bg-white p-4 rounded shadow-sm">
                        <div class="d-flex align-items-center mb-3">
                            <img src="https://randomuser.me/api/portraits/men/45.jpg" alt="Budi Santoso" class="rounded-circle me-3" width="60">
                            <div>
                                <h5 class="mb-0">Budi Santoso</h5>
                                <div class="text-warning mb-1">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <small>Distributor Buah, Bandung</small>
                            </div>
                        </div>
                        <p class="mb-0">"Sudah 2 tahun menjadi mitra pengiriman nanas dengan NAPEKU. Kualitas buah selalu terjaga dan layanan customer service yang responsif."</p>
                    </div>

                    <div class="testimonial-card bg-white p-4 rounded shadow-sm">
                        <div class="d-flex align-items-center mb-3">
                            <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Anita Wijaya" class="rounded-circle me-3" width="60">
                            <div>
                                <h5 class="mb-0">Anita Wijaya</h5>
                                <div class="text-warning mb-1">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <small>Eksportir Buah, Surabaya</small>
                            </div>
                        </div>
                        <p class="mb-0">"Untuk pengiriman ekspor nanas, NAPEKU adalah pilihan terbaik. Dokumen lengkap dan buah sampai di Singapura dalam kondisi sempurna."</p>
                    </div>
                </div>
            </div>

            <div class="text-center mt-5 wow fadeIn" data-wow-delay="1s">
                <a href="#kontak" class="btn btn-primary px-4 py-2">Bergabung dengan Pelanggan Puas Kami</a>
                <p class="small text-muted mt-2">100+ pelanggan telah mempercayai pengiriman nanas mereka pada kami</p>
            </div>
        </div>
    </div>
</section>

<style>
/* Custom CSS untuk Testimoni */
.testimonial-card {
    transition: all 0.3s ease;
    border: 1px solid rgba(0,0,0,0.05);
}

.testimonial-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.1);
}

.testimonial-meta {
    font-size: 0.85rem;
}

.owl-carousel .testimonial-card {
    margin: 0 10px;
}
</style>

<script>
// Inisialisasi carousel testimoni untuk mobile
$(document).ready(function(){
    $('.testimonial-carousel').owlCarousel({
        loop: true,
        margin: 20,
        nav: false,
        dots: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            }
        }
    });
});
</script>

<?= $this->endsection() ?>