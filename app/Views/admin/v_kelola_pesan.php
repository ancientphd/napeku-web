<?= $this->extend('layoutadmin') ?>
<?= $this->section('content') ?>

<div class="container mt-4">
    <h2>Kelola Pesan Kontak</h2>

    <?php if(session()->getFlashdata('success')): ?>
        <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
    <?php endif; ?>

    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Telepon</th>
                <th>Kategori</th>
                <th>Pesan</th>
                <th>Dikirim Pada</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; foreach($pesan as $row): ?>
                <tr>
                    <td><?= $i++ ?></td>
                    <td><?= esc($row['nama']) ?></td>
                    <td><?= esc($row['email']) ?></td>
                    <td><?= esc($row['telepon']) ?></td>
                    <td><?= esc($row['kategori']) ?></td>
                    <td><?= esc($row['pesan']) ?></td>
                    <td><?= esc(date('d-m-Y H:i', strtotime($row['created_at']))) ?></td>
                    <td>
                        <form action="<?= base_url('admin/pesan/delete/' . $row['id']) ?>" method="post" onsubmit="return confirm('Yakin ingin menghapus pesan ini?')">
                            <?= csrf_field() ?>
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>

<?= $this->endSection() ?>
