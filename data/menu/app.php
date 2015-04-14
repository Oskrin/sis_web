<?php 
// pie de pagina
function footer(){
	print' <footer class="footer-content">
                    2014 - 2015 &copy; Blankon Admin. Created by <a href="http://djavaui.com/" target="_blank">Djava UI</a>, Yogyakarta ID
                    <span class="pull-right">0.01 GB(0%) of 15 GB used</span>
                </footer><!-- /.footer-content -->';
}
// banner o cabecera
function banner(){
	print'
	<header id="header">
        <!-- Start header left -->
        <div class="header-left">
            <!-- Start offcanvas left: This menu will take position at the top of template header (mobile only). Make sure that only #header have the `position: relative`, or it may cause unwanted behavior -->
            <div class="navbar-minimize-mobile left">
                <i class="fa fa-bars"></i>
            </div>
            <!--/ End offcanvas left -->

            <!-- Start navbar header -->
            <div class="navbar-header">

                <!-- Start brand -->
                <a class="navbar-brand" href="dashboard.html">
                    <img class="logo" src="../../dist/global/img/logo/logo-white.png" alt="brand logo"/>
                </a><!-- /.navbar-brand -->
                <!--/ End brand -->

            </div><!-- /.navbar-header -->
            <!--/ End navbar header -->

            <!-- Start offcanvas right: This menu will take position at the top of template header (mobile only). Make sure that only #header have the `position: relative`, or it may cause unwanted behavior -->
            <div class="navbar-minimize-mobile right">
                <i class="fa fa-cog"></i>
            </div>
            <!--/ End offcanvas right -->

            <div class="clearfix"></div>
        </div><!-- /.header-left -->
        <!--/ End header left -->

        <!-- Start header right -->
        <div class="header-right">
            <!-- Start navbar toolbar -->
            <div class="navbar navbar-toolbar">

                <!-- Start left navigation -->
                <ul class="nav navbar-nav navbar-left">

                    <!-- Start sidebar shrink -->
                    <li class="navbar-minimize">
                        <a href="javascript:void(0);" title="Minimize sidebar">
                            <i class="fa fa-bars"></i>
                        </a>
                    </li>
                    <!--/ End sidebar shrink -->

                    <!-- Start form search -->
                    <li class="navbar-search">
                        <!-- Just view on mobile screen-->
                        <a href="#" class="trigger-search"><i class="fa fa-search"></i></a>
                        <form class="navbar-form">
                            <div class="form-group has-feedback">
                                <input type="text" class="form-control typeahead rounded" placeholder="Search for people, places and things">
                                <button type="submit" class="btn btn-theme fa fa-search form-control-feedback rounded"></button>
                            </div>
                        </form>
                    </li>
                    <!--/ End form search -->

                </ul><!-- /.nav navbar-nav navbar-left -->
                <!--/ End left navigation -->

                <!-- Start right navigation -->
                <ul class="nav navbar-nav navbar-right"><!-- /.nav navbar-nav navbar-right -->

                <!-- Start messages -->
                <li class="dropdown navbar-message">

                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope-o"></i><span class="count label label-danger rounded">7</span></a>

                    <!-- Start dropdown menu -->
                    <div class="dropdown-menu animated flipInX">
                        <div class="dropdown-header">
                            <span class="title">Messages <strong>(7)</strong></span>
                            <span class="option text-right"><a href="#">+ New message</a></span>
                        </div>
                        <div class="dropdown-body">

                            <!-- Start message search -->
                            <form class="form-horizontal" action="#">
                                <div class="form-group has-feedback has-feedback-sm m-5">
                                    <input type="text" class="form-control input-sm" placeholder="Search message...">
                                    <button type="submit" class="btn btn-theme fa fa-search form-control-feedback"></button>
                                </div>
                            </form>
                            <!--/ End message search -->

                            <!-- Start message list -->
                            <div class="media-list niceScroll">

                                <a href="page-messages.html" class="media">
                                    <div class="pull-left"><img src="../../dist/global/img/avatar/50/2.png" class="media-object img-circle" alt="John Kribo"/></div>
                                    <div class="media-body">
                                        <span class="media-heading">John Kribo</span>
                                        <span class="media-text">I was impressed how fast the content is loaded. Congratulations. nice design.</span>
                                        <!-- Start meta icon -->
                                        <span class="media-meta"><i class="fa fa-reply"></i></span>
                                        <span class="media-meta"><i class="fa fa-paperclip"></i></span>
                                        <span class="media-meta pull-right">13 minutes</span>
                                        <!--/ End meta icon -->
                                    </div><!-- /.media-body -->
                                </a><!-- /.media -->

                                <a href="page-messages.html" class="media">
                                    <div class="pull-left"><img src="../../dist/global/img/avatar/50/3.png" class="media-object img-circle" alt="Jennifer Poiyem"/></div>
                                    <div class="media-body">
                                        <span class="media-heading">Jennifer Poiyem</span>
                                        <span class="media-text">It’s Simple, Clean & Nice .. Good work Dear .. GLWS</span>
                                        <!-- Start meta icon -->
                                        <span class="media-meta pull-right">17 hours</span>
                                        <!--/ End meta icon -->
                                    </div><!-- /.media-body -->
                                </a><!-- /.media -->

                                <a href="page-messages.html" class="media">
                                    <div class="pull-left"><img src="../../dist/global/img/avatar/50/4.png" class="media-object img-circle" alt="Clara Wati"/></div>
                                    <div class="media-body">
                                        <span class="media-heading">Clara Wati</span>
                                        <span class="media-text">Great work! Do you have any plans to add loading indicators for AJAX calls that might take longer than normal?</span>
                                        <!-- Start meta icon -->
                                        <span class="media-meta pull-right">1 days</span>
                                        <!--/ End meta icon -->
                                    </div><!-- /.media-body -->
                                </a><!-- /.media -->

                                <a href="page-messages.html" class="media">
                                    <div class="pull-left"><img src="../../dist/global/img/avatar/50/5.png" class="media-object img-circle" alt="Toni Mriang"/></div>
                                    <div class="media-body">
                                        <span class="media-heading">Toni Mriang</span>
                                        <span class="media-text">I am very interested in the theme and I’m thinking about buying it.</span>
                                        <!-- Start meta icon -->
                                        <span class="media-meta"><i class="fa fa-paperclip"></i></span>
                                        <span class="media-meta pull-right">2 days</span>
                                        <!--/ End meta icon -->
                                    </div><!-- /.media-body -->
                                </a><!-- /.media -->

                                <a href="page-messages.html" class="media">
                                    <div class="pull-left"><img src="../../dist/global/img/avatar/50/6.png" class="media-object img-circle" alt="Bella negoro"/></div>
                                    <div class="media-body">
                                        <span class="media-heading">Bella negoro</span>
                                        <span class="media-text">Great work! Good luck!</span>
                                        <!-- Start meta icon -->
                                        <span class="media-meta"><i class="fa fa-paperclip"></i></span>
                                        <span class="media-meta"><i class="fa fa-user"></i></span>
                                        <span class="media-meta pull-right">1 week</span>
                                        <!--/ End meta icon -->
                                    </div><!-- /.media-body -->
                                </a><!-- /.media -->

                                <a href="page-messages.html" class="media">
                                    <div class="pull-left"><img src="../../dist/global/img/avatar/50/7.png" class="media-object img-circle" alt="Kim Mbako"/></div>
                                    <div class="media-body">
                                        <span class="media-heading">Kim Mbako</span>
                                        <span class="media-text">Hi! First of all, thank you for the very nice theme for creating awesome web applications :)</span>
                                        <!-- Start meta icon -->
                                        <span class="media-meta"><i class="fa fa-paperclip"></i></span>
                                        <span class="media-meta pull-right">1 week</span>
                                        <!--/ End meta icon -->
                                    </div><!-- /.media-body -->
                                </a><!-- /.media -->

                                <a href="page-messages.html" class="media">
                                    <div class="pull-left"><img src="../../dist/global/img/avatar/50/8.png" class="media-object img-circle" alt="Pack Suparman"/></div>
                                    <div class="media-body">
                                        <span class="media-heading">Pack Suparman</span>
                                        <span class="media-text">Apik temen kie jan template, nyong gep tuku jal..</span>
                                        <!-- Start meta icon -->
                                        <span class="media-meta pull-right">1 week</span>
                                        <!--/ End meta icon -->
                                    </div><!-- /.media-body -->
                                </a><!-- /.media -->

                                <!-- Start message indicator -->
                                <a href="#" class="media indicator inline">
                                    <span class="spinner">Load more messages...</span>
                                </a>
                                <!--/ End message indicator -->

                            </div>
                            <!--/ End message list -->

                        </div>
                        <div class="dropdown-footer">
                            <a href="page-messages.html">See All</a>
                        </div>
                    </div>
                    <!--/ End dropdown menu -->

                </li><!-- /.dropdown navbar-message -->
                <!--/ End messages -->

                <!-- Start notifications -->
                <li class="dropdown navbar-notification">

                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell-o"></i><span class="count label label-danger rounded">6</span></a>

                    <!-- Start dropdown menu -->
                    <div class="dropdown-menu animated flipInX">
                        <div class="dropdown-header">
                            <span class="title">Notifications <strong>(10)</strong></span>
                            <span class="option text-right"><a href="#"><i class="fa fa-cog"></i> Setting</a></span>
                        </div>
                        <div class="dropdown-body niceScroll">

                            <!-- Start notification list -->
                            <div class="media-list small">

                                <a href="#" class="media">
                                    <div class="media-object pull-left"><i class="fa fa-share-alt fg-info"></i></div>
                                    <div class="media-body">
                                        <span class="media-text"><strong>Dolanan Remi : </strong><strong>Chris Job,</strong><strong>Denny Puk</strong> and <strong>Joko Fernandes</strong> sent you <strong>5 free energy boosts and other request</strong></span>
                                        <!-- Start meta icon -->
                                        <span class="media-meta">3 minutes</span>
                                        <!--/ End meta icon -->
                                    </div><!-- /.media-body -->
                                </a><!-- /.media -->

                                <a href="#" class="media">
                                    <div class="media-object pull-left"><i class="fa fa-cogs fg-success"></i></div>
                                    <div class="media-body">
                                        <span class="media-text">Your sistem is updated</span>
                                        <!-- Start meta icon -->
                                        <span class="media-meta">5 minutes</span>
                                        <!--/ End meta icon -->
                                    </div><!-- /.media-body -->
                                </a><!-- /.media -->

                                <a href="#" class="media">
                                    <div class="media-object pull-left"><i class="fa fa-ban fg-danger"></i></div>
                                    <div class="media-body">
                                        <span class="media-text">3 Member is BANNED</span>
                                        <!-- Start meta icon -->
                                        <span class="media-meta">5 minutes</span>
                                        <!--/ End meta icon -->
                                    </div><!-- /.media-body -->
                                </a><!-- /.media -->

                                <a href="#" class="media">
                                    <div class="media-object pull-left"><img class="img-circle" src="../../dist/global/img/avatar/50/10.png" alt=""/></div>
                                    <div class="media-body">
                                        <span class="media-text">daddy pushed to project Blankon version 1.0.0</span>
                                        <!-- Start meta icon -->
                                        <span class="media-meta">45 minutes</span>
                                        <!--/ End meta icon -->
                                    </div><!-- /.media-body -->
                                </a><!-- /.media -->

                                <a href="#" class="media">
                                    <div class="media-object pull-left"><i class="fa fa-user fg-info"></i></div>
                                    <div class="media-body">
                                        <span class="media-text">Change your user profile</span>
                                        <!-- Start meta icon -->
                                        <span class="media-meta">1 days</span>
                                        <!--/ End meta icon -->
                                    </div><!-- /.media-body -->
                                </a><!-- /.media -->

                                <a href="#" class="media">
                                    <div class="media-object pull-left"><i class="fa fa-book fg-info"></i></div>
                                    <div class="media-body">
                                        <span class="media-text">Added new article</span>
                                        <!-- Start meta icon -->
                                        <span class="media-meta">1 days</span>
                                        <!--/ End meta icon -->
                                    </div><!-- /.media-body -->
                                </a><!-- /.media -->

                                <!-- Start notification indicator -->
                                <a href="#" class="media indicator inline">
                                    <span class="spinner">Load more notifications...</span>
                                </a>
                                <!--/ End notification indicator -->

                            </div>
                            <!--/ End notification list -->

                        </div>
                        <div class="dropdown-footer">
                            <a href="#">See All</a>
                        </div>
                    </div>
                    <!--/ End dropdown menu -->

                </li><!-- /.dropdown navbar-notification -->
                <!--/ End notifications -->

                <!-- Start profile -->
                <li class="dropdown navbar-profile">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <span class="meta">
                            <span class="avatar"><img src="../../dist/global/img/avatar/35/1.png" class="img-circle" alt="admin"></span>
                            <span class="text hidden-xs hidden-sm text-muted">Tol Lee</span>
                            <span class="caret"></span>
                        </span>
                    </a>
                    <!-- Start dropdown menu -->
                    <ul class="dropdown-menu animated flipInX">
                        <li class="dropdown-header">Account</li>
                        <li><a href="page-profile.html"><i class="fa fa-user"></i>View profile</a></li>
                        <li><a href="mail-inbox.html"><i class="fa fa-envelope-square"></i>Inbox <span class="label label-info pull-right">30</span></a></li>
                        <li><a href="#"><i class="fa fa-share-square"></i>Invite a friend</a></li>
                        <li class="dropdown-header">Product</li>
                        <li><a href="#"><i class="fa fa-upload"></i>Upload</a></li>
                        <li><a href="#"><i class="fa fa-dollar"></i>Earning</a></li>
                        <li><a href="#"><i class="fa fa-download"></i>Withdrawals</a></li>
                        <li class="divider"></li>
                        <li><a href="page-signin.html"><i class="fa fa-sign-out"></i>Logout</a></li>
                    </ul>
                    <!--/ End dropdown menu -->
                </li><!-- /.dropdown navbar-profile -->
                <!--/ End profile -->

                <!-- Start settings -->
                <li class="navbar-setting pull-right">
                    <a href="javascript:void(0);"><i class="fa fa-cog fa-spin"></i></a>
                </li><!-- /.navbar-setting pull-right -->
                <!--/ End settings -->

                </ul>
                <!--/ End right navigation -->

            </div><!-- /.navbar-toolbar -->
            <!--/ End navbar toolbar -->
        </div><!-- /.header-right -->
        <!--/ End header left -->

    </header> 
