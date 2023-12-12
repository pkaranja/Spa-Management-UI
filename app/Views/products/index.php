<?= $this->extend('layouts/settings') ?>

<?= $this->section('settings') ?>
<div class="row">
  <div class="col-md-12">
    <div class="widget-content searchable-container list">
      <div class="card card-body">
        <div class="row">
          <div class="col-md-4 col-xl-3">
            <form class="position-relative">
              <input type="text" class="form-control product-search ps-5" id="input-search" placeholder="Search products..." />
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
            <a href="<?= site_url('product/new') ?>" class="btn btn-info d-flex align-items-center">
              <i class="ti ti-users text-white me-1 fs-5"></i> Add product
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
              <th>Name</th>
              <th>Vendor</th>
              <th>Cost</th>
              <th>Selling Price</th>
              <th>Quantity</th>
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
                  <span class="data-name" data-name="<?= $item->productName ?>"><?= $item->productName ?></span>
                </td>
                <td>
                  <span class="data-number" data-cost="<?= $item->vendor ?>"><?= $item->vendor ?></span>
                </td>
                <td>
                  <span class="data-money" data-cost="<?= $item->cost ?>"><?= $item->cost ?></span>
                </td>
                <td>
                  <span class="data-money" data-cost="<?= $item->sellingPrice ?>"><?= $item->sellingPrice ?></span>
                </td>
                <td>
                  <span class="data-number" data-cost="<?= $item->quantity ?>"><?= $item->quantity ?></span>
                </td>
                <td>
                  <span class="data-number" data-cost="<?= $item->alertQuantity ?>"><?= $item->alertQuantity ?></span>
                </td>
                <td>
                  <div class="action-btn">
                    <a href="<?= site_url('product/edit/'.$item->id ) ?>" class="text-info edit">
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