   <?= $this->extend('layout') ?>
    <?= $this->section('content') ?>

<?php
$username = [
    'name' => 'username',
    'id' => 'username',
    'class' => 'form-control'
];

$password = [
    'name' => 'password',
    'id' => 'password',
    'class' => 'form-control'
];
?>
   
   <!-- Login Modal -->

        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <h2 class="text-center mb-4">Masuk ke NAPEKU</h2>

<?php
if (session()->getFlashData('failed')) {
?>
    <div class="col-12 alert alert-danger" role="alert">
        <hr>
        <p class="mb-0">
            <?= session()->getFlashData('failed') ?>
        </p>
    </div>
<?php
}
?>

<?= form_open('login', 'class = "row g-3 needs-validation"') ?>

<div class="col-12">
    <label for="yourUsername" class="form-label">Username</label>
    <div class="input-group has-validation">
        <span class="input-group-text" id="inputGroupPrepend">@</span>
        <?= form_input($username) ?>
        <div class="invalid-feedback">Please enter your username.</div>
    </div>
</div>

<div class="col-12">
    <label for="yourPassword" class="form-label">Password</label>
		    <?= form_password($password) ?>
    <div class="invalid-feedback">Please enter your password!</div>
</div>
<div class="col-12">
    <?= form_submit('submit', 'Login', ['class' => 'btn btn-primary w-100']) ?>
</div>

<?= form_close() ?>

      <!--         
                    <div class="divider">
                        <span>ATAU</span>
                    </div>
                    
                    <div class="social-login">
                        <button class="btn btn-light w-100 d-flex align-items-center justify-content-center">
                            <i class="bi bi-google text-primary me-2"></i>
                            Lanjutkan dengan Google
                        </button>

                        <br>

                        <button class="btn btn-light w-100 d-flex align-items-center justify-content-center">
                            <i class="fab fa-facebook-f text-primary me-2"></i>
                            Lanjutkan dengan Facebook
                        </button>
                    </div>

                    <br>
                    
                    <div class="forgot-password">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#forgotPasswordModal">Lupa kata sandi?</a>
                        <p class="mt-3">Belum punya akun? <a href=" base_url('register')">Daftar sekarang</a></p>
                    </div>
-->
                </div>
            </div>
        </div>
    </div>

<?= $this->endsection() ?>