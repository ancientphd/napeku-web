<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

  <!-- Tracking Section -->
<section id="tracking" class="section-content">
    <div class="container-xxl py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-secondary text-uppercase mb-3">LACAK PENGIRIMAN</h6>
                    <h1 class="mb-4">Cek Status Pengiriman Anda</h1>
                    <p class="mb-5">
                        Masukkan nomor resi pengiriman Anda untuk memantau status dan lokasi terbaru paket nanas Anda.
                    </p>
                    <div class="tracking-form">
                            <?php if(session()->getFlashdata('success')): ?>
                                <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
                            <?php endif; ?>

                         <form method="get" action="<?= base_url('tracking') ?>">
                            <div class="form-group mb-4">
                                <label for="no_resi">Nomor Resi</label>
                                <input type="text" class="form-control" name="no_resi" required>
                                <div class="invalid-feedback">Harap masukkan nomor resi yang valid</div>
                            </div>
                            <button type="submit" class="btn btn-primary w-100 py-3">Lacak Pengiriman</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">

<?php if (!empty($order)): ?>
    <div class="card mt-4">
        <div class="card-body">
            <h5 class="card-title">Informasi Pemesanan</h5>
            <p><strong>Nama:</strong> <?= esc($order['nama']) ?></p>
            <p><strong>Alamat:</strong> <?= esc($order['alamat']) ?></p>
            <p><strong>Provinsi:</strong> <?= esc($order['provinsi']) ?></p>
            <p><strong>Total Bayar:</strong> Rp<?= number_format($order['total_bayar'], 0, ',', '.') ?></p>
            <p><strong>Nomor Resi:</strong> <?= esc($order['no_resi']) ?></p>

            <h5 class="mt-4">Status Pengiriman</h5>
            <div class="tracking-status <?= esc($order['status']) ?>">
                <div class="status-dot"></div>
                <p class="mb-0"><?= esc($order['status']) ?></p>
            </div>
        </div>
    </div>
<?php elseif (isset($searched) && $searched): ?>
    <div class="alert alert-danger mt-3">Data tidak ditemukan.</div>
<?php endif; ?>

                    <div class="bg-light p-5 rounded text-center" id="trackingPlaceholder">
                        <i class="fa fa-box-open fa-3x text-muted mb-3"></i>
                        <h5>Masukkan nomor resi untuk melacak pengiriman</h5>
                        <p class="text-muted">Contoh resi: NAPE123456789</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<style>
/* Tambahkan CSS untuk timeline tracking */
.tracking-status {
    position: relative;
    padding-left: 30px;
    margin-bottom: 20px;
    transition: all 0.3s ease;
}

.tracking-status:before {
    content: "";
    position: absolute;
    left: 10px;
    top: 0;
    height: 100%;
    width: 2px;
    background: #0d6efd;
    transition: all 0.3s ease;
}

.tracking-status.completed:before {
    background: #198754;
}

.tracking-status .status-dot {
    position: absolute;
    left: 4px;
    top: 0;
    width: 12px;
    height: 12px;
    border-radius: 50%;
    background: #0d6efd;
    z-index: 1;
    transition: all 0.3s ease;
}

.tracking-status.completed .status-dot {
    background: #198754;
}

.tracking-status.active .status-dot {
    width: 16px;
    height: 16px;
    left: 2px;
    background: #0d6efd;
    box-shadow: 0 0 0 4px rgba(13, 110, 253, 0.2);
}

.tracking-status:last-child:before {
    height: 15px;
}
</style>

<?= $this->endsection() ?>