﻿<?php 
session_start();

require '../../../dbConnect.php';

$id = $_SESSION['id'];
$bddd = Database::connect();
$insertions = $bddd->query("SELECT * FROM message WHERE userid = $id");

$id2 = $_SESSION['id'];
$insertions2 = $bddd->query("SELECT * FROM souscription WHERE id = $id2");
$result2 = $insertions2->fetch();


 ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>PETROLEUM BANK - ESPACE CLIENT</title>
    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="../../plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="../../plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../../plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Sweet Alert Css -->
    <link href="../../plugins/sweetalert/sweetalert.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="../../css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="../../css/themes/all-themes.css" rel="stylesheet" />
    <script type="text/javascript">
          function googleTranslateElementInit() {
            new google.translate.TranslateElement({pageLanguage: 'fr'}, 'google_translate_element');
          }
        </script>
        <script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit" type="text/javascript"></script>
</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Veuillez patienter...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="../../index.php">ADMINBSB - MATERIAL DESIGN</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->
                    <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                    <!-- #END# Call Search -->
                    <!-- Notifications -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">notifications</i>
                            <span class="label-count">7</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">NOTIFICATIONS</li>
                            <li class="body">
                                <ul class="menu">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-light-green">
                                                <i class="material-icons">person_add</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>12 new members joined</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 14 mins ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-cyan">
                                                <i class="material-icons">add_shopping_cart</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>4 sales made</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 22 mins ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-red">
                                                <i class="material-icons">delete_forever</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>Nancy Doe</b> deleted account</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 3 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-orange">
                                                <i class="material-icons">mode_edit</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>Nancy</b> changed name</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 2 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-blue-grey">
                                                <i class="material-icons">comment</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>John</b> commented your post</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 4 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-light-green">
                                                <i class="material-icons">cached</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>John</b> updated status</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 3 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-purple">
                                                <i class="material-icons">settings</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>Settings updated</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> Yesterday
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="javascript:void(0);">View All Notifications</a>
                            </li>
                        </ul>
                    </li>
                    <!-- #END# Notifications -->
                    <!-- Tasks -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">flag</i>
                            <span class="label-count">9</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">TASKS</li>
                            <li class="body">
                                <ul class="menu tasks">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Footer display issue
                                                <small>32%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-pink" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 32%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Make new buttons
                                                <small>45%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-cyan" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Create new dashboard
                                                <small>54%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-teal" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 54%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Solve transition issue
                                                <small>65%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-orange" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 65%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Answer GitHub questions
                                                <small>92%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 92%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="javascript:void(0);">View All Tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- #END# Tasks -->
                    <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="../../../document/<?php echo $result2['photo']; ?>" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['name']; ?></div>
                    <div class="email"><?php echo $_SESSION['email']; ?></div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="seperator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                            <li role="seperator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
                        <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MEGE MENU</li>
                    <li class="active">
                        <a href="index.php">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    
                    

                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">swap_calls</i>
                            <span>Virement</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="../ui/virement.php">Nouveau virement</a>
                            </li>
                            <li>
                                <a href="../ui/virement.php">Historique des virement</a>
                            </li>
                            <li>
                                <a href="../ui/ajouterbeneficiaire.php">Ajouter Bénéficiaire</a>
                            </li>

                            
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">assignment</i>
                            <span>Message</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="../../pages/forms/nouveau-message.php">Nouveau message</a>
                            </li>
                            <li>
                                <a href="../forms/message-envoyes.php">Message envoyé</a>
                            </li>
                            <li>
                                <a href="../forms/message-recu.php">Message reçu</a>
                            </li>
                            
                            
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">view_list</i>
                            <span>Paramètre</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="../ui/profil.php">Mon profil</a>
                            </li>
                            <li>
                                <a href="../ui/modifierpassword.php">Modifier mot de passe</a>
                            </li>
                            
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">perm_media</i>
                            <span>Crédits</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="../forms/demandecredit.php">Mes crédits</a>
                            </li>
                            <li>
                                <a href="../forms/demandecredit.php">Démander un crédit</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">pie_chart</i>
                            <span>Comptes</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="#">Synthèse des comptes</a>
                            </li>
                            <li>
                                <a href="#">Effectuer un virement</a>
                            </li>
                            <li>
                                <a href="#">Mon RIB</a>
                            </li>
                            <li>
                                <a href="#">Relevés d'opérations</a>
                            </li>
                            
                        </ul>
                    </li>
                     <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">content_copy</i>
                            <span><i class="fa fa-globe"></i>Langues</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="javascript:void()" onclick="window.location.hash='#googtrans(en)';location.reload();"><img style="width:15px; height:15px; margin-top:-2px; border-radius:50%" src="assets/lg/gb.png">&nbsp;&nbsp;Anglais&nbsp;&nbsp;</a>
                            </li>
                            <li>
                                <a href="javascript:void()" onclick="window.location.hash='#googtrans(de)';location.reload();"><img style="width:15px; height:15px; margin-top:-2px; border-radius:50%" src="assets/lg/de.png">&nbsp;&nbsp;Allemand&nbsp;&nbsp;</a>
                            </li>
                            <li>
                                <a href="javascript:void()" onclick="window.location.hash='#googtrans(bg)';location.reload();"><img style="width:15px; height:15px; margin-top:-2px; border-radius:50%" src="assets/lg/bg.png">&nbsp;&nbsp;Bulgare&nbsp;&nbsp;</a>
                            </li>
                            <li>
                                <a href="javascript:void()" onclick="window.location.hash='#googtrans(hr)';location.reload();"><img style="width:15px; height:15px; margin-top:-2px; border-radius:50%" src="assets/lg/cr.png">&nbsp;&nbsp;Croate&nbsp;&nbsp;</a>
                            </li>
                            <li>
                                <a href="javascript:void()" onclick="window.location.hash='#googtrans(es)';location.reload();"><img style="width:15px; height:15px; margin-top:-2px; border-radius:50%" src="assets/lg/es.png">&nbsp;&nbsp;Espagnol&nbsp;&nbsp;</a>
                            </li>
                            <li>
                                <a href="javascript:void()" onclick="window.location.hash='#googtrans(et)';location.reload();"><img style="width:15px; height:15px; margin-top:-2px; border-radius:50%" src="assets/lg/et.png">&nbsp;&nbsp;Estonien&nbsp;&nbsp;</a>
                            </li>
                            <li>
                                <a href="javascript:void()" onclick="window.location.hash='#googtrans(fr)';location.reload();"><img style="width:15px; height:15px; margin-top:-2px; border-radius:50%" src="assets/lg/et.png">&nbsp;&nbsp;Français&nbsp;&nbsp;</a>
                            </li>
                             <li>
                                <a href="javascript:void()" onclick="window.location.hash='#googtrans(fi)';location.reload();"><img style="width:15px; height:15px; margin-top:-2px; border-radius:50%" src="assets/lg/et.png">&nbsp;&nbsp;Finois&nbsp;&nbsp;</a>
                            </li>
                            <li>
                                <a href="javascript:void()" onclick="window.location.hash='#googtrans(fi)';location.reload();"><img style="width:15px; height:15px; margin-top:-2px; border-radius:50%" src="assets/lg/et.png">&nbsp;&nbsp;Finois&nbsp;&nbsp;</a>
                            </li>
                            <li>
                                <a href="javascript:void()" onclick="window.location.hash='#googtrans(hu)';location.reload();"><img style="width:15px; height:15px; margin-top:-2px; border-radius:50%" src="assets/lg/et.png">&nbsp;&nbsp;Hongrois&nbsp;&nbsp;</a>
                            </li>
                            <li>
                                <a href="javascript:void()" onclick="window.location.hash='#googtrans(it)';location.reload();"><img style="width:15px; height:15px; margin-top:-2px; border-radius:50%" src="assets/lg/et.png">&nbsp;&nbsp;Italie&nbsp;&nbsp;</a>
                            </li>
                            <li>
                                <a href="javascript:void()" onclick="window.location.hash='#googtrans(nl)';location.reload();"><img style="width:15px; height:15px; margin-top:-2px; border-radius:50%" src="assets/lg/et.png">&nbsp;&nbsp;Néerlandais&nbsp;&nbsp;</a>
                            </li>
                            <li>
                                <a href="javascript:void()" onclick="window.location.hash='#googtrans(pl)';location.reload();"><img style="width:15px; height:15px; margin-top:-2px; border-radius:50%" src="assets/lg/et.png">&nbsp;&nbsp;Plolonais&nbsp;&nbsp;</a>
                            </li>
                            <li>
                                <a href="javascript:void()" onclick="window.location.hash='#googtrans(pt)';location.reload();"><img style="width:15px; height:15px; margin-top:-2px; border-radius:50%" src="assets/lg/et.png">&nbsp;&nbsp;Portugais&nbsp;&nbsp;</a>
                            </li>
                            <li>
                                <a href="javascript:void()" onclick="window.location.hash='#googtrans(ru)';location.reload();"><img style="width:15px; height:15px; margin-top:-2px; border-radius:50%" src="assets/lg/et.png">&nbsp;&nbsp;Russe&nbsp;&nbsp;</a>
                            </li>
                            <li>
                                <a href="javascript:void()" onclick="window.location.hash='#googtrans(sk)';location.reload();"><img style="width:15px; height:15px; margin-top:-2px; border-radius:50%" src="assets/lg/et.png">&nbsp;&nbsp;Slovaque&nbsp;&nbsp;</a>
                            </li>
                            <li>
                                <a href="javascript:void()" onclick="window.location.hash='#googtrans(cs)';location.reload();"><img style="width:15px; height:15px; margin-top:-2px; border-radius:50%" src="assets/lg/et.png">&nbsp;&nbsp;Tchèque&nbsp;&nbsp;</a>
                            </li>
                            <li>
                                <a href="javascript:void()" onclick="window.location.hash='#googtrans(uk)';location.reload();"><img style="width:15px; height:15px; margin-top:-2px; border-radius:50%" src="assets/lg/et.png">&nbsp;&nbsp;Ukrainien&nbsp;&nbsp;</a>
                            </li>
                        </ul>
                    </li>
                   <!-- <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">content_copy</i>
                            <span>Example Pages</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="pages/examples/sign-in.html">Sign In</a>
                            </li>
                            <li>
                                <a href="pages/examples/sign-up.html">Sign Up</a>
                            </li>
                            <li>
                                <a href="pages/examples/forgot-password.html">Forgot Password</a>
                            </li>
                            <li>
                                <a href="pages/examples/blank.html">Blank Page</a>
                            </li>
                            <li>
                                <a href="pages/examples/404.html">404 - Not Found</a>
                            </li>
                            <li>
                                <a href="pages/examples/500.html">500 - Server Error</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">map</i>
                            <span>Maps</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="pages/maps/google.html">Google Map</a>
                            </li>
                            <li>
                                <a href="pages/maps/yandex.html">YandexMap</a>
                            </li>
                            <li>
                                <a href="pages/maps/jvectormap.html">jVectorMap</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">trending_down</i>
                            <span>Multi Level Menu</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="javascript:void(0);">
                                    <span>Menu Item</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <span>Menu Item - 2</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <span>Level - 2</span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <span>Menu Item</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="menu-toggle">
                                            <span>Level - 3</span>
                                        </a>
                                        <ul class="ml-menu">
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <span>Level - 4</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="pages/changelogs.html">
                            <i class="material-icons">update</i>
                            <span>Changelogs</span>
                        </a>
                    </li>
                    <li class="header">LABELS</li>
                    <li>
                        <a href="javascript:void(0);">
                            <i class="material-icons col-red">donut_large</i>
                            <span>Important</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <i class="material-icons col-amber">donut_large</i>
                            <span>Warning</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <i class="material-icons col-light-blue">donut_large</i>
                            <span>Information</span>
                        </a>
                    </li>
                </ul> -->
            </div>
            #Menu             <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2020 <a href="javascript:void(0);"></a>.
                </div>
                <div class="version">
                    <b>Petroleum - bank </b>
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        <aside id="rightsidebar" class="right-sidebar">
            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                <li role="presentation" class="active"><a href="#skins" data-toggle="tab">SKINS</a></li>
                <li role="presentation"><a href="#settings" data-toggle="tab">SETTINGS</a></li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active in active" id="skins">
                    <ul class="demo-choose-skin">
                        <li data-theme="red" class="active">
                            <div class="red"></div>
                            <span>Red</span>
                        </li>
                        <li data-theme="pink">
                            <div class="pink"></div>
                            <span>Pink</span>
                        </li>
                        <li data-theme="purple">
                            <div class="purple"></div>
                            <span>Purple</span>
                        </li>
                        <li data-theme="deep-purple">
                            <div class="deep-purple"></div>
                            <span>Deep Purple</span>
                        </li>
                        <li data-theme="indigo">
                            <div class="indigo"></div>
                            <span>Indigo</span>
                        </li>
                        <li data-theme="blue">
                            <div class="blue"></div>
                            <span>Blue</span>
                        </li>
                        <li data-theme="light-blue">
                            <div class="light-blue"></div>
                            <span>Light Blue</span>
                        </li>
                        <li data-theme="cyan">
                            <div class="cyan"></div>
                            <span>Cyan</span>
                        </li>
                        <li data-theme="teal">
                            <div class="teal"></div>
                            <span>Teal</span>
                        </li>
                        <li data-theme="green">
                            <div class="green"></div>
                            <span>Green</span>
                        </li>
                        <li data-theme="light-green">
                            <div class="light-green"></div>
                            <span>Light Green</span>
                        </li>
                        <li data-theme="lime">
                            <div class="lime"></div>
                            <span>Lime</span>
                        </li>
                        <li data-theme="yellow">
                            <div class="yellow"></div>
                            <span>Yellow</span>
                        </li>
                        <li data-theme="amber">
                            <div class="amber"></div>
                            <span>Amber</span>
                        </li>
                        <li data-theme="orange">
                            <div class="orange"></div>
                            <span>Orange</span>
                        </li>
                        <li data-theme="deep-orange">
                            <div class="deep-orange"></div>
                            <span>Deep Orange</span>
                        </li>
                        <li data-theme="brown">
                            <div class="brown"></div>
                            <span>Brown</span>
                        </li>
                        <li data-theme="grey">
                            <div class="grey"></div>
                            <span>Grey</span>
                        </li>
                        <li data-theme="blue-grey">
                            <div class="blue-grey"></div>
                            <span>Blue Grey</span>
                        </li>
                        <li data-theme="black">
                            <div class="black"></div>
                            <span>Black</span>
                        </li>
                    </ul>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="settings">
                    <div class="demo-settings">
                        <p>GENERAL SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Report Panel Usage</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Email Redirect</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>SYSTEM SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Notifications</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Auto Updates</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>ACCOUNT SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Offline</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Location Permission</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </aside>
        <!-- #END# Right Sidebar -->
    </section>
   
    <section style="margin-top: 10%" class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    Message envoyés
                    
                </h2>
            </div>
           
            <!-- #END# Basic Example | Horizontal Layout -->
            <!-- Basic Example | Vertical Layout -->
