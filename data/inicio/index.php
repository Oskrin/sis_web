<?php 
    include('../menu/app.php');
?>
<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.">
    <meta name="keywords" content="admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp">
    <meta name="author" content="Djava UI">
    <title>PRINCIPAL</title>
    <link href="../../dist/global/img/ico/apple-touch-icon-144x144-precomposed.png" rel="apple-touch-icon-precomposed" sizes="144x144">
    <link href="../../dist/global/img/ico/apple-touch-icon-114x114-precomposed.png" rel="apple-touch-icon-precomposed" sizes="114x114">
    <link href="../../dist/global/img/ico/apple-touch-icon-72x72-precomposed.png" rel="apple-touch-icon-precomposed" sizes="72x72">
    <link href="../../dist/global/img/ico/apple-touch-icon-57x57-precomposed.png" rel="apple-touch-icon-precomposed">
    <link href="../../dist/global/img/ico/apple-touch-icon.png" rel="shortcut icon">
    <!--/ END FAVICONS -->

    <!-- START @FONT STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700" rel="stylesheet">
    <!--/ END FONT STYLES -->

    <!-- START @GLOBAL MANDATORY STYLES -->
    <link href="../../dist/global/plugins/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!--/ END GLOBAL MANDATORY STYLES -->

    <!-- START @PAGE LEVEL STYLES -->
    <link href="../../dist/global/plugins/bower_components/fontawesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="../../dist/global/plugins/bower_components/animate.css/animate.min.css" rel="stylesheet">
    <link href="../../dist/global/plugins/bower_components/dropzone/downloads/css/dropzone.css" rel="stylesheet">
    <link href="../../dist/global/plugins/bower_components/jquery.gritter/css/jquery.gritter.css" rel="stylesheet">
    <!--/ END PAGE LEVEL STYLES -->

    <!-- START @THEME STYLES -->
    <link href="../../dist/admin/css/reset.css" rel="stylesheet">
    <link href="../../dist/admin/css/layout.css" rel="stylesheet">
    <link href="../../dist/admin/css/components.css" rel="stylesheet">
    <link href="../../dist/admin/css/plugins.css" rel="stylesheet">
    <link href="../../dist/admin/css/themes/default.theme.css" rel="stylesheet" id="theme">
    <link href="../../dist/admin/css/custom.css" rel="stylesheet">
    <!--/ END THEME STYLES -->

    <!-- START @IE SUPPORT -->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="../../dist/global/plugins/bower_components/html5shiv/dist/html5shiv.min.js"></script>
    <script src="../../dist/global/plugins/bower_components/respond-minmax/dest/respond.min.js"></script>
    <![endif]-->
    <!--/ END IE SUPPORT -->
