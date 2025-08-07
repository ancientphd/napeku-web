<?= $this->extend('layoutadmin') ?>
<?= $this->section('content') ?>

<div class="container mt-4">
    <h2>Kelola Pemesanan</h2>

    <?php if(session()->getFlashdata('success')): ?>
        <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
    <?php endif; ?>

    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>Id</th>
                <th>No Resi</th>
                <th>Nama Pemesan</th>
                <th>Paket</th>
                <th>Berat</th>
                <th>Total Bayar</th>
                <th>Alamat</th>
                <th>Status</th>
                <th>Aksi</th>
                
            </tr>
        </thead>
        <tbody>
            <?php foreach($orders as $order): ?>
                <tr>
                    <td><?= esc($order['id']) ?></td>
                    <td><?= esc($order['no_resi']) ?></td>
                    <td><?= esc($order['nama']) ?></td>
                    <td><?= esc($order['nama_paket']) ?></td>
                    <td><?= esc($order['berat']) ?> kg</td>
                    <td>Rp<?= number_format($order['total_bayar'], 0, ',', '.') ?></td>
                    <td><?= esc($order['alamat']) ?>, <?= esc($order['kelurahan']) ?>, <?= esc($order['provinsi']) ?></td>
                    <td><?= esc($order['status']) ?></td>
                    <td class="d-flex gap-1">
                        <!-- Tombol Konfirmasi Kirim -->
                        <?php if ($order['status'] !== 'kirim'): ?>
                        <form action="<?= base_url('admin/order/confirm/' . $order['id']) ?>" method="post" onsubmit="return confirm('Konfirmasi pengiriman pesanan ini?')">
                            <?= csrf_field() ?>
                            <button class="btn btn-success btn-sm">Konfirmasi</button>
                        </form>
                        <?php endif; ?>

                        <!-- Tombol Hapus -->
                        <form action="<?= base_url('admin/order/delete/' . $order['id']) ?>" method="post" onsubmit="return confirm('Yakin ingin menghapus?')">
                            <?= csrf_field() ?>
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>

<?= $this->endSection() ?>
