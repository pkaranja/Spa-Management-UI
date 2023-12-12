<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme">
    <head>
        <!-- Required meta tags -->
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        
        <meta name="description" content="">
        <meta name="author" content="Qroo Solutions">
        <meta name="generator" content="Ptah Karanja">
        <title>Spa Management System | Qroo Solutions</title>
        
        <!-- Favicon icon-->
        <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
        
         <!-- load extended styles -->
        <?= $this->renderSection('style') ?>
            
        <!-- default styles  -->
        <link rel="stylesheet" href="<?= base_url('/assets/css/styles.css'); ?>" />
        <link rel="stylesheet" href="<?= base_url('/assets/libs/owl.carousel/dist/assets/owl.carousel.min.css'); ?>" />
        <link rel="stylesheet" href="<?= base_url('/css/select2.css'); ?>" />
    </head>
    <body>
        <!-- Preloader -->
        <div class="preloader">
          <img src="<?= base_url('/assets/images/logos/favicon.png'); ?>" alt="loader" class="lds-ripple img-fluid" />
        </div>
        <div id="main-wrapper">
            <!-- Sidebar Start -->
            <aside class="left-sidebar with-vertical">
                <?= view('App\Views\auth\components\navbar') ?>
            </aside>
            <!--  Sidebar End -->
            <div class="page-wrapper">
              <!--  Header Start -->
              <header class="topbar">
                <div class="with-vertical">
                  <?= view('App\Views\auth\components\topbar') ?>
                </div>
                <div class="app-header with-horizontal">
                  <nav class="navbar navbar-expand-xl container-fluid p-0">
                    <ul class="navbar-nav">
                      <li class="nav-item d-block d-xl-none">
                        <a
                          class="nav-link sidebartoggler ms-n3"
                          id="sidebarCollapse"
                          href="javascript:void(0)"
                        >
                          <i class="ti ti-menu-2"></i>
                        </a>
                      </li>
                      <li class="nav-item d-none d-xl-block">
                        <a href="index.html" class="text-nowrap nav-link">
                          <img
                            src="../assets/images/logos/dark-logo.svg"
                            class="dark-logo"
                            width="180"
                            alt=""
                          />
                          <img
                            src="../assets/images/logos/light-logo.svg"
                            class="light-logo"
                            width="180"
                            alt=""
                          />
                        </a>
                      </li>
                      <li class="nav-item d-none d-xl-block">
                        <a
                          class="nav-link nav-icon-hover"
                          href="javascript:void(0)"
                          data-bs-toggle="modal"
                          data-bs-target="#exampleModal" >
                          <i class="ti ti-search"></i>
                        </a>
                      </li>
                    </ul>
                    <ul class="navbar-nav quick-links d-none d-xl-flex">
                      <li class="nav-item dropdown-hover d-none d-lg-block">
                        <a class="nav-link" href="app-chat.html">Chat</a>
                      </li>
                      <li class="nav-item dropdown-hover d-none d-lg-block">
                        <a class="nav-link" href="app-calendar.html">Calendar</a>
                      </li>
                      <li class="nav-item dropdown-hover d-none d-lg-block">
                        <a class="nav-link" href="app-email.html">Email</a>
                      </li>
                    </ul>
                    <div class="d-block d-xl-none">
                      <a href="index.html" class="text-nowrap nav-link">
                        <img src="../assets/images/logos/dark-logo.svg" width="180" alt="" />
                      </a>
                    </div>
                    <a
                      class="navbar-toggler nav-icon-hover p-0 border-0"
                      href="javascript:void(0)"
                      data-bs-toggle="collapse"
                      data-bs-target="#navbarNav"
                      aria-controls="navbarNav"
                      aria-expanded="false"
                      aria-label="Toggle navigation"
                    >
                      <span class="p-2">
                        <i class="ti ti-dots fs-7"></i>
                      </span>
                    </a>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                      <div class="d-flex align-items-center justify-content-between px-0 px-xl-8">
                        <a
                          href="javascript:void(0)"
                          class="nav-link round-40 p-1 ps-0 d-flex d-xl-none align-items-center justify-content-center"
                          type="button"
                          data-bs-toggle="offcanvas"
                          data-bs-target="#mobilenavbar"
                          aria-controls="offcanvasWithBothOptions"
                        >
                          <i class="ti ti-align-justified fs-7"></i>
                        </a>
                        <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-center">
                  
                  
                          <!-- ------------------------------- -->
                          <!-- start notification Dropdown -->
                          <!-- ------------------------------- -->
                          <li class="nav-item dropdown">
                            <a
                              class="nav-link nav-icon-hover"
                              href="javascript:void(0)"
                              id="drop2"
                              data-bs-toggle="dropdown"
                              aria-expanded="false"
                            >
                              <i class="ti ti-bell-ringing"></i>
                              <div class="notification bg-primary rounded-circle"></div>
                            </a>
                            <div
                              class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up"
                              aria-labelledby="drop2"
                            >
                              <div class="d-flex align-items-center justify-content-between py-3 px-7">
                    <h5 class="mb-0 fs-5 fw-semibold">Notifications</h5>
                    <span class="badge text-bg-primary rounded-4 px-3 py-1 lh-sm">5 new</span>
                  </div>
                  <div class="message-body" data-simplebar>
                    <a
                      href="javascript:void(0)"
                      class="py-6 px-7 d-flex align-items-center dropdown-item"
                    >
                      <span class="me-3">
                        <img
                          src="../assets/images/profile/user-1.jpg"
                          alt="user"
                          class="rounded-circle"
                          width="48"
                          height="48"
                        />
                      </span>
                      <div class="w-75 d-inline-block v-middle">
                        <h6 class="mb-1 fw-semibold lh-base">Roman Joined the Team!</h6>
                        <span class="fs-2 d-block text-body-secondary">Congratulate him</span>
                      </div>
                    </a>
                    <a
                      href="javascript:void(0)"
                      class="py-6 px-7 d-flex align-items-center dropdown-item"
                    >
                      <span class="me-3">
                        <img
                          src="../assets/images/profile/user-2.jpg"
                          alt="user"
                          class="rounded-circle"
                          width="48"
                          height="48"
                        />
                      </span>
                      <div class="w-75 d-inline-block v-middle">
                        <h6 class="mb-1 fw-semibold lh-base">New message</h6>
                        <span class="fs-2 d-block text-body-secondary">Salma sent you new message</span>
                      </div>
                    </a>
                    <a
                      href="javascript:void(0)"
                      class="py-6 px-7 d-flex align-items-center dropdown-item"
                    >
                      <span class="me-3">
                        <img
                          src="../assets/images/profile/user-3.jpg"
                          alt="user"
                          class="rounded-circle"
                          width="48"
                          height="48"
                        />
                      </span>
                      <div class="w-75 d-inline-block v-middle">
                        <h6 class="mb-1 fw-semibold lh-base">Bianca sent payment</h6>
                        <span class="fs-2 d-block text-body-secondary">Check your earnings</span>
                      </div>
                    </a>
                    <a
                      href="javascript:void(0)"
                      class="py-6 px-7 d-flex align-items-center dropdown-item"
                    >
                      <span class="me-3">
                        <img
                          src="../assets/images/profile/user-4.jpg"
                          alt="user"
                          class="rounded-circle"
                          width="48"
                          height="48"
                        />
                      </span>
                      <div class="w-75 d-inline-block v-middle">
                        <h6 class="mb-1 fw-semibold lh-base">Jolly completed tasks</h6>
                        <span class="fs-2 d-block text-body-secondary">Assign her new tasks</span>
                      </div>
                    </a>
                    <a
                      href="javascript:void(0)"
                      class="py-6 px-7 d-flex align-items-center dropdown-item"
                    >
                      <span class="me-3">
                        <img
                          src="../assets/images/profile/user-5.jpg"
                          alt="user"
                          class="rounded-circle"
                          width="48"
                          height="48"
                        />
                      </span>
                      <div class="w-75 d-inline-block v-middle">
                        <h6 class="mb-1 fw-semibold lh-base">John received payment</h6>
                        <span class="fs-2 d-block text-body-secondary">$230 deducted from account</span>
                      </div>
                    </a>
                    <a
                      href="javascript:void(0)"
                      class="py-6 px-7 d-flex align-items-center dropdown-item"
                    >
                      <span class="me-3">
                        <img
                          src="../assets/images/profile/user-1.jpg"
                          alt="user"
                          class="rounded-circle"
                          width="48"
                          height="48"
                        />
                      </span>
                      <div class="w-75 d-inline-block v-middle">
                        <h6 class="mb-1 fw-semibold lh-base">Roman Joined the Team!</h6>
                        <span class="fs-2 d-block text-body-secondary">Congratulate him</span>
                      </div>
                    </a>
                  </div>
                  <div class="py-6 px-7 mb-1">
                    <button class="btn btn-outline-primary w-100">See All Notifications</button>
                  </div>
      
                </div>
              </li>
              <!-- ------------------------------- -->
              <!-- end notification Dropdown -->
              <!-- ------------------------------- -->
      
              <!-- ------------------------------- -->
              <!-- start profile Dropdown -->
              <!-- ------------------------------- -->
                        <li class="nav-item dropdown">
                          <a class="nav-link pe-0" href="javascript:void(0)" id="drop1" data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="d-flex align-items-center">
                              <div class="user-profile-img">
                                <img
                                  src="../assets/images/profile/user-1.jpg"
                                  class="rounded-circle"
                                  width="35"
                                  height="35"
                                  alt=""
                                />
                              </div>
                            </div>
                          </a>
                          <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop1">
                            <div class="profile-dropdown position-relative" data-simplebar>
                                <div class="py-3 px-7 pb-0">
                                  <h5 class="mb-0 fs-5 fw-semibold">User Profile</h5>
                                </div>
                                <div class="d-flex align-items-center py-9 mx-7 border-bottom">
                                  <img
                                    src="../assets/images/profile/user-1.jpg"
                                    class="rounded-circle"
                                    width="80"
                                    height="80"
                                    alt=""
                                  />
                                  <div class="ms-3">
                                    <h5 class="mb-1 fs-3">Mathew Anderson</h5>
                                    <span class="mb-1 d-block">Designer</span>
                                    <p class="mb-0 d-flex align-items-center gap-2">
                                      <i class="ti ti-mail fs-4"></i> info@modernize.com
                                    </p>
                                  </div>
                                </div>
                                <div class="message-body">
                                  <a
                                    href="page-user-profile.html"
                                    class="py-8 px-7 mt-8 d-flex align-items-center"
                                  >
                                    <span
                                      class="d-flex align-items-center justify-content-center text-bg-light rounded-1 p-6"
                                    >
                                      <img
                                        src="../assets/images/svgs/icon-account.svg"
                                        alt=""
                                        width="24"
                                        height="24"
                                      />
                                    </span>
                                    <div class="w-75 d-inline-block v-middle ps-3">
                                      <h6 class="mb-1 fs-3 fw-semibold lh-base">My Profile</h6>
                                      <span class="fs-2 d-block text-body-secondary">Account Settings</span>
                                    </div>
                                  </a>
                                  <a href="app-email.html" class="py-8 px-7 d-flex align-items-center">
                                    <span
                                      class="d-flex align-items-center justify-content-center text-bg-light rounded-1 p-6"
                                    >
                                      <img
                                        src="../assets/images/svgs/icon-inbox.svg"
                                        alt=""
                                        width="24"
                                        height="24"
                                      />
                                    </span>
                                    <div class="w-75 d-inline-block v-middle ps-3">
                                      <h6 class="mb-1 fs-3 fw-semibold lh-base">My Inbox</h6>
                                      <span class="fs-2 d-block text-body-secondary">Messages & Emails</span>
                                    </div>
                                  </a>
                                  <a href="app-notes.html" class="py-8 px-7 d-flex align-items-center">
                                    <span
                                      class="d-flex align-items-center justify-content-center text-bg-light rounded-1 p-6"
                                    >
                                      <img
                                        src="../assets/images/svgs/icon-tasks.svg"
                                        alt=""
                                        width="24"
                                        height="24"
                                      />
                                    </span>
                                    <div class="w-75 d-inline-block v-middle ps-3">
                                      <h6 class="mb-1 fs-3 fw-semibold lh-base">My Task</h6>
                                      <span class="fs-2 d-block text-body-secondary">To-do and Daily Tasks</span>
                                    </div>
                                  </a>
                                </div>
                                <div class="d-grid py-4 px-7 pt-8">
                                  <div
                                    class="upgrade-plan bg-primary-subtle position-relative overflow-hidden rounded-4 p-4 mb-9"
                                  >
                                    <div class="row">
                                      <div class="col-6">
                                        <h5 class="fs-4 mb-3 w-50 fw-semibold">Unlimited Access</h5>
                                        <button class="btn btn-primary">Upgrade</button>
                                      </div>
                                      <div class="col-6">
                                        <div class="m-n4 unlimited-img">
                                          <img
                                            src="../assets/images/backgrounds/unlimited-bg.png"
                                            alt=""
                                            class="w-100"
                                          />
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <a href="authentication-login.html" class="btn btn-outline-primary"
                                    >Log Out</a
                                  >
                                </div>
                              </div>
                
                          </div>
                        </li>
                        <!-- ------------------------------- -->
                        <!-- end profile Dropdown -->
                        <!-- ------------------------------- -->
                      </ul>
                    </div>
                  </div>
                </nav>
      
                </div>
              </header>      
      
              <div class="body-wrapper">
                <div class="container-fluid">
                  <?= $this->renderSection('main') ?>
                </div>
              </div>
            </div>
              <!--  Search Bar -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
              <div class="modal-dialog modal-dialog-scrollable modal-lg">
                <div class="modal-content rounded-1">
                  <div class="modal-header border-bottom">
                    <input type="search" class="form-control fs-3" placeholder="Search here" id="search" />
                    <a href="javascript:void(0)" data-bs-dismiss="modal" class="lh-1">
                      <i class="ti ti-x fs-5 ms-3"></i>
                    </a>
                  </div>
                  <div class="modal-body message-body" data-simplebar="">
                    <h5 class="mb-0 fs-5 p-1">Quick Page Links</h5>
                    <ul class="list mb-0 py-2">
                      <li class="p-1 mb-1 bg-hover-light-black">
                        <a href="#">
                          <span class="fs-3 text-dark fw-normal d-block">Search</span>
                          <span class="fs-3 text-muted d-block">/dashboards</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
      </div>
      <div class="dark-transparent sidebartoggler"></div>
      <!-- Import Js Files -->
      
      <script src="<?= base_url('/assets/libs/jquery/dist/jquery.min.js'); ?>"></script>
      <script src="<?= base_url('/assets/js/app.min.js'); ?>"></script>
      <script src="<?= base_url('/assets/js/app.init.js'); ?>"></script>
      <script src="<?= base_url('/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js'); ?>"></script>
      <script src="<?= base_url('/assets/libs/simplebar/dist/simplebar.min.js'); ?>"></script>
      
      <script src="<?= base_url('/assets/js/sidebarmenu.js'); ?>"></script>
      <script src="<?= base_url('/assets/js/theme.js'); ?>"></script>
      
      <script src="<?= base_url('/assets/libs/fullcalendar/index.global.min.js'); ?>"></script>
      <!-- <script src="<?= base_url('/assets/js/apps/contact.js'); ?>"></script> !-->
      
      <script src="<?= base_url('/assets/libs/owl.carousel/dist/owl.carousel.min.js'); ?>"></script>
      <script src="<?= base_url('/assets/libs/apexcharts/dist/apexcharts.min.js'); ?>"></script>
      <!-- <script src="<?= base_url('/assets/js/dashboards/dashboard.js'); ?>"></script> !-->
      <script src="<?= base_url('/js/select2.js'); ?>"></script>
      <script src="<?= base_url('/js/common.js'); ?>"></script>
      
      </body>
  
  </html>