</head>
    <!--/ END HEAD -->

    <!--

    |=========================================================================================================================|
    |  TABLE OF CONTENTS (Use search to find needed section)                                                                  |
    |=========================================================================================================================|
    |  01. @HEAD                        |  Container for all the head elements                                                |
    |  02. @META SECTION                |  The meta tag provides metadata about the HTML document                             |
    |  03. @FAVICONS                    |  Short for favorite icon, shortcut icon, website icon, tab icon or bookmark icon    |
    |  04. @FONT STYLES                 |  Font from google fonts                                                             |
    |  05. @GLOBAL MANDATORY STYLES     |  The main 3rd party plugins css file                                                |
    |  06. @PAGE LEVEL STYLES           |  Specific 3rd party plugins css file                                                |
    |  07. @THEME STYLES                |  The main theme css file                                                            |
    |  08. @IE SUPPORT                  |  IE support of HTML5 elements and media queries                                     |
    |=========================================================================================================================|
    |  09. @BODY                        |  Contains all the contents of an HTML document                                      |
    |  10. @WRAPPER                     |  Wrapping page section                                                              |
    |  11. @HEADER                      |  Header page section contains about logo, top navigation, notification menu         |
    |  12. @SIDEBAR LEFT                |  Sidebar page section contains all sidebar menu left                                |
    |  13. @PAGE CONTENT                |  Contents page section contains breadcrumb, content page, footer page               |
    |  14. @SIDEBAR RIGHT               |  Sidebar page section contains all sidebar menu right                               |
    |  15. @BACK TOP                    |  Element back to top and action                                                     |
    |=========================================================================================================================|
    |  16. @CORE PLUGINS                |  The main 3rd party plugins script file                                             |
    |  17. @PAGE LEVEL PLUGINS          |  Specific 3rd party plugins script file                                             |
    |  18. @PAGE LEVEL SCRIPTS          |  The main theme script file                                                         |
    |=========================================================================================================================|

    START @BODY
    |=========================================================================================================================|
	|  TABLE OF CONTENTS (Apply to body class)                                                                                |
	|=========================================================================================================================|
    |  01. page-boxed                   |  Page into the box is not full width screen                                         |
	|  02. page-header-fixed            |  Header element become fixed position                                               |
	|  03. page-sidebar-fixed           |  Sidebar element become fixed position with scroll support                          |
	|  04. page-sidebar-minimize        |  Sidebar element become minimize style width sidebar                                |
	|  05. page-footer-fixed            |  Footer element become fixed position with scroll support on page content           |
	|  06. page-sound                   |  For playing sounds on user actions and page events                                 |
	|=========================================================================================================================|

	-->
    <body class="page-session page-sound page-header-fixed page-sidebar-fixed demo-dashboard-session">

        <!--[if lt IE 9]>
        <p class="upgrade-browser">Upps!! You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" target="_blank">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- START @WRAPPER -->
        <section id="wrapper">

            <!-- START @HEADER -->            
            <?php banner(); ?>            
            <!--/ END HEADER -->

            <?php menu_lateral(); ?>
            <!-- /#sidebar-left -->
            <!--/ END SIDEBAR LEFT -->

            <!-- START @PAGE CONTENT -->
            <section id="page-content">

                <!-- Start page header -->
                <div class="header-content">
                    <h2><i class="fa fa-home"></i>Dashboard <span>dashboard & statistics</span></h2>
                    <div class="breadcrumb-wrapper hidden-xs">
                        <span class="label">You are here:</span>
                        <ol class="breadcrumb">
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div><!-- /.header-content -->
                <!--/ End page header -->

                <!-- Start body content -->
                <div class="body-content animated fadeIn">
                    <div class="row">
                        codigo                        
                    </div>
                </div><!-- /.body-content -->
                <!--/ End body content -->
                <!-- Start footer content -->
                <?php footer(); ?>               
                <!--/ End footer content -->
            </section><!-- /#page-content -->
            <!--/ END PAGE CONTENT -->
        </section><!-- /#wrapper -->
        <!--/ END WRAPPER -->

        <!-- START @BACK TOP -->
        <div id="back-top" class="animated pulse circle">
            <i class="fa fa-angle-up"></i>
        </div><!-- /#back-top -->
        <!--/ END BACK TOP -->

        <!-- START JAVASCRIPT SECTION (Load javascripts at bottom to reduce load time) -->
        <!-- START @CORE PLUGINS -->
        <script src="../../dist/global/plugins/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="../../dist/global/plugins/bower_components/jquery-cookie/jquery.cookie.js"></script>
        <script src="../../dist/global/plugins/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="../../dist/global/plugins/bower_components/typehead.js/dist/handlebars.js"></script>
        <script src="../../dist/global/plugins/bower_components/typehead.js/dist/typeahead.bundle.min.js"></script>
        <script src="../../dist/global/plugins/bower_components/jquery-nicescroll/jquery.nicescroll.min.js"></script>
        <script src="../../dist/global/plugins/bower_components/jquery.sparkline.min/index.js"></script>
        <script src="../../dist/global/plugins/bower_components/jquery-easing-original/jquery.easing.1.3.min.js"></script>
        <script src="../../dist/global/plugins/bower_components/ionsound/js/ion.sound.min.js"></script>
        <script src="../../dist/global/plugins/bower_components/bootbox/bootbox.js"></script>
        <!--/ END CORE PLUGINS -->

        <!-- START @PAGE LEVEL PLUGINS -->
        <script src="../../dist/global/plugins/bower_components/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js"></script>
        <script src="../../dist/global/plugins/bower_components/flot/jquery.flot.js"></script>
        <script src="../../dist/global/plugins/bower_components/flot/jquery.flot.spline.min.js"></script>
        <script src="../../dist/global/plugins/bower_components/flot/jquery.flot.categories.js"></script>
        <script src="../../dist/global/plugins/bower_components/flot/jquery.flot.tooltip.min.js"></script>
        <script src="../../dist/global/plugins/bower_components/flot/jquery.flot.resize.js"></script>
        <script src="../../dist/global/plugins/bower_components/flot/jquery.flot.pie.js"></script>
        <script src="../../dist/global/plugins/bower_components/dropzone/downloads/dropzone.min.js"></script>
        <script src="../../dist/global/plugins/bower_components/jquery.gritter/js/jquery.gritter.min.js"></script>
        <script src="../../dist/global/plugins/bower_components/skycons-html5/skycons.js"></script>
        <!--/ END PAGE LEVEL PLUGINS -->

        <!-- START @PAGE LEVEL SCRIPTS -->
        <script src="../../dist/admin/js/apps.js"></script>
        <script src="../../dist/admin/js/pages/blankon.dashboard.js"></script>
        <script src="../../dist/admin/js/demo.js"></script>
        <!--/ END PAGE LEVEL SCRIPTS -->
        <!--/ END JAVASCRIPT SECTION -->
    
    </body>
    <!--/ END BODY -->
</html>