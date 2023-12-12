<?= $this->extend('layouts/settings') ?>

<?= $this->section('settings') ?>

<h5 class="fs-4 fw-semibold mb-4">Service Details</h5>
<?= view('App\Views\auth\components\notifications') ?>
<form action="<?= site_url('service/create'); ?>" method="POST" accept-charset="UTF-8">
  <?= csrf_field() ?>
  <div class="row">
      <div class="col-lg-6">
        <div class="mb-4">
          <label for="servicename" class="form-label fw-semibold">Service name *</label>
          <input type="text" class="form-control" id="servicename" name="servicename" required placeholder="Service name">
        </div>
        <div class="mb-4">
          <label for="category" class="form-label fw-semibold">Categoy *</label>
          <select name="category" class="form-control" id="category" required>
            <option>Select category</option>
            <?php foreach ($categories as $category):?>
              <option value="<?= $category->id ?>"><?= $category->categoryName ?></option>
            <?php endforeach; ?>
          </select>
        </div>
        <div class="mb-4">
          <label for="starttime" class="form-label fw-semibold">Start Time *</label>
          <input type="text" class="form-control" id="starttime" name="starttime" required placeholder="Service start time">
        </div>
      </div>
      <div class="col-lg-6">
          <div class="mb-4">
              <label for="price" class="form-label fw-semibold">Price *</label>
              <input type="number" class="form-control" id="price" name="price" required placeholder="Price">
            </div>
            <div class="mb-4">
                <label for="days" class="form-label fw-semibold">Days offered</label>
                <select class="form-control multiselect" id="days" name="days" multiple required>
                  <option value="Monday" label="Monday">Monday</option>
                  <option value="Tuesday" label="Tuesday">Tuesday</option>
                  <option value="Wednesday" label="Wednesday">Wednesday</option>
                  <option value="Thursday" label="Thursday">Thursday</option>
                  <option value="Friday" label="Friday">Friday</option>
                  <option value="Saturday" label="Saturday">Saturday</option>
                  <option value="Sunday" label="Sunday">Sunday</option>
                </select>
              </div>
            <div class="mb-4">
              <label for="endtime" class="form-label fw-semibold">End Time *</label>
              <input type="text" class="form-control" id="endtime" name="endtime" required placeholder="Service end time">
            </div>
      </div>

      <div class="col-lg-12">
          <div class="mb-4">
              <label for="description" class="form-label fw-semibold">Service description</label>
              <textarea class="form-control" name="description" id="description" rows="3" placeholder="Enter description here..."></textarea>
          </div>
      </div>
      <div class="col-12">
        <div class="d-flex gap-3">
          <button type="submit" class="btn btn-primary">Submit</button>
          <a href="<?= site_url('services') ?>" class="btn bg-danger-subtle text-danger">Cancel</a>
        </div>
      </div>
  </form>


<?= $this->endSection() ?>