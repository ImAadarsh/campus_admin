<!DOCTYPE html>
<html lang="en" data-layout="topnav">

<head>
    <meta charset="utf-8" />
    <title>Horizontal Layout | Campus Coach - Shape Your Future with Confidence</title>
<?php include 'includes/head.php'; ?>
</head>

<body>
    <!-- Begin page -->
    <div class="wrapper">

        <!-- Topbar Start -->
        <header class="app-topbar">
            <div class="page-container topbar-menu">
                <div class="d-flex align-items-center gap-2">

                    <!-- Brand Logo -->
                    <a href="index.php" class="logo">
                        <span class="logo-light">
                            <span class="logo-lg"><img src="assets/images/logo.png" alt="logo"></span>
                            <span class="logo-sm"><img src="assets/images/logo-sm.png" alt="small logo"></span>
                        </span>

                        <span class="logo-dark">
                            <span class="logo-lg"><img src="assets/images/logo-dark.png" alt="dark logo"></span>
                            <span class="logo-sm"><img src="assets/images/logo-sm.png" alt="small logo"></span>
                        </span>
                    </a>

                    <!-- Sidebar Menu Toggle Button -->
                    <button class="sidenav-toggle-button btn btn-secondary btn-icon">
                        <i class="ti ti-menu-deep fs-24"></i>
                    </button>

                    <!-- Horizontal Menu Toggle Button -->
                    <button class="topnav-toggle-button" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                        <i class="ti ti-menu-deep fs-22"></i>
                    </button>

                    <!-- Button Trigger Search Modal -->
                    <div class="topbar-search text-muted d-none d-xl-flex gap-2 align-items-center" data-bs-toggle="modal" data-bs-target="#searchModal" type="button">
                        <i class="ti ti-search fs-18"></i>
                        <span class="me-2">Search something..</span>
                        <button type="submit" class="ms-auto btn btn-sm btn-primary shadow-none">⌘K</span>
                    </div>

                    <!-- Mega Menu Dropdown -->
                    <div class="topbar-item d-none d-md-flex">
                        <div class="dropdown">
                            <a href="" class="topbar-link btn btn-link px-2 dropdown-toggle drop-arrow-none fw-medium" data-bs-toggle="dropdown" data-bs-trigger="hover" data-bs-offset="0,24" aria-haspopup="false" aria-expanded="false">
                                Pages <i class="ti ti-chevron-down ms-1"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-xxl p-0">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <div class="p-3">
                                            <h5 class="mb-2 fw-semibold">UI Components</h5>
                                            <ul class="list-unstyled megamenu-list">
                                                <li>
                                                    <a href="#!">Widgets</a>
                                                </li>
                                                <li>
                                                    <a href="extended-dragula.php">Dragula</a>
                                                </li>
                                                <li>
                                                    <a href="ui-dropdowns.php">Dropdowns</a>
                                                </li>
                                                <li>
                                                    <a href="extended-ratings.php">Ratings</a>
                                                </li>
                                                <li>
                                                    <a href="extended-sweetalerts.php">Sweet Alerts</a>
                                                </li>
                                                <li>
                                                    <a href="extended-scrollbar.php">Scrollbar</a>
                                                </li>
                                                <li>
                                                    <a href="form-range-slider.php">Range Slider</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="p-3">
                                            <h5 class="mb-2 fw-semibold">Applications</h5>
                                            <ul class="list-unstyled megamenu-list">
                                                <li>
                                                    <a href="apps-ecommerce-products.php">eCommerce Pages</a>
                                                </li>
                                                <li>
                                                    <a href="#!">Hospital</a>
                                                </li>
                                                <li>
                                                    <a href="apps-email.php">Email</a>
                                                </li>
                                                <li>
                                                    <a href="apps-calendar.php">Calendar</a>
                                                </li>
                                                <li>
                                                    <a href="#!">Kanban Board</a>
                                                </li>
                                                <li>
                                                    <a href="apps-invoices.php">Invoice Management</a>
                                                </li>
                                                <li>
                                                    <a href="pages-pricing.php">Pricing</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="col-md-4 bg-light bg-opacity-50">
                                        <div class="p-3">
                                            <h5 class="mb-2 fw-semibold">Extra Pages</h5>
                                            <ul class="list-unstyled megamenu-list">
                                                <li>
                                                    <a href="javascript:void(0);">Left Sidebar with User</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Menu Collapsed</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Small Left Sidebar</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">New Header Style</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">My Account</a>
                                                </li>
                                                <li>
                                                    <a href="pages-coming-soon.php">Maintenance & Coming Soon</a>
                                                </li>
                                            </ul>
                                        </div> <!-- end .bg-light-->
                                    </div> <!-- end col-->
                                </div> <!-- end row-->
                            </div> <!-- .dropdown-menu-->
                        </div> <!-- .dropdown-->
                    </div> <!-- end topbar-item -->
                </div>

                <div class="d-flex align-items-center gap-2">

                    <!-- Search for small devices -->
                    <div class="topbar-item d-flex d-xl-none">
                        <button class="topbar-link btn btn-outline-primary btn-icon" data-bs-toggle="modal" data-bs-target="#searchModal" type="button">
                            <i class="ti ti-search fs-22"></i>
                        </button>
                    </div>

                    <!-- Language Dropdown -->
                    <div class="topbar-item">
                        <div class="dropdown">
                            <button class="topbar-link btn btn-outline-primary btn-icon" data-bs-toggle="dropdown" data-bs-offset="0,24" type="button" aria-haspopup="false" aria-expanded="false">
                                <img src="assets/images/flags/us.svg" alt="user-image" class="w-100 rounded" height="18" id="selected-language-image">
                            </button>

                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item" data-translator-lang="en">
                                    <img src="assets/images/flags/us.svg" alt="user-image" class="me-1 rounded" height="18" data-translator-image> <span class="align-middle">English</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item" data-translator-lang="hi">
                                    <img src="assets/images/flags/in.svg" alt="user-image" class="me-1 rounded" height="18" data-translator-image> <span class="align-middle">Hindi</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <img src="assets/images/flags/de.svg" alt="user-image" class="me-1 rounded" height="18"> <span class="align-middle">German</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <img src="assets/images/flags/it.svg" alt="user-image" class="me-1 rounded" height="18"> <span class="align-middle">Italian</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <img src="assets/images/flags/es.svg" alt="user-image" class="me-1 rounded" height="18"> <span class="align-middle">Spanish</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <img src="assets/images/flags/ru.svg" alt="user-image" class="me-1 rounded" height="18"> <span class="align-middle">Russian</span>
                                </a>

                            </div>
                        </div>
                    </div>

                    <!-- Notification Dropdown -->
                    <div class="topbar-item">
                        <div class="dropdown">
                            <button class="topbar-link btn btn-outline-primary btn-icon dropdown-toggle drop-arrow-none" data-bs-toggle="dropdown" data-bs-offset="0,24" type="button" data-bs-auto-close="outside" aria-haspopup="false" aria-expanded="false">
                                <i class="ti ti-bell animate-ring fs-22"></i>
                                <span class="noti-icon-badge"></span>
                            </button>

                            <div class="dropdown-menu p-0 dropdown-menu-end dropdown-menu-lg" style="min-height: 300px;">
                                <div class="p-3 border-bottom border-dashed">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-0 fs-16 fw-semibold"> Notifications</h6>
                                        </div>
                                        <div class="col-auto">
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle drop-arrow-none link-dark" data-bs-toggle="dropdown" data-bs-offset="0,15" aria-expanded="false">
                                                    <i class="ti ti-settings fs-22 align-middle"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item">Mark as Read</a>
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item">Delete All</a>
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item">Do not Disturb</a>
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item">Other Settings</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="position-relative z-2 rounded-0" style="max-height: 300px;" data-simplebar>
                                    <!-- item-->
                                    <div class="dropdown-item notification-item py-2 text-wrap active" id="notification-1">
                                        <span class="d-flex align-items-center">
                                            <span class="me-3 position-relative flex-shrink-0">
                                                <img src="assets/images/users/avatar-2.jpg" class="avatar-md rounded-circle" alt="" />
                                                <span class="position-absolute rounded-pill bg-danger notification-badge">
                                                    <i class="ti ti-message-circle"></i>
                                                    <span class="visually-hidden">unread messages</span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1 text-muted">
                                                <span class="fw-medium text-body">Glady Haid</span> commented on <span class="fw-medium text-body">paces admin status</span>
                                                <br />
                                                <span class="fs-12">25m ago</span>
                                            </span>
                                            <span class="notification-item-close">
                                                <button type="button" class="btn btn-ghost-danger rounded-circle btn-sm btn-icon" data-dismissible="#notification-1">
                                                    <i class="ti ti-x fs-16"></i>
                                                </button>
                                            </span>
                                        </span>
                                    </div>

                                    <!-- item-->
                                    <div class="dropdown-item notification-item py-2 text-wrap" id="notification-2">
                                        <span class="d-flex align-items-center">
                                            <span class="me-3 position-relative flex-shrink-0">
                                                <img src="assets/images/users/avatar-4.jpg" class="avatar-md rounded-circle" alt="" />
                                                <span class="position-absolute rounded-pill bg-info notification-badge">
                                                    <i class="ti ti-currency-dollar"></i>
                                                    <span class="visually-hidden">unread messages</span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1 text-muted">
                                                <span class="fw-medium text-body">Tommy Berry</span> donated <span class="text-success">$100.00</span> for <span class="fw-medium text-body">Carbon removal program</span>
                                                <br />
                                                <span class="fs-12">58m ago</span>
                                            </span>
                                            <span class="notification-item-close">
                                                <button type="button" class="btn btn-ghost-danger rounded-circle btn-sm btn-icon" data-dismissible="#notification-2">
                                                    <i class="ti ti-x fs-16"></i>
                                                </button>
                                            </span>
                                        </span>
                                    </div>

                                    <!-- item-->
                                    <div class="dropdown-item notification-item py-2 text-wrap" id="notification-3">
                                        <span class="d-flex align-items-center">
                                            <div class="avatar-md flex-shrink-0 me-3">
                                                <span class="avatar-title bg-success-subtle text-success rounded-circle fs-22">
                                                    <iconify-icon icon="solar:wallet-money-bold-duotone"></iconify-icon>
                                                </span>
                                            </div>
                                            <span class="flex-grow-1 text-muted">
                                                You withdraw a <span class="fw-medium text-body">$500</span> by <span class="fw-medium text-body">New York ATM</span>
                                                <br />
                                                <span class="fs-12">2h ago</span>
                                            </span>
                                            <span class="notification-item-close">
                                                <button type="button" class="btn btn-ghost-danger rounded-circle btn-sm btn-icon" data-dismissible="#notification-3">
                                                    <i class="ti ti-x fs-16"></i>
                                                </button>
                                            </span>
                                        </span>
                                    </div>

                                    <!-- item-->
                                    <div class="dropdown-item notification-item py-2 text-wrap" id="notification-4">
                                        <span class="d-flex align-items-center">
                                            <span class="me-3 position-relative flex-shrink-0">
                                                <img src="assets/images/users/avatar-7.jpg" class="avatar-md rounded-circle" alt="" />
                                                <span class="position-absolute rounded-pill bg-secondary notification-badge">
                                                    <i class="ti ti-plus"></i>
                                                    <span class="visually-hidden">unread messages</span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1 text-muted">
                                                <span class="fw-medium text-body">Richard Allen</span> followed you in <span class="fw-medium text-body">Facebook</span>
                                                <br />
                                                <span class="fs-12">3h ago</span>
                                            </span>
                                            <span class="notification-item-close">
                                                <button type="button" class="btn btn-ghost-danger rounded-circle btn-sm btn-icon" data-dismissible="#notification-4">
                                                    <i class="ti ti-x fs-16"></i>
                                                </button>
                                            </span>
                                        </span>
                                    </div>

                                    <!-- item-->
                                    <div class="dropdown-item notification-item py-2 text-wrap" id="notification-5">
                                        <span class="d-flex align-items-center">
                                            <span class="me-3 position-relative flex-shrink-0">
                                                <img src="assets/images/users/avatar-10.jpg" class="avatar-md rounded-circle" alt="" />
                                                <span class="position-absolute rounded-pill bg-danger notification-badge">
                                                    <i class="ti ti-heart-filled"></i>
                                                    <span class="visually-hidden">unread messages</span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1 text-muted">
                                                <span class="fw-medium text-body">Victor Collier</span> liked you recent photo in <span class="fw-medium text-body">Instagram</span>
                                                <br />
                                                <span class="fs-12">10h ago</span>
                                            </span>
                                            <span class="notification-item-close">
                                                <button type="button" class="btn btn-ghost-danger rounded-circle btn-sm btn-icon" data-dismissible="#notification-5">
                                                    <i class="ti ti-x fs-16"></i>
                                                </button>
                                            </span>
                                        </span>
                                    </div>
                                </div>

                                <!-- All-->
                                <a href="javascript:void(0);" class="dropdown-item notification-item text-center text-reset text-decoration-underline link-offset-2 fw-bold notify-item border-top border-light py-2">
                                    View All
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Apps Dropdown -->
                    <div class="topbar-item d-none d-sm-flex">
                        <div class="dropdown">
                            <button class="topbar-link btn btn-outline-primary btn-icon dropdown-toggle drop-arrow-none" data-bs-toggle="dropdown" data-bs-offset="0,24" type="button" aria-haspopup="false" aria-expanded="false">
                                <i class="ti ti-apps fs-22"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-lg p-0">
                                <div class="p-2">
                                    <div class="row g-0">
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="assets/images/brands/slack.svg" alt="slack">
                                                <span>Slack</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="assets/images/brands/gitlab.svg" alt="Github">
                                                <span>Gitlab</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="assets/images/brands/dribbble.svg" alt="dribbble">
                                                <span>Dribbble</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="row g-0">
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="assets/images/brands/bitbucket.svg" alt="bitbucket">
                                                <span>Bitbucket</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="assets/images/brands/dropbox.svg" alt="dropbox">
                                                <span>Dropbox</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="assets/images/brands/google-cloud.svg" alt="G Suite">
                                                <span>G Cloud</span>
                                            </a>
                                        </div>
                                    </div> <!-- end row-->

                                    <div class="row g-0">
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="assets/images/brands/aws.svg" alt="bitbucket">
                                                <span>AWS</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="assets/images/brands/digital-ocean.svg" alt="dropbox">
                                                <span>Server</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="assets/images/brands/bootstrap.svg" alt="G Suite">
                                                <span>Bootstrap</span>
                                            </a>
                                        </div>
                                    </div> <!-- end row-->
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Button Trigger Customizer Offcanvas -->
                    <div class="topbar-item d-none d-sm-flex">
                        <button class="topbar-link btn btn-outline-primary btn-icon" data-bs-toggle="offcanvas" data-bs-target="#theme-settings-offcanvas" type="button">
                            <i class="ti ti-settings fs-22"></i>
                        </button>
                    </div>

                    <!-- Light/Dark Mode Button -->
                    <div class="topbar-item d-none d-sm-flex">
                        <button class="topbar-link btn btn-outline-primary btn-icon" id="light-dark-mode" type="button">
                            <i class="ti ti-moon fs-22"></i>
                        </button>
                    </div>

                    <!-- User Dropdown -->
                    <div class="topbar-item">
                        <div class="dropdown">
                            <a class="topbar-link btn btn-outline-primary dropdown-toggle drop-arrow-none" data-bs-toggle="dropdown" data-bs-offset="0,22" type="button" aria-haspopup="false" aria-expanded="false">
                                <img src="assets/images/users/avatar-1.jpg" width="24" class="rounded-circle me-lg-2 d-flex" alt="user-image">
                                <span class="d-lg-flex flex-column gap-1 d-none">
                                    Dhanoo K.
                                </span>
                                <i class="ti ti-chevron-down d-none d-lg-block align-middle ms-2"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome !</h6>
                                </div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <i class="ti ti-user-hexagon me-1 fs-17 align-middle"></i>
                                    <span class="align-middle">My Account</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <i class="ti ti-wallet me-1 fs-17 align-middle"></i>
                                    <span class="align-middle">Wallet : <span class="fw-semibold">$985.25</span></span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <i class="ti ti-settings me-1 fs-17 align-middle"></i>
                                    <span class="align-middle">Settings</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <i class="ti ti-lifebuoy me-1 fs-17 align-middle"></i>
                                    <span class="align-middle">Support</span>
                                </a>

                                <div class="dropdown-divider"></div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <i class="ti ti-lock-square-rounded me-1 fs-17 align-middle"></i>
                                    <span class="align-middle">Lock Screen</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item active fw-semibold text-danger">
                                    <i class="ti ti-logout me-1 fs-17 align-middle"></i>
                                    <span class="align-middle">Sign Out</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Topbar End -->

        <!-- Search Modal -->
        <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content bg-transparent">
                    <div class="card mb-0 shadow-none">
                        <div class="px-3 py-2 d-flex flex-row align-items-center" id="top-search">
                            <i class="ti ti-search fs-22"></i>
                            <input type="search" class="form-control border-0" id="search-modal-input" placeholder="Search for actions, people,">
                            <button type="button" class="btn p-0" data-bs-dismiss="modal" aria-label="Close">[esc]</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Horizontal Menu Start -->
        <header class="topnav">
            <nav class="navbar navbar-expand-lg">
                <nav class="page-container">
                    <div class="collapse navbar-collapse" id="topnav-menu-content">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown hover-dropdown">
                                <a class="nav-link" href="index.php">
                                    <span class="menu-icon"><i class="ti ti-dashboard"></i></span>
                                    <span class="menu-text"> Dashboard </span>
                                </a>
                            </li>

                            <li class="nav-item dropdown hover-dropdown">
                                <a class="nav-link dropdown-toggle drop-arrow-none" href="#" id="topnav-apps" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="menu-icon"><i class="ti ti-apps"></i></span>
                                    <span class="menu-text">Apps</span>
                                    <div class="menu-arrow"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-apps">
                                    <a href="apps-chat.php" class="dropdown-item">Chat</a>
                                    <a href="apps-calendar.php" class="dropdown-item">Calendar</a>
                                    <a href="apps-email.php" class="dropdown-item">Email</a>
                                    <a href="apps-file-manager.php" class="dropdown-item">File Manager</a>
                                    <div class="dropdown hover-dropdown">
                                        <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-ecommerce" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Ecommerce
                                            <div class="menu-arrow"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-ecommerce">
                                            <a href="apps-ecommerce-products.php" class="dropdown-item">Products</a>
                                            <a href="apps-ecommerce-products-grid.php" class="dropdown-item">Products Grid</a>
                                            <a href="apps-ecommerce-product-details.php" class="dropdown-item">Product Details</a>
                                            <a href="apps-ecommerce-products-add.php" class="dropdown-item">Add Products</a>
                                            <a href="apps-ecommerce-categories.php" class="dropdown-item">Categories</a>
                                            <a href="apps-ecommerce-orders.php" class="dropdown-item">Orders</a>
                                            <a href="apps-ecommerce-order-details.php" class="dropdown-item">Order Details</a>
                                            <a href="apps-ecommerce-customers.php" class="dropdown-item">Customers</a>
                                            <a href="apps-ecommerce-sellers.php" class="dropdown-item">Sellers</a>
                                        </div>
                                    </div>
                                    <div class="dropdown hover-dropdown">
                                        <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-tasks" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Invoice
                                            <div class="menu-arrow"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-tasks">
                                            <a href="apps-invoices.php" class="dropdown-item">Invoices</a>
                                            <a href="apps-invoice-details.php" class="dropdown-item">View Invoice</a>
                                            <a href="apps-invoice-create.php" class="dropdown-item">Create Invoice</a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="nav-item dropdown hover-dropdown">
                                <a class="nav-link dropdown-toggle drop-arrow-none" href="#" id="topnav-pages" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="menu-icon"><i class="ti ti-file-description"></i></span>
                                    <span class="menu-text">Pages</span>
                                    <div class="menu-arrow"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-pages">
                                    <div class="dropdown hover-dropdown">
                                        <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-auth" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Authentication <div class="menu-arrow"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-auth">
                                            <a href="auth-login.php" class="dropdown-item">Login</a>
                                            <a href="auth-register.php" class="dropdown-item">Register</a>
                                            <a href="auth-logout.php" class="dropdown-item">Logout</a>
                                            <a href="auth-recoverpw.php" class="dropdown-item">Recover Password</a>
                                            <a href="auth-createpw.php" class="dropdown-item">Create Password</a>
                                            <a href="auth-lock-screen.php" class="dropdown-item">Lock Screen</a>
                                            <a href="auth-confirm-mail.php" class="dropdown-item">Confirm Mail</a>
                                            <a href="auth-login-pin.php" class="dropdown-item">Login with PIN</a>
                                            <a href="auth-2fa.php" class="dropdown-item">2FA</a>
                                            <a href="auth-account-deactivation.php" class="dropdown-item">Account Deactivation</a>
                                        </div>
                                    </div>
                                    <div class="dropdown hover-dropdown">
                                        <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-error" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Error <div class="menu-arrow"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-error">
                                            <a href="error-401.php" class="dropdown-item">401 Unauthorized</a>
                                            <a href="error-400.php" class="dropdown-item">400 Bad Request</a>
                                            <a href="error-403.php" class="dropdown-item">403 Forbidden</a>
                                            <a href="error-404.php" class="dropdown-item">404 Not Found</a>
                                            <a href="error-408.php" class="dropdown-item">408 Request Timeout</a>
                                            <a href="error-500.php" class="dropdown-item">500 Internal Server</a>
                                            <a href="error-501.php" class="dropdown-item">501 Not Implemented</a>
                                            <a href="error-502.php" class="dropdown-item">502 Service Overloaded</a>
                                            <a href="error-service-unavailable.php" class="dropdown-item">Service Unavailable</a>
                                            <a href="error-404-alt.php" class="dropdown-item">Error 404 Alt</a>
                                        </div>
                                    </div>
                                    <a href="pages-starter.php" class="dropdown-item">Starter Page</a>
                                    <a href="pages-faq.php" class="dropdown-item">FAQ</a>
                                    <a href="pages-pricing.php" class="dropdown-item">Pricing</a>
                                    <a href="pages-maintenance.php" class="dropdown-item">Maintenance</a>
                                    <a href="pages-timeline.php" class="dropdown-item">Timeline</a>
                                </div>
                            </li>

                            <li class="nav-item dropdown hover-dropdown">
                                <a class="nav-link dropdown-toggle drop-arrow-none" href="#" id="topnav-components" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="menu-icon"><i class="ti ti-components"></i></span>
                                    <span class="menu-text">Components</span>
                                    <div class="menu-arrow"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-components">
                                    <div class="dropdown hover-dropdown">
                                        <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-ui-kit" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Base UI 1
                                            <div class="menu-arrow"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-ui-kit">
                                            <a href="ui-accordions.php" class="dropdown-item">Accordions</a>
                                            <a href="ui-alerts.php" class="dropdown-item">Alerts</a>
                                            <a href="ui-avatars.php" class="dropdown-item">Avatars</a>
                                            <a href="ui-badges.php" class="dropdown-item">Badges</a>
                                            <a href="ui-breadcrumb.php" class="dropdown-item">Breadcrumb</a>
                                            <a href="ui-buttons.php" class="dropdown-item">Buttons</a>
                                            <a href="ui-cards.php" class="dropdown-item">Cards</a>
                                            <a href="ui-carousel.php" class="dropdown-item">Carousel</a>
                                            <a href="ui-dropdowns.php" class="dropdown-item">Dropdowns</a>
                                            <a href="ui-embed-video.php" class="dropdown-item">Embed Video</a>
                                            <a href="ui-grid.php" class="dropdown-item">Grid</a>
                                            <a href="ui-list-group.php" class="dropdown-item">List Group</a>
                                        </div>
                                    </div>
                                    <div class="dropdown hover-dropdown">
                                        <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-ui-kit2" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Base UI 2
                                            <div class="menu-arrow"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-ui-kit2">
                                            <a href="ui-modals.php" class="dropdown-item">Modals</a>
                                            <a href="ui-notifications.php" class="dropdown-item">Notifications</a>
                                            <a href="ui-offcanvas.php" class="dropdown-item">Offcanvas</a>
                                            <a href="ui-placeholders.php" class="dropdown-item">Placeholders</a>
                                            <a href="ui-pagination.php" class="dropdown-item">Pagination</a>
                                            <a href="ui-popovers.php" class="dropdown-item">Popovers</a>
                                            <a href="ui-progress.php" class="dropdown-item">Progress</a>
                                            <a href="ui-ribbons.php" class="dropdown-item">Ribbons</a>
                                            <a href="ui-spinners.php" class="dropdown-item">Spinners</a>
                                            <a href="ui-tabs.php" class="dropdown-item">Tabs</a>
                                            <a href="ui-tooltips.php" class="dropdown-item">Tooltips</a>
                                            <a href="ui-links.php" class="dropdown-item">Links</a>
                                            <a href="ui-typography.php" class="dropdown-item">Typography</a>
                                            <a href="ui-utilities.php" class="dropdown-item">Utilities</a>
                                        </div>
                                    </div>
                                    <div class="dropdown hover-dropdown">
                                        <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-extended-ui" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Extended UI
                                            <div class="menu-arrow"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-extended-ui">
                                            <a href="extended-dragula.php" class="dropdown-item">Dragula</a>
                                            <a href="extended-sweetalerts.php" class="dropdown-item">Sweet Alerts</a>
                                            <a href="extended-ratings.php" class="dropdown-item">Ratings</a>
                                            <a href="extended-scrollbar.php" class="dropdown-item">Scrollbar</a>
                                        </div>
                                    </div>
                                    <div class="dropdown hover-dropdown">
                                        <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-forms" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Forms
                                            <div class="menu-arrow"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-forms">
                                            <a href="form-elements.php" class="dropdown-item">Basic Elements</a>
                                            <a href="form-inputmask.php" class="dropdown-item">Inputmask</a>
                                            <a href="form-picker.php" class="dropdown-item">Picker</a>
                                            <a href="form-select.php" class="dropdown-item">Select</a>
                                            <a href="form-range-slider.php" class="dropdown-item">Range Slider</a>
                                            <a href="form-validation.php" class="dropdown-item">Validation</a>
                                            <a href="form-wizard.php" class="dropdown-item">Wizard</a>
                                            <a href="form-fileuploads.php" class="dropdown-item">File Uploads</a>
                                            <a href="form-editors.php" class="dropdown-item">Editors</a>
                                            <a href="form-layouts.php" class="dropdown-item">Layouts</a>
                                        </div>
                                    </div>
                                    <div class="dropdown hover-dropdown">
                                        <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-charts" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Charts
                                            <div class="menu-arrow"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-charts">
                                            <a href="charts-apex-area.php" class="dropdown-item">Area</a>
                                            <a href="charts-apex-bar.php" class="dropdown-item">Bar</a>
                                            <a href="charts-apex-bubble.php" class="dropdown-item">Bubble</a>
                                            <a href="charts-apex-candlestick.php" class="dropdown-item">Candlestick</a>
                                            <a href="charts-apex-column.php" class="dropdown-item">Column</a>
                                            <a href="charts-apex-heatmap.php" class="dropdown-item">Heatmap</a>
                                            <a href="charts-apex-line.php" class="dropdown-item">Line</a>
                                            <a href="charts-apex-mixed.php" class="dropdown-item">Mixed</a>
                                            <a href="charts-apex-timeline.php" class="dropdown-item">Timeline</a>
                                            <a href="charts-apex-boxplot.php" class="dropdown-item">Boxplot</a>
                                            <a href="charts-apex-treemap.php" class="dropdown-item">Treemap</a>
                                            <a href="charts-apex-pie.php" class="dropdown-item">Pie</a>
                                            <a href="charts-apex-radar.php" class="dropdown-item">Radar</a>
                                            <a href="charts-apex-radialbar.php" class="dropdown-item">RadialBar</a>
                                            <a href="charts-apex-scatter.php" class="dropdown-item">Scatter</a>
                                            <a href="charts-apex-polar-area.php" class="dropdown-item">Polar Area</a>
                                            <a href="charts-apex-sparklines.php" class="dropdown-item">Sparklines</a>
                                        </div>
                                    </div>
                                    <div class="dropdown hover-dropdown">
                                        <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-tables" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Tables
                                            <div class="menu-arrow"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-tables">
                                            <a href="tables-basic.php" class="dropdown-item">Basic Tables</a>
                                            <a href="tables-gridjs.php" class="dropdown-item">Gridjs Tables</a>
                                        </div>
                                    </div>
                                    <div class="dropdown hover-dropdown">
                                        <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-icons" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Icons
                                            <div class="menu-arrow"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-icons">
                                            <a href="icons-tabler.php" class="dropdown-item">Tabler Icons</a>
                                            <a href="icons-solar.php" class="dropdown-item">Solar Design</a>
                                        </div>
                                    </div>
                                    <div class="dropdown hover-dropdown">
                                        <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-maps" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Maps
                                            <div class="menu-arrow"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-maps">
                                            <a href="maps-google.php" class="dropdown-item">Google Maps</a>
                                            <a href="maps-vector.php" class="dropdown-item">Vector Maps</a>
                                            <a href="maps-leaflet.php" class="dropdown-item">Leaflet Maps</a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="nav-item dropdown hover-dropdown">
                                <a class="nav-link dropdown-toggle drop-arrow-none" href="#" id="topnav-layouts" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="menu-icon"><i class="ti ti-layout"></i></span>
                                    <span class="menu-text">Layouts</span>
                                    <div class="menu-arrow"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-layouts">
                                    <a href="index.php" class="dropdown-item" target="_blank">Vertical</a>
                                    <a href="layouts-horizontal.php" class="dropdown-item" target="_blank">Horizontal</a>
                                    <a href="layouts-full.php" class="dropdown-item" target="_blank">Full</a>
                                    <a href="layouts-fullscreen.php" class="dropdown-item" target="_blank">Fullscreen</a>
                                    <a href="layouts-hover.php" class="dropdown-item" target="_blank">Hover Menu</a>
                                    <a href="layouts-compact.php" class="dropdown-item" target="_blank">Compact Menu</a>
                                    <a href="layouts-icon-view.php" class="dropdown-item" target="_blank">Icon View</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </nav>
        </header>
        <!-- Horizontal Menu End -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->
        <div class="page-content">

            <div class="page-container">

                
                <div class="page-title-head d-flex align-items-sm-center flex-sm-row flex-column gap-2">
                    <div class="flex-grow-1">
                        <h4 class="fs-18 text-uppercase fw-bold mb-0">Horizontal</h4>
                    </div>

                    <div class="text-end">
                        <ol class="breadcrumb m-0 py-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Campus Coach</a></li>
                            
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Layout</a></li>
                            
                            <li class="breadcrumb-item active">Horizontal</li>
                        </ol>
                    </div>
                </div>
                

                
                <div class="row">
                    <div class="col">
                        <div class="row row-cols-xxl-4 row-cols-md-2 row-cols-1 text-center">
                            <div class="col">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-muted fs-13 text-uppercase" title="Number of Orders">Total Orders</h5>
                                        <div class="d-flex align-items-center justify-content-center gap-2 my-2 py-1">
                                            <div class="user-img fs-42 flex-shrink-0">
                                                <span class="avatar-title text-bg-primary rounded-circle fs-22">
                                                    <iconify-icon icon="solar:case-round-minimalistic-bold-duotone"></iconify-icon>
                                                </span>
                                            </div>
                                            <h3 class="mb-0 fw-bold">687.3k</h3>
                                        </div>
                                        <p class="mb-0 text-muted">
                                            <span class="text-danger me-2"><i class="ti ti-caret-down-filled"></i> 9.19%</span>
                                            <span class="text-nowrap">Since last month</span>
                                        </p>
                                    </div>
                                </div>
                            </div><!-- end col -->

                            <div class="col">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-muted fs-13 text-uppercase" title="Number of Orders">Total Returns</h5>
                                        <div class="d-flex align-items-center justify-content-center gap-2 my-2 py-1">
                                            <div class="user-img fs-42 flex-shrink-0">
                                                <span class="avatar-title text-bg-primary rounded-circle fs-22">
                                                    <iconify-icon icon="solar:bill-list-bold-duotone"></iconify-icon>
                                                </span>
                                            </div>
                                            <h3 class="mb-0 fw-bold">9.62k</h3>
                                        </div>
                                        <p class="mb-0 text-muted">
                                            <span class="text-success me-2"><i class="ti ti-caret-up-filled"></i> 26.87%</span>
                                            <span class="text-nowrap">Since last month</span>
                                        </p>
                                    </div>
                                </div>
                            </div><!-- end col -->

                            <div class="col">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-muted fs-13 text-uppercase" title="Number of Orders">Avg. Sales Earnings</h5>
                                        <div class="d-flex align-items-center justify-content-center gap-2 my-2 py-1">
                                            <div class="user-img fs-42 flex-shrink-0">
                                                <span class="avatar-title text-bg-primary rounded-circle fs-22">
                                                    <iconify-icon icon="solar:wallet-money-bold-duotone"></iconify-icon>
                                                </span>
                                            </div>
                                            <h3 class="mb-0 fw-bold">$98.24 <small class="text-muted">USD</small></h3>
                                        </div>
                                        <p class="mb-0 text-muted">
                                            <span class="text-success me-2"><i class="ti ti-caret-up-filled"></i> 3.51%</span>
                                            <span class="text-nowrap">Since last month</span>
                                        </p>
                                    </div>
                                </div>
                            </div><!-- end col -->

                            <div class="col">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-muted fs-13 text-uppercase" title="Number of Orders">Number of Visits</h5>
                                        <div class="d-flex align-items-center justify-content-center gap-2 my-2 py-1">
                                            <div class="user-img fs-42 flex-shrink-0">
                                                <span class="avatar-title text-bg-primary rounded-circle fs-22">
                                                    <iconify-icon icon="solar:eye-bold-duotone"></iconify-icon>
                                                </span>
                                            </div>
                                            <h3 class="mb-0 fw-bold">87.94M</h3>
                                        </div>
                                        <p class="mb-0 text-muted">
                                            <span class="text-danger me-2"><i class="ti ti-caret-down-filled"></i> 1.05%</span>
                                            <span class="text-nowrap">Since last month</span>
                                        </p>
                                    </div>
                                </div>
                            </div><!-- end col -->
                        </div><!-- end row -->

                        <div class="row">
                            <div class="col-xxl-4">
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between align-items-center border-bottom border-dashed">
                                        <h4 class="header-title">Top Traffic by Source</h4>
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-toggle drop-arrow-none card-drop p-0" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ti ti-dots-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a href="javascript:void(0);" class="dropdown-item">Refresh Report</a>
                                                <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-body">
                                        <div id="multiple-radialbar" class="apex-charts" data-colors="#6ac75a,#313a46,#ce7e7e,#669776"></div>

                                        <div class="row mt-2">
                                            <div class="col">
                                                <div class="d-flex justify-content-between align-items-center p-1">
                                                    <div>
                                                        <i class="ti ti-circle-filled fs-12 align-middle me-1 text-primary"></i>
                                                        <span class="align-middle fw-semibold">Direct</span>
                                                    </div>
                                                    <span class="fw-semibold text-muted float-end"><i class="ti ti-arrow-badge-down text-danger"></i> 965</span>
                                                </div>

                                                <div class="d-flex justify-content-between align-items-center p-1">
                                                    <div>
                                                        <i class="ti ti-circle-filled fs-12 text-success align-middle me-1"></i>
                                                        <span class="align-middle fw-semibold">Social</span>
                                                    </div>
                                                    <span class="fw-semibold text-muted float-end"><i class="ti ti-arrow-badge-up text-success"></i> 75</span>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="d-flex justify-content-between align-items-center p-1">
                                                    <div>
                                                        <i class="ti ti-circle-filled fs-12 text-secondary align-middle me-1"></i>
                                                        <span class="align-middle fw-semibold"> Marketing</span>
                                                    </div>
                                                    <span class="fw-semibold text-muted float-end"><i class="ti ti-arrow-badge-up text-success"></i> 102</span>
                                                </div>

                                                <div class="d-flex justify-content-between align-items-center p-1">
                                                    <div>
                                                        <i class="ti ti-circle-filled fs-12 text-danger align-middle me-1"></i>
                                                        <span class="align-middle fw-semibold">Affiliates</span>
                                                    </div>
                                                    <span class="fw-semibold text-muted float-end"><i class="ti ti-arrow-badge-down text-danger"></i> 96</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end card-->
                            </div> <!-- end col-->

                            <div class="col-xxl-8">
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <h4 class="header-title">Overview</h4>
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-toggle drop-arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ti ti-dots-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Sales Report</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Profit</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="bg-danger bg-opacity-10">
                                        <div class="row text-center">
                                            <div class="col-md-3 col-6">
                                                <p class="text-muted mt-3 mb-1">Revenue</p>
                                                <h4 class="mb-3">
                                                    <span class="ti ti-square-rounded-arrow-down text-success me-1"></span>
                                                    <span>$29.5k</span>
                                                </h4>
                                            </div>
                                            <div class="col-md-3 col-6">
                                                <p class="text-muted mt-3 mb-1">Expenses</p>
                                                <h4 class="mb-3">
                                                    <span class="ti ti-square-rounded-arrow-up text-danger me-1"></span>
                                                    <span>$15.07k</span>
                                                </h4>
                                            </div>
                                            <div class="col-md-3 col-6">
                                                <p class="text-muted mt-3 mb-1">Investment</p>
                                                <h4 class="mb-3">
                                                    <span class="ti ti-chart-infographic me-1"></span>
                                                    <span>$3.6k</span>
                                                </h4>
                                            </div>
                                            <div class="col-md-3 col-6">
                                                <p class="text-muted mt-3 mb-1">Savings</p>
                                                <h4 class="mb-3">
                                                    <span class="ti ti-pig me-1"></span>
                                                    <span>$6.9k</span>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-body pt-0">
                                        <div dir="ltr">
                                            <div id="revenue-chart" class="apex-charts" data-colors="#6ac75a,#313a46,#ce7e7e,#669776"></div>
                                        </div>
                                    </div>
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                        </div> <!-- end row-->

                        <div class="row">
                            <div class="col-xxl-6">
                                <div class="card">
                                    <div class="d-flex card-header justify-content-between align-items-center">
                                        <h4 class="header-title">Brands Listing</h4>
                                        <a href="javascript:void(0);" class="btn btn-sm btn-secondary">Add Brand <i class="ti ti-plus ms-1"></i></a>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="bg-success bg-opacity-10 py-1 text-center">
                                            <p class="m-0"><b>69</b> Active brands out of <span class="fw-medium">102</span></p>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-custom table-centered table-sm table-nowrap table-hover mb-0">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar-md flex-shrink-0 me-2">
                                                                    <span class="avatar-title bg-primary-subtle rounded-circle">
                                                                        <img src="assets/images/products/logo/logo-1.svg" alt="" height="22">
                                                                    </span>
                                                                </div>
                                                                <div>
                                                                    <span class="text-muted fs-12">Clothing</span> <br />
                                                                    <h5 class="fs-14 mt-1">Zaroan - Brazil</h5>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <span class="text-muted fs-12">Established</span>
                                                            <h5 class="fs-14 mt-1 fw-normal">Since 2020</h5>
                                                        </td>
                                                        <td>
                                                            <span class="text-muted fs-12">Stores</span> <br />
                                                            <h5 class="fs-14 mt-1 fw-normal">1.5k</h5>
                                                        </td>
                                                        <td>
                                                            <span class="text-muted fs-12">Products</span>
                                                            <h5 class="fs-14 mt-1 fw-normal">8,950</h5>
                                                        </td>
                                                        <td>
                                                            <span class="text-muted fs-12">Status</span>
                                                            <h5 class="fs-14 mt-1 fw-normal"><i class="ti ti-circle-filled fs-12 text-success"></i> Active</h5>
                                                        </td>
                                                        <td style="width: 30px;">
                                                            <div class="dropdown">
                                                                <a href="#" class="dropdown-toggle text-muted drop-arrow-none card-drop p-0" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="ti ti-dots-vertical"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a href="javascript:void(0);" class="dropdown-item">Refresh Report</a>
                                                                    <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar-md flex-shrink-0 me-2">
                                                                    <span class="avatar-title bg-info-subtle rounded-circle">
                                                                        <img src="assets/images/products/logo/logo-4.svg" alt="" height="22">
                                                                    </span>
                                                                </div>
                                                                <div>
                                                                    <span class="text-muted fs-12">Clothing</span> <br />
                                                                    <h5 class="fs-14 mt-1">Jocky-Johns - USA</h5>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <span class="text-muted fs-12">Established</span>
                                                            <h5 class="fs-14 mt-1 fw-normal">Since 1985</h5>
                                                        </td>
                                                        <td>
                                                            <span class="text-muted fs-12">Stores</span> <br />
                                                            <h5 class="fs-14 mt-1 fw-normal">205</h5>
                                                        </td>
                                                        <td>
                                                            <span class="text-muted fs-12">Products</span>
                                                            <h5 class="fs-14 mt-1 fw-normal">1,258</h5>
                                                        </td>
                                                        <td>
                                                            <span class="text-muted fs-12">Status</span>
                                                            <h5 class="fs-14 mt-1 fw-normal"><i class="ti ti-circle-filled fs-12 text-success"></i> Active</h5>
                                                        </td>
                                                        <td style="width: 30px;">
                                                            <div class="dropdown">
                                                                <a href="#" class="dropdown-toggle text-muted drop-arrow-none card-drop p-0" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="ti ti-dots-vertical"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a href="javascript:void(0);" class="dropdown-item">Refresh Report</a>
                                                                    <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar-md flex-shrink-0 me-2">
                                                                    <span class="avatar-title bg-secondary-subtle rounded-circle">
                                                                        <img src="assets/images/products/logo/logo-5.svg" alt="" height="22">
                                                                    </span>
                                                                </div>
                                                                <div>
                                                                    <span class="text-muted fs-12">Lifestyle</span> <br />
                                                                    <h5 class="fs-14 mt-1">Ginne - India</h5>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <span class="text-muted fs-12">Established</span>
                                                            <h5 class="fs-14 mt-1 fw-normal">Since 2001</h5>
                                                        </td>
                                                        <td>
                                                            <span class="text-muted fs-12">Stores</span> <br />
                                                            <h5 class="fs-14 mt-1 fw-normal">89</h5>
                                                        </td>
                                                        <td>
                                                            <span class="text-muted fs-12">Products</span>
                                                            <h5 class="fs-14 mt-1 fw-normal">338</h5>
                                                        </td>
                                                        <td>
                                                            <span class="text-muted fs-12">Status</span>
                                                            <h5 class="fs-14 mt-1 fw-normal"><i class="ti ti-circle-filled fs-12 text-success"></i> Active</h5>
                                                        </td>
                                                        <td style="width: 30px;">
                                                            <div class="dropdown">
                                                                <a href="#" class="dropdown-toggle text-muted drop-arrow-none card-drop p-0" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="ti ti-dots-vertical"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a href="javascript:void(0);" class="dropdown-item">Refresh Report</a>
                                                                    <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar-md flex-shrink-0 me-2">
                                                                    <span class="avatar-title bg-danger-subtle rounded-circle">
                                                                        <img src="assets/images/products/logo/logo-6.svg" alt="" height="22">
                                                                    </span>
                                                                </div>
                                                                <div>
                                                                    <span class="text-muted fs-12">Fashion</span> <br />
                                                                    <h5 class="fs-14 mt-1">DDoen - Brazil</h5>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <span class="text-muted fs-12">Established</span>
                                                            <h5 class="fs-14 mt-1 fw-normal">Since 1995</h5>
                                                        </td>
                                                        <td>
                                                            <span class="text-muted fs-12">Stores</span> <br />
                                                            <h5 class="fs-14 mt-1 fw-normal">650</h5>
                                                        </td>
                                                        <td>
                                                            <span class="text-muted fs-12">Products</span>
                                                            <h5 class="fs-14 mt-1 fw-normal">6,842</h5>
                                                        </td>
                                                        <td>
                                                            <span class="text-muted fs-12">Status</span>
                                                            <h5 class="fs-14 mt-1 fw-normal"><i class="ti ti-circle-filled fs-12 text-success"></i> Active</h5>
                                                        </td>
                                                        <td style="width: 30px;">
                                                            <div class="dropdown">
                                                                <a href="#" class="dropdown-toggle text-muted drop-arrow-none card-drop p-0" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="ti ti-dots-vertical"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a href="javascript:void(0);" class="dropdown-item">Refresh Report</a>
                                                                    <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar-md flex-shrink-0 me-2">
                                                                    <span class="avatar-title bg-primary-subtle rounded-circle">
                                                                        <img src="assets/images/products/logo/logo-8.svg" alt="" height="22">
                                                                    </span>
                                                                </div>
                                                                <div>
                                                                    <span class="text-muted fs-12">Manufacturing</span> <br />
                                                                    <h5 class="fs-14 mt-1">Zoddiak - Canada</h5>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <span class="text-muted fs-12">Established</span>
                                                            <h5 class="fs-14 mt-1 fw-normal">Since 1963</h5>
                                                        </td>
                                                        <td>
                                                            <span class="text-muted fs-12">Stores</span> <br />
                                                            <h5 class="fs-14 mt-1 fw-normal">109</h5>
                                                        </td>
                                                        <td>
                                                            <span class="text-muted fs-12">Products</span>
                                                            <h5 class="fs-14 mt-1 fw-normal">952</h5>
                                                        </td>
                                                        <td>
                                                            <span class="text-muted fs-12">Status</span>
                                                            <h5 class="fs-14 mt-1 fw-normal"><i class="ti ti-circle-filled fs-12 text-success"></i> Active</h5>
                                                        </td>
                                                        <td style="width: 30px;">
                                                            <div class="dropdown">
                                                                <a href="#" class="dropdown-toggle text-muted drop-arrow-none card-drop p-0" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="ti ti-dots-vertical"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a href="javascript:void(0);" class="dropdown-item">Refresh Report</a>
                                                                    <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div> <!-- end table-responsive-->
                                    </div> <!-- end card-body-->

                                    <div class="card-footer border-0">
                                        <div class="align-items-center justify-content-between row text-center text-sm-start">
                                            <div class="col-sm">
                                                <div class="text-muted">
                                                    Showing <span class="fw-semibold">5</span> of <span class="fw-semibold">15</span> Results
                                                </div>
                                            </div>
                                            <div class="col-sm-auto mt-3 mt-sm-0">
                                                <ul class="pagination pagination-boxed pagination-sm mb-0 justify-content-center">
                                                    <li class="page-item disabled">
                                                        <a href="#" class="page-link"><i class="ti ti-chevron-left"></i></a>
                                                    </li>
                                                    <li class="page-item active">
                                                        <a href="#" class="page-link">1</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a href="#" class="page-link">2</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a href="#" class="page-link">3</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a href="#" class="page-link"><i class="ti ti-chevron-right"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div> <!-- -->
                                    </div>

                                </div> <!-- end card-->
                            </div> <!-- end col-->

                            <div class="col-xxl-6">
                                <div class="card">
                                    <div class="card-header d-flex flex-wrap align-items-center gap-2 border-bottom border-dashed">
                                        <h4 class="header-title me-auto">Top Selling Products</h4>

                                        <div class="d-flex gap-2 justify-content-end text-end">
                                            <a href="javascript:void(0);" class="btn btn-sm btn-secondary">Import <i class="ti ti-download ms-1"></i></a>
                                            <a href="javascript:void(0);" class="btn btn-sm btn-primary">Export <i class="ti ti-file-export ms-1"></i></a>
                                        </div>
                                    </div>

                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table table-custom align-middle table-nowrap table-hover mb-0">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="avatar-lg">
                                                                <img src="assets/images/products/p-1.png" alt="Product-1" class="img-fluid rounded-2">
                                                            </div>
                                                        </td>
                                                        <td class="ps-0">
                                                            <h5 class="fs-14 my-1"><a href="apps-ecommerce-product-details.php" class="link-reset">ASOS High Waist Tshirt</a></h5>
                                                            <span class="text-muted fs-12">07 April 2024</span>
                                                        </td>
                                                        <td>
                                                            <h5 class="fs-14 my-1">$79.49</h5>
                                                            <span class="text-muted fs-12">Price</span>
                                                        </td>
                                                        <td>
                                                            <h5 class="fs-14 my-1">82</h5>
                                                            <span class="text-muted fs-12">Quantity</span>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex align-items-center justify-content-end">
                                                                <div class="me-2">
                                                                    <h5 class="fs-14 my-1">$6,518.18</h5>
                                                                    <span class="text-muted fs-12">Amount</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="avatar-lg">
                                                                <img src="assets/images/products/p-7.png" alt="Product-1" class="img-fluid rounded-2">
                                                            </div>
                                                        </td>
                                                        <td class="ps-0">
                                                            <h5 class="fs-14 my-1"><a href="apps-ecommerce-product-details.php" class="link-reset">Marco Single Sofa</a></h5>
                                                            <span class="text-muted fs-12">25 March 2024</span>
                                                        </td>
                                                        <td>
                                                            <h5 class="fs-14 my-1">$128.50</h5>
                                                            <span class="text-muted fs-12">Price</span>
                                                        </td>
                                                        <td>
                                                            <h5 class="fs-14 my-1">37</h5>
                                                            <span class="text-muted fs-12">Quantity</span>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex align-items-center justify-content-end">
                                                                <div class="me-2">
                                                                    <h5 class="fs-14 my-1">$4,754.50</h5>
                                                                    <span class="text-muted fs-12">Amount</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="avatar-lg">
                                                                <img src="assets/images/products/p-4.png" alt="Product-1" class="img-fluid rounded-2">
                                                            </div>
                                                        </td>
                                                        <td class="ps-0">
                                                            <h5 class="fs-14 my-1"><a href="apps-ecommerce-product-details.php" class="link-reset">Smart Headphone </a></h5>
                                                            <span class="text-muted fs-12">17 March 2024</span>
                                                        </td>
                                                        <td>
                                                            <h5 class="fs-14 my-1">$39.99</h5>
                                                            <span class="text-muted fs-12">Price</span>
                                                        </td>
                                                        <td>
                                                            <h5 class="fs-14 my-1">64</h5>
                                                            <span class="text-muted fs-12">Quantity</span>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex align-items-center justify-content-end">
                                                                <div class="me-2">
                                                                    <h5 class="fs-14 my-1">$2,559.36</h5>
                                                                    <span class="text-muted fs-12">Amount</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="avatar-lg">
                                                                <img src="assets/images/products/p-5.png" alt="Product-1" class="img-fluid rounded-2">
                                                            </div>
                                                        </td>
                                                        <td class="ps-0">
                                                            <h5 class="fs-14 my-1"><a href="apps-ecommerce-product-details.php" class="link-reset">Lightweight Jacket</a></h5>
                                                            <span class="text-muted fs-12">12 March 2024</span>
                                                        </td>
                                                        <td>
                                                            <h5 class="fs-14 my-1">$20.00</h5>
                                                            <span class="text-muted fs-12">Price</span>
                                                        </td>
                                                        <td>
                                                            <h5 class="fs-14 my-1">184</h5>
                                                            <span class="text-muted fs-12">Quantity</span>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex align-items-center justify-content-end">
                                                                <div class="me-2">
                                                                    <h5 class="fs-14 my-1">$3,680.00</h5>
                                                                    <span class="text-muted fs-12">Amount</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="avatar-lg">
                                                                <img src="assets/images/products/p-6.png" alt="Product-1" class="img-fluid rounded-2">
                                                            </div>
                                                        </td>
                                                        <td class="ps-0">
                                                            <h5 class="fs-14 my-1"><a href="apps-ecommerce-product-details.php" class="link-reset">Marco Shoes</a></h5>
                                                            <span class="text-muted fs-12">05 March 2024</span>
                                                        </td>
                                                        <td>
                                                            <h5 class="fs-14 my-1">$28.49</h5>
                                                            <span class="text-muted fs-12">Price</span>
                                                        </td>
                                                        <td>
                                                            <h5 class="fs-14 my-1">69</h5>
                                                            <span class="text-muted fs-12">Quantity</span>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex align-items-center justify-content-end">
                                                                <div class="me-2">
                                                                    <h5 class="fs-14 my-1">$1,965.81</h5>
                                                                    <span class="text-muted fs-12">Amount</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div> <!-- end table-responsive-->
                                    </div> <!-- end card-body-->

                                    <div class="card-footer border-0">
                                        <div class="align-items-center justify-content-between row text-center text-sm-start">
                                            <div class="col-sm">
                                                <div class="text-muted">
                                                    Showing <span class="fw-semibold">5</span> of <span class="fw-semibold">10</span> Results
                                                </div>
                                            </div>
                                            <div class="col-sm-auto mt-3 mt-sm-0">
                                                <ul class="pagination pagination-boxed pagination-sm mb-0 justify-content-center">
                                                    <li class="page-item disabled">
                                                        <a href="#" class="page-link"><i class="ti ti-chevron-left"></i></a>
                                                    </li>
                                                    <li class="page-item active">
                                                        <a href="#" class="page-link">1</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a href="#" class="page-link">2</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a href="#" class="page-link"><i class="ti ti-chevron-right"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div> <!-- -->
                                    </div>
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                        </div> <!-- end row-->

                    </div> <!-- end col-->

                    <div class="col-auto info-sidebar">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex mb-3 justify-content-between align-items-center">
                                    <h4 class="header-title">Recent Orders:</h4>
                                    <div>
                                        <a href="javascript:void(0);" class="btn btn-sm btn-primary rounded-circle btn-icon"><i class="ti ti-plus"></i></a>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center gap-2 position-relative mb-2">
                                    <div class="avatar-md flex-shrink-0">
                                        <img src="assets/images/products/p-6.png" alt="product-pic" height="36">
                                    </div>
                                    <div>
                                        <h5 class="fs-14 my-1"><a href="apps-ecommerce-order-details.php" class="stretched-link link-reset">Marco Shoes</a></h5>
                                        <span class="text-muted fs-12">$29.99 x 1 = $29.99</span>
                                    </div>
                                    <div class="ms-auto">
                                        <span class="badge badge-soft-success px-2 py-1">Sold</span>
                                    </div>
                                </div>

                                <div class="d-flex align-items-center gap-2 position-relative mb-2">
                                    <div class="avatar-md flex-shrink-0">
                                        <img src="assets/images/products/p-1.png" alt="product-pic" height="36">
                                    </div>
                                    <div>
                                        <h5 class="fs-14 my-1"><a href="apps-ecommerce-order-details.php" class="stretched-link link-reset">High Waist Tshirt</a></h5>
                                        <span class="text-muted fs-12">$9.99 x 3 = $29.97</span>
                                    </div>
                                    <div class="ms-auto">
                                        <span class="badge badge-soft-success px-2 py-1">Sold</span>
                                    </div>
                                </div>

                                <div class="d-flex align-items-center gap-2 position-relative mb-2">
                                    <div class="avatar-md flex-shrink-0">
                                        <img src="assets/images/products/p-3.png" alt="product-pic" height="36">
                                    </div>
                                    <div>
                                        <h5 class="fs-14 my-1"><a href="apps-ecommerce-order-details.php" class="stretched-link link-reset">Comfirt Chair</a></h5>
                                        <span class="text-muted fs-12">$49.99 x 1 = $49.99</span>
                                    </div>
                                    <div class="ms-auto">
                                        <span class="badge badge-soft-danger px-2 py-1">Return</span>
                                    </div>
                                </div>

                                <div class="d-flex align-items-center gap-2 position-relative mb-2">
                                    <div class="avatar-md flex-shrink-0">
                                        <img src="assets/images/products/p-4.png" alt="product-pic" height="36">
                                    </div>
                                    <div>
                                        <h5 class="fs-14 my-1"><a href="apps-ecommerce-order-details.php" class="stretched-link link-reset">Smart Headphone</a></h5>
                                        <span class="text-muted fs-12">$39.99 x 1 = $39.99</span>
                                    </div>
                                    <div class="ms-auto">
                                        <span class="badge badge-soft-success px-2 py-1">Sold</span>
                                    </div>
                                </div>

                                <div class="d-flex align-items-center gap-2 position-relative">
                                    <div class="avatar-md flex-shrink-0">
                                        <img src="assets/images/products/p-2.png" alt="product-pic" height="36">
                                    </div>
                                    <div>
                                        <h5 class="fs-14 my-1"><a href="apps-ecommerce-order-details.php" class="stretched-link link-reset">Laptop Bag</a></h5>
                                        <span class="text-muted fs-12">$12.99 x 4 = $51.96</span>
                                    </div>
                                    <div class="ms-auto">
                                        <span class="badge badge-soft-success px-2 py-1">Sold</span>
                                    </div>
                                </div>

                                <div class="mt-3 text-center">
                                    <a href="#!" class="text-decoration-underline fw-semibold ms-auto link-offset-2 link-dark">View All</a>
                                </div>
                            </div>
                            <div class="card-body p-0 border-top border-dashed">
                                <h4 class="header-title px-3 mb-2 mt-3">Recent Activity:</h4>
                                <div class="my-3 px-3" data-simplebar style="max-height: 370px;">
                                    <div class="timeline-alt py-0">
                                        <div class="timeline-item">
                                            <i class="ti ti-basket bg-info-subtle text-info timeline-icon"></i>
                                            <div class="timeline-item-info">
                                                <a href="javascript:void(0);" class="link-reset fw-semibold mb-1 d-block">You sold an item</a>
                                                <span class="mb-1">Paul Burgess just purchased “My - Admin Dashboard”!</span>
                                                <p class="mb-0 pb-3">
                                                    <small class="text-muted">5 minutes ago</small>
                                                </p>
                                            </div>
                                        </div>

                                        <div class="timeline-item">
                                            <i class="ti ti-rocket bg-primary-subtle text-primary timeline-icon"></i>
                                            <div class="timeline-item-info">
                                                <a href="javascript:void(0);" class="link-reset fw-semibold mb-1 d-block">Product on the Theme Market</a>
                                                <span class="mb-1">Reviewer added
                                                    <span class="fw-medium">Admin Dashboard</span>
                                                </span>
                                                <p class="mb-0 pb-3">
                                                    <small class="text-muted">30 minutes ago</small>
                                                </p>
                                            </div>
                                        </div>

                                        <div class="timeline-item">
                                            <i class="ti ti-message bg-info-subtle text-info timeline-icon"></i>
                                            <div class="timeline-item-info">
                                                <a href="javascript:void(0);" class="link-reset fw-semibold mb-1 d-block">Robert Delaney</a>
                                                <span class="mb-1">Send you message
                                                    <span class="fw-medium">"Are you there?"</span>
                                                </span>
                                                <p class="mb-0 pb-3">
                                                    <small class="text-muted">2 hours ago</small>
                                                </p>
                                            </div>
                                        </div>

                                        <div class="timeline-item">
                                            <i class="ti ti-photo bg-primary-subtle text-primary timeline-icon"></i>
                                            <div class="timeline-item-info">
                                                <a href="javascript:void(0);" class="link-reset fw-semibold mb-1 d-block">Audrey Tobey</a>
                                                <span class="mb-1">Uploaded a photo
                                                    <span class="fw-medium">"Error.jpg"</span>
                                                </span>
                                                <p class="mb-0 pb-3">
                                                    <small class="text-muted">14 hours ago</small>
                                                </p>
                                            </div>
                                        </div>

                                        <div class="timeline-item">
                                            <i class="ti ti-basket bg-info-subtle text-info timeline-icon"></i>
                                            <div class="timeline-item-info">
                                                <a href="javascript:void(0);" class="link-reset fw-semibold mb-1 d-block">You sold an item</a>
                                                <span class="mb-1">Paul Burgess just purchased “My - Admin Dashboard”!</span>
                                                <p class="mb-0 pb-3">
                                                    <small class="text-muted">16 hours ago</small>
                                                </p>
                                            </div>
                                        </div>

                                        <div class="timeline-item">
                                            <i class="ti ti-rocket bg-primary-subtle text-primary timeline-icon"></i>
                                            <div class="timeline-item-info">
                                                <a href="javascript:void(0);" class="link-reset fw-semibold mb-1 d-block">Product on the Bootstrap Market</a>
                                                <span class="mb-1">Reviewer added
                                                    <span class="fw-medium">Admin Dashboard</span>
                                                </span>
                                                <p class="mb-0 pb-3">
                                                    <small class="text-muted">22 hours ago</small>
                                                </p>
                                            </div>
                                        </div>

                                        <div class="timeline-item">
                                            <i class="ti ti-message bg-info-subtle text-info timeline-icon"></i>
                                            <div class="timeline-item-info">
                                                <a href="javascript:void(0);" class="link-reset fw-semibold mb-1 d-block">Robert Delaney</a>
                                                <span class="mb-1">Send you message
                                                    <span class="fw-medium">"Are you there?"</span>
                                                </span>
                                                <p class="mb-0 pb-2">
                                                    <small class="text-muted">2 days ago</small>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end timeline -->
                                </div> <!-- end slimscroll -->
                            </div>

                            <div class="card-body">
                                <div class="card mb-0 bg-warning bg-opacity-25">
                                    <div class="card-body" style="background-image: url(assets/images/png/arrows.svg); background-size: contain; background-repeat: no-repeat; background-position: right bottom;">
                                        <h1><i class="ti ti-receipt-tax text-warning"></i></h1>
                                        <h4 class="text-warning">Estimated tax for this year</h4>
                                        <p class="text-warning text-opacity-75">We kindly encourage you to review your recent transactions</p>
                                        <a href="#!" class="btn btn-sm rounded-pill btn-info">Activate Now</a>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div>
                        </div> <!-- end card-->
                    </div> <!-- end col-->
                </div> <!-- end row-->

            </div> <!-- container -->

            <!-- Footer Start -->
            <footer class="footer">
                <div class="page-container">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start">
                            <script>document.write(new Date().getFullYear())</script> © Campus Coach - Developed By <span class="fw-bold text-decoration-underline text-uppercase text-reset fs-12">Endeavour Digital</span>
                        </div>
                        <div class="col-md-6">
                            <div class="text-md-end footer-links d-none d-md-block">
                                <a href="javascript: void(0);">About</a>
                                <a href="javascript: void(0);">Support</a>
                                <a href="javascript: void(0);">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end Footer -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <!-- Theme Settings -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="theme-settings-offcanvas">
        <div class="d-flex align-items-center gap-2 px-3 py-3 offcanvas-header border-bottom border-dashed">
            <h5 class="flex-grow-1 mb-0">Theme Settings</h5>

            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

        <div class="offcanvas-body p-0 h-100" data-simplebar>
            <div class="p-3 border-bottom border-dashed">
                <h5 class="mb-3 fs-16 fw-bold">Color Scheme</h5>

                <div class="row">
                    <div class="col-4">
                        <div class="form-check card-radio">
                            <input class="form-check-input" type="radio" name="data-bs-theme" id="layout-color-light" value="light">
                            <label class="form-check-label p-3 w-100 d-flex justify-content-center align-items-center" for="layout-color-light">
                                <iconify-icon icon="solar:sun-bold-duotone" class="fs-32 text-muted"></iconify-icon>
                            </label>
                        </div>
                        <h5 class="fs-14 text-center text-muted mt-2">Light</h5>
                    </div>

                    <div class="col-4">
                        <div class="form-check card-radio">
                            <input class="form-check-input" type="radio" name="data-bs-theme" id="layout-color-dark" value="dark">
                            <label class="form-check-label p-3 w-100 d-flex justify-content-center align-items-center" for="layout-color-dark">
                                <iconify-icon icon="solar:cloud-sun-2-bold-duotone" class="fs-32 text-muted"></iconify-icon>
                            </label>
                        </div>
                        <h5 class="fs-14 text-center text-muted mt-2">Dark</h5>
                    </div>
                </div>
            </div>

            <div class="p-3 border-bottom border-dashed">
                <h5 class="mb-3 fs-16 fw-bold">Topbar Color</h5>

                <div class="row">
                    <div class="col-3">
                        <div class="form-check card-radio">
                            <input class="form-check-input" type="radio" name="data-topbar-color" id="topbar-color-light" value="light">
                            <label class="form-check-label p-0 avatar-lg w-100 bg-light" for="topbar-color-light">
                                <span class="d-flex align-items-center justify-content-center h-100">
                                    <span class="p-2 d-inline-flex shadow rounded-circle bg-white"></span>
                                </span>
                            </label>
                        </div>
                        <h5 class="fs-14 text-center text-muted mt-2">Light</h5>
                    </div>

                    <div class="col-3">
                        <div class="form-check card-radio">
                            <input class="form-check-input" type="radio" name="data-topbar-color" id="topbar-color-dark" value="dark">
                            <label class="form-check-label p-0 avatar-lg w-100 bg-light" for="topbar-color-dark">
                                <span class="d-flex align-items-center justify-content-center h-100">
                                    <span class="p-2 d-inline-flex shadow rounded-circle bg-dark"></span>
                                </span>
                            </label>
                        </div>
                        <h5 class="fs-14 text-center text-muted mt-2">Dark</h5>
                    </div>
                </div>
            </div>

            <div class="p-3 border-bottom border-dashed">
                <h5 class="mb-3 fs-16 fw-bold">Menu Color</h5>

                <div class="row">
                    <div class="col-3">
                        <div class="form-check sidebar-setting card-radio">
                            <input class="form-check-input" type="radio" name="data-menu-color" id="sidenav-color-light" value="light">
                            <label class="form-check-label p-0 avatar-lg w-100 bg-light" for="sidenav-color-light">
                                <span class="d-flex align-items-center justify-content-center h-100">
                                    <span class="p-2 d-inline-flex shadow rounded-circle bg-white"></span>
                                </span>
                            </label>
                        </div>
                        <h5 class="fs-14 text-center text-muted mt-2">Light</h5>
                    </div>

                    <div class="col-3" style="--ct-dark-rgb: 64,73,84;">
                        <div class="form-check sidebar-setting card-radio">
                            <input class="form-check-input" type="radio" name="data-menu-color" id="sidenav-color-dark" value="dark">
                            <label class="form-check-label p-0 avatar-lg w-100 bg-light" for="sidenav-color-dark">
                                <span class="d-flex align-items-center justify-content-center h-100">
                                    <span class="p-2 d-inline-flex shadow rounded-circle bg-dark"></span>
                                </span>
                            </label>
                        </div>
                        <h5 class="fs-14 text-center text-muted mt-2">Dark</h5>
                    </div>
                </div>
            </div>

            <div class="p-3 .border-bottom .border-dashed">
                <h5 class="mb-3 fs-16 fw-bold">Sidebar Size</h5>

                <div class="row">
                    <div class="col-4">
                        <div class="form-check sidebar-setting card-radio">
                            <input class="form-check-input" type="radio" name="data-sidenav-size" id="sidenav-size-default" value="default">
                            <label class="form-check-label p-0 avatar-xl w-100" for="sidenav-size-default">
                                <span class="d-flex h-100">
                                    <span class="flex-shrink-0">
                                        <span class="bg-light d-flex h-100 border-end  flex-column p-1 px-2">
                                            <span class="d-block p-1 bg-dark-subtle rounded mb-1"></span>
                                            <span class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                            <span class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                            <span class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                            <span class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                        </span>
                                    </span>
                                    <span class="flex-grow-1">
                                        <span class="d-flex h-100 flex-column">
                                            <span class="bg-light d-block p-1"></span>
                                        </span>
                                    </span>
                                </span>
                            </label>
                        </div>
                        <h5 class="fs-14 text-center text-muted mt-2">Default</h5>
                    </div>

                    <div class="col-4">
                        <div class="form-check sidebar-setting card-radio">
                            <input class="form-check-input" type="radio" name="data-sidenav-size" id="sidenav-size-compact" value="compact">
                            <label class="form-check-label p-0 avatar-xl w-100" for="sidenav-size-compact">
                                <span class="d-flex h-100">
                                    <span class="flex-shrink-0">
                                        <span class="bg-light d-flex h-100 border-end  flex-column p-1">
                                            <span class="d-block p-1 bg-dark-subtle rounded mb-1"></span>
                                            <span class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                            <span class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                            <span class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                            <span class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                        </span>
                                    </span>
                                    <span class="flex-grow-1">
                                        <span class="d-flex h-100 flex-column">
                                            <span class="bg-light d-block p-1"></span>
                                        </span>
                                    </span>
                                </span>
                            </label>
                        </div>
                        <h5 class="fs-14 text-center text-muted mt-2">Compact</h5>
                    </div>

                    <div class="col-4">
                        <div class="form-check sidebar-setting card-radio">
                            <input class="form-check-input" type="radio" name="data-sidenav-size" id="sidenav-size-small" value="condensed">
                            <label class="form-check-label p-0 avatar-xl w-100" for="sidenav-size-small">
                                <span class="d-flex h-100">
                                    <span class="flex-shrink-0">
                                        <span class="bg-light d-flex h-100 border-end flex-column" style="padding: 2px;">
                                            <span class="d-block p-1 bg-dark-subtle rounded mb-1"></span>
                                            <span class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                            <span class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                            <span class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                            <span class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                        </span>
                                    </span>
                                    <span class="flex-grow-1">
                                        <span class="d-flex h-100 flex-column">
                                            <span class="bg-light d-block p-1"></span>
                                        </span>
                                    </span>
                                </span>
                            </label>
                        </div>
                        <h5 class="fs-14 text-center text-muted mt-2">Condensed</h5>
                    </div>

                    <div class="col-4">
                        <div class="form-check sidebar-setting card-radio">
                            <input class="form-check-input" type="radio" name="data-sidenav-size" id="sidenav-size-small-hover" value="sm-hover">
                            <label class="form-check-label p-0 avatar-xl w-100" for="sidenav-size-small-hover">
                                <span class="d-flex h-100">
                                    <span class="flex-shrink-0">
                                        <span class="bg-light d-flex h-100 border-end flex-column" style="padding: 2px;">
                                            <span class="d-block p-1 bg-dark-subtle rounded mb-1"></span>
                                            <span class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                            <span class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                            <span class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                            <span class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                        </span>
                                    </span>
                                    <span class="flex-grow-1">
                                        <span class="d-flex h-100 flex-column">
                                            <span class="bg-light d-block p-1"></span>
                                        </span>
                                    </span>
                                </span>
                            </label>
                        </div>
                        <h5 class="fs-14 text-center text-muted mt-2">Hover View</h5>
                    </div>

                    <div class="col-4">
                        <div class="form-check sidebar-setting card-radio">
                            <input class="form-check-input" type="radio" name="data-sidenav-size" id="sidenav-size-full" value="full">
                            <label class="form-check-label p-0 avatar-xl w-100" for="sidenav-size-full">
                                <span class="d-flex h-100">
                                    <span class="flex-shrink-0">
                                        <span class="d-flex h-100 flex-column">
                                            <span class="d-block p-1 bg-dark-subtle mb-1"></span>
                                        </span>
                                    </span>
                                    <span class="flex-grow-1">
                                        <span class="d-flex h-100 flex-column">
                                            <span class="bg-light d-block p-1"></span>
                                        </span>
                                    </span>
                                </span>
                            </label>
                        </div>
                        <h5 class="fs-14 text-center text-muted mt-2">Full Layout</h5>
                    </div>

                    <div class="col-4">
                        <div class="form-check sidebar-setting card-radio">
                            <input class="form-check-input" type="radio" name="data-sidenav-size" id="sidenav-size-fullscreen" value="fullscreen">
                            <label class="form-check-label p-0 avatar-xl w-100" for="sidenav-size-fullscreen">
                                <span class="d-flex h-100">
                                    <span class="flex-grow-1">
                                        <span class="d-flex h-100 flex-column">
                                            <span class="bg-light d-block p-1"></span>
                                        </span>
                                    </span>
                                </span>
                            </label>
                        </div>
                        <h5 class="fs-14 text-center text-muted mt-2">Hidden</h5>
                    </div>
                </div>
            </div>

            <div class="p-3 border-bottom border-dashed d-none">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="fs-16 fw-bold mb-0">Container Width</h5>

                    <div class="btn-group radio" role="group">
                        <input type="radio" class="btn-check" name="data-container-position" id="container-width-fixed" value="fixed">
                        <label class="btn btn-sm btn-soft-primary w-sm" for="container-width-fixed">Full</label>

                        <input type="radio" class="btn-check" name="data-container-position" id="container-width-scrollable" value="scrollable">
                        <label class="btn btn-sm btn-soft-primary w-sm ms-0" for="container-width-scrollable">Boxed</label>
                    </div>
                </div>
            </div>

            <div class="p-3 border-bottom border-dashed d-none">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="fs-16 fw-bold mb-0">Layout Position</h5>

                    <div class="btn-group radio" role="group">
                        <input type="radio" class="btn-check" name="data-layout-position" id="layout-position-fixed" value="fixed">
                        <label class="btn btn-sm btn-soft-primary w-sm" for="layout-position-fixed">Fixed</label>

                        <input type="radio" class="btn-check" name="data-layout-position" id="layout-position-scrollable" value="scrollable">
                        <label class="btn btn-sm btn-soft-primary w-sm ms-0" for="layout-position-scrollable">Scrollable</label>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex align-items-center gap-2 px-3 py-2 offcanvas-header border-top border-dashed">
            <button type="button" class="btn w-50 btn-soft-danger" id="reset-layout">Reset</button>
            <button type="button" class="btn w-50 btn-soft-info">Buy Now</button>
        </div>

    </div>

<?php include 'includes/footer.php'; ?>