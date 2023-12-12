<?= $this->extend('layouts/settings') ?>

<?= $this->section('settings') ?>
<div class="row">
  <div class="col-md-8">
    <div class="widget-content searchable-container list">
      <div class="card card-body">
        <div class="row">
          <div class="col-md-4 col-xl-3">
            <form class="position-relative">
              <input type="text" class="form-control product-search ps-5" id="input-search" placeholder="Search staff..." />
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
            <a href="<?= site_url('staff/new') ?>" class="btn btn-info d-flex align-items-center">
              <i class="ti ti-users text-white me-1 fs-5"></i> Add staff
            </a>
          </div>
        </div>
      </div>
  
  
    <div class="card card-body">
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
              <th>Full Name</th>
              <th>Phone</th>
              <th>Gender</th>
              <th>Age</th>
              <th>Services</th>
              <th></th>
            </thead>
            <tbody>
              <!-- start row -->
              <?php foreach ($data->users as $item):?>
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
                  <div class="d-flex align-items-center">
                    <img src="../assets/images/profile/user-1.jpg" alt="avatar" class="rounded-circle"
                      width="35" />
                    <div class="ms-3">
                      <div class="user-meta-info">
                        <h6 class="user-name mb-0" data-name="<?= $item->firstName ?> <?= $item->lastName ?>"><?= $item->firstName ?> <?= $item->lastName ?></h6>
                        <span class="user-email fs-3" data-email="<?= $item->email ?>"><?= $item->email ?></span>
                      </div>
                    </div>
                  </div>
                </td>
                <td>
                  <span class="usr-phone" data-phone="<?= $item->phone ?>"><?= $item->phone ?></span>
                </td>
                <td>
                  <span class="usr-gender" data-gender="<?= $item->gender ?>"><?= $item->gender ?></span>
                </td>
                <td>
                  <span class="usr-age" data-age="<?= $item->birthDate ?>"><?= explode('-', $item->birthDate)[2] ?></span>
                </td>
                <td>
                  <span class="usr-state mb-1 badge rounded-pill text-bg-danger" data-state="<?= $item->birthDate ?>">
                    In session
                  </span>
                  <span class="usr-state mb-1 badge rounded-pill text-bg-success" data-state="<?= $item->birthDate ?>">
                   Available
                  </span>
                </td>
                <td>
                  <div class="action-btn">
                    <a href="javascript:void(0)" class="text-info edit">
                      <i class="ti ti-eye fs-5"></i>
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