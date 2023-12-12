<?= $this->extend('auth/layouts/default') ?>

<?= $this->section('main') ?>

<?= view('App\Views\components\hero', array("title"=>"System Settings", "page_name"=>"System") ) ?>

<div class="card overflow-hidden">
    <div class="d-flex w-100">
        <div class="left-part border-end w-20 flex-shrink-0 d-none d-lg-block">
            <?= view('App\Views\components\settingsnav') ?>
        </div>
        <div class="d-flex w-100">
          <div class="chat-container h-100 w-100">
            <div class="chat-box-inner-part h-100">
              <div class="chatting-box app-email-chatting-box">
                <div class="p-9 py-3 border-bottom chat-meta-user d-flex align-items-center justify-content-between">
                  <h5 class="text-dark fs-4 fw-semibold mb-0"> System Settings </h5>
                </div>
                <div class="position-relative overflow-hidden">
                  <div class="position-relative">
                    <div class="chat-box p-9"  data-simplebar="init">
                      <?= $this->renderSection('settings') ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>