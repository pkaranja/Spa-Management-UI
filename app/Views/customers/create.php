<?= $this->extend('auth/layouts/default') ?>

<?= $this->section('main') ?>

<?= view('App\Views\components\hero', array("title"=>"New Customer", "page_name"=>"Customer") ) ?>

<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body p-4 border-bottom">
          <h5 class="fs-4 fw-semibold mb-4">Customer Details</h5>
          <?= view('App\Views\auth\components\notifications') ?>
          <form action="<?= site_url('customer/create'); ?>" method="POST" accept-charset="UTF-8">
            <?= csrf_field() ?>
            <div class="row">
                <div class="col-lg-6">
                  <div class="mb-4">
                    <label for="firstname" class="form-label fw-semibold">First name *</label>
                    <input type="text" class="form-control" id="firstname" name="firstname" value="<?= old('firstname') ?>"  required placeholder="First name">
                  </div>
                  <div class="mb-4">
                    <label for="phone" class="form-label fw-semibold">Phone number *</label>
                    <input type="tel" class="form-control" id="phone" name="phone" value="<?= old('phone') ?>" required placeholder="Phone number">
                  </div>
                  <div class="mb-4">
                    <label for="gender" class="form-label fw-semibold">Gender *</label>
                    <select class="form-select mr-sm-2" id="gender" name="gender">
                          <option selected>Select Gender</option>
                          <option value="MALE" <?= (old('gender') === 'MALE') ? 'selected' : '' ?>>Male</option>
                          <option value="FEMALE" <?= (old('gender') === 'FEMALE') ? 'selected' : '' ?>>Female</option>
                          <option value="OTHER" <?= (old('gender') === 'OTHER') ? 'selected' : '' ?>>Do not wish to disclose</option>
                      </select>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="mb-4">
                    <label for="lastname" class="form-label fw-semibold">Last name *</label>
                    <input type="text" class="form-control" id="lastname" name="lastname" value="<?= old('lastname') ?>" required placeholder="Last name">
                  </div>
                  <div class="mb-4">
                    <label for="email" class="form-label fw-semibold">Email address *</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?= old('email') ?>" required placeholder="Email address">
                  </div>
                  <div class="mb-4">
                    <label for="dob" class="form-label fw-semibold">Date of Birth *</label>
                    <input type="date" class="form-control" id="dob" name="dob" value="<?= old('dob') ?>" required placeholder="DOB">
                  </div>
                </div>
                <div class="col-lg-12">
                    <div class="mb-4">
                        <label for="remarks" class="form-label fw-semibold">Remarks</label>
                        <textarea class="form-control" name="remarks" id="remarks" rows="3" placeholder="Enter remarks/comments here...">
                         <?= old('remarks') ?>
                        </textarea>
                    </div>
                </div>
                <div class="col-12">
                  <div class="d-flex gap-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="<?= site_url('customers') ?>" class="btn bg-danger-subtle text-danger">Cancel</a>
                  </div>
                </div>
            </form>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>