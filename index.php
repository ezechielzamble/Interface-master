<!DOCTYPE html>
<html>
    
<!-- Mirrored from themesdesign.in/admiria/layouts/vertical-light-sidebar/tables-responsive.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Nov 2017 12:15:46 GMT -->
<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Admiria - Responsive Flat Admin Dashboard</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Themesbrand" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App Icons -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">


        <link rel="stylesheet" href="assets/plugins/jquery-steps/jquery.steps.css">
        <!-- Table css -->
        <link href="assets/plugins/RWD-Table-Patterns/dist/css/rwd-table.min.css" rel="stylesheet" type="text/css" media="screen">

        <!-- Basic Css files -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">


        <link href="assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <?php 
            if (empty($_GET["page"])) {
                # code...
                ?>
                <meta http-equiv="refresh" content="0; URL=http://localhost/cmi/login.php">
         

    </head>
<?php  } else {?>

    <body class="fixed-left">

<!-- Loader -->
        <div id="preloader"><div id="status"><div class="spinner"></div></div></div>
 
        <!-- Begin page -->
        <div id="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="">
                        <!--<a href="index.html" class="logo text-center">Admiria</a>-->
                        <a href="index.html" class="logo"><img src="assets/images/logo-sm.png" height="36" alt="logo"></a>
                    </div>
                </div>

                <div class="sidebar-inner slimscrollleft">
                    <div id="sidebar-menu">
                        <ul>

                            <li class="menu-title">Main</li>

                            <li class="">
                                <a href="index.php?page=consulJour" class="waves-effect"><i class="mdi mdi-view-dashboard"></i> <span> Accueil </span> </a>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-view-dashboard"></i> <span> Consultation <span class="badge badge-pill badge-primary pull-right">20+</span></span> </a>
                                <ul class="list-unstyled">
                                    <li><a href="index.php?page=consultation">Nouvelle Consultation</a></li>
                                    <li><a href="index.php?page=agent">Ajouter un Agent</a></li>
                                    <li><a href="index.php?page=ayant_droit">Ajouter un Ayant droit</a></li>
                                    <li><a href="index.php?page=autre">Ajouter un Autre</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="index.php?page=infirmier" class="waves-effect"><i class="mdi mdi-cube-outline"></i><span> Infirmier <span class="badge badge-pill badge-primary pull-right">2</span></span></a>
                            </li>

                            <li>
                                <a href="index.php?page=medecin" class="waves-effect"><i class="mdi mdi-cube-outline"></i><span> Medecin <span class="badge badge-pill badge-primary pull-right">4</span></span></a>
                            </li>

                            <li class="has_sub">
                                <a href="index.php?page=pharmacie" class="waves-effect"><i class="mdi mdi-email-outline"></i><span> Pharmacie <span class="pull-right"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                                
                            </li>

                            <li>
                                <a href="calendar.html" class="waves-effect"><i class="mdi mdi-calendar-check"></i><span> Calendar </span></a>
                            </li>

                            <li class="menu-title">Campagne et visite</li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-buffer"></i> <span> Sensibilisation <span class="pull-right"><i class="mdi mdi-chevron-right"></i></span> </span> </a>
                                <ul class="list-unstyled">
                                    <li><a href="ui-buttons.html">Buttons</a></li>
                                    <li><a href="ui-colors.html">Colors</a></li>
                                    <li><a href="ui-cards.html">Cards</a></li>
                                    <li><a href="ui-tabs-accordions.html">Tabs &amp; Accordions</a></li>
                                    <li><a href="ui-modals.html">Modals</a></li>
                                    <li><a href="ui-images.html">Images</a></li>
                                    <li><a href="ui-alerts.html">Alerts</a></li>
                                    <li><a href="ui-progressbars.html">Progress Bars</a></li>
                                    <li><a href="ui-dropdowns.html">Dropdowns</a></li>
                                    <li><a href="ui-lightbox.html">Lightbox</a></li>
                                    <li><a href="ui-navs.html">Navs</a></li>
                                    <li><a href="ui-pagination.html">Pagination</a></li>
                                    <li><a href="ui-popover-tooltips.html">Popover & Tooltips</a></li>
                                    <li><a href="ui-badge.html">Badge</a></li>
                                    <li><a href="ui-carousel.html">Carousel</a></li>
                                    <li><a href="ui-video.html">Video</a></li>
                                    <li><a href="ui-typography.html">Typography</a></li>
                                    <li><a href="ui-sweet-alert.html">Sweet-Alert</a></li>
                                    <li><a href="ui-grid.html">Grid</a></li>
                                    <li><a href="ui-animation.html">Animation</a></li>
                                    <li><a href="ui-highlight.html">Highlight</a></li>
                                    <li><a href="ui-rating.html">Rating</a></li>
                                    <li><a href="ui-nestable.html">Nestable</a></li>
                                    <li><a href="ui-alertify.html">Alertify</a></li>
                                    <li><a href="ui-rangeslider.html">Range Slider</a></li>
                                    <li><a href="ui-sessiontimeout.html">Session Timeout</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-clipboard-outline"></i><span> Visite <span class="badge badge-pill badge-success pull-right">9</span> </span></a>
                                <ul class="list-unstyled">
                                    <li><a href="form-elements.html">Form Elements</a></li>
                                    <li><a href="form-validation.html">Form Validation</a></li>
                                    <li><a href="form-advanced.html">Form Advanced</a></li>
                                    <li><a href="form-wizard.html">Form Wizard</a></li>
                                    <li><a href="form-editors.html">Form Editors</a></li>
                                    <li><a href="form-uploads.html">Form File Upload</a></li>
                                    <li><a href="form-mask.html">Form Mask</a></li>
                                    <li><a href="form-summernote.html">Summernote</a></li>
                                    <li><a href="form-xeditable.html">Form Xeditable</a></li>
                                </ul>
                            </li>

                            

                            <li class="menu-title">Administration</li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-account-location"></i><span> Praticien <span class="pull-right"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                                <ul class="list-unstyled">
                                    <li><a href="index.php?page=praticien">Praticien</a></li>
                                    <li><a href="index.php?page=Type_praticien">Type Praticien</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-google-pages"></i><span> Consultation <span class="pull-right"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                                <ul class="list-unstyled">
                                    <li><a href="">Motif</a></li>
                                    <li><a href="index.php?page=pathologie">Pathologie</a></li>
                                    <li><a href="pages-directory.html">Directory</a></li>
                                    <li><a href="index.php?page=lesion">Lésion</a></li>
                                    <li><a href="index.php?page=accident">Accident</a></li>
                                    <li><a href="index.php?page=soins">Soins</a></li>
                                    <li><a href="index.php?page=Acte">Actes</a></li>
                                    <li><a href="index.php?page=Cause">Cause</a></li>
                                    <li><a href="index.php?page=Specialite">Spécialité</a></li>
                                    <li><a href="index.php?page=examen">Examen</a></li>
                                    <li><a href="index.php?page=type_examen">Type examen</a></li>
                                    <li><a href="index.php?page=Etape">Etape</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-cart-outline"></i><span> Societe <span class="pull-right"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                                <ul class="list-unstyled">
                                    <li><a href="index.php?page=entite">Société</a></li>
                                    <li><a href="index.php?page=proffessions">Profession</a></li>
                                    <li><a href="index.php?page=agentL">Agent</a></li>
                                    <li><a href="index.php?page=ayant_droitL">Ayant droit</a></li>
                                    <li><a href="index.php?page=autreL">Autre</a></li>
                                    <li><a href="index.php?page=Lieu_travail">Lieu de travail</a></li>
                                    <li><a href="index.php?page=Type_contrat">Type Contrat</a></li>
                                    <li><a href="index.php?page=categorie">Catégorie</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-account-location"></i><span> Assurance <span class="pull-right"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                                <ul class="list-unstyled">
                                    <li><a href="index.php?page=Assurance">Assurance</a></li>
                                    <li><a href="index.php?page=Carte_assurence">Carte Assurance</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-flask-outline"></i><span> Pharmacie <span class="pull-right"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                                <ul class="list-unstyled">
                                    <li><a href="index.php?page=medicament">Médicament</a></li>
                                    <li><a href="index.php?page=Famille_Medicament">Famille des medicaments</a></li>
                                    <li><a href="index.php?page=Forme_Medicament">Forme des médicaments</a></li>
                                    <li><a href="index.php?page=Famille_Medicament">Nature du mouvement</a></li>
                                    <li><a href="">Fournisseur</a></li>
                                    <li><a href="">Bon de Commande</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-flask-outline"></i><span> Utilisateur <span class="pull-right"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                                <ul class="list-unstyled">
                                    <li><a href="">Utilisateurs</a></li>
                                    <li><a href="">Fonctionnalité</a></li>
                                    <li><a href="">Profil</a></li>
                                    <li><a href="">Config circuit</a></li>
                                    <li><a href="">Circuit partient</a></li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div> <!-- end sidebarinner -->
            </div>
            <!-- Left Sidebar End -->


            <!-- Start right Content here -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">

                    <!-- Top Bar Start -->
                    <div class="topbar">

                        <nav class="navbar-custom">
                            <!-- Search input -->
                            <div class="search-wrap" id="search-wrap">
                                <div class="search-bar">
                                    <input class="search-input" type="search" placeholder="Search" />
                                    <a href="#" class="close-search toggle-search" data-target="#search-wrap">
                                        <i class="mdi mdi-close-circle"></i>
                                    </a>
                                </div>
                            </div>

                            <ul class="list-inline float-right mb-0">
                                <!-- Search -->
                                <li class="list-inline-item dropdown notification-list">
                                    <a class="nav-link waves-effect toggle-search" href="#"  data-target="#search-wrap">
                                        <i class="mdi mdi-magnify noti-icon"></i>
                                    </a>
                                </li>
                                <!-- Fullscreen -->
                                <li class="list-inline-item dropdown notification-list hidden-xs-down">
                                    <a class="nav-link waves-effect" href="#" id="btn-fullscreen">
                                        <i class="mdi mdi-fullscreen noti-icon"></i>
                                    </a>
                                </li>
                                <!-- language-->
                                <li class="list-inline-item dropdown notification-list hidden-xs-down">
                                    <a class="nav-link dropdown-toggle arrow-none waves-effect text-muted" data-toggle="dropdown" href="#" role="button"
                                       aria-haspopup="false" aria-expanded="false">
                                        French <img src="assets/images/flags/french_flag.jpg" class="ml-2" height="16" alt=""/>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right language-switch">
                                        <a class="dropdown-item" href="#"><img src="assets/images/flags/germany_flag.jpg" alt="" height="16"/><span> German </span></a>
                                        <a class="dropdown-item" href="#"><img src="assets/images/flags/italy_flag.jpg" alt="" height="16"/><span> Italian </span></a>
                                        <a class="dropdown-item" href="#"><img src="assets/images/flags/us_flag.jpg" alt="" height="16"/><span> English </span></a>
                                        <a class="dropdown-item" href="#"><img src="assets/images/flags/spain_flag.jpg" alt="" height="16"/><span> Spanish </span></a>
                                        <a class="dropdown-item" href="#"><img src="assets/images/flags/russia_flag.jpg" alt="" height="16"/><span> Russian </span></a>
                                    </div>
                                </li>
                                <!-- notification-->
                                <li class="list-inline-item dropdown notification-list">
                                    <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button"
                                       aria-haspopup="false" aria-expanded="false">
                                        <i class="ion-ios7-bell noti-icon"></i>
                                        <span class="badge badge-danger noti-icon-badge">3</span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-menu-lg">
                                        <!-- item-->
                                        <div class="dropdown-item noti-title">
                                            <h5>Notification (3)</h5>
                                        </div>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                            <div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>
                                            <p class="notify-details"><b>Your order is placed</b><small class="text-muted">Dummy text of the printing and typesetting industry.</small></p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-warning"><i class="mdi mdi-message"></i></div>
                                            <p class="notify-details"><b>New Message received</b><small class="text-muted">You have 87 unread messages</small></p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-info"><i class="mdi mdi-martini"></i></div>
                                            <p class="notify-details"><b>Your item is shipped</b><small class="text-muted">It is a long established fact that a reader will</small></p>
                                        </a>

                                        <!-- All-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            View All
                                        </a>

                                    </div>
                                </li>
                                <!-- User-->
                                <li class="list-inline-item dropdown notification-list">
                                    <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button"
                                       aria-haspopup="false" aria-expanded="false">
                                        <img src="assets/images/users/avatar-1.jpg" alt="user" class="rounded-circle">
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                        <a class="dropdown-item" href="#"><i class="dripicons-user text-muted"></i> Profile</a>
                                        <a class="dropdown-item" href="#"><i class="dripicons-wallet text-muted"></i> My Wallet</a>
                                        <a class="dropdown-item" href="#"><span class="badge badge-success pull-right m-t-5">5</span><i class="dripicons-gear text-muted"></i> Settings</a>
                                        <a class="dropdown-item" href="#"><i class="dripicons-lock text-muted"></i> Lock screen</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="login.php"><i class="dripicons-exit text-muted"></i> Logout</a>
                                    </div>
                                </li>
                            </ul>

                            <!-- Page title -->
                            <ul class="list-inline menu-left mb-0">
                                <li class="list-inline-item">
                                    <button type="button" class="button-menu-mobile open-left waves-effect">
                                        <i class="ion-navicon"></i>
                                    </button>
                                </li>
                                <li class="hide-phone list-inline-item app-search">
                                    <h3 class="page-title"><?php echo $_GET["page"];?></h3>
                                </li>
                            </ul>

                            <div class="clearfix"></div>
                        </nav>

                    </div>
                    <!-- Top Bar End -->

                    <!-- ==================
                         PAGE CONTENT START
                         ================== -->

                    <div class="page-content-wrapper">

                        <div class="container">
                            <?php 
                                if (!empty($_GET["page"])) {
                                    # code...
                                include($_GET["page"].'.php'); 
                                }else {
                                include("consulJour.php"); 

                                }                           

                            ?>
                            
                        </div><!-- container -->

                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->


            </div>
            <!-- End Right content here -->

        </div>
        <!-- END wrapper -->


<?php 
}?>
        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/tether.min.js"></script><!-- Tether for Bootstrap -->
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/modernizr.min.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        <script src="ajax.js"></script>

        <!-- Responsive-table-->
        <script src="assets/plugins/sparklines-chart/jquery.sparkline.min.js"></script>
        <script src="assets/pages/directory.init.js"></script>
        <script src="assets/plugins/RWD-Table-Patterns/dist/js/rwd-table.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-steps/jquery.steps.min.js"></script>


<!-- Required datatable js -->
        <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="assets/plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
        <script src="assets/plugins/datatables/jszip.min.js"></script>
        <script src="assets/plugins/datatables/pdfmake.min.js"></script>
        <script src="assets/plugins/datatables/vfs_fonts.js"></script>
        <script src="assets/plugins/datatables/buttons.html5.min.js"></script>
        <script src="assets/plugins/datatables/buttons.print.min.js"></script>
        <script src="assets/plugins/datatables/buttons.colVis.min.js"></script>
        <!-- Responsive examples -->
        <script src="assets/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="assets/plugins/datatables/responsive.bootstrap4.min.js"></script>

        <!-- Datatable init js -->
        <script src="assets/pages/datatables.init.js"></script>


        <script>
            console.log("salut");
            $(function() {
                $('.table-responsive').responsiveTable({
                    addDisplayAllBtn: 'btn btn-secondary'
                });
            });

            $("#form-horizontal").steps({
                    headerTag: "h3",
                    bodyTag: "fieldset",
                    transitionEffect: "slide"
                });


        </script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>

    </body>

<!-- Mirrored from themesdesign.in/admiria/layouts/vertical-light-sidebar/tables-responsive.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Nov 2017 12:15:47 GMT -->
</html>

