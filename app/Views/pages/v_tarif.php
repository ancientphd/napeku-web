<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

        <!-- Tarif Section -->
        <section id="tarif" class="section-content">
            <div class="container-xxl py-5">
                <div class="container py-5">
                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                        <h6 class="text-secondary text-uppercase">TARIF PENGIRIMAN</h6>
                        <h1 class="mb-5">Paket Layanan Kami</h1>
                    </div>
                    <div class="row g-4">
                        <?php foreach ($pakets as $p): ?>
    <div class="col-md-6 col-lg-4 wow fadeInUp">
        <div class="price-item">
            <div class="border-bottom p-4 mb-4">
                <h5 class="text-primary mb-1"><?= esc($p['nama']) ?></h5>
                <h1 class="display-5 mb-0">
                    <small class="align-top" style="font-size:22px;line-height:45px;">Rp</small>
                    <?= number_format($p['harga'], 0, ',', '.') ?>
                    <small class="align-bottom" style="font-size:16px;line-height:40px;">/ kg</small>
                </h1>
            </div>
            <div class="p-4 pt-0">
                <p><i class="fa fa-check text-success me-3"></i>Estimasi <?= esc($p['estimasi']) ?></p>
                <p><i class="fa fa-check text-success me-3"></i>Minimal <?= esc($p['minimal_berat']) ?> kg</p>
                <p><i class="fa fa-check text-success me-3"></i><?= esc($p['pengemasan']) ?></p>
                <p><i class="fa fa-check text-success me-3"></i><?= esc($p['asuransi']) ?></p>
                <a class="btn btn-primary w-100 py-2 mt-3"
                   href="<?= base_url('checkout?paket=' . urlencode($p['nama']) . '&berat=' . $p['minimal_berat'] . '&biaya=' . $p['harga'] . '&estimasi=' . urlencode($p['estimasi'])) ?>">
                    Pesan Sekarang
                </a>
            </div>
        </div>
    </div>
<?php endforeach; ?>

                        <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.7s">
                            <div class="price-item">
                                <div class="border-bottom p-4 mb-4">
                                    <h5 class="text-primary mb-                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary w-100 py-3">Hitung Biaya</button>
                                    </div>
                                    <div class="col-12">
                                        <div class="alert alert-primary mt-3" role="alert">
                                            <h5 class="alert-heading">Estimasi Biaya</h5>
                                            <p class="mb-0">Rp 120.000 - Rp 150.000 (2-3 hari kerja)</p>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?= $this->endsection() ?>