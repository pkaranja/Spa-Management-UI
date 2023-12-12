<?= $this->extend('layouts/settings') ?>

<?= $this->section('settings') ?>

<?php $daysSelected = explode( ",", $data->daysAvailable); ?>

<h5 class="fs-4 fw-semibold mb-4">Service Details</h5>
<?= view('App\Views\auth\components\notifications') ?>
<form action="<?= site_url('service/update/'.$data->id ); ?>" method="POST" accept-charset="UTF-8">
  <?= csrf_field() ?>
  <div class="row">
      <div class="col-lg-6">
        <div class="mb-4">
          <label for="servicename" class="form-label fw-semibold">Service name *</label>
          <input type="text" class="form-control" id="servicename" name="servicename" required placeholder="Service name" value="<?= $data->serviceName ?>">
        </div>
        <div class="mb-4">
          <label for="category" class="form-label fw-semibold">Categoy *</label>
          <select name="category" class="form-control" id="category" required>
            <option>Select category</option>
            <?php
              foreach ($categories as $category):
                if ( $category->id == $data->category ):
                  echo '<option value="'.$category->id. '" selected="selected">'. $category->categoryName. '</option>';
                else:
                  echo '<option value="'.$category->id. '">'. $category->categoryName. '</option>';
                endif;
              endforeach;
            ?>
          </select>
        </div>
        <div class="mb-4">
          <label for="starttime" class="form-label fw-semibold">Start Time *</label>
          <input type="text" class="form-control" id="starttime" name="starttime" required placeholder="Service start time" value="<?= $data->serviceStartTime ?>">
        </div>
      </div>
      <div class="col-lg-6">
          <div class="mb-4">
              <label for="price" class="form-label fw-semibold">Price *</label>
              <input type="number" class="form-control" id="price" name="price" required placeholder="Price" value="<?= $data->price ?>">
            </div>
            <div class="mb-4">
                <label for="days" class="form-label fw-semibold">Days offered *</label>
                <select class="form-control multiselect" id="days" name="days[]" multiple required>
                  <?php
                      foreach ( $weekdays as $day ):
                        if ( in_array($day, $daysSelected) ):
                          echo '<option value="'.$day.'" label="'.$day.'" selected>'.$day.'</option>';
                        else:
                          echo '<option value="'.$day.'" label="'.$day.'">'.$day.'</option>';
                        endif;
                      endforeach;
                  ?>
                </select>
              </div>
            <div class="mb-4">
              <label for="endtime" class="form-label fw-semibold">End Time *</label>
              <input type="text" class="form-control" id="endtime" name="endtime" required placeholder="Service end time" value="<?= $data->serviceEndTime ?>">
            </div>
      </div>

      <div class="col-lg-12">
          <div class="mb-4">
              <label for="description" class="form-label fw-semibold">Service description</label>
              <textarea class="form-control" name="description" id="description" rows="3" placeholder="Enter description here..."><?= $data->description ?></textarea>
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