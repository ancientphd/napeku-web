<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

    <!-- Kontak Section -->
    <section id="kontak" class="section-content">
        <div class="container-xxl py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                        <h6 class="text-secondary text-uppercase mb-3">HUBUNGI KAMI</h6>
                        <h1 class="mb-5">Butuh Informasi Lebih Lanjut?</h1>
                        <p class="mb-5">Tim NAPEKU siap membantu Anda dengan informasi layanan, tarif, atau kerja sama logistik.</p>
                        <div class="d-flex align-items-center">
                            <i class="fa fa-headphones fa-2x flex-shrink-0 bg-primary p-3 text-white"></i>
                            <div class="ps-4">
                                <h6>Telepon Kami</h6>
                                <h3 class="text-primary m-0">+62 285 6543 210</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="bg-light text-center p-5 wow fadeIn" data-wow-delay="0.5s">
                            <?php if(session()->getFlashdata('success')): ?>
                                <div class="alert alert-success">
                                    <?= session()->getFlashdata('success') ?>
                                </div>
                            <?php endif; ?>

                            <form action="<?= base_url('kontak/simpan') ?>" method="post">
                                <div class="row g-3">
                                    <div class="col-12 col-sm-6">
                                        <input name="nama" type="text" class="form-control border-0" placeholder="Nama Anda" style="height:55px;">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input name="email" type="email" class="form-control border-0" placeholder="Email Anda" style="height:55px;">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input name="telepon" type="text" class="form-control border-0" placeholder="Nomor HP" style="height:55px;">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <select name="kategori" class="form-select border-0" style="height:55px;">
                                            <option selected>Jenis Permintaan</option>
                                            <option value="1">Informasi Layanan</option>
                                            <option value="2">Kerja Sama Bisnis</option>
                                            <option value="3">Ekspor</option>
                                            <option value="4">Lainnya</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <textarea name="pesan" class="form-control border-0" placeholder="Pesan Anda" rows="4"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" type="submit">Kirim Pesan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid bg-dark text-light mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container">
                <div class="row gx-5">
                    <div class="col-lg-6 py-5">
                        <div class="py-5">
                            <h1 class="display-6 text-white mb-4">Kantor Pusat & Gudang</h1>
                            <p class="mb-4"><i class="fa fa-map-marker-alt me-3"></i>Jl. Mentawai Raya No. 55, Pemalang, Jawa Tengah</p>
                            <p class="mb-4"><i class="fa fa-phone-alt me-3"></i>081910470281</p>
                            <p class="mb-4"><i class="fa fa-envelope me-3"></i>napekupemalang21@gmail.com</p>
                            <div class="d-flex pt-3">
                                <a class="btn btn-square btn-primary rounded-circle me-2" href="#"><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle me-2" href="#"><i class="fab fa-whatsapp"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle me-2" href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="h-100">
                            <iframe class="w-100 h-100" 
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.2259747022394!2d109.3825573147732!3d-6.982894794958785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fd5d5b5f5b5f5%3A0x5f5f5f5f5f5f5f5f!2sPemalang%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1620000000000!5m2!1sid!2sid" 
                                frameborder="0" style="min-height: 400px; border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?= $this->endsection() ?>