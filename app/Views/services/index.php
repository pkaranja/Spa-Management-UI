<?= $this->extend('layouts/settings') ?>

<?= $this->section('settings') ?>
<div class="row">
  <div class="col-md-12">
    <div class="widget-content searchable-container list">
      <div class="card card-body">
        <div class="row">
          <div class="col-md-4 col-xl-3">
            <form class="position-relative">
              <input type="text" class="form-control product-search ps-5" id="input-search" placeholder="Search services..." />
              <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
            </form>
          </div>
          <div
            class="col-md-8 col-xl-9 text-end d-flex justify-content-md-end justify-content-center mt-3 mt-md-0">
            <div class="action-btn show-btn" style="display: none">
              <a href="javascript:void(0)"
                class="delete-multiple bg-danger-subtle btn me-2 text-danger d-flex align-items-center font-medium">
                <i class="ti ti-trash text-danger me-1 fs-5"></i> Delete All
              </a>
            </div>
            <a href="<?= site_url('service/new') ?>" class="btn btn-info d-flex align-items-center">
              <i class="ti ti-users text-white me-1 fs-5"></i> Add Service
            </a>
          </div>
        </div>
      </div>
      <div class="card card-body">
        <?= view('App\Views\auth\components\notifications') ?>
        <div class="table-responsive">
          <table class="table search-table align-middle text-nowrap">
            <thead class="header-item">
              <th>
                <div class="n-chk align-self-center text-center">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input primary" id="contact-check-all" />
                    <label class="form-check-label" for="contact-check-all"></label>
                    <span class="new-control-indicator"></span>
                  </div>
                </div>
              </th>
              <th>Service Name</th>
              <th>Price</th>
              <th>Start Time</th>
              <th>End Time</th>
              <th>State</th>
              <th></th>
            </thead>
            <tbody>
              <!-- start row -->
              <?php foreach ($data as $item):?>
              <tr class="search-items">
                <td>
                  <div class="n-chk align-self-center text-center">
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input contact-chkbox primary" id="checkbox1" />
                      <label class="form-check-label" for="checkbox1"></label>
                    </div>
                  </div>
                </td>
                <td>
                  <span class="data-text" data-name="<?= $item->serviceName ?>"><?= $item->serviceName ?></span>
                </td>
                <td>
                  <span class="data-money" data-price="<?= $item->price ?>"><?= $item->price ?></span>
                </td>
                <td>
                  <span class="data-time" data-starttime="<?= $item->serviceStartTime ?>"><?= $item->serviceStartTime ?></span>
                </td>
                <td>
                  <span class="data-time" data-endtime="<?= $item->serviceEndTime ?>"><?= $item->serviceEndTime ?></span>
                </td>
                <td>
                  <span class="data-state" data-state="<?= $item->active ?>">
                    <?= ($item->active == 1 ? '<i class="ti ti-check text-success fs-5"></i>' : '<i class="ti ti-x text-danger fs-5 "></i>' ); ?>
                  </span>
                </td>
                <td>
                  <div class="action-btn">
                    <a href="<?= site_url('service/edit/'.$item->id ) ?>" class="text-info edit">
                      <i class="ti ti-edit fs-5"></i>
                    </a>
                    <a href="javascript:void(0)" class="text-dark delete ms-2">
                      <i class="ti ti-trash fs-5"></i>
                    </a>
                  </div>
                </td>
              </tr>
              <!-- end row -->
              <?php endforeach; ?>
  
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>