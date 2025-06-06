<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Product Details | Campus Coach - Shape Your Future with Confidence</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Endeavour Digital" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!--Swiper slider css-->
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css">

    <!-- Theme Config Js -->
    <script src="assets/js/config.js"></script>

    <!-- Vendor css -->
    <link href="assets/css/vendor.min.css" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <!-- Begin page -->
    <div class="wrapper">

        
        <!-- Sidenav Menu Start -->
        <div class="sidenav-menu">

            <!-- Brand Logo -->
            <a href="index.php" class="logo">
                <span class="logo-light">
                    <span class="logo-lg"><img src="assets/images/logo.png" alt="logo"></span>
                    <span class="logo-sm text-center"><img src="assets/images/logo-sm.png" alt="small logo"></span>
                </span>

                <span class="logo-dark">
                    <span class="logo-lg"><img src="assets/images/logo-dark.png" alt="dark logo"></span>
                    <span class="logo-sm text-center"><img src="assets/images/logo-sm.png" alt="small logo"></span>
                </span>
            </a>

            <!-- Sidebar Hover Menu Toggle Button -->
            <button class="button-sm-hover">
                <i class="ti ti-circle align-middle"></i>
            </button>

            <!-- Full Sidebar Menu Close Button -->
            <button class="button-close-fullsidebar">
                <i class="ti ti-x align-middle"></i>
            </button>

            <div data-simplebar>

                <!--- Sidenav Menu -->
                <ul class="side-nav">

                    <li class="side-nav-item">
                        <a href="index.php" class="side-nav-link">
                            <span class="menu-icon"><i class="ti ti-dashboard"></i></span>
                            <span class="menu-text"> Dashboard </span>
                            <span class="badge bg-success rounded-pill">5</span>
                        </a>
                    </li>

                    <li class="side-nav-title mt-2">Apps & Pages</li>

                    <li class="side-nav-item">
                        <a href="apps-chat.php" class="side-nav-link">
                            <span class="menu-icon"><i class="ti ti-message-filled"></i></span>
                            <span class="menu-text"> Chat </span>
                        </a>
                    </li>

                    <li class="side-nav-item">
                        <a href="apps-calendar.php" class="side-nav-link">
                            <span class="menu-icon"><i class="ti ti-calendar-filled"></i></span>
                            <span class="menu-text"> Calendar </span>
                        </a>
                    </li>

                    <li class="side-nav-item">
                        <a href="apps-email.php" class="side-nav-link">
                            <span class="menu-icon"><i class="ti ti-inbox"></i></span>
                            <span class="menu-text"> Email </span>
                        </a>
                    </li>

                    <li class="side-nav-item">
                        <a href="apps-file-manager.php" class="side-nav-link">
                            <span class="menu-icon"><i class="ti ti-folder-filled"></i></span>
                            <span class="menu-text"> File Manager </span>
                        </a>
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarEcommerce" aria-expanded="false" aria-controls="sidebarEcommerce" class="side-nav-link">
                            <span class="menu-icon"><i class="ti ti-basket-filled"></i></span>
                            <span class="menu-text"> Ecommerce </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarEcommerce">
                            <ul class="sub-menu">
                                <li class="side-nav-item">
                                    <a href="apps-ecommerce-products.php" class="side-nav-link">
                                        <span class="menu-text">Products</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="apps-ecommerce-products-grid.php" class="side-nav-link">
                                        <span class="menu-text">Products Grid</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="apps-ecommerce-product-details.php" class="side-nav-link">
                                        <span class="menu-text">Product Details</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="apps-ecommerce-products-add.php" class="side-nav-link">
                                        <span class="menu-text">Add Products</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="apps-ecommerce-categories.php" class="side-nav-link">
                                        <span class="menu-text">Categories</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="apps-ecommerce-orders.php" class="side-nav-link">
                                        <span class="menu-text">Orders</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="apps-ecommerce-order-details.php" class="side-nav-link">
                                        <span class="menu-text">Order Details</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="apps-ecommerce-customers.php" class="side-nav-link">
                                        <span class="menu-text">Customers</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="apps-ecommerce-sellers.php" class="side-nav-link">
                                        <span class="menu-text">Sellers</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarInvoice" aria-expanded="false" aria-controls="sidebarInvoice" class="side-nav-link">
                            <span class="menu-icon"><i class="ti ti-file-invoice"></i></span>
                            <span class="menu-text"> Invoice</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarInvoice">
                            <ul class="sub-menu">
                                <li class="side-nav-item">
                                    <a href="apps-invoices.php" class="side-nav-link">
                                        <span class="menu-text">Invoices</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="apps-invoice-details.php" class="side-nav-link">
                                        <span class="menu-text">View Invoice</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="apps-invoice-create.php" class="side-nav-link">
                                        <span class="menu-text">Create Invoice</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarPages" aria-expanded="false" aria-controls="sidebarPages" class="side-nav-link">
                            <span class="menu-icon"><i class="ti ti-files"></i></span>
                            <span class="menu-text"> Pages </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarPages">
                            <ul class="sub-menu">
                                <li class="side-nav-item">
                                    <a href="pages-starter.php" class="side-nav-link">
                                        <span class="menu-text">Starter Page</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="pages-faq.php" class="side-nav-link">
                                        <span class="menu-text">FAQ</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="pages-maintenance.php" class="side-nav-link">
                                        <span class="menu-text">Maintenance</span>
                                    </a>
                                </li>                      
                                <li class="side-nav-item">
                                    <a href="pages-timeline.php" class="side-nav-link">
                                        <span class="menu-text">Timeline</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="pages-coming-soon.php" class="side-nav-link">
                                        <span class="menu-text">Coming Soon</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="pages-pricing.php" class="side-nav-link">
                                        <span class="menu-text">Pricing</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="pages-terms-conditions.php" class="side-nav-link">
                                        <span class="menu-text">Terms & Conditions</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarPagesAuth" aria-expanded="false" aria-controls="sidebarPagesAuth" class="side-nav-link">
                            <span class="menu-icon"><i class="ti ti-lock-filled"></i></span>
                            <span class="menu-text"> Auth Pages </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarPagesAuth">
                            <ul class="sub-menu">
                                <li class="side-nav-item">
                                    <a href="auth-login.php" class="side-nav-link">
                                        <span class="menu-text">Login</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="auth-register.php" class="side-nav-link">
                                        <span class="menu-text">Register</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="auth-logout.php" class="side-nav-link">
                                        <span class="menu-text">Logout</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="auth-recoverpw.php" class="side-nav-link">
                                        <span class="menu-text">Recover Password</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="auth-createpw.php" class="side-nav-link">
                                        <span class="menu-text">Create Password</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="auth-lock-screen.php" class="side-nav-link">
                                        <span class="menu-text">Lock Screen</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="auth-confirm-mail.php" class="side-nav-link">
                                        <span class="menu-text">Confirm Mail</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="auth-login-pin.php" class="side-nav-link">
                                        <span class="menu-text">Login with PIN</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="auth-2fa.php" class="side-nav-link">
                                        <span class="menu-text">2FA</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="auth-account-deactivation.php" class="side-nav-link">
                                        <span class="menu-text">Account Deactivation</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarPagesError" aria-expanded="false" aria-controls="sidebarPagesError" class="side-nav-link">
                            <span class="menu-icon"><i class="ti ti-server-2"></i></span>
                            <span class="menu-text"> Error Pages </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarPagesError">
                            <ul class="sub-menu">
                                <li class="side-nav-item">
                                    <a href="error-401.php" class="side-nav-link">
                                        <span class="menu-text">401 Unauthorized</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="error-400.php" class="side-nav-link">
                                        <span class="menu-text">400 Bad Request</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="error-403.php" class="side-nav-link">
                                        <span class="menu-text">403 Forbidden</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="error-404.php" class="side-nav-link">
                                        <span class="menu-text">404 Not Found</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="error-408.php" class="side-nav-link">
                                        <span class="menu-text">408 Request Timeout</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="error-500.php" class="side-nav-link">
                                        <span class="menu-text">500 Internal Server</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="error-501.php" class="side-nav-link">
                                        <span class="menu-text">501 Not Implemented</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="error-502.php" class="side-nav-link">
                                        <span class="menu-text">502 Service Overloaded</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="error-service-unavailable.php" class="side-nav-link">
                                        <span class="menu-text">Service Unavailable</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="error-404-alt.php" class="side-nav-link">
                                        <span class="menu-text">Error 404 Alt</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="side-nav-title mt-2">Components</li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarBaseUI" aria-expanded="false" aria-controls="sidebarBaseUI" class="side-nav-link">
                            <span class="menu-icon"><i class="ti ti-brightness-filled"></i></span>
                            <span class="menu-text"> Base UI </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarBaseUI">
                            <ul class="sub-menu">
                                <li class="side-nav-item">
                                    <a href="ui-accordions.php" class="side-nav-link">
                                        <span class="menu-text">Accordions</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="ui-alerts.php" class="side-nav-link">
                                        <span class="menu-text">Alerts</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="ui-avatars.php" class="side-nav-link">
                                        <span class="menu-text">Avatars</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="ui-badges.php" class="side-nav-link">
                                        <span class="menu-text">Badges</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="ui-breadcrumb.php" class="side-nav-link">
                                        <span class="menu-text">Breadcrumb</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="ui-buttons.php" class="side-nav-link">
                                        <span class="menu-text">Buttons</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="ui-cards.php" class="side-nav-link">
                                        <span class="menu-text">Cards</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="ui-carousel.php" class="side-nav-link">
                                        <span class="menu-text">Carousel</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="ui-collapse.php" class="side-nav-link">
                                        <span class="menu-text">Collapse</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="ui-dropdowns.php" class="side-nav-link">
                                        <span class="menu-text">Dropdowns</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="ui-ratios.php" class="side-nav-link">
                                        <span class="menu-text">Ratios</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="ui-grid.php" class="side-nav-link">
                                        <span class="menu-text">Grid</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="ui-links.php" class="side-nav-link">
                                        <span class="menu-text">Links</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="ui-list-group.php" class="side-nav-link">
                                        <span class="menu-text">List Group</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="ui-modals.php" class="side-nav-link">
                                        <span class="menu-text">Modals</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="ui-notifications.php" class="side-nav-link">
                                        <span class="menu-text">Notifications</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="ui-offcanvas.php" class="side-nav-link">
                                        <span class="menu-text">Offcanvas</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="ui-placeholders.php" class="side-nav-link">
                                        <span class="menu-text">Placeholders</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="ui-pagination.php" class="side-nav-link">
                                        <span class="menu-text">Pagination</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="ui-popovers.php" class="side-nav-link">
                                        <span class="menu-text">Popovers</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="ui-progress.php" class="side-nav-link">
                                        <span class="menu-text">Progress</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="ui-scrollspy.php" class="side-nav-link">
                                        <span class="menu-text">Scrollspy</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="ui-spinners.php" class="side-nav-link">
                                        <span class="menu-text">Spinners</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="ui-tabs.php" class="side-nav-link">
                                        <span class="menu-text">Tabs</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="ui-tooltips.php" class="side-nav-link">
                                        <span class="menu-text">Tooltips</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="ui-typography.php" class="side-nav-link">
                                        <span class="menu-text">Typography</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="ui-utilities.php" class="side-nav-link">
                                        <span class="menu-text">Utilities</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarExtendedUI" aria-expanded="false" aria-controls="sidebarExtendedUI" class="side-nav-link">
                            <span class="menu-icon"><i class="ti ti-alien-filled"></i></span>
                            <span class="menu-text"> Extended UI </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarExtendedUI">
                            <ul class="sub-menu">
                                <li class="side-nav-item">
                                    <a href="extended-dragula.php" class="side-nav-link">
                                        <span class="menu-text">Dragula</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="extended-sweetalerts.php" class="side-nav-link">
                                        <span class="menu-text">Sweet Alerts</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="extended-ratings.php" class="side-nav-link">
                                        <span class="menu-text">Ratings</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="extended-scrollbar.php" class="side-nav-link">
                                        <span class="menu-text">Scrollbar</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarIcons" aria-expanded="false" aria-controls="sidebarIcons" class="side-nav-link">
                            <span class="menu-icon"><i class="ti ti-leaf"></i></span>
                            <span class="menu-text"> Icons </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarIcons">
                            <ul class="sub-menu">
                                <li class="side-nav-item">
                                    <a href="icons-tabler.php" class="side-nav-link">
                                        <span class="menu-text">Tabler</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="icons-solar.php" class="side-nav-link">
                                        <span class="menu-text">Solar</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarCharts" aria-expanded="false" aria-controls="sidebarCharts" class="side-nav-link">
                            <span class="menu-icon"><i class="ti ti-chart-arcs"></i></span>
                            <span class="menu-text"> Charts </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarCharts">
                            <ul class="sub-menu">
                                <li class="side-nav-item">
                                    <a href="charts-apex-area.php" class="side-nav-link">
                                        <span class="menu-text">Area</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="charts-apex-bar.php" class="side-nav-link">
                                        <span class="menu-text">Bar</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="charts-apex-bubble.php" class="side-nav-link">
                                        <span class="menu-text">Bubble</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="charts-apex-candlestick.php" class="side-nav-link">
                                        <span class="menu-text">Candlestick</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="charts-apex-column.php" class="side-nav-link">
                                        <span class="menu-text">Column</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="charts-apex-heatmap.php" class="side-nav-link">
                                        <span class="menu-text">Heatmap</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="charts-apex-line.php" class="side-nav-link">
                                        <span class="menu-text">Line</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="charts-apex-mixed.php" class="side-nav-link">
                                        <span class="menu-text">Mixed</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="charts-apex-timeline.php" class="side-nav-link">
                                        <span class="menu-text">Timeline</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="charts-apex-boxplot.php" class="side-nav-link">
                                        <span class="menu-text">Boxplot</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="charts-apex-treemap.php" class="side-nav-link">
                                        <span class="menu-text">Treemap</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="charts-apex-pie.php" class="side-nav-link">
                                        <span class="menu-text">Pie</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="charts-apex-radar.php" class="side-nav-link">
                                        <span class="menu-text">Radar</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="charts-apex-radialbar.php" class="side-nav-link">
                                        <span class="menu-text">RadialBar</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="charts-apex-scatter.php" class="side-nav-link">
                                        <span class="menu-text">Scatter</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="charts-apex-polar-area.php" class="side-nav-link">
                                        <span class="menu-text">Polar Area</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="charts-apex-sparklines.php" class="side-nav-link">
                                        <span class="menu-text">Sparklines</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarForms" aria-expanded="false" aria-controls="sidebarForms" class="side-nav-link">
                            <span class="menu-icon"><i class="ti ti-forms"></i></span>
                            <span class="menu-text"> Forms </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarForms">
                            <ul class="sub-menu">
                                <li class="side-nav-item">
                                    <a href="form-elements.php" class="side-nav-link">
                                        <span class="menu-text">Basic Elements</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="form-inputmask.php" class="side-nav-link">
                                        <span class="menu-text">Inputmask</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="form-picker.php" class="side-nav-link">
                                        <span class="menu-text">Picker</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="form-select.php" class="side-nav-link">
                                        <span class="menu-text">Select</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="form-range-slider.php" class="side-nav-link">
                                        <span class="menu-text">Range Slider</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="form-validation.php" class="side-nav-link">
                                        <span class="menu-text">Validation</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="form-wizard.php" class="side-nav-link">
                                        <span class="menu-text">Wizard</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="form-fileuploads.php" class="side-nav-link">
                                        <span class="menu-text">File Uploads</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="form-editors.php" class="side-nav-link">
                                        <span class="menu-text">Editors</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="form-layouts.php" class="side-nav-link">
                                        <span class="menu-text">Layouts</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarTables" aria-expanded="false" aria-controls="sidebarTables" class="side-nav-link">
                            <span class="menu-icon"><i class="ti ti-table-filled"></i></span>
                            <span class="menu-text"> Tables </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarTables">
                            <ul class="sub-menu">
                                <li class="side-nav-item">
                                    <a href="tables-basic.php" class="side-nav-link">
                                        <span class="menu-text">Basic Tables</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="tables-gridjs.php" class="side-nav-link">
                                        <span class="menu-text">Gridjs Tables</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarMaps" aria-expanded="false" aria-controls="sidebarMaps" class="side-nav-link">
                            <span class="menu-icon"><i class="ti ti-map-pin-filled"></i></span>
                            <span class="menu-text"> Maps </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarMaps">
                            <ul class="sub-menu">
                                <li class="side-nav-item">
                                    <a href="maps-google.php" class="side-nav-link">
                                        <span class="menu-text">Google Maps</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="maps-vector.php" class="side-nav-link">
                                        <span class="menu-text">Vector Maps</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="maps-leaflet.php" class="side-nav-link">
                                        <span class="menu-text">Leaflet Maps</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="side-nav-title mt-2">
                        More
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarLayouts" aria-expanded="false" aria-controls="sidebarLayouts" class="side-nav-link">
                            <span class="menu-icon"><i class="ti ti-layout-filled"></i></span>
                            <span class="menu-text"> Layouts </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarLayouts">
                            <ul class="sub-menu">                        
                                <li class="side-nav-item">
                                    <a href="layouts-horizontal.php" target="_blank" class="side-nav-link">Horizontal</a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="layouts-full.php" target="_blank" class="side-nav-link">Full View</a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="layouts-fullscreen.php" target="_blank" class="side-nav-link">Fullscreen View</a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="layouts-hover.php" target="_blank" class="side-nav-link">Hover Menu</a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="layouts-compact.php" target="_blank" class="side-nav-link">Compact</a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="layouts-icon-view.php" target="_blank" class="side-nav-link">Icon View</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarMultiLevel" aria-expanded="false" aria-controls="sidebarMultiLevel" class="side-nav-link">
                            <span class="menu-icon"><i class="ti ti-box-multiple-3"></i></span>
                            <span class="menu-text"> Multi Level </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarMultiLevel">
                            <ul class="sub-menu">
                                <li class="side-nav-item">
                                    <a data-bs-toggle="collapse" href="#sidebarSecondLevel" aria-expanded="false" aria-controls="sidebarSecondLevel" class="side-nav-link">
                                        <span class="menu-text"> Second Level </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <div class="collapse" id="sidebarSecondLevel">
                                        <ul class="sub-menu">
                                            <li class="side-nav-item">
                                                <a href="javascript: void(0);" class="side-nav-link">
                                                    <span class="menu-text">Item 1</span>
                                                </a>
                                            </li>
                                            <li class="side-nav-item">
                                                <a href="javascript: void(0);" class="side-nav-link">
                                                    <span class="menu-text">Item 2</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="side-nav-item">
                                    <a data-bs-toggle="collapse" href="#sidebarThirdLevel" aria-expanded="false" aria-controls="sidebarThirdLevel" class="side-nav-link">
                                        <span class="menu-text"> Third Level </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <div class="collapse" id="sidebarThirdLevel">
                                        <ul class="sub-menu">
                                            <li class="side-nav-item">
                                                <a href="javascript: void(0);" class="side-nav-link">Item 1</a>
                                            </li>
                                            <li class="side-nav-item">
                                                <a data-bs-toggle="collapse" href="#sidebarFourthLevel" aria-expanded="false" aria-controls="sidebarFourthLevel" class="side-nav-link">
                                                    <span class="menu-text"> Item 2 </span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <div class="collapse" id="sidebarFourthLevel">
                                                    <ul class="sub-menu">
                                                        <li class="side-nav-item">
                                                            <a href="javascript: void(0);" class="side-nav-link">
                                                                <span class="menu-text">Item 2.1</span>
                                                            </a>
                                                        </li>
                                                        <li class="side-nav-item">
                                                            <a href="javascript: void(0);" class="side-nav-link">
                                                                <span class="menu-text">Item 2.2</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>

                <div class="clearfix"></div>
            </div>
        </div>
        <!-- Sidenav Menu End -->
        

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

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->
        <div class="page-content">

            <!-- Start Content-->
            <div class="page-container">

                
                <div class="page-title-head d-flex align-items-sm-center flex-sm-row flex-column gap-2">
                    <div class="flex-grow-1">
                        <h4 class="fs-18 text-uppercase fw-bold mb-0">Product Details</h4>
                    </div>

                    <div class="text-end">
                        <ol class="breadcrumb m-0 py-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Campus Coach</a></li>
                            
                            <li class="breadcrumb-item"><a href="javascript: void(0);">eCommerce</a></li>
                            
                            <li class="breadcrumb-item active">Product Details</li>
                        </ol>
                    </div>
                </div>
                

                

                <div class="row">
                    <div class="col-xl-5 col-lg-12">
                        <div class="card bg-body">
                            <div class="card-body">
                                <!-- Crossfade -->
                                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                                    <div class="carousel-inner" role="listbox">
                                        <div class="carousel-item text-center active">
                                            <img src="assets/images/products/p-3.png" alt="" class="img-fluid bg-body shadow-none rounded">
                                        </div>
                                        <div class="carousel-item text-center">
                                            <img src="assets/images/products/p-9.png" alt="" class="img-fluid bg-body shadow-none rounded">
                                        </div>
                                        <div class="carousel-item text-center">
                                            <img src="assets/images/products/p-10.png" alt="" class="img-fluid bg-body shadow-none rounded">
                                        </div>
                                        <div class="carousel-item text-center">
                                            <img src="assets/images/products/p-11.png" alt="" class="img-fluid bg-body shadow-none rounded">
                                        </div>
                                        <div class="carousel-item text-center">
                                            <img src="assets/images/products/p-12.png" alt="" class="img-fluid bg-body shadow-none rounded">
                                        </div>
                                    </div>
                                    <div class="carousel-indicators m-0 mt-2 d-lg-flex d-none position-static h-100 rounded gap-1">
                                        <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="0" aria-current="true" aria-label="Slide 1" class="h-auto rounded bg-light-subtle border active" style="width: auto !important;">
                                            <img src="assets/images/products/p-3.png" class="d-block avatar-xl" alt="swiper-indicator-img">
                                        </button>
                                        <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="1" aria-label="Slide 2" class="h-auto rounded bg-light-subtle border" style="width: auto !important;">
                                            <img src="assets/images/products/p-9.png" class="d-block avatar-xl" alt="swiper-indicator-img">
                                        </button>
                                        <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="2" aria-label="Slide 3" class="h-auto rounded bg-light-subtle border" style="width: auto !important;">
                                            <img src="assets/images/products/p-10.png" class="d-block avatar-xl" alt="swiper-indicator-img">
                                        </button>
                                        <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="3" aria-label="Slide 4" class="h-auto rounded bg-light-subtle border" style="width: auto !important;">
                                            <img src="assets/images/products/p-11.png" class="d-block avatar-xl" alt="swiper-indicator-img">
                                        </button>
                                        <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="4" aria-label="Slide 1" class="h-auto rounded bg-light-subtle border" style="width: auto !important;">
                                            <img src="assets/images/products/p-12.png" class="d-block avatar-xl" alt="swiper-indicator-img">
                                        </button>
                                    </div>
                                </div>
                            </div>
                                                        
                            <div class="card-footer p-0">
                                <div class="bg-dark-gradient shadow text-center p-3">
                                    <p class="fs-20 fw-semibold text-white mb-1">Enjoy an Additional 20% Discount on Your Purchase</p>
                                    <p class="mb-1 text-white-50">On Purchase Of 2+ Style</p>
                                    <p class="mb-0 text-white-50">USE CODE : <span class="text-warning fw-bold">OCEN24</span></p>
                                </div>
                                <div class="bg-body-secondary shadow rounded p-3">
                                    <h4 class="mb-3 text-dark">Offer Expires In :</h4>
                                    <div class="bg-warning-subtle border border-warning-subtle p-2 rounded">
                                        <div class="row text-xxl-center">
                                            <div class="col border-end border-warning-subtle">
                                                <h3 id="days" class="fw-bold fs-18 text-dark">10</h3>
                                                <p class="mb-0">Days</p>
                                            </div>
                                            <div class="col border-end border-warning-subtle">
                                                <h3 id="hours" class="fw-bold fs-18 text-dark">09</h3>
                                                <p class="mb-0">Hours</p>
                                            </div>
                                            <div class="col border-end border-warning-subtle">
                                                <h3 id="minutes" class="fw-bold fs-18 text-dark">30</h3>
                                                <p class="mb-0">Minutes</p>
                                            </div>
                                            <div class="col">
                                                <h3 id="seconds" class="fw-bold fs-18 text-dark">70</h3>
                                                <p class="mb-0">Seconds</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <span class="position-absolute top-0 end-0 p-5 pt-3 z-1">
                                <div data-toggler="on">
                                    <button type="button" class="btn btn-icon btn-secondary rounded-circle" data-toggler-on>
                                        <iconify-icon icon="solar:heart-angle-bold-duotone" class="fs-22 text-danger"></iconify-icon>
                                    </button>
                                    <button type="button" class="btn btn-icon btn-light rounded-circle d-none" data-toggler-off>
                                        <iconify-icon icon="solar:heart-angle-bold-duotone" class="fs-22" data-toggler-off></iconify-icon>
                                    </button>
                                </div>
                            </span>
                            <span class="position-absolute top-0 start-0 p-5 pt-2 z-1">
                                <span class="badge bg-danger fs-14">On Deal</span>
                            </span>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <span class="badge bg-success-subtle text-success px-2 py-1 fs-13 rounded-pill">New</span>
                                    </div>
                                    <div class="flex-grow-1 d-inline-flex align-items-center justify-content-end fs-16">
                                        <span class="ti ti-star-filled text-warning"></span>
                                        <span class="ti ti-star-filled text-warning"></span>
                                        <span class="ti ti-star-filled text-warning"></span>
                                        <span class="ti ti-star-filled text-warning"></span>
                                        <span class="ti ti-star-filled text-warning"></span>
                                        <span class="ms-1 fs-14">23k Reviews </span>
                                    </div>
                                </div>
                                <div class="mt-3 mb-1">
                                    <a href="#!" class="text-dark fs-20 fw-medium">Minetta Rattan Swivel Luxury Green Premium Lounge Chair</a>
                                </div>
                                <p class="text-muted fw-medium fs-14 mb-1"><span class="text-dark">Menufechar : </span> Premium Furniture</p>
                                <p class="text-muted fw-medium fs-14 mb-1"><span class="text-dark">Article : </span> CR63541</p>
                                <p class="text-muted fw-medium fs-14 mb-1"><span class="text-dark">Sold Items : </span> 76k</p>
                                <p class="text-muted fw-medium fs-14 mb-0"><span class="text-dark">Product Code : </span> CD4671CR</p>

                                <h2 class="my-4 fw-bold text-dark">$300.00 <span class="text-muted fs-14 fw-medium">/ 20% Off</span></h2>
                                <div class="d-flex flex-wrap align-items-center gap-2 mt-3 mb-2" role="group" aria-label="Basic checkbox toggle button group">
                                    <p class="mb-0 text-dark fw-semibold fs-15">Colors : </p>
                                    <input type="checkbox" class="btn-check" id="color-dark2">
                                    <label class="btn avatar btn-icon rounded-circle d-flex justify-content-center align-items-center" for="color-dark2"> <i class="ti ti-circle-filled fs-28 rounded-circle text-success"></i></label>

                                    <input type="checkbox" class="btn-check" id="color-yellow2">
                                    <label class="btn avatar btn-icon rounded-circle d-flex justify-content-center align-items-center" for="color-yellow2"> <i class="ti ti-circle-filled fs-28 rounded-circle text-warning"></i></label>

                                    <input type="checkbox" class="btn-check" id="color-white2">
                                    <label class="btn avatar btn-icon rounded-circle d-flex justify-content-center align-items-center" for="color-white2"> <i class="ti ti-circle-filled fs-28 rounded-circle text-primary"></i></label>

                                    <input type="checkbox" class="btn-check" id="color-info" checked="">
                                    <label class="btn avatar btn-icon rounded-circle d-flex justify-content-center align-items-center" for="color-info"> <i class="ti ti-circle-filled fs-28 rounded-circle text-info"></i></label>

                                </div>
                                <div class="d-flex flex-wrap align-items-center gap-2 my-3">
                                    <p class="mb-0 text-dark fw-semibold fs-15">Stock : </p>
                                    <div>
                                        <p class="text-success mb-0 fw-semibold fs-15"><i class="ti ti-checks"></i> In Stock</p>
                                    </div>
                                </div>
                                <div class="d-flex flex-wrap align-items-center gap-2 my-3">
                                    <p class="mb-0 text-dark fw-semibold fs-15">Quantity : </p>
                                    <div data-touchspin class="input-step border bg-body-secondary p-1 mt-1 rounded-pill d-inline-flex overflow-visible">
                                        <button type="button" class="minus bg-light text-dark border-0 rounded-circle fs-20 lh-1 h-100">-</button>
                                        <input type="number" class="text-dark text-center border-0 bg-body-secondary rounded h-100" value="1" min="0" max="100" readonly="">
                                        <button type="button" class="plus bg-light text-dark border-0 rounded-circle fs-20 lh-1 h-100">+</button>
                                    </div>
                                </div>
                                <h4 class="text-dark fw-medium">Description :</h4>
                                <p class="mb-1">Bring Axis home and watch life revolve around it. This 2-seat sofa offers exceptional durability for family rooms and casual living rooms, featuring track arms that create a clean look. Low back cushions and deep seats encourage lounging with family and friends.</p>
                                <p class="mb-1">An exceptional occasional chair with slim arm rests, styled with a reclined back for supreme comfort. The metal tipped flaring legs add a decorative flourish to this elegant classic. Also available with a quilted fabric back (60-0775)</p>
                                <a href="#!" class="link-primary">Read More...</a>
                                <h4 class="text-dark fw-medium mt-3">Details :</h4>
                                <ul class="d-flex flex-column gap-1 fs-14 mb-0">
                                    <li>
                                        Doweled mortise and tenon frame in solid Mahogany from certified source.
                                    </li>
                                    <li>
                                        Solid certified Mahogany.
                                    </li>
                                    <li>
                                        Available in a selection of finishes.
                                    </li>
                                    <li>
                                        Tight seat undersupport with high-density upholstery fill.
                                    </li>
                                </ul>

                                <h4 class="text-dark fw-medium mt-3 mb-2 pb-1">Additional Information :</h4>
                                <div class="border border-dashed p-2 rounded text-center">
                                    <div class="row">
                                        <div class="col-lg-3 col-4 border-end">
                                            <p class="text-muted fw-medium fs-14 mb-0"><span class="text-dark">Arm Width : </span> 54 cm</p>
                                        </div>
                                        <div class="col-lg-3 col-4 border-end">
                                            <p class="text-muted fw-medium fs-14 mb-0"><span class="text-dark">Seat Width : </span> 67 cm</p>
                                        </div>
                                        <div class="col-lg-3 col-4 border-end">
                                            <p class="text-muted fw-medium fs-14 mb-0"><span class="text-dark">Seat Depth : </span> 54 cm</p>
                                        </div>
                                        <div class="col-lg-3 col-4 border-end">
                                            <p class="text-muted fw-medium fs-14 mb-0"><span class="text-dark">Seat Height : </span> 40 cm</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer border-top border-dashed">
                                <div class="row g-2">
                                    <div class="col-lg-3">
                                        <a href="#!" class="btn btn-primary w-100 d-flex align-items-center gap-1"><iconify-icon icon="solar:cart-large-2-bold" class="fs-16 align-middle"></iconify-icon> Add to Bag</a>
                                    </div>
                                    <div class="col-lg-3">
                                        <a href="#!" class="btn btn-success w-100 d-flex align-items-center gap-1"><iconify-icon icon="solar:bag-check-bold" class="fs-16 align-middle"></iconify-icon> Buy Now</a>
                                    </div>
                                    <div class="col-lg-3">
                                        <a href="#!" class="btn btn-outline-danger w-75 d-flex align-items-center gap-1"><iconify-icon icon="solar:heart-bold" class="fs-16 align-middle"></iconify-icon> Wishlist</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header p-0">
                                <ul class="nav nav-tabs nav-bordered">
                                    <li class="nav-item px-3">
                                        <a href="#description" data-bs-toggle="tab" aria-expanded="false" class="nav-link py-2 active">
                                            <span class="d-block d-sm-none"><iconify-icon icon="solar:notebook-bold" class="fs-20"></iconify-icon></span>
                                            <span class="d-none d-sm-block"><iconify-icon icon="solar:notebook-bold" class="fs-14 me-1 align-middle"></iconify-icon> Description</span>
                                        </a>
                                    </li>
                                    <li class="nav-item px-3">
                                        <a href="#review" data-bs-toggle="tab" aria-expanded="true" class="nav-link py-2">
                                            <span class="d-block d-sm-none"><iconify-icon icon="solar:chat-dots-bold" class="fs-20"></iconify-icon></span>
                                            <span class="d-none d-sm-block"><iconify-icon icon="solar:chat-dots-bold" class="fs-14 me-1 align-middle"></iconify-icon> Review</span>
                                        </a>
                                    </li>
                                    <li class="nav-item px-3">
                                        <a href="#offer-warranty" data-bs-toggle="tab" aria-expanded="false" class="nav-link py-2">
                                            <span class="d-block d-sm-none"><iconify-icon icon="solar:ticket-sale-bold" class="fs-20"></iconify-icon></span>
                                            <span class="d-none d-sm-block"><iconify-icon icon="solar:ticket-sale-bold" class="fs-14 me-1 align-middle"></iconify-icon> Offers & Warranty</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="tab-content ">
                                    <div class="tab-pane show active" id="description">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <p>Modern designer chair with a frame made of a metal profile. The minimalist style will work in any modern and loft interior. The furniture is characterized by high durability and solid workmanship, so you can be sure that it will serve you for many years.</p>
                                            </div>
                                        </div>
                                        <div class="row g-4">
                                            <div class="col-lg-6">
                                                <h4 class="card-title my-2">Dimension :</h4>
                                                <div class="table-responsive">
                                                    <table class="table mb-0">
                                                        <tbody>
                                                            <tr>
                                                                <td class="px-0">
                                                                    <p class="d-flex mb-0 align-items-center gap-1">Width : </p>
                                                                </td>
                                                                <td class="text-end text-dark fw-medium px-0">54 cm</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="px-0">
                                                                    <p class="d-flex mb-0 align-items-center gap-1">Length : </p>
                                                                </td>
                                                                <td class="text-end text-dark fw-medium px-0">50 cm</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="px-0">
                                                                    <p class="d-flex mb-0 align-items-center gap-1">Seat Width : </p>
                                                                </td>
                                                                <td class="text-end text-dark fw-medium px-0">67 cm</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="px-0">
                                                                    <p class="d-flex mb-0 align-items-center gap-1">Seat Length : </p>
                                                                </td>
                                                                <td class="text-end text-dark fw-medium px-0">65 cm</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="px-0">
                                                                    <p class="d-flex mb-0 align-items-center gap-1">Seat Height : </p>
                                                                </td>
                                                                <td class="text-end text-dark fw-medium px-0">40 cm</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="px-0">
                                                                    <p class="d-flex mb-0 align-items-center gap-1">Backrest Height : </p>
                                                                </td>
                                                                <td class="text-end text-dark fw-medium px-0">50 cm</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="px-0">
                                                                    <p class="d-flex mb-0 align-items-center gap-1">Armrest Height From THe Ground : </p>
                                                                </td>
                                                                <td class="text-end text-dark fw-medium px-0">58 cm</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <h4 class="card-title my-2">Material :</h4>
                                                <div class="table-responsive">
                                                    <table class="table mb-0">
                                                        <tbody>
                                                            <tr>
                                                                <td class="px-0">
                                                                    <p class="d-flex mb-0 align-items-center gap-1">Material Seat : </p>
                                                                </td>
                                                                <td class="text-end text-dark fw-medium px-0">Velor Fabric</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="px-0">
                                                                    <p class="d-flex mb-0 align-items-center gap-1">Material Base : </p>
                                                                </td>
                                                                <td class="text-end text-dark fw-medium px-0">Steel Powder Coated</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <h4 class="card-title mb-1 mt-3">Colors :</h4>
                                                <div class="table-responsive">
                                                    <table class="table mb-0">
                                                        <tbody>
                                                            <tr>
                                                                <td class="px-0">
                                                                    <p class="d-flex mb-0 align-items-center gap-1">Seat Color : </p>
                                                                </td>
                                                                <td class="text-end text-dark fw-medium px-0">Sky Blue</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="px-0">
                                                                    <p class="d-flex mb-0 align-items-center gap-1">Base Color : </p>
                                                                </td>
                                                                <td class="text-end text-dark fw-medium px-0">Wooden Brown</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="review">
                                        <div class="row g-2">
                                            <div class="col-xl-6 col-lg-12">
                                                <div class="pe-lg-3">

                                                    <h4 class="card-title"><iconify-icon icon="solar:box-bold-duotone"></iconify-icon> Product Rating</h4>
                                                    <div class="row align-items-center text-center my-4">
                                                        <div class="col-lg-4">
                                                            <h2 class="text-dark fw-semibold d-flex align-items-center gap-1 justify-content-center">4.5 <iconify-icon icon="solar:star-bold" class="text-warning"></iconify-icon></h2>
                                                            <p class="mb-0 fs-5">Best Review</p>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <div class="d-flex align-items-center gap-3">
                                                                <h5 class="mb-0 flex-shrink-0">5 star :</h5>
                                                                <div class="progress flex-grow-1" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="height: 10px">
                                                                    <div class="progress-bar bg-warning rounded" style="width: 90%"></div>
                                                                </div>
                                                                <h5 class="mb-0 flex-shrink-0">4525</h5>
                                                            </div>
                                                            <div class="d-flex align-items-center gap-3 my-3">
                                                                <h5 class="mb-0 flex-shrink-0">4 star :</h5>
                                                                <div class="progress flex-grow-1" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="height: 10px">
                                                                    <div class="progress-bar bg-warning rounded" style="width: 70%"></div>
                                                                </div>
                                                                <h5 class="mb-0 flex-shrink-0">2343</h5>
                                                            </div>
                                                            <div class="d-flex align-items-center gap-3 my-3">
                                                                <h5 class="mb-0 flex-shrink-0">3 star :</h5>
                                                                <div class="progress flex-grow-1" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="height: 10px">
                                                                    <div class="progress-bar bg-warning rounded" style="width: 30%"></div>
                                                                </div>
                                                                <h5 class="mb-0 flex-shrink-0">221</h5>
                                                            </div>
                                                            <div class="d-flex align-items-center gap-3 my-3">
                                                                <h5 class="mb-0 flex-shrink-0">2 star :</h5>
                                                                <div class="progress flex-grow-1" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="height: 10px">
                                                                    <div class="progress-bar bg-warning rounded" style="width: 20%"></div>
                                                                </div>
                                                                <h5 class="mb-0 flex-shrink-0">109</h5>
                                                            </div>
                                                            <div class="d-flex align-items-center gap-3 mt-3">
                                                                <h5 class="mb-0 flex-shrink-0">1 star :</h5>
                                                                <div class="progress flex-grow-1" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="height: 10px">
                                                                    <div class="progress-bar bg-warning rounded" style="width: 10%"></div>
                                                                </div>
                                                                <h5 class="mb-0 flex-shrink-0">129</h5>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <h4 class="card-title mb-3">Customer Upload Photos :</h4>
                                                    <div class="d-flex flex-wrap align-items-center gap-2 text-center">
                                                        <div>
                                                            <a href="#!">
                                                                <img src="assets/images/products/p-3.png" alt="" class="avatar-xl bg-light-subtle rounded border">
                                                            </a>
                                                        </div>
                                                        <div>
                                                            <a href="#!">
                                                                <img src="assets/images/products/p-12.png" alt="" class="avatar-xl bg-light-subtle rounded border">
                                                            </a>
                                                        </div>
                                                        <div>
                                                            <a href="#!">
                                                                <img src="assets/images/products/p-11.png" alt="" class="avatar-xl bg-light-subtle rounded border">
                                                            </a>
                                                        </div>
                                                        <div>
                                                            <a href="#!">
                                                                <img src="assets/images/products/p-10.png" alt="" class="avatar-xl bg-light-subtle rounded border">
                                                            </a>
                                                        </div>
                                                        <div class="avatar-xl bg-light rounded border d-flex justify-content-center align-items-center">
                                                            <a href="#!" class="fs-16 fw-semibold text-dark">
                                                                44+
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex  align-items-center justify-content-between mt-4 mb-3">
                                                        <h4 class="card-title">Customer Reviews (2567) :</h4>
                                                        <div>
                                                            <a href="#!" class="link-primary fw-medium text-decoration-underline">View All</a>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="d-flex gap-3">
                                                                <div>
                                                                    <span class="badge bg-warning-subtle text-dark py-1 px-2 fs-14 d-flex align-items-center justify-content-center gap-1 mb-2">4.5 <iconify-icon icon="solar:star-bold" class="text-warning fs-16"></iconify-icon></span>
                                                                    <a href="#!">
                                                                        <img src="assets/images/products/p-10.png" alt="" class="avatar-xl bg-light-subtle rounded border">
                                                                    </a>
                                                                </div>
                                                                <div>
                                                                    <p class="fs-15 d-flex gap-2 fw-semibold">Ruth L. Garner<span class="text-muted fs-14 fw-normal">|</span><span class="text-muted fs-14 fw-normal">11 November 2023</span></p>
                                                                    <p class="mb-0">The design of the chair is sleek and modern, fitting perfectly with the aesthetic of my home office. The black mesh backrest not only looks stylish but also provides excellent reachability, preventing any discomfort during long working hours. </p>
                                                                    <div class="d-flex align-items-center gap-2 mt-2 mb-1">
                                                                        <ul class="d-flex text-warning m-0 fs-18 list-unstyled">
                                                                            <li>
                                                                                <i class="ti ti-star-filled"></i>
                                                                            </li>
                                                                            <li>
                                                                                <i class="ti ti-star-filled"></i>
                                                                            </li>
                                                                            <li>
                                                                                <i class="ti ti-star-filled"></i>
                                                                            </li>
                                                                            <li>
                                                                                <i class="ti ti-star-filled"></i>
                                                                            </li>
                                                                            <li>
                                                                                <i class="ti ti-star-half-filled"></i>
                                                                            </li>
                                                                        </ul>
                                                                        <p class="fw-medium mb-0 text-dark fs-14">4.5 / 5 Best Review</p>
                                                                    </div>
                                                                    <div class="mt-3">
                                                                        <a href="#!" class="fs-14 me-3 link-reset"><i class="ti ti-thumb-up fs-18"></i> 2543</a>
                                                                        <a href="#!" class="fs-14 me-3 link-reset"><i class="ti ti-thumb-down fs-18"></i> 129</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <hr class="my-3">
                                                            <div class="d-flex gap-3">
                                                                <div>
                                                                    <span class="badge bg-warning-subtle text-dark py-1 px-2 fs-14 d-flex align-items-center justify-content-center gap-1 mb-2">4.2 <iconify-icon icon="solar:star-bold" class="text-warning fs-16"></iconify-icon></span>
                                                                    <a href="#!">
                                                                        <img src="assets/images/products/p-10.png" alt="" class="avatar-xl bg-light-subtle rounded border d-none">
                                                                    </a>
                                                                </div>
                                                                <div>
                                                                    <p class="fs-15 d-flex gap-2 fw-semibold">Michelle M. Kellerman<span class="text-muted fs-14 fw-normal">|</span><span class="text-muted fs-14 fw-normal">20 March 2024</span></p>
                                                                    <p class="mb-0">One of the standout features of this chair is its adjustability. The chair offers a wide range of adjustments, including seat height, armrest height, and tilt tension. The lumbar support can be easily adjusted to fit the natural curve</p>
                                                                    <div class="d-flex align-items-center gap-2 mt-2 mb-1">
                                                                        <ul class="d-flex text-warning m-0 fs-18 list-unstyled">
                                                                            <li>
                                                                                <i class="ti ti-star-filled"></i>
                                                                            </li>
                                                                            <li>
                                                                                <i class="ti ti-star-filled"></i>
                                                                            </li>
                                                                            <li>
                                                                                <i class="ti ti-star-filled"></i>
                                                                            </li>
                                                                            <li>
                                                                                <i class="ti ti-star-filled"></i>
                                                                            </li>
                                                                            <li>
                                                                                <i class="ti ti-star-half-filled"></i>
                                                                            </li>
                                                                        </ul>
                                                                        <p class="fw-medium mb-0 text-dark fs-14">4.2 / 5 Best Review</p>
                                                                    </div>
                                                                    <div class="mt-3">
                                                                        <a href="#!" class="fs-14 me-3 link-reset"><i class="ti ti-thumb-up fs-18"></i> 1323</a>
                                                                        <a href="#!" class="fs-14 me-3 link-reset"><i class="ti ti-thumb-down fs-18"></i> 34</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-12 border-start">
                                                <div class="ps-lg-3">
                                                    <h4 class="card-title"><iconify-icon icon="solar:shop-2-bold"></iconify-icon> Shop Rating</h4>
                                                    <div class="row align-items-center text-center my-4">
                                                        <div class="col-lg-4">
                                                            <h2 class="text-dark fw-semibold d-flex align-items-center gap-1 justify-content-center">4.2 <iconify-icon icon="solar:star-bold" class="text-warning"></iconify-icon></h2>
                                                            <p class="mb-0 fs-5">Best Review</p>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <div class="d-flex align-items-center gap-3">
                                                                <h5 class="mb-0 flex-shrink-0">5 star :</h5>
                                                                <div class="progress flex-grow-1" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="height: 10px">
                                                                    <div class="progress-bar bg-warning rounded" style="width: 70%"></div>
                                                                </div>
                                                                <h5 class="mb-0 flex-shrink-0">3641</h5>
                                                            </div>
                                                            <div class="d-flex align-items-center gap-3 my-3">
                                                                <h5 class="mb-0 flex-shrink-0">4 star :</h5>
                                                                <div class="progress flex-grow-1" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="height: 10px">
                                                                    <div class="progress-bar bg-warning rounded" style="width: 65%"></div>
                                                                </div>
                                                                <h5 class="mb-0 flex-shrink-0">2912</h5>
                                                            </div>
                                                            <div class="d-flex align-items-center gap-3 my-3">
                                                                <h5 class="mb-0 flex-shrink-0">3 star :</h5>
                                                                <div class="progress flex-grow-1" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="height: 10px">
                                                                    <div class="progress-bar bg-warning rounded" style="width: 60%"></div>
                                                                </div>
                                                                <h5 class="mb-0 flex-shrink-0">321</h5>
                                                            </div>
                                                            <div class="d-flex align-items-center gap-3 my-3">
                                                                <h5 class="mb-0 flex-shrink-0">2 star :</h5>
                                                                <div class="progress flex-grow-1" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="height: 10px">
                                                                    <div class="progress-bar bg-warning rounded" style="width: 30%"></div>
                                                                </div>
                                                                <h5 class="mb-0 flex-shrink-0">231</h5>
                                                            </div>
                                                            <div class="d-flex align-items-center gap-3 mt-3">
                                                                <h5 class="mb-0 flex-shrink-0">1 star :</h5>
                                                                <div class="progress flex-grow-1" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="height: 10px">
                                                                    <div class="progress-bar bg-warning rounded" style="width: 20%"></div>
                                                                </div>
                                                                <h5 class="mb-0 flex-shrink-0">149</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h4 class="card-title">Shop Product Rating :</h4>
                                                    <div class="row mt-3 text-center g-2">
                                                        <div class="col-lg-4">
                                                            <img src="assets/images/products/p-3.png" alt="" class="img-fluid border rounded">
                                                            <div class="d-flex align-items-center justify-content-center gap-2 mt-2 mb-1">
                                                                <ul class="d-flex text-warning m-0 fs-18 list-unstyled">
                                                                    <li>
                                                                        <i class="ti ti-star-filled"></i>
                                                                    </li>
                                                                    <li>
                                                                        <i class="ti ti-star-filled"></i>
                                                                    </li>
                                                                    <li>
                                                                        <i class="ti ti-star-filled"></i>
                                                                    </li>
                                                                    <li>
                                                                        <i class="ti ti-star-filled"></i>
                                                                    </li>
                                                                    <li>
                                                                        <i class="ti ti-star-half-filled"></i>
                                                                    </li>
                                                                </ul>
                                                                <p class="fw-medium mb-0 text-dark fs-14">4.5 / 5</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <img src="assets/images/products/p-9.png" alt="" class="img-fluid border rounded">
                                                            <div class="d-flex align-items-center justify-content-center gap-2 mt-2 mb-1">
                                                                <ul class="d-flex text-warning m-0 fs-18 list-unstyled">
                                                                    <li>
                                                                        <i class="ti ti-star-filled"></i>
                                                                    </li>
                                                                    <li>
                                                                        <i class="ti ti-star-filled"></i>
                                                                    </li>
                                                                    <li>
                                                                        <i class="ti ti-star-filled"></i>
                                                                    </li>
                                                                    <li>
                                                                        <i class="ti ti-star-filled"></i>
                                                                    </li>
                                                                    <li>
                                                                        <i class="ti ti-star-half-filled"></i>
                                                                    </li>
                                                                </ul>
                                                                <p class="fw-medium mb-0 text-dark fs-14">4.2 / 5</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <img src="assets/images/products/p-10.png" alt="" class="img-fluid border rounded">
                                                            <div class="d-flex align-items-center justify-content-center gap-2 mt-2 mb-1">
                                                                <ul class="d-flex text-warning m-0 fs-18 list-unstyled">
                                                                    <li>
                                                                        <i class="ti ti-star-filled"></i>
                                                                    </li>
                                                                    <li>
                                                                        <i class="ti ti-star-filled"></i>
                                                                    </li>
                                                                    <li>
                                                                        <i class="ti ti-star-filled"></i>
                                                                    </li>
                                                                    <li>
                                                                        <i class="ti ti-star-half-filled"></i>
                                                                    </li>
                                                                    <li>
                                                                        <i class="ti ti-star"></i>
                                                                    </li>
                                                                </ul>
                                                                <p class="fw-medium mb-0 text-dark fs-14">3.5 / 5</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <img src="assets/images/products/p-11.png" alt="" class="img-fluid border rounded">
                                                            <div class="d-flex align-items-center justify-content-center gap-2 mt-2 mb-1">
                                                                <ul class="d-flex text-warning m-0 fs-18 list-unstyled">
                                                                    <li>
                                                                        <i class="ti ti-star-filled"></i>
                                                                    </li>
                                                                    <li>
                                                                        <i class="ti ti-star-filled"></i>
                                                                    </li>
                                                                    <li>
                                                                        <i class="ti ti-star-filled"></i>
                                                                    </li>
                                                                    <li>
                                                                        <i class="ti ti-star-filled"></i>
                                                                    </li>
                                                                    <li>
                                                                        <i class="ti ti-star-filled"></i>
                                                                    </li>
                                                                </ul>
                                                                <p class="fw-medium mb-0 text-dark fs-14">5 / 5</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <img src="assets/images/products/p-12.png" alt="" class="img-fluid border rounded">
                                                            <div class="d-flex align-items-center justify-content-center gap-2 mt-2 mb-1">
                                                                <ul class="d-flex text-warning m-0 fs-18 list-unstyled">
                                                                    <li>
                                                                        <i class="ti ti-star-filled"></i>
                                                                    </li>
                                                                    <li>
                                                                        <i class="ti ti-star-filled"></i>
                                                                    </li>
                                                                    <li>
                                                                        <i class="ti ti-star-filled"></i>
                                                                    </li>
                                                                    <li>
                                                                        <i class="ti ti-star-filled"></i>
                                                                    </li>
                                                                    <li>
                                                                        <i class="ti ti-star-half-filled"></i>
                                                                    </li>
                                                                </ul>
                                                                <p class="fw-medium mb-0 text-dark fs-14">4.4 / 5</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="offer-warranty">
                                        <h4 class="card-title">Available Offers : </h4>
                                        <div class="row mt-3 g-2">
                                            <div class="col-lg-6">
                                                <div class="border rounded p-2 text-center">
                                                    <p class="fw-semibold text-dark fs-20 my-1">To Get This Price , Use Code : <span class="text-primary fw-semibold">WINTER2024</span></p>
                                                    <p class="fs-15 text-muted fw-medium">Fast & Free Delivery</p>
                                                    <a href="#!" class="btn btn-primary">Show Offers</a>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="border rounded p-2 text-center">
                                                    <p class="fw-semibold text-dark fs-20 my-1">Enjoy an Additional 20% Discount on Your Purchase : <span class="text-primary fw-semibold">OCEN24</span></p>
                                                    <p class="fs-15 text-muted fw-medium">Fast & Free Delivery</p>
                                                    <a href="#!" class="btn btn-primary">Show Offers</a>
                                                </div>
                                            </div>
                                        </div>
                                        <h4 class="card-title my-3">Shop Offers : </h4>
                                        <div class="row g-3">
                                            <div class="col-lg-3">
                                                <div class="d-flex align-items-center gap-2">
                                                    <div class="avatar-lg bg-light d-flex align-items-center justify-content-center rounded">
                                                        <iconify-icon icon="solar:refresh-square-bold" class="fs-28 text-primary"></iconify-icon>
                                                    </div>

                                                    <div>
                                                        <p class="text-dark fw-medium fs-16 mb-0">Free Return</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="d-flex align-items-center gap-2">
                                                    <div class="avatar-lg bg-light d-flex align-items-center justify-content-center rounded">
                                                        <iconify-icon icon="solar:money-bag-bold" class="fs-28 text-primary"></iconify-icon>
                                                    </div>

                                                    <div>
                                                        <p class="text-dark fw-medium fs-16 mb-0">Multiple Payment Option</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="d-flex align-items-center gap-2">
                                                    <div class="avatar-lg bg-light d-flex align-items-center justify-content-center rounded">
                                                        <iconify-icon icon="solar:sofa-2-bold-duotone" class="fs-28 text-primary"></iconify-icon>
                                                    </div>

                                                    <div>
                                                        <p class="text-dark fw-medium fs-16 mb-0">Free Assembly</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="d-flex align-items-center gap-2">
                                                    <div class="avatar-lg bg-light d-flex align-items-center justify-content-center rounded">
                                                        <iconify-icon icon="solar:verified-check-bold" class="fs-28 text-primary"></iconify-icon>
                                                    </div>

                                                    <div>
                                                        <p class="text-dark fw-medium fs-16 mb-0">Guaranteed Product Replace</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="d-flex align-items-center gap-2">
                                                    <div class="avatar-lg bg-light d-flex align-items-center justify-content-center rounded">
                                                        <iconify-icon icon="solar:tram-bold" class="fs-28 text-primary"></iconify-icon>
                                                    </div>

                                                    <div>
                                                        <p class="text-dark fw-medium fs-16 mb-0">Fast & Free Shipping</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="d-flex align-items-center gap-2">
                                                    <div class="avatar-lg bg-light d-flex align-items-center justify-content-center rounded">
                                                        <iconify-icon icon="solar:tag-price-bold" class="fs-28 text-primary"></iconify-icon>
                                                    </div>

                                                    <div>
                                                        <p class="text-dark fw-medium fs-16 mb-0">Your Best Price Matching</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="d-flex align-items-center gap-2">
                                                    <div class="avatar-lg bg-light d-flex align-items-center justify-content-center rounded">
                                                        <iconify-icon icon="solar:headphones-round-bold" class="fs-28 text-primary"></iconify-icon>
                                                    </div>

                                                    <div>
                                                        <p class="text-dark fw-medium fs-16 mb-0">24/7 Support</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="d-flex align-items-center gap-2">
                                                    <div class="avatar-lg bg-light d-flex align-items-center justify-content-center rounded">
                                                        <iconify-icon icon="solar:card-2-bold" class="fs-28 text-primary"></iconify-icon>
                                                    </div>

                                                    <div>
                                                        <p class="text-dark fw-medium fs-16 mb-0">Secure Checkout</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="alert alert-success d-flex align-items-center mt-4 mb-0" role="alert">
                                            <iconify-icon icon="solar:shield-check-bold" class="fs-20 me-1"></iconify-icon>
                                            <div class="lh-1"><strong>3 Years - </strong>Guaranteed Product Global Warranty</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

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

    <!-- Vendor js -->
    <script src="assets/js/vendor.min.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>

</body>

</html>