<?= $this->extend('layouts/settings') ?>

<?= $this->section('settings') ?>

<div class="row">
    <div class="col-12">
          <form action="<?= site_url('vendor/update/'.$data->id ); ?>" method="POST" accept-charset="UTF-8">
            <?= csrf_field() ?>
            <div class="row">
                <div class="col-lg-6">
                  <div class="mb-4">
                    <label for="name" class="form-label fw-semibold">Vendor name *</label>
                    <input type="text" class="form-control" id="name" name="name" required placeholder="Vendor name" value="<?= $data->name ?>">
                  </div>
                  <div class="mb-4">
                    <label for="phoneNumber" class="form-label fw-semibold">Phone number *</label>
                    <input type="text" class="form-control" id="phone" name="phone" required placeholder="Phone number" value="<?= $data->phoneNumber ?>">
                  </div>
                  <div class="mb-4">
                    <label for="contactPerson" class="form-label fw-semibold">Contact person name</label>
                    <input type="text" class="form-control" id="contactPerson" name="contactPerson" required placeholder="Contact person name" value="<?= $data->contactPerson ?>">
                  </div>
                  <div class="mb-4">
                    <label for="contactPersonPhone" class="form-label fw-semibold">Contact person phone</label>
                    <input type="text" class="form-control" id="contactPersonPhone" name="contactPersonPhone" placeholder="Contact person phone" value="<?= $data->contactPersonPhone ?>">
                  </div>
                </div>
                <div class="col-lg-6">
                    <div class="mb-4">
                        <label for="email" class="form-label fw-semibold">Email address *</label>
                        <input type="email" class="form-control" id="email" name="email" required placeholder="Email address" value="<?= $data->emailAddress ?>">
                      </div>
                      <div class="mb-4">
                        <label for="address" class="form-label fw-semibold">Address</label>
                        <input type="text" class="form-control" id="address" name="address" required placeholder="Address" value="<?= $data->address ?>">
                      </div>
                      <div class="mb-4">
                        <label for="contactPersonEmail" class="form-label fw-semibold">Contact person email</label>
                        <input type="email" class="form-control" id="contactPersonEmail" name="contactPersonEmail" placeholder="Contact person email" value="<?= $data->contactPersonEmail ?>">
                      </div>
                </div>

                <div class="col-lg-12">
                    <div class="mb-4">
                        <label for="notes" class="form-label fw-semibold">Vendor notes</label>
                        <textarea class="form-control" name="notes" id="notes" rows="3" placeholder="Enter notes here..."><?= $data->description ?></textarea>
                    </div>
                </div>
                <div class="col-12">
                  <div class="d-flex gap-3">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="<?= site_url('vendors') ?>" class="btn bg-danger-subtle text-danger">Cancel</a>
                  </div>
                </div>
            </form>
      </div>
</div>
<?= $this->endSection() ?>