';
}
// menu principal lateral
function menu_lateral(){
print'
<aside id="sidebar-left" class="sidebar-circle">

        <!-- Start left navigation - profile shortcut -->
        <div class="sidebar-content">
            <div class="media">
                <a class="pull-left has-notif avatar" href="page-profile.html">
                    <img src="../../dist/global/img/avatar/50/1.png" alt="admin">
                    <i class="online"></i>
                </a>
                <div class="media-body">
                    <h4 class="media-heading">Hello, <span>Lee</span></h4>
                    <small>Web Designer</small>
                </div>
            </div>
        </div><!-- /.sidebar-content -->
        <!--/ End left navigation -  profile shortcut -->

        <!-- Start left navigation - menu -->
        <ul class="sidebar-menu">

            <!-- Start navigation - dashboard -->
            <li class="active">
                <a href="dashboard.html">
                    <span class="icon"><i class="fa fa-home"></i></span>
                    <span class="text">Dashboard</span>
                    <span class="selected"></span>
                </a>
            </li>
            <!--/ End navigation - dashboard -->

            <!-- Start navigation - frontend themes -->
            <li>
                <a href="frontend-themes.html">
                    <span class="icon"><i class="fa fa-leaf"></i></span>
                    <span class="text">Frontend themes</span>
                </a>
            </li>
            <!--/ End navigation - frontend themes -->

            <!-- Start navigation - blankon versions -->
            <li>
                <a href="blankon-versions.html">
                    <span class="icon"><i class="fa fa-dropbox"></i></span>
                    <span class="text">Blankon Versions</span>
                </a>
            </li>
            <!--/ End navigation - blankon versions -->

            <!-- Start category apps -->
            <li class="sidebar-category">
                <span>APPS</span>
                <span class="pull-right"><i class="fa fa-trophy"></i></span>
            </li>
            <!--/ End category apps -->

            <!-- Start navigation - blog -->
            <li class="submenu">
                <a href="javascript:void(0);">
                    <span class="icon"><i class="fa fa-globe"></i></span>
                    <span class="text">Blog</span>
                    <span class="arrow"></span>
                </a>
                <ul>
                    <li><a href="blog-grid.html">Grid</a></li>
                    <li><a href="blog-list.html">List</a></li>
                    <li><a href="blog-single.html">Single</a></li>
                </ul>
            </li>
            <!--/ End navigation - blog -->

            <!-- Start navigation - mail -->
            <li class="submenu">
                <a href="javascript:void(0);">
                    <span class="icon"><i class="fa fa-envelope"></i></span>
                    <span class="text">Mail</span>
                    <span class="arrow"></span>
                </a>
                <ul>
                    <li><a href="mail-inbox.html">Inbox</a></li>
                    <li><a href="mail-compose.html">Compose mail</a></li>
                    <li><a href="mail-view.html">View mail</a></li>
                </ul>
            </li>
            <!--/ End navigation - mail -->

            <!-- Start navigation - pages -->
            <li class="submenu">
                <a href="javascript:void(0);">
                    <span class="icon"><i class="fa fa-file-o"></i></span>
                    <span class="text">Pages</span>
                    <span class="arrow"></span>
                </a>
                <ul>
                    <li><a href="page-gallery.html">Gallery <span class="label label-danger pull-right">New</span></a></li>
                    <li><a href="page-calendar.html">Calendar</a></li>
                    <li><a href="page-invoice.html">Invoice</a></li>
                    <li><a href="page-messages.html">Messages</a></li>
                    <li><a href="page-timeline.html">Timeline</a></li>
                    <li><a href="page-profile.html">Profile</a></li>
                    <li class="submenu">
                        <a href="javascript:void(0);">Search<span class="arrow"></span></a>
                        <ul>
                            <li><a href="page-search-course.html">Courses</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);">Error <span class="arrow"></span></a>
                        <ul>
                            <li><a href="page-error-403.html">Error 403</a></li>
                            <li><a href="page-error-403-type-2.html">Error 403 Type 2</a></li>
                            <li><a href="page-error-404.html">Error 404</a></li>
                            <li><a href="page-error-404-type-2.html">Error 404 Type 2</a></li>
                            <li><a href="page-error-500.html">Error 500</a></li>
                            <li><a href="page-error-500-type-2.html">Error 500 Type 2</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);">Account <span class="arrow"></span></a>
                        <ul>
                            <li><a href="page-signin.html">Sign In</a></li>
                            <li><a href="page-signup.html">Sign Up</a></li>
                            <li><a href="page-lost-password.html">Lost password</a></li>
                            <li><a href="page-lock-screen.html">Lock Screen</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <!--/ End navigation - pages -->

            <!-- Start category ui kit-->
            <li class="sidebar-category">
                <span>UI KIT</span>
                <span class="pull-right"><i class="fa fa-magic"></i></span>
            </li>
            <!--/ End category ui kit-->

            <!-- Start navigation - forms -->
            <li class="submenu">
                <a href="javascript:void(0);">
                    <span class="icon"><i class="fa fa-list-alt"></i></span>
                    <span class="text">Forms</span>
                    <span class="arrow"></span>
                </a>
                <ul>
                    <li><a href="form-element.html">Element</a></li>
                    <li><a href="form-advanced.html">Advanced</a></li>
                    <li><a href="form-layout.html">Layout</a></li>
                    <li><a href="form-validation.html">Validation</a></li>
                    <li><a href="form-wizard.html">Wizard</a></li>
                    <li><a href="form-wysiwyg.html">Text Editor</a></li>
                    <li><a href="form-xeditable.html">X-Editable</a></li>
                </ul>
            </li>
            <!--/ End navigation - forms -->

            <!-- Start navigation - tables -->
            <li class="submenu">
                <a href="javascript:void(0);">
                    <span class="icon"><i class="fa fa-table"></i></span>
                    <span class="text">Tables</span>
                    <span class="arrow"></span>
                </a>
                <ul>
                    <li><a href="table-default.html">Default</a></li>
                    <li><a href="table-color.html">Color</a></li>
                    <li><a href="table-datatable.html">Datatable</a></li>
                </ul>
            </li>
            <!--/ End navigation - tables -->

            <!-- Start navigation - maps -->
            <li class="submenu">
                <a href="javascript:void(0);">
                    <span class="icon"><i class="fa fa-map-marker"></i></span>
                    <span class="text">Maps</span>
                    <span class="arrow"></span>
                </a>
                <ul>
                    <li><a href="maps-google.html">Google</a></li>
                    <li><a href="maps-vector.html">Vector</a></li>
                </ul>
            </li>
            <!--/ End navigation - maps -->

            <!-- Start navigation - charts -->
            <li class="submenu">
                <a href="javascript:void(0);">
                    <span class="icon"><i class="fa fa-signal"></i></span>
                    <span class="text">Charts</span>
                    <span class="arrow"></span>
                </a>
                <ul>
                    <li><a href="chart-flot.html">Flot</a></li>
                    <li><a href="chart-morris.html">Morris</a></li>
                    <li><a href="chart-chartjs.html">Chartjs</a></li>
                    <li><a href="chart-c3js.html">C3js</a></li>
                </ul>
            </li>
            <!--/ End navigation - charts -->

            <!-- Start category development -->
            <li class="sidebar-category">
                <span>DEVELOP</span>
                <span class="pull-right"><i class="fa fa-code"></i></span>
            </li>
            <!--/ End category development -->

            <!-- Start development - components -->
            <li class="submenu">
                <a href="javascript:void(0);">
                    <span class="icon"><i class="fa fa-cube"></i></span>
                    <span class="text">Components</span>
                    <span class="plus"></span>
                </a>
                <ul>
                    <li><a href="component-grid-system.html">Grid System</a></li>
                    <li><a href="component-buttons.html">Buttons</a></li>
                    <li><a href="component-typography.html">Typography</a></li>
                    <li><a href="component-panel.html">Panels</a></li>
                    <li><a href="component-alerts.html">Alerts</a></li>
                    <li><a href="component-modals.html">Modals</a></li>
                    <li><a href="component-tabsaccordion.html">Tabs & Accordion</a></li>
                    <li><a href="component-sliders.html">Sliders</a></li>
                    <li class="submenu">
                        <a href="javascript:void(0);">
                            <span class="text">Icons</span>
                            <span class="count label label-danger">6</span>
                            <span class="arrow"></span>
                        </a>
                        <ul>
                            <li><a href="component-glyphicons.html">Glyphicons</a></li>
                            <li><a href="component-glyphicons-pro.html">Glyphicons PRO</a></li>
                            <li><a href="component-font-awesome.html">Font Awesome</a></li>
                            <li><a href="component-weather-icons.html">Weather Icons</a></li>
                            <li><a href="component-map-icons.html">Map Icons</a></li>
                            <li><a href="component-simple-line-icons.html">Simple Line Icons</a></li>
                        </ul>
                    </li>
                    <li><a href="component-other.html">Other</a></li>
                </ul>
            </li>
            <!--/ End development - components -->

            <!-- Start development - layouts -->
            <li class="submenu">
                <a href="javascript:void(0);">
                    <span class="icon"><i class="fa fa-columns"></i></span>
                    <span class="text">Layouts</span>
                    <span class="plus"></span>
                </a>
                <ul>
                    <li><a href="layout-blank.html">Blank Page</a></li>
                    <li><a href="layout-boxed.html">Boxed Page</a></li>
                    <li><a href="layout-header-fixed.html">Header Fixed Page</a></li>
                    <li><a href="layout-sidebar-fixed.html">Sidebar Fixed Page</a></li>
                    <li><a href="layout-sidebar-minimize.html">Sidebar Minimize Page</a></li>
                    <li><a href="layout-sidebar-default.html">Sidebar Default Page</a></li>
                    <li><a href="layout-sidebar-box.html">Sidebar Box Page</a></li>
                    <li><a href="layout-sidebar-rounded.html">Sidebar Rounded Page</a></li>
                    <li><a href="layout-sidebar-circle.html">Sidebar Circle Page</a></li>
                    <li><a href="layout-footer-fixed.html">Footer Fixed Page</a></li>
                </ul>
            </li>
            <!--/ End development - layouts -->

            <!-- Start development - sub menu -->
            <li class="submenu">
                <a href="javascript:void(0);">
                    <span class="icon"><i class="fa fa-align-left"></i></span>
                    <span class="text">Sub Menu</span>
                    <span class="plus"></span>
                </a>
                <ul>
                    <li class="submenu">
                        <a href="javascript:void(0);">
                            <span class="text">Level 1</span>
                            <span class="arrow"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="javascript:void(0);">Level 2</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <!--/ End development - sub menu -->

            <!-- Start category widget -->
            <li class="sidebar-category">
                <span>WIDGET</span>
                <span class="pull-right"><i class="fa fa-cubes"></i></span>
            </li>
            <!--/ End category widget -->

            <!-- Start widget - overview -->
            <li>
                <a href="widget-overview.html">
                    <span class="icon"><i class="fa fa-desktop"></i></span>
                    <span class="text">Overview</span>
                    <span class="label label-primary pull-right rounded">10</span>
                </a>
            </li>
            <!--/ End widget - overview -->

            <!-- Start widget - social -->
            <li>
                <a href="widget-social.html">
                    <span class="icon"><i class="fa fa-group"></i></span>
                    <span class="text">Social</span>
                    <span class="label label-success pull-right rounded">28</span>
                </a>
            </li>
            <!--/ End widget - social -->

            <!-- Start widget - blog -->
            <li>
                <a href="widget-blog.html">
                    <span class="icon"><i class="fa fa-pencil"></i></span>
                    <span class="text">Blog</span>
                    <span class="label label-info pull-right rounded">15</span>
                </a>
            </li>
            <!--/ End widget - blog -->

            <!-- Start widget - weather -->
            <li>
                <a href="widget-weather.html">
                    <span class="icon"><i class="fa fa-sun-o"></i></span>
                    <span class="text">Weather</span>
                    <span class="label label-warning pull-right rounded">6</span>
                </a>
            </li>
            <!--/ End widget - weather -->

            <!-- Start widget - misc -->
            <li>
                <a href="widget-misc.html">
                    <span class="icon"><i class="fa fa-puzzle-piece"></i></span>
                    <span class="text">Misc</span>
                    <span class="label label-danger pull-right rounded">9</span>
                </a>
            </li>
            <!--/ End widget - misc -->

            <!-- Start category documentation -->
            <li class="sidebar-category">
                <span><span class="hidden-sidebar-minimize">BLANKON</span> CORE</span>
                <span class="pull-right"><i class="fa fa-coffee"></i></span>
            </li>
            <!--/ End category documentation -->

            <!-- Start documentation - api documentation -->
            <li>
                <a href="http://128.199.167.219/blankon-fullpack-admin-theme/1.0.5/documentation/admin/html/live-preview-documentation.html" target="_blank">
                    <span class="icon"><i class="fa fa-book"></i></span>
                    <span class="text">API Documentation</span>
                </a>
            </li>
            <!--/ End documentation - api documentation -->

        </ul><!-- /.sidebar-menu -->
        <!--/ End left navigation - menu -->

        <!-- Start left navigation - footer -->
        <div class="sidebar-footer hidden-xs hidden-sm hidden-md">
            <a id="setting" class="pull-left" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-title="Setting"><i class="fa fa-cog"></i></a>
            <a id="fullscreen" class="pull-left" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-title="Fullscreen"><i class="fa fa-desktop"></i></a>
            <a id="lock-screen" data-url="page-signin.html" class="pull-left" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-title="Lock Screen"><i class="fa fa-lock"></i></a>
            <a id="logout" data-url="page-lock-screen.html" class="pull-left" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-title="Logout"><i class="fa fa-power-off"></i></a>
        </div><!-- /.sidebar-footer -->
        <!--/ End left navigation - footer -->

    </aside>
	';
}
?>