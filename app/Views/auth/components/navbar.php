<div>          
  <div class="brand-logo d-flex align-items-center justify-content-between">
    <a href="index.html" class="text-nowrap logo-img">
        <img src="../assets/images/logos/dark-logo.svg" class="dark-logo" alt="Logo-Dark" />
        <img src="../assets/images/logos/light-logo.svg" class="light-logo" alt="Logo-light" />
    </a>
    <a href="javascript:void(0)" class="sidebartoggler ms-auto text-decoration-none fs-5 d-block d-xl-none">
        <i class="ti ti-x"></i>
    </a>
  </div>
  <nav class="sidebar-nav scroll-sidebar" data-simplebar>
    <ul id="sidebarnav">
      <li class="nav-small-cap">
        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
        <span class="hide-menu">Home</span>
      </li>
          
      <li class="sidebar-item">
        <a class="sidebar-link" href="<?= site_url('account') ?>">
          <span class="d-flex">
            <i class="ti ti-dashboard"></i>
          </span>
          <span class="hide-menu">Dashboard</span>
        </a>
      </li>
      
      <li class="sidebar-item">
        <a class="sidebar-link" href="<?= site_url('customers') ?>">
          <span class="d-flex">
            <i class="ti ti-list-details"></i>
          </span>
          <span class="hide-menu">Customers</span>
        </a>
      </li>
      
      <li class="sidebar-item">
        <a class="sidebar-link" href="<?= site_url('appointments') ?>">
          <span class="d-flex">
            <i class="ti ti-calendar"></i>
          </span>
          <span class="hide-menu">Appointments</span>
        </a>
      </li>
      
      <li class="sidebar-item">
        <a class="sidebar-link" href="<?= site_url('sales') ?>">
          <span class="d-flex">
            <i class="ti ti-report-analytics"></i>
          </span>
          <span class="hide-menu">Sales</span>
        </a>
      </li>
      
      <li class="nav-small-cap">
          <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
          <span class="hide-menu">Spa Management</span>
      </li>
      
      <li class="sidebar-item">
        <a class="sidebar-link" href="<?= site_url('staff') ?>">
          <span class="d-flex">
            <i class="ti ti-users"></i>
          </span>
          <span class="hide-menu">Manage Staff</span>
        </a>
      </li>
      
      <li class="sidebar-item">
        <a class="sidebar-link" href="<?= site_url('services') ?>">
          <span class="d-flex">
            <i class="ti ti-hotel-service"></i>
          </span>
          <span class="hide-menu">Manage Services</span>
        </a>
      </li>
      
      <li class="sidebar-item">
        <a class="sidebar-link" href="<?= site_url('packages') ?>">
          <span class="d-flex">
            <i class="ti ti-package"></i>
          </span>
          <span class="hide-menu">Manage Packages</span>
        </a>
      </li>
          

      <li class="nav-small-cap">
          <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
          <span class="hide-menu">System</span>
      </li>
      <li class="sidebar-item">
        <a class="sidebar-link" href="<?= site_url('users') ?>">
          <span class="d-flex">
            <i class="ti ti-user"></i>
          </span>
          <span class="hide-menu">System Users</span>
        </a>
      </li>
      <li class="sidebar-item">
        <a class="sidebar-link" href="<?= site_url('users/logs') ?>">
          <span class="d-flex">
            <i class="ti ti-clipboard-data"></i>
          </span>
          <span class="hide-menu">System Logs</span>
        </a>
      </li>
      
      <li class="sidebar-item">
        <a class="sidebar-link" href="<?= site_url('settings') ?>">
          <span class="d-flex">
            <i class="ti ti-server-cog"></i>
          </span>
          <span class="hide-menu">System Settings</span>
        </a>
      </li>
      
      <li class="sidebar-item">
        <a class="sidebar-link" href="<?= site_url('business-settings') ?>">
          <span class="d-flex">
            <i class="ti ti-server-cog"></i>
          </span>
          <span class="hide-menu">Business Settings</span>
        </a>
      </li>
    </ul>
  </nav>
  <div class="fixed-profile p-3 mx-4 mb-2 bg-secondary-subtle rounded sidebar-ad mt-3">
    <div class="hstack gap-3">
      <div class="john-img">
        <img
          src="../assets/images/svgs/icon-user-male.svg"
          class="rounded-circle"
          width="40"
          height="40"
          alt="<?= $userData['name'] ?>"
        />
      </div>
      <div class="john-title">
        <h6 class="mb-0 fs-3 fw-semibold"><?= $userData['name'] ?></h6>
      </div>
      <a href="<?= site_url('logout') ?>"
        class="border-0 bg-transparent text-primary ms-auto"
        tabindex="0"
        type="button"
        aria-label="logout"
        data-bs-toggle="tooltip"
        data-bs-placement="top"
        data-bs-title="logout">
          <i class="ti ti-power fs-6"></i>
      </a>
    </div>
  </div>
</div>