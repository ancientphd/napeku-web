<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

<?php if (session()->getFlashdata('error')): ?>
    <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
<?php endif; ?>

<?php if (session()->getFlashdata('success')): ?>
    <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
<?php endif; ?>

            <div class="card shadow">
                <div class="card-body">
                    <h3 class="text-center mb-4">Daftar Akun Baru</h3>

<form action="<?= base_url('register') ?>" method="post">
    <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" name="username" id="username" value="<?= old('username') ?>" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" id="email" value="<?= old('email') ?>" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" id="password" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="confirm_password" class="form-label">Ulangi Password</label>
        <input type="password" name="confirm_password" id="confirm_password" class="form-control" required>
    </div>

    <div class="form-check mb-3">
        <input type="checkbox" name="agree" id="agree" class="form-check-input" required>
        <label for="agree" class="form-check-label">
            Saya menyetujui <a href="#">syarat dan ketentuan</a>.
        </label>
    </div>

    <button type="submit" class="btn btn-primary w-100">Daftar</button>
</form>
                </div>
            </div>

            <div class="text-center mt-3">
                Sudah punya akun? <a href="<?= base_url('login') ?>">Masuk</a>
            </div>
        </div>
    </div>
<?= $this->endSection() ?>