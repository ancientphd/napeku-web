<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8">
  <title>NAPEKU | Jasa Pengiriman Nanas - Distribusi & Ekspor</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="jasa pengiriman nanas, logistik nanas, distribusi buah, ekspor nanas, napekulogistik, pengiriman nanas pemalang">
  <meta name="description" content="NAPEKULOGISTIK – Penyedia jasa pengiriman & distribusi nanas profesional. Melayani pengiriman retail, grosir, dan ekspor nanas dengan sistem logistik terintegrasi.">

  <!-- Favicon -->
  <link rel="icon" href="<?= base_url('asset/img/favicon.ico') ?>" type="image/x-icon">

  <!-- Fonts & Icons -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">

  <!-- Plugin CSS -->
  <link rel="stylesheet" href="<?= base_url('asset/lib/animate/animate.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('asset/lib/owlcarousel/assets/owl.carousel.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('asset/lib/owlcarousel/assets/owl.theme.default.min.css') ?>">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="<?= base_url('asset/css/bootstrap.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('asset/css/style.css') ?>">

  <?= $this->renderSection('style') ?>
</head>

<body>

  <?= $this->include('components/header') ?>
  <?= $this->renderSection('content') ?>
  <?= $this->include('components/footer') ?>

  <!-- Core Libraries -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Satu versi jQuery fix -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JS -->
  <script src="<?= base_url('asset/lib/wow/wow.min.js') ?>"></script>
  <script src="<?= base_url('asset/lib/easing/easing.min.js') ?>"></script>
  <script src="<?= base_url('asset/lib/waypoints/waypoints.min.js') ?>"></script>
  <script src="<?= base_url('asset/lib/counterup/counterup.min.js') ?>"></script>
  <script src="<?= base_url('asset/lib/owlcarousel/owl.carousel.min.js') ?>"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <!-- Carousel Inisialisasi -->
  <script>
    $(document).ready(function () {
      $('.header-carousel').owlCarousel({
        autoplay: true,
        smartSpeed: 800,
        loop: true,
        items: 1,
        dots: true,
        nav: false
      });
    });

    
</script>
<?php if (session()->getFlashdata('error')) : ?>
<script>
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: '<?= session()->getFlashdata('error') ?>',
        confirmButtonColor: '#d33'
    });
</script>
<?php endif; ?>

<?php if (session()->getFlashdata('success')) : ?>
<script>
    Swal.fire({
        icon: 'success',
        title: 'Berhasil',
        text: '<?= session()->getFlashdata('success') ?>',
        confirmButtonColor: '#d33'
    });
</script>
<?php endif; ?>
  <!-- Custom JS -->
  <script src="<?= base_url('asset/js/main.js') ?>"></script>

  <?= $this->renderSection('script') ?>
</body>

</html>