<?php while ($result =  $insertions->fetch()) { ?>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Vos message envoyés son disponibles ici</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);"></a></li>
                                        <li><a href="javascript:void(0);"></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        
                            
                        
                        <div class="body">
                            <div id="wizard_vertical">
                                <h2>Email</h2>
                                <section>
                                    <p>
                                      <?php echo $result['email']; ?>          

                                    </p>
                                </section>

                                <h2>Sujet</h2>
                                <section>
                                    <p>
                                      <?php echo $result['sujet']; ?>
                                    </p>
                                </section>

                                <h2>Votre Message</h2>
                                <section>
                                    <p>
                                        <?php echo $result['message']; ?>
                                    </p>
                                </section>

                                <h2>Reponse</h2>
                                <section>
                                    <p>
                                        Notre banque vous remercie pour la fiabilité que vous nous aviez faite. Pour votre demande, elle est en cours. Nous la traitons et nous vous remercions dans quelques intervalles de temp
                                    </p>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             
            <!-- #END# Basic Example | Vertical Layout -->
                   <?php } ?>
            <!-- #END# Advanced Form Example With Validation -->
        </div>
    </section>
           
    <!-- Jquery Core Js -->
    <script src="../../plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../../plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="../../plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="../../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Jquery Validation Plugin Css -->
    <script src="../../plugins/jquery-validation/jquery.validate.js"></script>

    <!-- JQuery Steps Plugin Js -->
    <script src="../../plugins/jquery-steps/jquery.steps.js"></script>

    <!-- Sweet Alert Plugin Js -->
    <script src="../../plugins/sweetalert/sweetalert.min.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../../plugins/node-waves/waves.js"></script>

    <!-- Custom Js -->
    <script src="../../js/admin.js"></script>
    <script src="../../js/pages/forms/form-wizard.js"></script>

    <!-- Demo Js -->
    <script src="../../js/demo.js"></script>

</body>
</html>