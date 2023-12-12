<?= $this->extend('auth/layouts/auth') ?>
<?= $this->section('main') ?>


<div class="col-lg-6 col-xl-4 col-xxl-4">
    <div class="card mb-0 shadow-none rounded-0 min-vh-100 h-100">
      <div class="d-flex align-items-center w-100 h-100">
        <div class="card-body">
          <div class="mb-5">
            <h2 class="fw-bolder fs-7 mb-3"><?= lang('Auth.resetPassword') ?></h2>
          </div>
          
            <form method="POST" action="<?= site_url('reset-password'); ?>" accept-charset="UTF-8">
            <?= csrf_field() ?>
                <div class="mb-3">
                  <label for="email" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="email" aria-describedby="emailHelp"  placeholder="<?= lang('Auth.typeEmail') ?>" value="<?= old('email') ?>" required>
                </div>
                
                <div class="mb-3">
                    <label for="password" class="form-label"><?= lang('Auth.newPassword') ?></label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="<?= lang('Auth.newPassword') ?>">
                </div>
                
                <div class="mb-4">
                    <label for="password_confirm" class="form-label"><?= lang('Auth.newPasswordAgain') ?></label>
                    <input type="password" name="password_confirm" class="form-control" id="password_confirm" placeholder="<?= lang('Auth.newPasswordAgain') ?>">
                </div>

                <input type="hidden" name="token" value="<?= $_GET['token'] ?>" />
                <button type="submit"><?= lang('Auth.resetPassword') ?></button>
                
                <button type="submit" class="btn btn-primary w-100 py-8 mb-3"><?= lang('Auth.resetPassword') ?></button>
          </form>
        </div>
      </div>
    </div>
</div>
<?= $this->endSection() ?>