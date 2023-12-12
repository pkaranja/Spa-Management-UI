<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta name="viewport" content="width=device-width" />
	
	<link rel="shortcut icon" type="image/png" href="<?= base_url('/assets/images/logos/favicon.png'); ?>" />

	<title>Spa Management System | Qroo Solutions</title>

	<link rel="stylesheet" href="<?= base_url('/assets/css/styles.css'); ?>" />
</head>
<body>
  <!-- Preloader -->
  <div class="preloader">
    <img src="../assets/images/logos/favicon.png" alt="loader" class="lds-ripple img-fluid" />
  </div>
  <div id="main-wrapper">
    <div class="position-relative overflow-hidden radial-gradient min-vh-100 w-100">
      <div class="position-relative z-index-5">
        <div class="row">
          <div class="col-lg-6 col-xl-8 col-xxl-8">
            <a href="index.html" class="text-nowrap logo-img d-block px-4 py-9 w-100">
              <img src="../assets/images/logos/dark-logo.svg" class="dark-logo" alt="Logo-Dark" />
              <img src="../assets/images/logos/light-logo.svg" class="light-logo" alt="Logo-light" />
            </a>
            <div class="d-none d-xl-flex align-items-center justify-content-center" style="height: calc(100vh - 80px);">
              <img src="../assets/images/backgrounds/login-security.svg" alt="" class="img-fluid" width="500">
            </div>
          </div>
		      
          <?= $this->renderSection('main') ?>
          
        </div>
      </div>
    </div>
  </div>
  <div class="dark-transparent sidebartoggler"></div>
  <!-- Import Js Files -->

<script src="<?= base_url('/assets/libs/jquery/dist/jquery.min.js'); ?>"></script>
<script src="<?= base_url('/assets/js/app.min.js'); ?>"></script>
<script src="<?= base_url('/assets/js/app.init.js'); ?>"></script>
<script src="<?= base_url('/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js'); ?>"></script>
<script src="<?= base_url('/assets/libs/simplebar/dist/simplebar.min.js'); ?>"></script>

<script src="<?= base_url('/assets/js/sidebarmenu.js'); ?>"></script>
<script src="<?= base_url('/assets/js/theme.js'); ?>"></script>

</body>

</html>