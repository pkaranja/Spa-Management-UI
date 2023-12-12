<div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
    <div class="card-body px-4 py-3">
        <div class="row align-items-center">
          <div class="col-9">
            <h4 class="fw-semibold mb-8"><?= $title ?></h4>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a class="text-muted text-decoration-none" href="/">Home</a>
                </li>
                <li class="breadcrumb-item" aria-current="page"><?= $page_name ?></li>
              </ol>
            </nav>
            <p class="pt-3"> <?= (isset($desc)) ? $desc : '' ?></p>
          </div>
          <div class="col-3">
            <div class="text-center mb-n5">
              <img src="../assets/images/breadcrumb/ChatBc.png" alt="" class="img-fluid mb-n4" />
            </div>
          </div>
        </div>
    </div>
</div>
