<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>FAQ | Campus Coach - Shape Your Future with Confidence</title>
<?php include 'includes/head.php'; ?>
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

            <div class="page-container">

                
                <div class="page-title-head d-flex align-items-sm-center flex-sm-row flex-column gap-2">
                    <div class="flex-grow-1">
                        <h4 class="fs-18 text-uppercase fw-bold mb-0">FAQ</h4>
                    </div>

                    <div class="text-end">
                        <ol class="breadcrumb m-0 py-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Campus Coach</a></li>
                            
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                            
                            <li class="breadcrumb-item active">FAQ</li>
                        </ol>
                    </div>
                </div>
                

                

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row justify-content-between g-3">
                                    <div class="col-xl-3 col-lg-6">
                                        <div>
                                            <div class="avatar-lg bg-primary rounded d-flex align-items-center justify-content-center mb-3">
                                                <i class="ti ti-question-mark fs-32 text-white"></i>
                                            </div>
                                            <h3 class="mb-1">Frequently Asked Questions</h3>
                                            <p class="mb-3">Browse Through The Most Frequently Asked Questions</p>

                                            <div class="d-flex align-items-center gap-2 border p-2 rounded mb-3 ms-0">
                                                <div class="avatar-lg bg-light rounded d-flex align-items-center justify-content-center">
                                                    <i class="ti ti-search fs-23 text-primary"></i>
                                                </div>
                                                <div>
                                                    <a href="#!" class="fw-medium fs-15">Visit Help Center</a>
                                                    <p class="mb-0 mt-1">Check Out Tutorials</p>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center gap-2 border p-2 rounded mb-3 ms-0">
                                                <div class="avatar-lg bg-light rounded d-flex align-items-center justify-content-center">
                                                    <i class="ti ti-phone fs-23 text-primary"></i>
                                                </div>
                                                <div>
                                                    <a href="#!" class="fw-medium fs-15">Book a Demo</a>
                                                    <p class="mb-0 mt-1">1:1 Talk With A Tax Specialist.</p>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center gap-2 border p-2 rounded ms-0">
                                                <div class="avatar-lg bg-light rounded d-flex align-items-center justify-content-center">
                                                    <i class="ti ti-brand-hipchat fs-23 text-primary"></i>
                                                </div>
                                                <div>
                                                    <a href="#!" class="fw-medium fs-15">Live Chat Support</a>
                                                    <p class="mb-0 mt-1">24/7 available. No chatbots.</p>
                                                </div>
                                            </div>
                                            <div class="mt-3">
                                                <a href="#!" class="btn btn-primary">Show More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-5 col-lg-6 text-center">
                                        <img src="assets/images/png/faq.png" alt="" class="img-fluid mt-3">
                                        <div class="app-search app-search-lg py-1 mt-3">
                                            <input type="text" class="form-control rounded py-2" placeholder="Search...">
                                            <i class="app-search-icon ti ti-search fs-18 text-muted"></i>
                                        </div>
                                        <div class="d-flex flex-wrap align-items-center gap-1 mt-2">
                                            <h5 class="mb-0">Popular Searched : </h5>
                                            <span class="badge text-bg-light rounded-pill fw-normal px-2 py-1 fs-6">Apps</span>
                                            <span class="badge text-bg-light rounded-pill fw-normal px-2 py-1 fs-6">Developers</span>
                                            <span class="badge text-bg-light rounded-pill fw-normal px-2 py-1 fs-6">Repair</span>
                                            <span class="badge text-bg-light rounded-pill fw-normal px-2 py-1 fs-6">Billing</span>
                                            <span class="badge text-bg-light rounded-pill fw-normal px-2 py-1 fs-6">Payment</span>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6">
                                        <div>
                                            <h4 class="card-title mb-3">Write Your Question :</h4>
                                            <div class="border p-3 rounded bg-light-subtle">
                                                <form>
                                                    <div class="mb-2">
                                                        <label for="your-name" class="form-label">Your Name</label>
                                                        <input type="text" id="your-name" name="your-name" class="form-control" placeholder="Full Name">
                                                    </div>
                                                    <div class="mb-2">
                                                        <label for="email-email" class="form-label">Email</label>
                                                        <input type="email" id="email-email" name="email-email" class="form-control" placeholder="Email">
                                                    </div>
                                                    <div class="mb-2">
                                                        <label for="phone-number" class="form-label">Phone number</label>
                                                        <input type="number" id="phone-number" name="phone-number" class="form-control" placeholder="Number">
                                                    </div>
                                                    <div>
                                                        <label for="question-textarea" class="form-label">Enter Your Question</label>
                                                        <textarea class="form-control" id="question-textarea" rows="3" placeholder="Message"></textarea>
                                                    </div>
                                                </form>
                                                <div class="mt-2">
                                                    <a href="#!" class="btn btn-primary w-100">Send</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-3">
                        <div class="bg-body-secondary shadow rounded docs-nav">
                            <ul class="nav bg-transparent flex-column fs-15 ps-2">
                                <li class="nav-item">
                                    <a href="#general" class="nav-link">General</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#integration" class="nav-link">Integration</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#payment" class="nav-link">Payment</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#shipping" class="nav-link">Shipping</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#return" class="nav-link">Return</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-9">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-3 anchor" id="general">General FAQ's</h4>
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                What is a session tracking dashboard?
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                A session tracking dashboard is a visual tool used to monitor and analyze user sessions on a website or application. It provides insights into user behavior, including their interactions, paths, and engagement patterns during their visits.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Why is session tracking important for a website or app?
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                For online stores, session tracking is essential to manage the contents of a user’s shopping cart. Without session tracking, the items in the cart could be lost as the user navigates through the site.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                What metrics can I track in a session tracking dashboard?
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                In a session tracking dashboard, you can track a variety of metrics to gain insights into user behavior, website performance, and overall user experience. Here are some key metrics you can monitor:
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                How can I use session tracking data to improve my website or app?
                                            </button>
                                        </h2>
                                        <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                Use scroll depth and time-on-page metrics to determine which content is engaging users the most. Focus on creating similar content or improving under performing pages.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                What are some common challenges with session tracking?
                                            </button>
                                        </h2>
                                        <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                Session tracking, while invaluable for understanding user behavior and optimizing website or app performance, comes with several challenges. One major issue is ensuring data privacy and compliance with regulations like GDPR and CCPA.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-3 anchor" id="integration">Integration</h4>
                                <div class="accordion" id="accordionExample2">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                                                How can I ensure data accuracy in my session tracking dashboard?
                                            </button>
                                        </h2>
                                        <div id="collapseSix" class="accordion-collapse collapse show" data-bs-parent="#accordionExample2">
                                            <div class="accordion-body">
                                                Set an appropriate session timeout period to avoid splitting a single session into multiple sessions or merging distinct sessions into one. Typically, a 30-minute timeout is standard, but this can be adjusted based on
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                                Can I track user sessions across multiple platforms and devices?
                                            </button>
                                        </h2>
                                        <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionExample2">
                                            <div class="accordion-body">
                                                Yes, you can track user sessions across multiple platforms and devices, but it requires implementing a few strategies and using the right tools to ensure accurate tracking. Here’s how you can achieve this:
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                                What is integration, and why is it important for our session tracking dashboard?
                                            </button>
                                        </h2>
                                        <div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionExample2">
                                            <div class="accordion-body">
                                                Session management involves managing requests between a user and web-based app or service. Learn about best practices of session management and the attacks
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                                Which systems or platforms can be integrated with our session tracking dashboard?
                                            </button>
                                        </h2>
                                        <div id="collapseNine" class="accordion-collapse collapse" data-bs-parent="#accordionExample2">
                                            <div class="accordion-body">
                                                Integrating your session tracking dashboard with various systems and platforms can provide a more comprehensive view of user behavior and streamline data management. Here are some commonly integrated systems and platforms
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                                Is technical expertise required to perform an integration?
                                            </button>
                                        </h2>
                                        <div id="collapseTen" class="accordion-collapse collapse" data-bs-parent="#accordionExample2">
                                            <div class="accordion-body">
                                                Session tracking, while invaluable for understanding user behavior and optimizing website or app performance, comes with several challenges. One major issue is ensuring data privacy and compliance with regulations like GDPR and CCPA.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-3 anchor" id="payment">Payment</h4>
                                <div class="accordion" id="accordionExample3">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleven" aria-expanded="true" aria-controls="collapseEleven">
                                                When will payment be processed for my order?
                                            </button>
                                        </h2>
                                        <div id="collapseEleven" class="accordion-collapse collapse show" data-bs-parent="#accordionExample3">
                                            <div class="accordion-body">
                                                Payment is processed during the checkout procedure when you finalize your order. A confirmation screen displaying the order number signifies that payment has been successfully completed.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                                                What is the process for payment on my order?
                                            </button>
                                        </h2>
                                        <div id="collapseTwelve" class="accordion-collapse collapse" data-bs-parent="#accordionExample3">
                                            <div class="accordion-body">
                                                We welcome payments via Visa®, MasterCard®, American Express®, and PayPal®. Rest assured, all information transmitted to our servers is encrypted, ensuring the utmost security for your credit card details.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
                                                What steps should I take if I encounter difficulties while placing an order?
                                            </button>
                                        </h2>
                                        <div id="collapseThirteen" class="accordion-collapse collapse" data-bs-parent="#accordionExample3">
                                            <div class="accordion-body">
                                                If you encounter any technical issues with our website, please reach out to us via our support portal. Alternatively, you can contact us toll-free at 1-000-000-000 or email us at order@companymail.com.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourteen" aria-expanded="false" aria-controls="collapseFourteen">
                                                Which license is required for an end product exclusively accessible to paying users?
                                            </button>
                                        </h2>
                                        <div id="collapseFourteen" class="accordion-collapse collapse" data-bs-parent="#accordionExample3">
                                            <div class="accordion-body">
                                                If you have paying users or you are developing any SaaS products then you need an Extended License. For each products, you need a license. You can get free lifetime updates as well.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFifteen" aria-expanded="false" aria-controls="collapseFifteen">
                                                How does billing work?
                                            </button>
                                        </h2>
                                        <div id="collapseFifteen" class="accordion-collapse collapse" data-bs-parent="#accordionExample3">
                                            <div class="accordion-body">
                                                Plans are per workspace, not per account. You can upgrade one workspace, and still have any number of free workspaces.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-3 anchor" id="shipping">Shipping</h4>
                                <div class="accordion" id="accordionExample4">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSixteen" aria-expanded="true" aria-controls="collapseSixteen">
                                                What is the shipping method for delivering my order?
                                            </button>
                                        </h2>
                                        <div id="collapseSixteen" class="accordion-collapse collapse show" data-bs-parent="#accordionExample4">
                                            <div class="accordion-body">
                                                For large items, we use a third-party logistics company to deliver your product, providing you with scheduled "room of choice" delivery service. For smaller items, we offer complimentary parcel delivery.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeventeen" aria-expanded="false" aria-controls="collapseSeventeen">
                                                How much does delivery for my order cost?
                                            </button>
                                        </h2>
                                        <div id="collapseSeventeen" class="accordion-collapse collapse" data-bs-parent="#accordionExample4">
                                            <div class="accordion-body">
                                                Scheduled delivery is priced at either $69 or $99 per order, depending on the destination postal code. Parcel delivery, on the other hand, is complimentary. </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEighteen" aria-expanded="false" aria-controls="collapseEighteen">
                                                What steps should I take if my product arrives in a damaged condition?
                                            </button>
                                        </h2>
                                        <div id="collapseEighteen" class="accordion-collapse collapse" data-bs-parent="#accordionExample4">
                                            <div class="accordion-body">
                                                We will swiftly replace any product damaged during transit. Simply reach out to our support team to inform us of the issue within 48 hours of the product's arrival. </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNineteen" aria-expanded="false" aria-controls="collapseNineteen">
                                                What steps must I take to commence selling?
                                            </button>
                                        </h2>
                                        <div id="collapseNineteen" class="accordion-collapse collapse" data-bs-parent="#accordionExample4">
                                            <div class="accordion-body">
                                                We will swiftly replace any product damaged during transit. Simply reach out to our support team to inform us of the issue within 48 hours of the product's arrival. </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwenty" aria-expanded="false" aria-controls="collapseTwenty">
                                                Can other info be added to an invoice?
                                            </button>
                                        </h2>
                                        <div id="collapseTwenty" class="accordion-collapse collapse" data-bs-parent="#accordionExample4">
                                            <div class="accordion-body">
                                                At the moment, the only way to add additional information to invoices is to add the information to the workspace's name manually.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-3 anchor" id="return">Return</h4>
                                <div class="accordion" id="accordionExample5">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwenty-one" aria-expanded="true" aria-controls="collapseTwenty-one">
                                                Is it possible for me to initiate a return for my product?
                                            </button>
                                        </h2>
                                        <div id="collapseTwenty-one" class="accordion-collapse collapse show" data-bs-parent="#accordionExample5">
                                            <div class="accordion-body">
                                                You may initiate a return for your product within 15 days of delivery by reaching out to our support team. All returned merchandise must be in its original packaging with all accompanying items intact.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwenty-two" aria-expanded="false" aria-controls="collapseTwenty-two">
                                                Is it possible to cancel my order?
                                            </button>
                                        </h2>
                                        <div id="collapseTwenty-two" class="accordion-collapse collapse" data-bs-parent="#accordionExample5">
                                            <div class="accordion-body">
                                                For scheduled delivery orders, cancellation is permissible up to 72 hours before your chosen delivery date for a full refund. Unfortunately, parcel delivery orders cannot be cancelled. Nevertheless, upon request, a free return label can be provided .
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwenty-three" aria-expanded="false" aria-controls="collapseTwenty-three">
                                                Where can I check the status of my return?
                                            </button>
                                        </h2>
                                        <div id="collapseTwenty-three" class="accordion-collapse collapse" data-bs-parent="#accordionExample5">
                                            <div class="accordion-body">
                                                Find the item in Your Orders Choose Return/Refund Status
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwenty-four" aria-expanded="false" aria-controls="collapseTwenty-four">
                                                What is the duration of the warranty?
                                            </button>
                                        </h2>
                                        <div id="collapseTwenty-four" class="accordion-collapse collapse" data-bs-parent="#accordionExample5">
                                            <div class="accordion-body">
                                                Find the item in Your Orders Choose Return/Refund Status
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwenty-five" aria-expanded="false" aria-controls="collapseTwenty-five">
                                                What is your cancellation policy?
                                            </button>
                                        </h2>
                                        <div id="collapseTwenty-five" class="accordion-collapse collapse" data-bs-parent="#accordionExample5">
                                            <div class="accordion-body">
                                                We understand that things change. You can cancel your plan at any time and we'll refund you the difference already paid.
                                            </div>
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