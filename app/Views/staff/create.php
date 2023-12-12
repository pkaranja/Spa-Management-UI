<?= $this->extend('layouts/settings') ?>

<?= $this->section('settings') ?>

<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body p-4 border-bottom">
          <h5 class="fs-4 fw-semibold mb-4">Staff Details</h5>
          <form action="<?= site_url('staff/create'); ?>" method="POST" accept-charset="UTF-8">
            <?= csrf_field() ?>
            <div class="row">
                <div class="col-lg-6">
                  <div class="mb-4">
                    <label for="firstname" class="form-label fw-semibold">First name *</label>
                    <input type="text" class="form-control" id="firstname" name="firstname" required placeholder="First name">
                  </div>
                  <div class="mb-4">
                    <label for="phone" class="form-label fw-semibold">Phone number *</label>
                    <input type="tel" class="form-control" id="phone" name="phone" required placeholder="Phone number">
                  </div>
                  <div class="mb-4">
                    <label for="gender" class="form-label fw-semibold">Gender *</label>
                    <select class="form-select mr-sm-2" id="gender" name="gender">
                          <option selected>Choose...</option>
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                      </select>
                  </div>
                  <div class="mb-4">
                    <label for="services" class="form-label fw-semibold">Services *</label>
                    <input type="text" class="form-control" id="services" name="services" required placeholder="Services">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="mb-4">
                    <label for="lastname" class="form-label fw-semibold">Last name *</label>
                    <input type="text" class="form-control" id="lastname" name="lastname" required placeholder="Last name">
                  </div>
                  <div class="mb-4">
                    <label for="email" class="form-label fw-semibold">Email address *</label>
                    <input type="email" class="form-control" id="email" name="email" required placeholder="Email address">
                  </div>
                  <div class="mb-4">
                    <label for="dob" class="form-label fw-semibold">Date of Birth *</label>
                    <input type="date" class="form-control" id="dob" name="dob" required placeholder="DOB">
                  </div>
                  <div class="mb-4">
                    <label for="packages" class="form-label fw-semibold">Packages</label>
                    <input type="text" class="form-control" id="packages" name="packages" placeholder="Packages">
                  </div>
                </div>
                
                <div class="col-lg-12">
                    <div class="mb-4">
                        <label for="remarks" class="form-label fw-semibold">Remarks</label>
                        <textarea class="form-control" name="remarks" id="remarks" rows="3" placeholder="Enter remarks/comments here..."></textarea>
                    </div>
                </div>
                <div class="col-12">
                  <div class="d-flex gap-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="<?= site_url('staff') ?>" class="btn bg-danger-subtle text-danger">Cancel</a>
                  </div>
                </div>
            </form>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>