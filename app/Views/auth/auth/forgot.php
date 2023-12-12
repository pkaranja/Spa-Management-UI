<?= $this->extend('auth/layouts/auth') ?>
<?= $this->section('main') ?>


<div class="col-lg-6 col-xl-4 col-xxl-4">
    <div class="card mb-0 shadow-none rounded-0 min-vh-100 h-100">
      <div class="d-flex align-items-center w-100 h-100">
        <div class="card-body">
          <div class="mb-5">
            <h2 class="fw-bolder fs-7 mb-3">Forgot your password?</h2>
            <p class="mb-0 ">   
              Please enter the email address associated with your account and We will email you a link to reset your password.                
            </p>
          </div>
          <?= view('App\Views\auth\components\notifications') ?>
          <form action="<?= site_url('forgot-password'); ?>" method="POST" accept-charset="UTF-8" onsubmit="submitButton.disabled = true; return true;">
                <?= csrf_field() ?>
                <div class="mb-3">
                  <label for="email" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="email" aria-describedby="emailHelp"  placeholder="<?= lang('Auth.typeEmail') ?>" value="<?= old('email') ?>" required>
                </div>
    
                <button class="btn btn-primary w-100 py-8 mb-3"><?= lang('Auth.setNewPassword') ?></button>
                <a href="<?= site_url('login'); ?>" class="btn bg-primary-subtle text-primary w-100 py-8">Back to Login</a>
          </form>
        </div>
      </div>
    </div>
</div>
         
<?= $this->endSection() ?>
