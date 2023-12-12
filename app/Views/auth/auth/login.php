<?= $this->extend('auth/layouts/auth') ?>
<?= $this->section('main') ?>

<div class="col-lg-6 col-xl-4 col-xxl-4">
    <div class="authentication-login min-vh-100 bg-body row justify-content-center align-items-center p-4">
      <div class="col-sm-8 col-md-6 col-xl-9">
       <h2 class="mb-3 fs-7 fw-bolder">Sign in to your account</h2>
        <div class="row">
          <div class="col-6 mb-2 mb-sm-0">
            <a class="btn btn-white text-dark border fw-normal d-flex align-items-center justify-content-center rounded-2 py-8"
              href="javascript:void(0)" role="button">
              <img src="../assets/images/svgs/google-icon.svg" alt="" class="img-fluid me-2" width="18"
                height="18">
              <span class="d-none d-sm-block me-1 flex-shrink-0">Google</span>
            </a>
          </div>
          <div class="col-6">
            <a class="btn btn-white text-dark border fw-normal d-flex align-items-center justify-content-center rounded-2 py-8"
              href="javascript:void(0)" role="button">
              <img src="../assets/images/svgs/facebook-icon.svg" alt="" class="img-fluid me-2" width="18"
                height="18">
              <span class="d-none d-sm-block me-1 flex-shrink-0">Facebook</span>
            </a>
          </div>
        </div>
        <div class="position-relative text-center my-4">
          <p class="mb-0 fs-4 px-3 d-inline-block text-bg-white text-dark z-index-5 position-relative">or sign in with</p>
          <span class="border-top w-100 position-absolute top-50 start-50 translate-middle"></span>
        </div>
    
    <?= view('App\Views\auth\components\notifications') ?>
    
    <form action="<?= site_url('login'); ?>" method="POST" accept-charset="UTF-8">
        <?= csrf_field() ?>
        <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" required name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="<?= lang('Auth.email') ?>" value="<?= old('email') ?>">
        </div>
    
        <div class="mb-4">
            <label for="password" class="form-label">Password</label>
            <input type="password" required name="password" class="form-control" id="password" placeholder="<?= lang('Auth.password') ?>">
        </div>
    
        <div class="d-flex align-items-center justify-content-between mb-4">
            <div class="form-check">
              <input class="form-check-input primary" type="checkbox" value="" id="flexCheckChecked">
              <label class="form-check-label text-dark" for="flexCheckChecked">
                Remeber this Device
              </label>
            </div>
            <a class="text-primary fw-medium" href="<?= site_url('forgot-password'); ?>"><?= lang('Auth.forgotYourPassword') ?></a>
          </div>
    
        <button class="btn btn-primary w-100 py-8 mb-4 rounded-2"><?= lang('Auth.login') ?></button>
        <div class="d-flex align-items-center justify-content-center">
            <p class="fs-4 mb-0 fw-medium">Don't have an account?</p>
            <a class="text-primary fw-medium ms-2" <a href="<?= site_url('register'); ?>"><?= lang('Auth.register') ?></a>
        </div>
    
    </form>
    </div>
  </div>
</div>
<?= $this->endSection() ?>