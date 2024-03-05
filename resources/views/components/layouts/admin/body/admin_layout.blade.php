<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Dashboard | Adminto - Tailwind HTML Admin Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Adminto - Tailwind HTML Admin Dashboard Template, A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
    <meta content="coderthemes" name="author">

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- App css -->
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css">

    <!-- Icons css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css">

    <!-- Theme Config Js -->
    <script src="assets/js/config.js"></script>
</head>

<body>

    <div class="flex wrapper">

        <!-- Menu -->
        <div class="app-menu">

            <!-- Sidenav Brand Logo -->
            <a href="index.html" class="logo-box">
                <!-- Light Brand Logo -->
                <div class="logo-light">
                    <img src="assets/images/logo-light.png" class="logo-lg" alt="Light logo">
                    <img src="assets/images/logo-sm.png" class="logo-sm" alt="Small logo">
                </div>

                <!-- Dark Brand Logo -->
                <div class="logo-dark">
                    <img src="assets/images/logo-dark.png" class="logo-lg" alt="Dark logo">
                    <img src="assets/images/logo-sm.png" class="logo-sm" alt="Small logo">
                </div>
            </a>



            <!--- Menu -->
            <div data-simplebar>
                <!-- User Box -->
                <div class="user-box relative text-center mt-5">
                    <img src="assets/images/users/user-1.jpg" alt="user-image" class="rounded-full h-14 w-14 p-1 border border-gray-300/30 mx-auto mb-3">
                    <div>
                        <button data-fc-type="dropdown" data-fc-placement="bottom" type="button" class="user-name text-[15px] font-medium mb-1.5">Nowak Helme</button>
                        <div class="fc-dropdown fc-dropdown-open:opacity-100 hidden opacity-0 w-40 z-50 transition-all duration-300 bg-white shadow-lg border rounded-lg p-2 border-gray-200 dark:border-gray-700 dark:bg-gray-800">

                            <!-- item-->
                            <a class="flex items-center py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-primary dark:text-gray-400 hover:text-white dark:hover:text-white" href="#">
                                <i data-lucide="user" class="w-4 h-4 me-2"></i>
                                <span>My Account</span>
                            </a>

                            <!-- item-->
                            <a class="flex items-center py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-primary dark:text-gray-400 hover:text-white dark:hover:text-white" href="#">
                                <i data-lucide="settings" class="w-4 h-4 me-2"></i>
                                <span>Settings</span>
                            </a>

                            <!-- item-->
                            <a class="flex items-center py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-primary dark:text-gray-400 hover:text-white dark:hover:text-white" href="#">
                                <i data-lucide="lock" class="w-4 h-4 me-2"></i>
                                <span>Lock Screen</span>
                            </a>

                            <!-- item-->
                            <a class="flex items-center py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-primary dark:text-gray-400 hover:text-white dark:hover:text-white" href="#">
                                <i data-lucide="log-out" class="w-4 h-4 me-2"></i>
                                <span>Logout</span>
                            </a>
                        </div>
                    </div>

                    <p class="user-name text-sm mb-3">Admin Head</p>

                    <div class="flex justify-center gap-2 mb-4">
                        <a href="#" class="user-name">
                            <i class="mdi mdi-cog text-base"></i>
                        </a>

                        <a href="#" class="user-name">
                            <i class="mdi mdi-power text-base"></i>
                        </a>
                    </div>
                </div>

                <ul class="menu" data-fc-type="accordion">
                    <li class="menu-title">Navigation</li>

                    <li class="menu-item">
                        <a href="index.html" class="menu-link">
                            <span class="menu-icon"><i class="mdi mdi-view-dashboard-outline"></i></span>
                            <span class="menu-text"> Dashboard </span>
                        </a>
                    </li>

                    <li class="menu-title">Apps</li>

                    <li class="menu-item">
                        <a href="apps-calendar.html" class="menu-link">
                            <span class="menu-icon"><i class="mdi mdi-calendar-blank-outline"></i></span>
                            <span class="menu-text"> Calendar </span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="apps-chat.html" class="menu-link">
                            <span class="menu-icon"><i class="mdi mdi-forum-outline"></i></span>
                            <span class="menu-text"> Chat </span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                            <span class="menu-icon"><i class="mdi mdi-email-outline"></i></span>
                            <span class="menu-text"> Email </span>
                            <span class="menu-arrow"></span>
                        </a>

                        <ul class="sub-menu hidden">
                            <li class="menu-item">
                                <a href="email-inbox.html" class="menu-link">
                                    <span class="menu-text">Inbox</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="email-templates.html" class="menu-link">
                                    <span class="menu-text">Email Templates</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu-item">
                        <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                            <span class="menu-icon"><i class="mdi mdi-clipboard-outline"></i></span>
                            <span class="menu-text"> Tasks </span>
                            <span class="menu-arrow"></span>
                        </a>

                        <ul class="sub-menu hidden">
                            <li class="menu-item">
                                <a href="task-kanban-board.html" class="menu-link">
                                    <span class="menu-text">Kanban Board</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="task-details.html" class="menu-link">
                                    <span class="menu-text">Details</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu-item">
                        <a href="apps-projects.html" class="menu-link">
                            <span class="menu-icon"><i class="mdi mdi-briefcase-variant-outline"></i></span>
                            <span class="menu-text"> Projects </span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                            <span class="menu-icon"><i class="mdi mdi-book-open-page-variant-outline"></i></span>
                            <span class="menu-text"> Contacts </span>
                            <span class="menu-arrow"></span>
                        </a>

                        <ul class="sub-menu hidden">
                            <li class="menu-item">
                                <a href="contacts-list.html" class="menu-link">
                                    <span class="menu-text">Members List</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="contacts-profile.html" class="menu-link">
                                    <span class="menu-text">Profile</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu-title">Custom</li>

                    <li class="menu-item">
                        <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                            <span class="menu-icon"><i class="mdi mdi-account-multiple-plus-outline"></i></span>
                            <span class="menu-text"> Auth Pages </span>
                            <span class="menu-arrow"></span>
                        </a>

                        <ul class="sub-menu hidden">
                            <li class="menu-item">
                                <a href="auth-login.html" class="menu-link">
                                    <span class="menu-text">Log In</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="auth-register.html" class="menu-link">
                                    <span class="menu-text">Register</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="auth-recoverpw.html" class="menu-link">
                                    <span class="menu-text">Recover Password</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="auth-lock-screen.html" class="menu-link">
                                    <span class="menu-text">Lock Screen</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="auth-confirm-mail.html" class="menu-link">
                                    <span class="menu-text">Confirm Mail</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="auth-logout.html" class="menu-link">
                                    <span class="menu-text">Logout</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu-item">
                        <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                            <span class="menu-icon"><i class="mdi mdi-file-multiple-outline"></i></span>
                            <span class="menu-text"> Extra Pages </span>
                            <span class="menu-arrow"></span>
                        </a>

                        <ul class="sub-menu hidden">
                            <li class="menu-item">
                                <a href="pages-starter.html" class="menu-link">
                                    <span class="menu-text">Starter</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="pages-pricing.html" class="menu-link">
                                    <span class="menu-text">Pricing</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="pages-timeline.html" class="menu-link">
                                    <span class="menu-text">Timeline</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="pages-invoice.html" class="menu-link">
                                    <span class="menu-text">Invoice</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="pages-faqs.html" class="menu-link">
                                    <span class="menu-text">FAQs</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="pages-gallery.html" class="menu-link">
                                    <span class="menu-text">Gallery</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="pages-404.html" class="menu-link">
                                    <span class="menu-text">Error 404</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="pages-500.html" class="menu-link">
                                    <span class="menu-text">Error 500</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="pages-maintenance.html" class="menu-link">
                                    <span class="menu-text">Maintenance</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="pages-coming-soon.html" class="menu-link">
                                    <span class="menu-text">Coming Soon</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu-item">
                        <a href="layouts-horizontal.html" class="menu-link" target="_blank">
                            <span class="menu-icon"><i class="mdi mdi-dock-window"></i></span>
                            <span class="menu-text"> Horizontal </span>
                        </a>
                    </li>

                    <li class="menu-title">Components</li>

                    <li class="menu-item">
                        <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                            <span class="menu-icon"><i class="mdi mdi-briefcase-outline"></i></span>
                            <span class="menu-text"> Base UI </span>
                            <span class="menu-arrow"></span>
                        </a>

                        <ul class="sub-menu hidden">
                            <li class="menu-item">
                                <a href="ui-buttons.html" class="menu-link">
                                    <span class="menu-text">Buttons</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-badges.html" class="menu-link">
                                    <span class="menu-text">Badges</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-cards.html" class="menu-link">
                                    <span class="menu-text">Cards</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-avatars.html" class="menu-link">
                                    <span class="menu-text">Avatars</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-tabs-accordions.html" class="menu-link">
                                    <span class="menu-text">Tabs & Accordions</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-modals.html" class="menu-link">
                                    <span class="menu-text">Modals</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-progress.html" class="menu-link">
                                    <span class="menu-text">Progress</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-notifications.html" class="menu-link">
                                    <span class="menu-text">Notifications</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-offcanvas.html" class="menu-link">
                                    <span class="menu-text">Offcanvas</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-placeholders.html" class="menu-link">
                                    <span class="menu-text">Placeholders</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-spinners.html" class="menu-link">
                                    <span class="menu-text">Spinners</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui.images.html" class="menu-link">
                                    <span class="menu-text">Images</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-swiper.html" class="menu-link">
                                    <span class="menu-text">Swiper</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-list-group.html" class="menu-link">
                                    <span class="menu-text">List Group</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-ratio.html" class="menu-link">
                                    <span class="menu-text">Embed Video</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-dropdowns.html" class="menu-link">
                                    <span class="menu-text">Dropdowns</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-tooltips-popovers.html" class="menu-link">
                                    <span class="menu-text">Tooltips & Popovers</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-typography.html" class="menu-link">
                                    <span class="menu-text">Typography</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu-item">
                        <a href="widgets.html" class="menu-link">
                            <span class="menu-icon"><i class="mdi mdi-gift-outline"></i></span>
                            <span class="menu-text"> Widgets </span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                            <span class="menu-icon"><i class="mdi mdi-layers-outline"></i></span>
                            <span class="menu-text"> Extended UI </span>
                            <span class="menu-arrow"></span>
                        </a>

                        <ul class="sub-menu hidden">
                            <li class="menu-item">
                                <a href="extended-range-slider.html" class="menu-link">
                                    <span class="menu-text">Range Slider</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="extended-sweet-alert.html" class="menu-link">
                                    <span class="menu-text">Sweet Alert</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="extended-draggable-cards.html" class="menu-link">
                                    <span class="menu-text">Draggable Cards</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="extended-tour.html" class="menu-link">
                                    <span class="menu-text">Tour Page</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="extended-treeview.html" class="menu-link">
                                    <span class="menu-text">Tree View</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu-item">
                        <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                            <span class="menu-icon"><i class="mdi mdi-shield-outline"></i></span>
                            <span class="menu-text"> Icons </span>
                            <span class="menu-arrow"></span>
                        </a>

                        <ul class="sub-menu hidden">
                            <li class="menu-item">
                                <a href="icons-material-design.html" class="menu-link">
                                    <span class="menu-text">Material Design</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="icons-material-symbols.html" class="menu-link">
                                    <span class="menu-text">Material Symbols</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="icons-lucide.html" class="menu-link">
                                    <span class="menu-text">Lucide Icons</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="icons-font-awesome.html" class="menu-link">
                                    <span class="menu-text">Font Awesome 5</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu-item">
                        <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                            <span class="menu-icon"><i class="mdi mdi-texture"></i></span>
                            <span class="menu-text"> Forms </span>
                            <span class="menu-arrow"></span>
                        </a>

                        <ul class="sub-menu hidden">
                            <li class="menu-item">
                                <a href="forms-elements.html" class="menu-link">
                                    <span class="menu-text">General Elements</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="forms-advanced.html" class="menu-link">
                                    <span class="menu-text">Advanced</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="forms-validation.html" class="menu-link">
                                    <span class="menu-text">Validation</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="forms-wizard.html" class="menu-link">
                                    <span class="menu-text">Wizard</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="forms-quilljs-editor.html" class="menu-link">
                                    <span class="menu-text">Quilljs Editor</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="forms-picker.html" class="menu-link">
                                    <span class="menu-text">Picker</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="forms-file-uploads.html" class="menu-link">
                                    <span class="menu-text">File Uploads</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu-item">
                        <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                            <span class="menu-icon"> <i class="mdi mdi-table"></i></span>
                            <span class="menu-text"> Tables </span>
                            <span class="menu-arrow"></span>
                        </a>

                        <ul class="sub-menu hidden">
                            <li class="menu-item">
                                <a href="tables-basic.html" class="menu-link">
                                    <span class="menu-text">Basic Tables</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="tables-datatables.html" class="menu-link">
                                    <span class="menu-text">Data Tables</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="tables-editable.html" class="menu-link">
                                    <span class="menu-text">Editable Tables</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="tables-tablesaw.html" class="menu-link">
                                    <span class="menu-text">Tablesaw Tables</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu-item">
                        <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                            <span class="menu-icon"> <i class="mdi mdi-equalizer"></i></span>
                            <span class="menu-text"> Apex Charts </span>
                            <span class="menu-arrow"></span>
                        </a>

                        <ul class="sub-menu hidden">
                            <li class="menu-item">
                                <a href="charts-apex-area.html" class="menu-link">
                                    <span class="menu-text">Area</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="charts-apex-bar.html" class="menu-link">
                                    <span class="menu-text">Bar</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="charts-apex-bubble.html" class="menu-link">
                                    <span class="menu-text">Bubble</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="charts-apex-candlestick.html" class="menu-link">
                                    <span class="menu-text">Candlestick</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="charts-apex-column.html" class="menu-link">
                                    <span class="menu-text">Column</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="charts-apex-heatmap.html" class="menu-link">
                                    <span class="menu-text">Heatmap</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="charts-apex-line.html" class="menu-link">
                                    <span class="menu-text">Line</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="charts-apex-mixed.html" class="menu-link">
                                    <span class="menu-text">Mixed</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="charts-apex-timeline.html" class="menu-link">
                                    <span class="menu-text">Timeline</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="charts-apex-boxplot.html" class="menu-link">
                                    <span class="menu-text">Boxplot</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="charts-apex-treemap.html" class="menu-link">
                                    <span class="menu-text">Treemap</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="charts-apex-pie.html" class="menu-link">
                                    <span class="menu-text">Pie</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="charts-apex-radar.html" class="menu-link">
                                    <span class="menu-text">Radar</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="charts-apex-radialbar.html" class="menu-link">
                                    <span class="menu-text">Radialbar</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="charts-apex-scatter.html" class="menu-link">
                                    <span class="menu-text">Scatter</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="charts-apex-polar-area.html" class="menu-link">
                                    <span class="menu-text">Polar Area</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="charts-apex-sparklines.html" class="menu-link">
                                    <span class="menu-text">Sparklines</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu-item">
                        <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                            <span class="menu-icon"> <i class="mdi mdi-chart-donut-variant"></i></span>
                            <span class="menu-text"> Chartsjs </span>
                            <span class="menu-arrow"></span>
                        </a>

                        <ul class="sub-menu hidden">
                            <li class="menu-item">
                                <a href="charts-chartjs-area.html" class="menu-link">
                                    <span class="menu-text">Area</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="charts-chartjs-bar.html" class="menu-link">
                                    <span class="menu-text">Bar</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="charts-chartjs-line.html" class="menu-link">
                                    <span class="menu-text">Line</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="charts-chartjs-other.html" class="menu-link">
                                    <span class="menu-text">Other</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu-item">
                        <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                            <span class="menu-icon"><i class="mdi mdi-map"></i></span>
                            <span class="menu-text"> Maps </span>
                            <span class="menu-arrow"></span>
                        </a>

                        <ul class="sub-menu hidden">
                            <li class="menu-item">
                                <a href="maps-google.html" class="menu-link">
                                    <span class="menu-text">Google Maps</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="maps-vector.html" class="menu-link">
                                    <span class="menu-text">Vector Maps</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Sidenav Menu End  -->
        

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="page-content">

            <!-- Topbar Start -->
            <header class="app-header">
                <div class="flex items-center px-6 gap-3">
                    <!-- Brand Logo -->
                    <a href="index.html" class="logo-box">
                        <!-- Light Brand Logo -->
                        <div class="logo-light">
                            <img src="assets/images/logo-light.png" class="logo-lg" alt="Light logo">
                            <img src="assets/images/logo-sm.png" class="logo-sm" alt="Small logo">
                        </div>

                        <!-- Dark Brand Logo -->
                        <div class="logo-dark">
                            <img src="assets/images/logo-dark.png" class="logo-lg" alt="Dark logo">
                            <img src="assets/images/logo-sm.png" class="logo-sm" alt="Small logo">
                        </div>
                    </a>

                    <!-- Sidenav Menu Toggle Button -->
                    <button id="button-toggle-menu" class="nav-link p-2">
                        <span class="sr-only">Menu Toggle Button</span>
                        <span class="flex items-center justify-center h-6 w-6">
                            <i data-lucide="menu" class="w-6 h-6 text-xl"></i>
                        </span>
                    </button>

                    <!-- Page Title -->
                    <div class="me-auto">
                        <div class="md:flex hidden">
                            <h4 class="page-title text-lg">Dashboard</h4>
                        </div>
                    </div>

                    <div class="md:flex hidden items-center relative">
                        <div class="absolute inset-y-0 end-0 flex items-center pe-3 pointer-events-none">
                            <i class="mdi mdi-magnify text-base opacity-60 -z-10"></i>
                        </div>
                        <input type="search" class="form-input pe-8 ps-4 rounded-full bg-gray-500/10 border-transparent focus:border-transparent placeholder:opacity-60" placeholder="Search...">
                    </div>

                    <!-- Light/Dark Toggle Button -->
                    <div class="flex">
                        <button id="light-dark-mode" type="button" class="nav-link p-2">
                            <span class="sr-only">Light/Dark Mode</span>
                            <span class="flex items-center justify-center h-6 w-6">
                                <i data-lucide="moon" class="block dark:hidden"></i>
                                <i data-lucide="sun" class="hidden dark:block"></i>
                            </span>
                        </button>
                    </div>

                    <!-- Notification Bell Button -->
                    <div class="relative md:flex hidden">
                        <button data-fc-type="dropdown" data-fc-placement="bottom-end" type="button" class="nav-link p-2">
                            <span class="sr-only">View notifications</span>
                            <span class="flex items-center justify-center h-6 w-6">
                                <i data-lucide="bell"></i>
                                <span class="absolute top-3 end-1.5 w-4 h-4 flex items-center justify-center rounded-full bg-danger text-white  font-medium text-[10px]">9</span>
                            </span>
                        </button>
                        <div class="fc-dropdown fc-dropdown-open:opacity-100 hidden opacity-0 w-80 z-50 transition-[margin,opacity] duration-300 bg-white dark:bg-gray-800 shadow-lg border border-gray-200 dark:border-gray-700 rounded-lg">

                            <div class="p-4">
                                <div class="flex items-center justify-between">
                                    <h6 class="text-sm"> Notification</h6>
                                    <a href="javascript: void(0);" class="text-gray-500">
                                        <small>Clear All</small>
                                    </a>
                                </div>
                            </div>

                            <div class="p-4 h-80" data-simplebar>
                                <h5 class="text-xs text-gray-500 dark:text-gray-300 mb-2">Today</h5>

                                <a href="javascript:void(0);" class="block mb-4">
                                    <div class="card-body">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0">
                                                <div class="flex justify-center items-center h-9 w-9 rounded-full bg text-white bg-primary">
                                                    <i class="mdi mdi-comment-account-outline text-lg"></i>
                                                </div>
                                            </div>
                                            <div class="flex-grow truncate ms-2">
                                                <h5 class="text-sm font-semibold mb-1">Datacorp <small class="font-normal text-gray-500 ms-1">1 min ago</small></h5>
                                                <small class="noti-item-subtitle text-muted">Caleb Flakelar commented on Admin</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a href="javascript:void(0);" class="block mb-4">
                                    <div class="card-body">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0">
                                                <div class="flex justify-center items-center h-9 w-9 rounded-full bg-info text-white">
                                                    <i class="mdi mdi-heart text-lg"></i>
                                                </div>
                                            </div>
                                            <div class="flex-grow truncate ms-2">
                                                <h5 class="text-sm font-semibold mb-1">Admin <small class="font-normal text-gray-500 ms-1">1 hr ago</small></h5>
                                                <small class="noti-item-subtitle text-muted">New user registered</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a href="javascript:void(0);" class="block mb-4">
                                    <div class="card-body">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0">
                                                <img src="assets/images/users/avatar-2.jpg" class="rounded-full h-9 w-9" alt="">
                                            </div>
                                            <div class="flex-grow truncate ms-2">
                                                <h5 class="text-sm font-semibold mb-1">Cristina Pride <small class="font-normal text-gray-500 ms-1">1 day ago</small></h5>
                                                <small class="noti-item-subtitle text-muted">Hi, How are you? What about our next meeting</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <h5 class="text-xs text-gray-500 mb-2">Yesterday</h5>

                                <a href="javascript:void(0);" class="block mb-4">
                                    <div class="card-body">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0">
                                                <div class="flex justify-center items-center h-9 w-9 rounded-full bg-primary text-white">
                                                    <i class="mdi mdi-account-plus text-lg"></i>
                                                </div>
                                            </div>
                                            <div class="flex-grow truncate ms-2">
                                                <h5 class="text-sm font-semibold mb-1">Datacorp</h5>
                                                <small class="noti-item-subtitle text-muted">Caleb Flakelar commented on Admin</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a href="javascript:void(0);" class="block">
                                    <div class="card-body">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0">
                                                <img src="assets/images/users/avatar-4.jpg" class="rounded-full h-9 w-9" alt="">
                                            </div>
                                            <div class="flex-grow truncate ms-2">
                                                <h5 class="text-sm font-semibold mb-1">Karen Robinson</h5>
                                                <small class="noti-item-subtitle text-muted">Wow ! this admin looks good and awesome design</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <a href="javascript:void(0);" class="p-2 border-t border-dashed border-gray-200 dark:border-gray-700 block text-center text-primary underline font-semibold">
                                View All
                            </a>
                        </div>
                    </div>

                    <!-- Profile Dropdown Button -->
                    <div class="relative">
                        <button data-fc-type="dropdown" data-fc-placement="bottom-end" type="button" class="nav-link flex items-center">
                            <img src="assets/images/users/user-1.jpg" alt="user-image" class="rounded-full h-8 w-8">
                            <span class="text-sm mx-2">Nowak</span>
                            <i class="mdi mdi-chevron-down"></i>
                        </button>
                        <div class="fc-dropdown fc-dropdown-open:opacity-100 hidden opacity-0 w-44 z-50 transition-[margin,opacity] duration-300 bg-white shadow-lg border rounded py-2 border-gray-200 dark:border-gray-700 dark:bg-gray-800">
                            <h6 class="py-2 px-5">Welcome !</h6>

                            <a class="flex items-center py-2 px-5 text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="pages-gallery.html">
                                <i data-lucide="user" class="w-4 h-4 me-2"></i>
                                <span>My Account</span>
                            </a>
                            <a class="flex items-center py-2 px-5 text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="apps-kanban.html">
                                <i data-lucide="settings" class="w-4 h-4 me-2"></i>
                                <span>Settings</span>
                            </a>
                            <a class="flex items-center py-2 px-5 text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="auth-login.html">
                                <i data-lucide="lock" class="w-4 h-4 me-2"></i>
                                <span>Lock Screen</span>
                            </a>
                            <hr class="my-2 -mx-2 border-gray-200 dark:border-gray-700">
                            <a class="flex items-center py-2 px-5 text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="auth-login.html">
                                <i data-lucide="log-out" class="w-4 h-4 me-2"></i>
                                <span>Logout</span>
                            </a>
                        </div>
                    </div>

                    <!-- Customization Button -->
                    <div class="flex">
                        <button type="button" class="nav-link p-2" data-fc-type="offcanvas" data-fc-target="theme-customization" data-fc-scroll="true" >
                            <span class="sr-only">Customization Button</span>
                            <span class="flex items-center justify-center h-6 w-6">
                                <i data-lucide="settings"></i>
                            </span>
                        </button>
                    </div>
                </div>
            </header>
            <!-- Topbar End -->

            <main class="p-6">

                <div class="flex flex-col gap-6">

                    <div class="grid xl:grid-cols-4 sm:grid-cols-2 grid-cols-1 gap-6">
                        <div class="card">
                            <div class="p-6">
                                <div class="flex items-center justify-between mb-11">
                                    <h4 class="card-title">Total Revenue</h4>

                                    <div class="z-10">
                                        <button data-fc-target="dropdown-target1" data-fc-type="dropdown" type="button" data-fc-placement="bottom-end">
                                            <i class="mdi mdi-dots-vertical text-xl"></i>
                                        </button>

                                        <div id="dropdown-target1" class="hidden bg-white shadow rounded border dark:border-slate-700 fc-dropdown-open:translate-y-0 translate-y-3 origin-center transition-all duration-300 py-2 dark:bg-gray-800">
                                            <a class="flex items-center py-1.5 px-5 text-sm transition-all duration-300 bg-transparent text-gray-800 dark:text-white hover:bg-stone-100 dark:hover:bg-slate-700 dark:hover:text-gray-200" href="javascript:void(0)">
                                                Action
                                            </a>
                                            <a class="flex items-center py-1.5 px-5 text-sm transition-all duration-300 bg-transparent text-gray-800 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="javascript:void(0)">
                                                Another action
                                            </a>
                                            <a class="flex items-center py-1.5 px-5 text-sm transition-all duration-300 bg-transparent text-gray-800 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="javascript:void(0)">
                                                Something else
                                            </a>
                                            <a class="flex items-center py-1.5 px-5 text-sm transition-all duration-300 bg-transparent text-gray-800 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="javascript:void(0)">
                                                Separated link
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex items-center justify-between">
                                    <div dir="ltr">
                                        <input data-plugin="knob" data-width="70" data-height="70" data-fgColor="#f05050 " data-bgColor="#F9B9B9" value="58" data-skin="tron" data-angleOffset="180" data-readOnly=true data-thickness=".15" />
                                    </div>

                                    <div class="text-end">
                                        <h2 class="text-3xl font-normal text-gray-800 dark:text-white mb-1"> 256 </h2>
                                        <p class="text-gray-400 font-normal">Revenue today</p>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- card-end -->

                        <div class="card">
                            <div class="p-6">
                                <div class="flex items-center justify-between mb-6">
                                    <h4 class="card-title">Sales Analytics</h4>

                                    <div>
                                        <button data-fc-target="dropdown-target2" data-fc-type="dropdown" type="button" data-fc-placement="bottom-end">
                                            <i class="mdi mdi-dots-vertical text-xl"></i>
                                        </button>

                                        <div id="dropdown-target2" class="hidden bg-white shadow rounded border dark:border-slate-700 fc-dropdown-open:translate-y-0 translate-y-3 origin-center transition-all duration-300 py-2 dark:bg-gray-800">
                                            <a class="flex items-center py-1.5 px-5 text-sm transition-all duration-300 bg-transparent text-gray-800 dark:text-white hover:bg-stone-100 dark:hover:bg-slate-700 dark:hover:text-gray-200" href="javascript:void(0)">
                                                Action
                                            </a>
                                            <a class="flex items-center py-1.5 px-5 text-sm transition-all duration-300 bg-transparent text-gray-800 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="javascript:void(0)">
                                                Another action
                                            </a>
                                            <a class="flex items-center py-1.5 px-5 text-sm transition-all duration-300 bg-transparent text-gray-800 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="javascript:void(0)">
                                                Something else
                                            </a>
                                            <a class="flex items-center py-1.5 px-5 text-sm transition-all duration-300 bg-transparent text-gray-800 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="javascript:void(0)">
                                                Separated link
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex items-center justify-between">
                                    <div class="bg-success text-white rounded-full text-xs px-2 py-0.5">32% <i class="mdi mdi-trending-up"></i></div>

                                    <div class="text-end">
                                        <h2 class="text-3xl font-normal text-gray-800 dark:text-white mb-1"> 8451 </h2>
                                        <p class="text-gray-400 font-normal">Revenue today</p>
                                    </div>

                                </div>

                                <div class="flex w-full h-[5px] bg-gray-200 rounded-full overflow-hidden dark:bg-gray-700 mt-6">
                                    <div class="flex flex-col justify-center overflow-hidden bg-success" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    <div class="flex flex-col justify-center overflow-hidden bg-success/10" role="progressbar" style="width: 25%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div> <!-- card-end -->

                        <div class="card">
                            <div class="p-6">
                                <div class="flex items-center justify-between mb-11">
                                    <h4 class="card-title">Statistics</h4>

                                    <div class="z-10">
                                        <button data-fc-target="dropdown-target3" data-fc-type="dropdown" type="button" data-fc-placement="bottom-end">
                                            <i class="mdi mdi-dots-vertical text-xl"></i>
                                        </button>

                                        <div id="dropdown-target3" class="hidden bg-white shadow rounded border dark:border-slate-700 fc-dropdown-open:translate-y-0 translate-y-3 origin-center transition-all duration-300 py-2 dark:bg-gray-800">
                                            <a class="flex items-center py-1.5 px-5 text-sm transition-all duration-300 bg-transparent text-gray-800 dark:text-white hover:bg-stone-100 dark:hover:bg-slate-700 dark:hover:text-gray-200" href="javascript:void(0)">
                                                Action
                                            </a>
                                            <a class="flex items-center py-1.5 px-5 text-sm transition-all duration-300 bg-transparent text-gray-800 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="javascript:void(0)">
                                                Another action
                                            </a>
                                            <a class="flex items-center py-1.5 px-5 text-sm transition-all duration-300 bg-transparent text-gray-800 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="javascript:void(0)">
                                                Something else
                                            </a>
                                            <a class="flex items-center py-1.5 px-5 text-sm transition-all duration-300 bg-transparent text-gray-800 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="javascript:void(0)">
                                                Separated link
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex items-center justify-between">
                                    <div class="widget-chart-box-1" dir="ltr">
                                        <input data-plugin="knob" data-width="70" data-height="70" data-fgColor="#ffbd4a" data-bgColor="#FFE6BA" value="80" data-skin="tron" data-angleOffset="180" data-readOnly=true data-thickness=".15" />
                                    </div>

                                    <div class="text-end">
                                        <h2 class="text-3xl font-normal text-gray-800 dark:text-white mb-1"> 4569 </h2>
                                        <p class="text-gray-400 font-normal">Revenue today</p>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- card-end -->

                        <div class="card">
                            <div class="p-6">
                                <div class="flex items-center justify-between mb-6">
                                    <h4 class="card-title">Daily Sales</h4>

                                    <div>
                                        <button data-fc-target="dropdown-target4" data-fc-type="dropdown" type="button" data-fc-placement="bottom-end">
                                            <i class="mdi mdi-dots-vertical text-xl"></i>
                                        </button>

                                        <div id="dropdown-target4" class="hidden bg-white shadow rounded border dark:border-slate-700 fc-dropdown-open:translate-y-0 translate-y-3 origin-center transition-all duration-300 py-2 dark:bg-gray-800">
                                            <a class="flex items-center py-1.5 px-5 text-sm transition-all duration-300 bg-transparent text-gray-800 dark:text-white hover:bg-stone-100 dark:hover:bg-slate-700 dark:hover:text-gray-200" href="javascript:void(0)">
                                                Action
                                            </a>
                                            <a class="flex items-center py-1.5 px-5 text-sm transition-all duration-300 bg-transparent text-gray-800 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="javascript:void(0)">
                                                Another action
                                            </a>
                                            <a class="flex items-center py-1.5 px-5 text-sm transition-all duration-300 bg-transparent text-gray-800 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="javascript:void(0)">
                                                Something else
                                            </a>
                                            <a class="flex items-center py-1.5 px-5 text-sm transition-all duration-300 bg-transparent text-gray-800 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="javascript:void(0)">
                                                Separated link
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex items-center justify-between">
                                    <div class="bg-pink text-white rounded-full text-xs px-2 py-0.5">32% <i class="mdi mdi-trending-up"></i></div>

                                    <div class="text-end">
                                        <h2 class="text-3xl font-normal text-gray-800 dark:text-white mb-1"> 158 </h2>
                                        <p class="text-gray-400 font-normal">Revenue today</p>
                                    </div>

                                </div>

                                <div class="flex w-full h-[5px] bg-gray-200 rounded-full overflow-hidden dark:bg-gray-700 mt-6">
                                    <div class="flex flex-col justify-center overflow-hidden bg-pink" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    <div class="flex flex-col justify-center overflow-hidden bg-pink/10" role="progressbar" style="width: 25%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div> <!-- card-end -->
                    </div> <!-- grid-end -->

                    <div class="grid xl:grid-cols-3 grid-cols-1 gap-6">
                        <div class="card">
                            <div class="p-6">
                                <div class="flex items-center justify-between mb-6">
                                    <h4 class="card-title">Daily Sales</h4>

                                    <div class="z-10">
                                        <button data-fc-target="dropdown-target7" data-fc-type="dropdown" type="button" data-fc-placement="bottom-end">
                                            <i class="mdi mdi-dots-vertical text-xl"></i>
                                        </button>

                                        <div id="dropdown-target7" class="hidden bg-white shadow rounded border dark:border-slate-700 fc-dropdown-open:translate-y-0 translate-y-3 origin-center transition-all duration-300 py-2 dark:bg-gray-800">
                                            <a class="flex items-center py-1.5 px-5 text-sm transition-all duration-300 bg-transparent text-gray-800 dark:text-white hover:bg-stone-100 dark:hover:bg-slate-700 dark:hover:text-gray-200" href="javascript:void(0)">
                                                Action
                                            </a>
                                            <a class="flex items-center py-1.5 px-5 text-sm transition-all duration-300 bg-transparent text-gray-800 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="javascript:void(0)">
                                                Another action
                                            </a>
                                            <a class="flex items-center py-1.5 px-5 text-sm transition-all duration-300 bg-transparent text-gray-800 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="javascript:void(0)">
                                                Something else
                                            </a>
                                            <a class="flex items-center py-1.5 px-5 text-sm transition-all duration-300 bg-transparent text-gray-800 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="javascript:void(0)">
                                                Separated link
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="widget-chart text-center">
                                    <div id="morris-donut-example" dir="ltr" style="height: 245px;" class="morris-chart"></div>
                                    <ul class="list-inline chart-detail-list mb-0">
                                        <li class="list-inline-item">
                                            <h5 style="color: #ff8acc;"><i class="fa fa-circle me-1"></i>Series A</h5>
                                        </li>
                                        <li class="list-inline-item">
                                            <h5 style="color: #5b69bc;"><i class="fa fa-circle me-1"></i>Series B</h5>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div> <!-- card-end -->

                        <div class="card">
                            <div class="p-6">
                                <div class="flex items-center justify-between mb-6">
                                    <h4 class="card-title">Statistics</h4>

                                    <div class="z-10">
                                        <button data-fc-target="dropdown-target8" data-fc-type="dropdown" type="button" data-fc-placement="bottom-end">
                                            <i class="mdi mdi-dots-vertical text-xl"></i>
                                        </button>

                                        <div id="dropdown-target8" class="hidden bg-white shadow rounded border dark:border-slate-700 fc-dropdown-open:translate-y-0 translate-y-3 origin-center transition-all duration-300 py-2 dark:bg-gray-800">
                                            <a class="flex items-center py-1.5 px-5 text-sm transition-all duration-300 bg-transparent text-gray-800 dark:text-white hover:bg-stone-100 dark:hover:bg-slate-700 dark:hover:text-gray-200" href="javascript:void(0)">
                                                Action
                                            </a>
                                            <a class="flex items-center py-1.5 px-5 text-sm transition-all duration-300 bg-transparent text-gray-800 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="javascript:void(0)">
                                                Another action
                                            </a>
                                            <a class="flex items-center py-1.5 px-5 text-sm transition-all duration-300 bg-transparent text-gray-800 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="javascript:void(0)">
                                                Something else
                                            </a>
                                            <a class="flex items-center py-1.5 px-5 text-sm transition-all duration-300 bg-transparent text-gray-800 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="javascript:void(0)">
                                                Separated link
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div id="morris-bar-example" dir="ltr" style="height: 280px;" class="morris-chart"></div>
                            </div>
                        </div> <!-- card-end -->

                        <div class="card">
                            <div class="p-6">
                                <div class="flex items-center justify-between mb-6">
                                    <h4 class="card-title">Total Revenue</h4>

                                    <div class="z-10">
                                        <button data-fc-target="dropdown-target9" data-fc-type="dropdown" type="button" data-fc-placement="bottom-end">
                                            <i class="mdi mdi-dots-vertical text-xl"></i>
                                        </button>

                                        <div id="dropdown-target9" class="hidden bg-white shadow rounded border dark:border-slate-700 fc-dropdown-open:translate-y-0 translate-y-3 origin-center transition-all duration-300 py-2 dark:bg-gray-800">
                                            <a class="flex items-center py-1.5 px-5 text-sm transition-all duration-300 bg-transparent text-gray-800 dark:text-white hover:bg-stone-100 dark:hover:bg-slate-700 dark:hover:text-gray-200" href="javascript:void(0)">
                                                Action
                                            </a>
                                            <a class="flex items-center py-1.5 px-5 text-sm transition-all duration-300 bg-transparent text-gray-800 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="javascript:void(0)">
                                                Another action
                                            </a>
                                            <a class="flex items-center py-1.5 px-5 text-sm transition-all duration-300 bg-transparent text-gray-800 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="javascript:void(0)">
                                                Something else
                                            </a>
                                            <a class="flex items-center py-1.5 px-5 text-sm transition-all duration-300 bg-transparent text-gray-800 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="javascript:void(0)">
                                                Separated link
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div id="morris-line-example" dir="ltr" style="height: 280px;" class="morris-chart"></div>
                            </div>
                        </div> <!-- card-end -->
                    </div> <!-- grid-end -->

                    <div class="grid xl:grid-cols-4 sm:grid-cols-2 grid-cols-1 gap-6">
                        <div class="card">
                            <div class="p-6">
                                <div class="flex items-center gap-6">
                                    <img src="assets/images/users/user-3.jpg" class="rounded-full h-16" alt="user">

                                    <div class="flex-grow overflow-hidden">
                                        <h5 class="text-gray-800 dark:text-white mb-1">Chadengle</h5>
                                        <p class="mb-2 text-gray-400 font-normal truncate">coderthemes@gmail.com</p>
                                        <p class="text-warning font-semibold text-sm">Admin</p>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- card-end -->

                        <div class="card">
                            <div class="p-6">
                                <div class="flex items-center gap-6">
                                    <img src="assets/images/users/user-2.jpg" class="rounded-full h-16" alt="user">

                                    <div class="flex-grow overflow-hidden">
                                        <h5 class="text-gray-800 dark:text-white mb-1"> Michael Zenaty</h5>
                                        <p class="mb-2 text-gray-400 font-normal truncate">coderthemes@gmail.com</p>
                                        <p class="text-pink font-semibold text-sm">Support Lead</p>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- card-end -->

                        <div class="card">
                            <div class="p-6">
                                <div class="flex items-center gap-6">
                                    <img src="assets/images/users/user-1.jpg" class="rounded-full h-16" alt="user">

                                    <div class="flex-grow overflow-hidden">
                                        <h5 class="text-gray-800 dark:text-white mb-1">Still david</h5>
                                        <p class="mb-2 text-gray-400 font-normal truncate">coderthemes@gmail.com</p>
                                        <p class="text-success font-semibold text-sm">Designer</p>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- card-end -->

                        <div class="card">
                            <div class="p-6">
                                <div class="flex items-center gap-6">
                                    <img src="assets/images/users/user-10.jpg" class="rounded-full h-16" alt="user">

                                    <div class="flex-grow overflow-hidden">
                                        <h5 class="text-gray-800 dark:text-white mb-1">Tomaslau</h5>
                                        <p class="mb-2 text-gray-400 font-normal truncate">coderthemes@gmail.com</p>
                                        <p class="text-info font-semibold text-sm">Developer</p>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- card-end -->
                    </div> <!-- grid-end -->

                    <div class="grid xl:grid-cols-3 grid-cols-1 gap-6">
                        <div class="card">
                            <div class="p-6">

                                <div class="flex items-center justify-between mb-6">
                                    <h4 class="card-title">Inbox</h4>

                                    <div>
                                        <button data-fc-target="dropdown-target5" data-fc-type="dropdown" type="button" data-fc-placement="bottom-end">
                                            <i class="mdi mdi-dots-vertical text-xl"></i>
                                        </button>

                                        <div id="dropdown-target5" class="hidden bg-white shadow rounded border dark:border-slate-700 fc-dropdown-open:translate-y-0 translate-y-3 origin-center transition-all duration-300 py-2 dark:bg-gray-800">
                                            <a class="flex items-center py-1.5 px-5 text-sm transition-all duration-300 bg-transparent text-gray-800 dark:text-white hover:bg-stone-100 dark:hover:bg-slate-700 dark:hover:text-gray-200" href="javascript:void(0)">
                                                Action
                                            </a>
                                            <a class="flex items-center py-1.5 px-5 text-sm transition-all duration-300 bg-transparent text-gray-800 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="javascript:void(0)">
                                                Another action
                                            </a>
                                            <a class="flex items-center py-1.5 px-5 text-sm transition-all duration-300 bg-transparent text-gray-800 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="javascript:void(0)">
                                                Something else
                                            </a>
                                            <a class="flex items-center py-1.5 px-5 text-sm transition-all duration-300 bg-transparent text-gray-800 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="javascript:void(0)">
                                                Separated link
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex flex-col gap-4">
                                    <a href="#" class="flex justify-between gap-6">
                                        <div class="flex items-center gap-4">
                                            <img src="assets/images/users/user-1.jpg" class="rounded-full h-10" alt="">
                                            <div>
                                                <h5 class="text-gray-800 dark:text-white text-sm mb-1">Chadengle</h5>
                                                <p class="text-xs text-gray-400">Hey! there I'm available...</p>
                                            </div>
                                        </div>
                                        <p class="text-xs text-gray-400">13:40 PM</p>
                                    </a>

                                    <div class="border-b dark:border-gray-700 border-gray-50"></div>

                                    <a href="#" class="flex justify-between gap-6">
                                        <div class="flex items-center gap-4">
                                            <img src="assets/images/users/user-2.jpg" class="rounded-full h-10" alt="">
                                            <div>
                                                <h5 class="text-gray-800 dark:text-white text-sm mb-1">Tomaslau</h5>
                                                <p class="text-xs text-gray-400">I've finished it! See you so...</p>
                                            </div>
                                        </div>
                                        <p class="text-xs text-gray-400">13:34 PM</p>
                                    </a>

                                    <div class="border-b dark:border-gray-700 border-gray-50"></div>

                                    <a href="#" class="flex justify-between gap-6">
                                        <div class="flex items-center gap-4">
                                            <img src="assets/images/users/user-3.jpg" class="rounded-full h-10" alt="">
                                            <div>
                                                <h5 class="text-gray-800 dark:text-white text-sm mb-1">Still david</h5>
                                                <p class="text-xs text-gray-400">This theme is awesome!</p>
                                            </div>
                                        </div>
                                        <p class="text-xs text-gray-400">13:17 PM</p>
                                    </a>

                                    <div class="border-b dark:border-gray-700 border-gray-50"></div>

                                    <a href="#" class="flex justify-between gap-6">
                                        <div class="flex items-center gap-4">
                                            <img src="assets/images/users/user-4.jpg" class="rounded-full h-10" alt="">
                                            <div>
                                                <h5 class="text-gray-800 dark:text-white text-sm mb-1">Kurafire</h5>
                                                <p class="text-xs text-gray-400">Nice to meet you</p>
                                            </div>
                                        </div>
                                        <p class="text-xs text-gray-400">12:20 PM</p>
                                    </a>

                                    <div class="border-b dark:border-gray-700 border-gray-50"></div>

                                    <a href="#" class="flex justify-between gap-6">
                                        <div class="flex items-center gap-4">
                                            <img src="assets/images/users/user-5.jpg" class="rounded-full h-10" alt="">
                                            <div>
                                                <h5 class="text-gray-800 dark:text-white text-sm mb-1">Shahedk</h5>
                                                <p class="text-xs text-gray-400">Hey! there I'm available...</p>
                                            </div>
                                        </div>
                                        <p class="text-xs text-gray-400">10:15 AM</p>
                                    </a>
                                </div>

                            </div>
                        </div> <!-- card-end -->

                        <div class="xl:col-span-2 col-span-1">
                            <div class="card">
                                <div class="p-6">

                                    <div class="flex items-center justify-between mb-6">
                                        <h3 class="card-title">Latest Projects</h3>

                                        <div>
                                            <button data-fc-target="dropdown-target6" data-fc-type="dropdown" type="button" data-fc-placement="bottom-end">
                                                <i class="mdi mdi-dots-vertical text-xl"></i>
                                            </button>

                                            <div id="dropdown-target6" class="hidden bg-white shadow rounded border dark:border-slate-700 fc-dropdown-open:translate-y-0 translate-y-3 origin-center transition-all duration-300 py-2 dark:bg-gray-800">
                                                <a class="flex items-center py-1.5 px-5 text-sm transition-all duration-300 bg-transparent text-gray-800 dark:text-white hover:bg-stone-100 dark:hover:bg-slate-700 dark:hover:text-gray-200" href="javascript:void(0)">
                                                    Action
                                                </a>
                                                <a class="flex items-center py-1.5 px-5 text-sm transition-all duration-300 bg-transparent text-gray-800 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="javascript:void(0)">
                                                    Another action
                                                </a>
                                                <a class="flex items-center py-1.5 px-5 text-sm transition-all duration-300 bg-transparent text-gray-800 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="javascript:void(0)">
                                                    Something else
                                                </a>
                                                <a class="flex items-center py-1.5 px-5 text-sm transition-all duration-300 bg-transparent text-gray-800 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="javascript:void(0)">
                                                    Separated link
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="overflow-x-auto">
                                        <div class="min-w-full inline-block align-middle">
                                            <div class="overflow-hidden">
                                                <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                                    <thead>
                                                        <tr class="border-b-2 dark:border-gray-700">
                                                            <th scope="col" class="px-4 py-4 text-start font-semibold text-gray-500 dark:text-gray-200">#</th>
                                                            <th scope="col" class="px-4 py-4 text-start font-semibold text-gray-500 dark:text-gray-200">Project Name</th>
                                                            <th scope="col" class="px-4 py-4 text-start font-semibold text-gray-500 dark:text-gray-200">Start Date</th>
                                                            <th scope="col" class="px-4 py-4 text-start font-semibold text-gray-500 dark:text-gray-200">Due Date</th>
                                                            <th scope="col" class="px-4 py-4 text-start font-semibold text-gray-500 dark:text-gray-200">Status</th>
                                                            <th scope="col" class="px-4 py-4 text-start font-semibold text-gray-500 dark:text-gray-200"> Assign</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                                        <tr class="transition-all hover:bg-gray-50 dark:hover:bg-gray-700/40">
                                                            <td class="px-4 py-4 whitespace-nowrap text-gray-500 dark:text-gray-400">1</td>
                                                            <td class="px-4 py-4 whitespace-nowrap text-gray-500 dark:text-gray-400">Adminto Admin v1</td>
                                                            <td class="px-4 py-4 whitespace-nowrap text-gray-500 dark:text-gray-400">01/01/2017</td>
                                                            <td class="px-4 py-4 whitespace-nowrap text-gray-500 dark:text-gray-400">26/04/2017</td>
                                                            <td class="px-4 py-4 whitespace-nowrap text-gray-500 dark:text-gray-400">
                                                                <span class="text-xs text-white bg-danger rounded-md px-1 py-0.5">Released</span>
                                                            </td>
                                                            <td class="px-4 py-4 whitespace-nowrap text-gray-500 dark:text-gray-400">Coderthemes</td>
                                                        </tr>

                                                        <tr class="transition-all hover:bg-gray-50 dark:hover:bg-gray-700/40">
                                                            <td class="px-4 py-4 whitespace-nowrap text-gray-500 dark:text-gray-400">2</td>
                                                            <td class="px-4 py-4 whitespace-nowrap text-gray-500 dark:text-gray-400">Adminto Frontend v1</td>
                                                            <td class="px-4 py-4 whitespace-nowrap text-gray-500 dark:text-gray-400">01/01/2017</td>
                                                            <td class="px-4 py-4 whitespace-nowrap text-gray-500 dark:text-gray-400">26/04/2017</td>
                                                            <td class="px-4 py-4 whitespace-nowrap text-gray-500 dark:text-gray-400">
                                                                <span class="text-xs text-white bg-success rounded-md px-1 py-0.5">Released</span>
                                                            </td>
                                                            <td class="px-4 py-4 whitespace-nowrap text-gray-500 dark:text-gray-400">Adminto admin</td>
                                                        </tr>

                                                        <tr class="transition-all hover:bg-gray-50 dark:hover:bg-gray-700/40">
                                                            <td class="px-4 py-4 whitespace-nowrap text-gray-500 dark:text-gray-400">3</td>
                                                            <td class="px-4 py-4 whitespace-nowrap text-gray-500 dark:text-gray-400">Adminto Admin v1.1</td>
                                                            <td class="px-4 py-4 whitespace-nowrap text-gray-500 dark:text-gray-400">01/05/2017</td>
                                                            <td class="px-4 py-4 whitespace-nowrap text-gray-500 dark:text-gray-400">10/05/2017</td>
                                                            <td class="px-4 py-4 whitespace-nowrap text-gray-500 dark:text-gray-400">
                                                                <span class="text-xs text-white bg-pink rounded-md px-1 py-0.5">Pending</span>
                                                            </td>
                                                            <td class="px-4 py-4 whitespace-nowrap text-gray-500 dark:text-gray-400">Coderthemes</td>
                                                        </tr>

                                                        <tr class="transition-all hover:bg-gray-50 dark:hover:bg-gray-700/40">
                                                            <td class="px-4 py-4 whitespace-nowrap text-gray-500 dark:text-gray-400">4</td>
                                                            <td class="px-4 py-4 whitespace-nowrap text-gray-500 dark:text-gray-400">Adminto Frontend v1.1</td>
                                                            <td class="px-4 py-4 whitespace-nowrap text-gray-500 dark:text-gray-400">01/01/2017</td>
                                                            <td class="px-4 py-4 whitespace-nowrap text-gray-500 dark:text-gray-400">31/05/2017</td>
                                                            <td class="px-4 py-4 whitespace-nowrap text-gray-500 dark:text-gray-400">
                                                                <span class="text-xs text-white bg-purple rounded-md px-1 py-0.5">Work in Progress</span>
                                                            </td>
                                                            <td class="px-4 py-4 whitespace-nowrap text-gray-500 dark:text-gray-400">Adminto admin</td>
                                                        </tr>

                                                        <tr class="transition-all hover:bg-gray-50 dark:hover:bg-gray-700/40">
                                                            <td class="px-4 py-4 whitespace-nowrap text-gray-500 dark:text-gray-400">5</td>
                                                            <td class="px-4 py-4 whitespace-nowrap text-gray-500 dark:text-gray-400">Adminto Admin v1.3</td>
                                                            <td class="px-4 py-4 whitespace-nowrap text-gray-500 dark:text-gray-400">01/01/2017</td>
                                                            <td class="px-4 py-4 whitespace-nowrap text-gray-500 dark:text-gray-400">31/05/2017</td>
                                                            <td class="px-4 py-4 whitespace-nowrap text-gray-500 dark:text-gray-400">
                                                                <span class="text-xs text-white bg-warning rounded-md px-1 py-0.5">Coming soon</span>
                                                            </td>
                                                            <td class="px-4 py-4 whitespace-nowrap text-gray-500 dark:text-gray-400">Coderthemes</td>
                                                        </tr>

                                                        <tr class="transition-all hover:bg-gray-50 dark:hover:bg-gray-700/40">
                                                            <td class="px-4 py-4 whitespace-nowrap text-gray-500 dark:text-gray-400">6</td>
                                                            <td class="px-4 py-4 whitespace-nowrap text-gray-500 dark:text-gray-400">Adminto Admin v1.3</td>
                                                            <td class="px-4 py-4 whitespace-nowrap text-gray-500 dark:text-gray-400">01/01/2017</td>
                                                            <td class="px-4 py-4 whitespace-nowrap text-gray-500 dark:text-gray-400">31/05/2017</td>
                                                            <td class="px-4 py-4 whitespace-nowrap text-gray-500 dark:text-gray-400">
                                                                <span class="text-xs text-white bg-primary rounded-md px-1 py-0.5">Coming soon</span>
                                                            </td>
                                                            <td class="px-4 py-4 whitespace-nowrap text-gray-500 dark:text-gray-400"> Adminto admin</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- card-end -->
                    </div> <!-- grid-end -->

                </div> <!-- flex-end -->

            </main>

            <!-- Footer Start -->
            <footer class="footer card rounded-none mt-auto">
                <div class="h-16 flex items-center px-8 rounded-none">
                    <div class="flex md:justify-between justify-center w-full gap-4">
                        <div>
                            <script>document.write(new Date().getFullYear())</script> © Adminto - <a href="https://coderthemes.com/" target="_blank">Coderthemes</a>
                        </div>
                        <div class="md:flex hidden gap-4 item-center md:justify-end">
                            <a href="javascript: void(0);" class="text-sm leading-5 text-zinc-600 transition hover:text-zinc-900 dark:text-zinc-400 dark:hover:text-white">About</a>
                            <a href="javascript: void(0);" class="text-sm leading-5 text-zinc-600 transition hover:text-zinc-900 dark:text-zinc-400 dark:hover:text-white">Help</a>
                            <a href="javascript: void(0);" class="text-sm leading-5 text-zinc-600 transition hover:text-zinc-900 dark:text-zinc-400 dark:hover:text-white">Contact Us</a>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- Footer End -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>

    <!-- Theme Settings -->
    <div>
        <!-- Theme Settings Offcanvas -->
        <div id="theme-customization" class="fc-offcanvas-open:translate-x-0 hidden translate-x-full rtl:-translate-x-full fixed inset-y-0 end-0
             transition-all duration-300 transform max-w-[260px] w-full z-50 bg-white dark:bg-gray-800" tabindex="-1">
            <div class="h-16 bg-primary text-white flex items-center px-6 gap-3">
                <h5 class="text-base grow">Theme Customizer</h5>
                <button type="button" class="h-6 w-6 flex items-center justify-center rounded-full bg-dark text-white" data-fc-dismiss><i class="mdi mdi-close text-sm"></i></button>
            </div>

            <div class="h-[calc(100vh-64px)]" data-simplebar>
                <div class="p-6">
                    <div class="py-3 px-5 border border-warning/25 bg-warning/20 text-warning rounded mb-6" role="alert">
                        <span class="font-medium">Customize </span> the overall color scheme, Layout, etc.
                    </div>
                
                    <div class="mb-4">
                        <h5 class="font-semibold text-sm mb-3">Color Scheme</h5>
                        <div class="flex flex-col gap-2">
                            <div class="flex items-center">
                                <input class="form-switch form-switch-sm text-primary" type="checkbox" name="data-mode" id="layout-color-light" value="light">
                                <label class="ms-2" for="layout-color-light">Light</label>
                            </div>

                            <div class="flex items-center">
                                <input class="form-switch form-switch-sm text-primary" type="checkbox" name="data-mode" id="layout-color-dark" value="dark">
                                <label class="ms-2" for="layout-color-dark"> Dark </label>
                            </div>
                        </div>
                    </div>

                    <div class="mb-4">
                        <h5 class="font-semibold text-sm mb-3">Direction</h5>
                        <div class="flex flex-col gap-2">
                            <div class="flex items-center">
                                <input class="form-switch form-switch-sm text-primary" type="checkbox" name="dir" id="direction-ltr" value="ltr">
                                <label class="ms-2" for="direction-ltr"> LTR </label>
                            </div>

                            <div class="flex items-center">
                                <input class="form-switch form-switch-sm text-primary" type="checkbox" name="dir" id="direction-rtl" value="rtl">
                                <label class="ms-2" for="direction-rtl"> RTL </label>
                            </div>
                        </div>
                    </div>

                    <div class="mb-4">
                        <h5 class="font-semibold text-sm mb-3">Layout Position (Menu and Topbar)</h5>
                        <div class="flex flex-col gap-2">
                            <div class="flex items-center">
                                <input class="form-switch form-switch-sm text-primary" type="checkbox" name="data-layout-position" id="layout-position-fixed" value="fixed">
                                <label class="ms-2" for="layout-position-fixed"> Fixed </label>
                            </div>

                            <div class="flex items-center">
                                <input class="form-switch form-switch-sm text-primary" type="checkbox" name="data-layout-position" id="layout-position-scrollable" value="scrollable">
                                <label class="ms-2" for="layout-position-scrollable"> Scrollable </label>
                            </div>
                        </div>
                    </div>

                    <div class="mb-4 2xl:block hidden">
                        <h5 class="font-semibold text-sm mb-3">Width</h5>
                        <div class="flex flex-col gap-2">
                            <div class="flex items-center">
                                <input class="form-switch form-switch-sm text-primary" type="checkbox" name="data-layout-width" id="layout-mode-default" value="default">
                                <label class="ms-2" for="layout-mode-default"> Fluid </label>
                            </div>

                            <div class="flex items-center">
                                <input class="form-switch form-switch-sm text-primary" type="checkbox" name="data-layout-width" id="layout-mode-boxed" value="boxed">
                                <label class="ms-2" for="layout-mode-boxed"> Boxed </label>
                            </div>
                        </div>
                    </div>

                    <div class="mb-4" id="leftSidebarSize">
                        <h5 class="font-semibold text-sm mb-3">Left Sidebar Size</h5>
                        <div class="flex flex-col gap-3">
                            <div class="flex items-center">
                                <input class="form-switch form-switch-sm text-primary" type="checkbox" name="data-sidenav-view" id="sidenav-view-default" value="default">
                                <label class="ms-2" for="sidenav-view-default"> Default </label>
                            </div>


                            <div class="flex items-center">
                                <input class="form-switch form-switch-sm text-primary" type="checkbox" name="data-sidenav-view" id="sidenav-view-condensed" value="condensed">
                                <label class="ms-2" for="sidenav-view-condensed"> Condensed (Small) </label>
                            </div>

                            <div class="flex items-center">
                                <input class="form-switch form-switch-sm text-primary" type="checkbox" name="data-sidenav-view" id="sidenav-view-compact" value="compact">
                                <label class="ms-2" for="sidenav-view-compact"> Compact </label>
                            </div>

                            <div class="flex items-center">
                                <input class="form-switch form-switch-sm text-primary" type="checkbox" name="data-sidenav-view" id="sidenav-view-mobile" value="mobile">
                                <label class="ms-2" for="sidenav-view-mobile"> Mobile </label>
                            </div>

                            <div class="flex items-center">
                                <input class="form-switch form-switch-sm text-primary" type="checkbox" name="data-sidenav-view" id="sidenav-view-hidden" value="hidden">
                                <label class="ms-2" for="sidenav-view-hidden">Hidden </label>
                            </div>
                        </div>
                    </div>

                    <div class="mb-4">
                        <h5 class="font-semibold text-sm mb-3">Menu Color</h5>
                        <div class="flex flex-col gap-2">
                            <div class="flex items-center">
                                <input class="form-switch form-switch-sm text-primary" type="checkbox" name="data-menu-color" id="menu-color-light" value="light">
                                <label class="ms-2" for="menu-color-light"> Light </label>
                            </div>

                            <div class="flex items-center">
                                <input class="form-switch form-switch-sm text-primary" type="checkbox" name="data-menu-color" id="menu-color-dark" value="dark">
                                <label class="ms-2" for="menu-color-dark"> Dark </label>
                            </div>

                            <div class="flex items-center">
                                <input class="form-switch form-switch-sm text-primary" type="checkbox" name="data-menu-color" id="menu-color-brand" value="brand">
                                <label class="ms-2" for="menu-color-brand"> Brand </label>
                            </div>

                            <div class="flex items-center">
                                <input class="form-switch form-switch-sm text-primary" type="checkbox" name="data-menu-color" id="menu-color-gradient" value="gradient">
                                <label class="ms-2" for="menu-color-gradient"> Gradient </label>
                            </div>
                        </div>
                    </div>

                    <div class="mb-6">
                        <h5 class="font-semibold text-sm mb-3">Topbar Color</h5>
                        <div class="flex flex-col gap-2">
                            <div class="flex items-center">
                                <input class="form-switch form-switch-sm text-primary" type="checkbox" name="data-topbar-color" id="topbar-color-light" value="light">
                                <label class="ms-2" for="topbar-color-light"> Light </label>
                            </div>

                            <div class="flex items-center">
                                <input class="form-switch form-switch-sm text-primary" type="checkbox" name="data-topbar-color" id="topbar-color-dark" value="dark">
                                <label class="ms-2" for="topbar-color-dark"> Dark </label>
                            </div>
                        </div>
                    </div>

                    <div>
                        <button type="button" class="btn bg-primary text-white w-full" id="reset-layout">Reset</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Plugin Js -->
    <script src="{{ asset('admin/assets/libs/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('admin/assets/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{ asset('admin/assets/libs/lucide/umd/lucide.min.js')}}"></script>
    <script src="{{ asset('admin/assets/libs/@frostui/tailwindcss/frostui.js')}}"></script>

    <!-- App Js -->
    <script src="{{ asset('admin/assets/js/app.js')}}"></script>

    <!-- knob plugin -->
    <script src="{{ asset('admin/assets/libs/jquery-knob/jquery.knob.min.js')}}"></script>

    <!--Morris Chart-->
    <script src="{{ asset('admin/assets/libs/morris.js06/morris.min.js')}}"></script>
    <script src="{{ asset('admin/assets/libs/raphael/raphael.min.js')}}"></script>

    <!-- Dashboard App js -->
    <script src="{{ asset('admin/assets/js/pages/dashboard.init.js')}}"></script>

</body>

</html>