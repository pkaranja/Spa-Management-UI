<?= $this->extend('layouts/settings') ?>

<?= $this->section('settings') ?>

<div class="row">
    <div class="col-12">
          <form action="<?= site_url('product/create-product'); ?>" method="POST" accept-charset="UTF-8">
            <?= csrf_field() ?>
            <div class="row">
                <div class="col-lg-6">
                  <div class="mb-4">
                    <label for="name" class="form-label fw-semibold">Product name *</label>
                    <input type="text" class="form-control" id="name" name="name" required placeholder="Product name">
                  </div>
                  <div class="mb-4">
                    <label for="cost" class="form-label fw-semibold">Cost *</label>
                    <input type="text" class="form-control" id="cost" name="cost" required placeholder="Product cost">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="mb-4">
                    <label for="itemCode" class="form-label fw-semibold">Item code</label>
                    <input type="text" class="form-control" id="itemCode" name="itemCode" placeholder="Item code">
                  </div>
                  <div class="mb-4">
                    <label for="sellingPrice" class="form-label fw-semibold">Selling price *</label>
                    <input type="text" class="form-control" id="sellingPrice" name="sellingPrice" required placeholder="Selling price">
                  </div>
                  <div class="mb-4">
                    <label for="alertQuantity" class="form-label fw-semibold">Alert quantity *</label>
                    <input type="number" min="1" class="form-control" id="alertQuantity" name="alertQuantity" required placeholder="Quantity limit to send alert">
                  </div>
                </div>

                <div class="col-lg-12">
                    <div class="mb-4">
                        <label for="description" class="form-label fw-semibold">Product description</label>
                        <textarea class="form-control" name="description" id="description" rows="3" placeholder="Enter description here..."></textarea>
                    </div>
                </div>
                <div class="col-12">
                  <div class="d-flex gap-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="<?= site_url('products') ?>" class="btn bg-danger-subtle text-danger">Cancel</a>
                  </div>
                </div>
            </form>
      </div>
</div>
<?= $this->endSection() ?>