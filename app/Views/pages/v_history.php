<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<div class="container mt-5">
    <h2>Histori Pemesanan Anda</h2>

    <table class="table table-bordered mt-4">
        <thead>
            <tr>
                <th>No. Resi</th>
                <th>Nama</th>
                <th>Paket</th>
                <th>Total Bayar</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($orders): ?>
                <?php foreach ($orders as $order): ?>
                    <tr>
                        <td><?= esc($order['no_resi']) ?></td>
                        <td><?= esc($order['nama']) ?></td>
                        <td><?= esc($order['paket_id']) ?></td>
                        <td>Rp <?= number_format($order['total_bayar'], 0, ',', '.') ?></td>
                        <td><?= esc($order['alamat']) ?></td>
                    </tr>
                <?php endforeach ?>
            <?php else: ?>
                <tr><td colspan="5" class="text-center">Belum ada pemesanan</td></tr>
            <?php endif ?>
        </tbody>
    </table>
</div>

<?= $this->endSection() ?>
