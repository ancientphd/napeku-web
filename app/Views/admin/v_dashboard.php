<?= $this->extend('layoutadmin') ?>
<?= $this->section('content') ?>

<h3 class="mb-4">Selamat Datang di Dashboard Admin</h3>

<style>
    .card-hover {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card-hover:hover {
        transform: translateY(-5px) scale(1.03);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    }
</style>

<div class="row">
        
    <!-- Card Total Order -->
    <div class="col-md-4">
        <a href="<?= base_url('/admin/order') ?>" style="text-decoration: none;">
            <div class="card text-white bg-primary mb-3 shadow-sm card-hover">
                <div class="card-body">
                    <h5 class="card-title">Total Order</h5>
                    <p class="card-text display-4"><?= $jumlahOrder ?></p>
                </div>
            </div>
        </a>
    </div>

    <!-- Card Total Pesan -->
    <div class="col-md-4">
        <a href="/admin/pesan') ?>" style="text-decoration: none;">
            <div class="card text-white bg-success  mb-3 shadow-sm card-hover">
                <div class="card-body">
                    <h5 class="card-title">Total Pesan Masuk</h5>
                    <p class="card-text display-4"><?= $jumlahPesan ?></p>
                </div>
            </div>
        </a>
    </div>


</div>

<?= $this->endSection() ?>
