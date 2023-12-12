<?= $this->extend('layouts/settings') ?>

<?= $this->section('settings') ?>

<div class="row">
  <div class="col-12">
    <?= view('App\Views\auth\components\notifications') ?>
    <form action="<?= site_url('package/create'); ?>" method="POST" accept-charset="UTF-8">
      <?= csrf_field() ?>
      <div class="row">
        <div class="col-lg-6">
          <div class="mb-4">
            <label for="packagename" class="form-label fw-semibold">Package name *</label>
            <input type="text" class="form-control" id="packagename" name="packagename" required placeholder="Package name">
          </div>
          <div class="mb-4">
            <label for="starttime" class="form-label fw-semibold">Start Time *</label>
            <input type="time" class="form-control" id="starttime" name="starttime" required placeholder="Package start time">
          </div>
          <div class="mb-4">
            <label for="services" class="form-label fw-semibold">Services *</label>
            <select name="services[]" class="form-control" multiple id="services" required>
              <?php foreach ( $services as $item ): ?>
                <option value="<?= $item->id ?>"><?= $item->serviceName ?></option>
              <?php endforeach; ?>
            </select>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="mb-4">
              <label for="price" class="form-label fw-semibold">Price *</label>
              <input type="number" class="form-control" id="price" name="price" required placeholder="Price">
            </div>
            <div class="mb-4">
              <label for="endtime" class="form-label fw-semibold">End Time *</label>
              <input type="time" class="form-control" id="endtime" name="endtime" required placeholder="Package end time">
            </div>
            <div class="mb-4">
              <label for="endtime" class="form-label fw-semibold">Days offered *</label>
              <select class="form-control multiselect" id="days" name="days[]" multiple required>
                <?php
                    foreach ( $weekdays as $day ):
                        echo '<option value="'.$day.'" label="'.$day.'">'.$day.'</option>';
                    endforeach;
                ?>
              </select>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="mb-4">
                <label for="description" class="form-label fw-semibold">Package description</label>
                <textarea class="form-control" name="description" id="description" rows="3" placeholder="Enter description here..."></textarea>
            </div>
        </div>
        <div class="col-12">
          <div class="d-flex gap-3">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="<?= site_url('packages') ?>" class="btn bg-danger-subtle text-danger">Cancel</a>
          </div>
        </div>
      </form>
  </div>
</div>
<?= $this->endSection() ?>