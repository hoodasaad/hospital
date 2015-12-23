<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <!-- Viewport Metatag -->
        <meta name="viewport" content="width=device-width,initial-scale=1.0">

        <!-- Plugin Stylesheets first to ease overrides -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>design/plugins/colorpicker/colorpicker.css" media="screen">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>design/custom-plugins/wizard/wizard.css" media="screen">

        <!-- Required Stylesheets -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>design/bootstrap/css/bootstrap.min.css" media="screen">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>design/css/fonts/ptsans/stylesheet.css" media="screen">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>design/css/fonts/icomoon/style.css" media="screen">

        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>design/css/mws-style.css" media="screen">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>design/css/icons/icol16.css" media="screen">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>design/css/icons/icol32.css" media="screen">

        <!-- Demo Stylesheet -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>design/css/demo.css" media="screen">

        <!-- jQuery-UI Stylesheet -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>design/jui/css/jquery.ui.all.css" media="screen">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>design/jui/jquery-ui.custom.css" media="screen">

        <!-- Theme Stylesheet -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>design/css/mws-theme.css" media="screen">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>design/css/themer.css" media="screen">
 <script src="<?php echo base_url()?>design/js/libs/jquery-1.8.3.min.js"></script>
        <title>Doctor Admin - Dashboard</title>

    </head>

    <body>
<style>
            
            .mws-panel .mws-panel-header{
                height: 45px;
            }
        </style>

        <!-- Header -->
        <div id="mws-header" class="clearfix">

            <!-- Logo Container -->
            <div id="mws-logo-container">

                <!-- Logo Wrapper, images put within this wrapper will always be vertically centered -->
                <div id="mws-logo-wrap">
                    <img src="<?php echo base_url() ?>design/images/mws-logo.png" alt="mws admin">
                </div>
            </div>

            <!-- User Tools (notifications, logout, profile, change password) -->
            <div id="mws-user-tools" class="clearfix">

                <!-- Notifications -->
                <div id="mws-user-notif" class="mws-dropdown-menu">

                    <!-- Unread notification count -->

                    <!-- Notifications dropdown -->
                    <div class="mws-dropdown-box">
                        <div class="mws-dropdown-content">

                            <div class="mws-dropdown-viewall">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Messages -->
                <div id="mws-user-message" class="mws-dropdown-menu">

                    <!-- Unred messages count -->

                    <!-- Messages dropdown -->
                    <div class="mws-dropdown-box">
                        <div class="mws-dropdown-content">

                            <div class="mws-dropdown-viewall">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- User Information and functions section -->
                <div id="mws-user-info" class="mws-inset">

                    <!-- User Photo -->
                    <div id="mws-user-photo">
                        <img src="<?php base_url() ?>design/example/profile.jpg" alt="User Photo">
                    </div>

                    <!-- Username and Functions -->
                    <div id="mws-user-functions">
                        <div id="mws-username">
                            Welcome, Reception
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- Start Main Wrapper -->
        <div id="mws-wrapper">

            <!-- Necessary markup, do not remove -->
            <div id="mws-sidebar-stitch"></div>
            <div id="mws-sidebar-bg"></div>

            <!-- Sidebar Wrapper -->
            <div id="mws-sidebar">

                <!-- Hidden Nav Collapse Button -->
                <div id="mws-nav-collapse">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>

                <!-- Searchbox -->
                <div id="mws-searchbox" class="mws-inset">
                    <?php echo form_open('first/search');?>
                    <input type="text" class="mws-search-input" placeholder="Search..." name="search" id="search">
                        <button type="submit" class="mws-search-submit"><i class="icon-search"></i></button>
                    </form>
                </div>

                <!-- Main Navigation -->
                <div id="mws-navigation">
                    <ul>
                        <li class="active"><a href="<?php echo base_url(); ?>index.php/first/get_user"><i class="icon-home"></i> Reception Dashboard</a></li>
                        <li><a href="<?php echo base_url(); ?>index.php/first/get_user"><i class="icon-install"></i> Add New Patient</a></li>
                        <li><a href="<?php echo base_url(); ?>index.php/first/display"><i class="icon-television"></i> Show All Patient</a></li>

                    </ul>
                </div>         
            </div>

            <!-- Main Container Start -->