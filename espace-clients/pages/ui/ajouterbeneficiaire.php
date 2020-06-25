<?php 
session_start();
require '../../../dbConnect.php';

$id = $_SESSION['id'];
 $bddd = Database::connect();
 $insertions = $bddd->query("SELECT * FROM beneficiaire WHERE userid = $id");




 ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>PETROLEUM BANK-ESPACE CLEINT</title>
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
            <p>Please wait...</p>
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
                 <a href="javascript:void(0);" class="bars"></a><img style="margin-top: 0px" src="../../../images/banner/logo.png">
                <a class="navbar-brand" href="index.php">PETROLEUM BANk</a>
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
                            <span class="label-count">0</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">NOTIFICATIONS</li>
                            <li class="body">
                                <ul class="menu">
                                    <li>pas de notification...</li>
                        </ul>
                    </li>
                    <!-- #END# Notifications -->
                    <!-- Tasks -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">flag</i>
                            <span class="label-count"></span>
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
                <?php
                $id2 = $_SESSION['id'];
                 $insertions2 = $bddd->query("SELECT * FROM souscription WHERE id = $id2");
                $result2 = $insertions2->fetch(); ?>
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
                                <a href="virement.php">Nouveau virement</a>
                            </li>
                            <li>
                                <a href="virement.php">Historique des virement</a>
                            </li>
                            <li>
                                <a href="ajouterbeneficiaire.php">Ajouter Bénéficiaire</a>
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
            #Menu 
            <!-- Footer -->
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
            
            <!-- Modal Size Example -->
            <!-- #END# Modal Size Example -->
            <!-- Task Info -->
            <a style="margin-left: 20px;" href="ajouterbeneficiaire.php">Actualiser</a>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2> Gestion des bénéficiaires
Vous pouvez gérer à tout moment la liste de vos bénéficiaires pour en consulter les détails, les supprimer ou les activer si vous recevez votre code d’activation par courrier. Plus besoin d'attendre 72h à l'avance, cela ne prend que quelques clics !

</h2>
                            <div class="body">
                            
                            <button type="button" class="btn btn-primary waves-effect m-r-20" data-toggle="modal" data-target="#largeModal">AJOUTER</button>
                            
                        </div>
                        </div>

                        
                               
                        
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover dashboard-task-infos">
                                    <thead>
                                        <tr>
                                            <th>Num</th>
                                            <th>Nom&Prenom</th>
                                            <th>Bic</th>
                                            <th>Iban</th>
                                            <th>Pays</th>
                                        </tr>
                                    </thead>
                                    <?php 
                               while ($result = $insertions->fetch()) { ?>
                                  
                                    <tbody>
                                        <tr>
                                            <td><?php  echo $result['id'] ?></td>
                                            <td><?php echo $result['nometprenom'] ?></td>
                                            <td><span class="label bg-green"><?php echo $result['bic'] ?></span></td>
                                            <td><?php echo $result['iban'] ?></td>
                                            <td><?php echo $result['pays'] ?></td>
                                            
                                        </tr>
                                        
                                        
                                        
                                        
                                    </tbody>
                                    <?php } ?>
                                </table>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <!-- #END# Task Info -->
            <!-- Modal Dialogs ====================================================================================================================== -->
            <!-- Default Size -->
            <div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Modal title</h4>
                        </div>
                        <div class="modal-body">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sodales orci ante, sed ornare eros vestibulum ut. Ut accumsan
                            vitae eros sit amet tristique. Nullam scelerisque nunc enim, non dignissim nibh faucibus ullamcorper.
                            Fusce pulvinar libero vel ligula iaculis ullamcorper. Integer dapibus, mi ac tempor varius, purus
                            nibh mattis erat, vitae porta nunc nisi non tellus. Vivamus mollis ante non massa egestas fringilla.
                            Vestibulum egestas consectetur nunc at ultricies. Morbi quis consectetur nunc.
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-link waves-effect">SAVE CHANGES</button>
                            <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Large Size -->
            <div class="modal fade" id="largeModal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="largeModalLabel"></h4>
                        </div>
                        <div class="modal-body">
                              <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    
                        <div class="header">
                            <h2>
                                Ajouter un bénéficiaire
                            </h2>
                            
                        </div>
                        <div class="body">
                            <form method="post" action="ajaxbeneficiaire.php" class="form-horizontal">
                                <div style="margin-bottom: 5px" class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Email</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email address">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style="margin-bottom: 5px" class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="password_2">Nom et prénom *</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="name" name="name" class="form-control" placeholder="Nom et prénom">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style="margin-bottom: 5px" class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="password_2">BIC/SWIFT *</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="bic" id="bic" name="bic" class="form-control" placeholder="BIC/SWIFT *">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style="margin-bottom: 5px" class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="password_2">IBAN *</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="iban" name="iban" class="form-control" placeholder="IBAN ">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style="margin-bottom: 5px" class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="password_2">Pays</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <select class="custom-select" name="pays" id="pays" aria-label="Example select with button addon">
                                    <option selected>Nationalité du bénéficiaire</option>
                                    <option value="AF">Afghanistan 🇦🇫</option>
      
      
             
                                    <option value="AZ">Azerbaijan 🇦🇿</option>
                              
                              
                                    <option value="BI">Burundi 🇧🇮</option>
                              
                              
                                    <option value="BE">Belgium 🇧🇪</option>
                              
                              
                                    <option value="BJ">Benin 🇧🇯</option>
                              
                              
                                    <option value="BF">Burkina Faso 🇧🇫</option>
                              
                              
                                    <option value="BD">Bangladesh 🇧🇩</option>
                              
                              
                                    <option value="BG">Bulgaria 🇧🇬</option>
                              
                              
                                    <option value="BH">Bahrain 🇧🇭</option>
                              
                              
                                    <option value="BS">Bahamas 🇧🇸</option>
                              
                              
                                    <option value="BA">Bosnia and Herzegovina 🇧🇦</option>
                              
                              
                                    <option value="BY">Belarus 🇧🇾</option>
                              
                              
                                    <option value="BZ">Belize 🇧🇿</option>
                              
                              
                                    <option value="BO">Bolivia 🇧🇴</option>
                              
                              
                                    <option value="BR">Brazil 🇧🇷</option>
                              
                              
                                    <option value="BB">Barbados 🇧🇧</option>
                              
                              
                                    <option value="BN">Brunei 🇧🇳</option>
                              
                              
                                    <option value="BT">Bhutan 🇧🇹</option>
                              
                              
                                    <option value="BW">Botswana 🇧🇼</option>
                              
                              
                                    <option value="CF">Central African Republic 🇨🇫</option>
                              
                              
                                    <option value="CA">Canada 🇨🇦</option>
                              
                              
                                    <option value="CH">Switzerland 🇨🇭</option>
                              
                              
                                    <option value="CL">Chile 🇨🇱</option>
                              
                              
                                    <option value="CN">China 🇨🇳</option>
                              
                              
                                    <option value="CI">Ivory Coast 🇨🇮</option>
                              
                              
                                    <option value="CM">Cameroon 🇨🇲</option>
                              
                              
                                    <option value="CD">DR Congo 🇨🇩</option>
                              
                              
                                    <option value="CG">Republic of the Congo 🇨🇬</option>
                              
                              
                                    <option value="CO">Colombia 🇨🇴</option>
                              
                              
                                    <option value="KM">Comoros 🇰🇲</option>
                              
                              
                                    <option value="CV">Cape Verde 🇨🇻</option>
                              
                              
                                    <option value="CR">Costa Rica 🇨🇷</option>
                              
                              
                                    <option value="CU">Cuba 🇨🇺</option>
                              
                              
                                    <option value="CY">Cyprus 🇨🇾</option>
                              
                              
                                    <option value="CZ">Czechia 🇨🇿</option>
                              
                              
                                    <option value="DE">Germany 🇩🇪</option>
                              
                              
                                    <option value="DJ">Djibouti 🇩🇯</option>
                              
                              
                                    <option value="DM">Dominica 🇩🇲</option>
                              
                              
                                    <option value="DK">Denmark 🇩🇰</option>
                              
                              
                                    <option value="DO">Dominican Republic 🇩🇴</option>
                              
                              
                                    <option value="DZ">Algeria 🇩🇿</option>
                              
                              
                                    <option value="EC">Ecuador 🇪🇨</option>
                              
                              
                                    <option value="EG">Egypt 🇪🇬</option>
                              
                              
                                    <option value="ER">Eritrea 🇪🇷</option>
                              
                              
                                    <option value="ES">Spain 🇪🇸</option>
                              
                              
                                    <option value="EE">Estonia 🇪🇪</option>
                              
                              
                                    <option value="ET">Ethiopia 🇪🇹</option>
                              
                              
                                    <option value="FI">Finland 🇫🇮</option>
                              
                              
                                    <option value="FJ">Fiji 🇫🇯</option>
                              
                              
                                    <option value="FR">France 🇫🇷</option>
                              
                              
                                    <option value="FM">Micronesia 🇫🇲</option>
                              
                              
                                    <option value="GA">Gabon 🇬🇦</option>
                              
                              
                                    <option value="GB">United Kingdom 🇬🇧</option>
                              
                              
                                    <option value="GE">Georgia 🇬🇪</option>
                              
                              
                                    <option value="GH">Ghana 🇬🇭</option>
                              
                              
                                    <option value="GN">Guinea 🇬🇳</option>
                              
                              
                                    <option value="GM">Gambia 🇬🇲</option>
                              
                              
                                    <option value="GW">Guinea-Bissau 🇬🇼</option>
                              
                              
                                    <option value="GQ">Equatorial Guinea 🇬🇶</option>
                              
                              
                                    <option value="GR">Greece 🇬🇷</option>
                              
                              
                                    <option value="GD">Grenada 🇬🇩</option>
                              
                              
                                    <option value="GT">Guatemala 🇬🇹</option>
                              
                              
                                    <option value="GY">Guyana 🇬🇾</option>
                              
                              
                                    <option value="HN">Honduras 🇭🇳</option>
                              
                              
                                    <option value="HR">Croatia 🇭🇷</option>
                              
                              
                                    <option value="HT">Haiti 🇭🇹</option>
                              
                              
                                    <option value="HU">Hungary 🇭🇺</option>
                              
                              
                                    <option value="ID">Indonesia 🇮🇩</option>
                              
                              
                                    <option value="IN">India 🇮🇳</option>
                              
                              
                                    <option value="IE">Ireland 🇮🇪</option>
                              
                              
                                    <option value="IR">Iran 🇮🇷</option>
                              
                              
                                    <option value="IQ">Iraq 🇮🇶</option>
                              
                              
                                    <option value="IS">Iceland 🇮🇸</option>
                              
                              
                                    <option value="IL">Israel 🇮🇱</option>
                              
                              
                                    <option value="IT">Italy 🇮🇹</option>
                              
                              
                                    <option value="JM">Jamaica 🇯🇲</option>
                              
                              
                                    <option value="JO">Jordan 🇯🇴</option>
                              
                              
                                    <option value="JP">Japan 🇯🇵</option>
                              
                              
                                    <option value="KZ">Kazakhstan 🇰🇿</option>
                              
                              
                                    <option value="KE">Kenya 🇰🇪</option>
                              
                              
                                    <option value="KG">Kyrgyzstan 🇰🇬</option>
                              
                              
                                    <option value="KH">Cambodia 🇰🇭</option>
                              
                              
                                    <option value="KI">Kiribati 🇰🇮</option>
                              
                              
                                    <option value="KN">Saint Kitts and Nevis 🇰🇳</option>
                              
                              
                                    <option value="KR">South Korea 🇰🇷</option>
                              
                              
                                    <option value="KW">Kuwait 🇰🇼</option>
                              
                              
                                    <option value="LA">Laos 🇱🇦</option>
                              
                              
                                    <option value="LB">Lebanon 🇱🇧</option>
                              
                              
                                    <option value="LR">Liberia 🇱🇷</option>
                              
                              
                                    <option value="LY">Libya 🇱🇾</option>
                              
                              
                                    <option value="LC">Saint Lucia 🇱🇨</option>
                              
                              
                                    <option value="LI">Liechtenstein 🇱🇮</option>
                              
                              
                                    <option value="LK">Sri Lanka 🇱🇰</option>
                              
                              
                                    <option value="LS">Lesotho 🇱🇸</option>
                              
                              
                                    <option value="LT">Lithuania 🇱🇹</option>
                              
                              
                                    <option value="LU">Luxembourg 🇱🇺</option>
                              
                              
                                    <option value="LV">Latvia 🇱🇻</option>
                              
                              
                                    <option value="MA">Morocco 🇲🇦</option>
                              
                              
                                    <option value="MC">Monaco 🇲🇨</option>
                              
                              
                                    <option value="MD">Moldova 🇲🇩</option>
                              
                              
                                    <option value="MG">Madagascar 🇲🇬</option>
                              
                              
                                    <option value="MV">Maldives 🇲🇻</option>
                              
                              
                                    <option value="MX">Mexico 🇲🇽</option>
                              
                              
                                    <option value="MH">Marshall Islands 🇲🇭</option>
                              
                              
                                    <option value="MK">Macedonia 🇲🇰</option>
                              
                              
                                    <option value="ML">Mali 🇲🇱</option>
                              
                              
                                    <option value="MT">Malta 🇲🇹</option>
                              
                              
                                    <option value="MM">Myanmar 🇲🇲</option>
                              
                              
                                    <option value="ME">Montenegro 🇲🇪</option>
                              
                              
                                    <option value="MN">Mongolia 🇲🇳</option>
                              
                              
                                    <option value="MZ">Mozambique 🇲🇿</option>
                              
                              
                                    <option value="MR">Mauritania 🇲🇷</option>
                              
                              
                                    <option value="MU">Mauritius 🇲🇺</option>
                              
                              
                                    <option value="MW">Malawi 🇲🇼</option>
                              
                              
                                    <option value="MY">Malaysia 🇲🇾</option>
                              
                              
                                    <option value="NA">Namibia 🇳🇦</option>
                              
                              
                                    <option value="NE">Niger 🇳🇪</option>
                              
                              
                                    <option value="NG">Nigeria 🇳🇬</option>
                              
                              
                                    <option value="NI">Nicaragua 🇳🇮</option>
                              
                              
                                    <option value="NL">Netherlands 🇳🇱</option>
                              
                              
                                    <option value="NO">Norway 🇳🇴</option>
                              
                              
                                    <option value="NP">Nepal 🇳🇵</option>
                              
                              
                                    <option value="NR">Nauru 🇳🇷</option>
                              
                              
                                    <option value="NZ">New Zealand 🇳🇿</option>
                              
                              
                                    <option value="OM">Oman 🇴🇲</option>
                              
                              
                                    <option value="PK">Pakistan 🇵🇰</option>
                              
                              
                                    <option value="PA">Panama 🇵🇦</option>
                              
                              
                                    <option value="PE">Peru 🇵🇪</option>
                              
                              
                                    <option value="PH">Philippines 🇵🇭</option>
                              
                              
                                    <option value="PW">Palau 🇵🇼</option>
                              
                              
                                    <option value="PG">Papua New Guinea 🇵🇬</option>
                              
                              
                                    <option value="PL">Poland 🇵🇱</option>
                              
                              
                                    <option value="KP">North Korea 🇰🇵</option>
                              
                              
                                    <option value="PT">Portugal 🇵🇹</option>
                              
                              
                                    <option value="PY">Paraguay 🇵🇾</option>
                              
                              
                                    <option value="QA">Qatar 🇶🇦</option>
                              
                              
                                    <option value="RO">Romania 🇷🇴</option>
                              
                              
                                    <option value="RU">Russia 🇷🇺</option>
                              
                              
                                    <option value="RW">Rwanda 🇷🇼</option>
                              
                              
                                    <option value="SA">Saudi Arabia 🇸🇦</option>
                              
                              
                                    <option value="SD">Sudan 🇸🇩</option>
                              
                              
                                    <option value="SN">Senegal 🇸🇳</option>
                              
                              
                                    <option value="SG">Singapore 🇸🇬</option>
                              
                              
                                    <option value="SB">Solomon Islands 🇸🇧</option>
                              
                              
                                    <option value="SL">Sierra Leone 🇸🇱</option>
                              
                              
                                    <option value="SV">El Salvador 🇸🇻</option>
                              
                              
                                    <option value="SM">San Marino 🇸🇲</option>
                              
                              
                                    <option value="SO">Somalia 🇸🇴</option>
                              
                              
                                    <option value="RS">Serbia 🇷🇸</option>
                              
                              
                                    <option value="SS">South Sudan 🇸🇸</option>
                              
                              
                                    <option value="ST">São Tomé and Príncipe 🇸🇹</option>
                              
                              
                                    <option value="SR">Suriname 🇸🇷</option>
                              
                              
                                    <option value="SK">Slovakia 🇸🇰</option>
                              
                              
                                    <option value="SI">Slovenia 🇸🇮</option>
                              
                              
                                    <option value="SE">Sweden 🇸🇪</option>
                              
                              
                                    <option value="SZ">Swaziland 🇸🇿</option>
                              
                              
                                    <option value="SC">Seychelles 🇸🇨</option>
                              
                              
                                    <option value="SY">Syria 🇸🇾</option>
                              
                              
                                    <option value="TD">Chad 🇹🇩</option>
                              
                              
                                    <option value="TG">Togo 🇹🇬</option>
                              
                              
                                    <option value="TH">Thailand 🇹🇭</option>
                              
                              
                                    <option value="TJ">Tajikistan 🇹🇯</option>
                              
                              
                                    <option value="TM">Turkmenistan 🇹🇲</option>
                              
                              
                                    <option value="TL">Timor-Leste 🇹🇱</option>
                              
                              
                                    <option value="TO">Tonga 🇹🇴</option>
                              
                              
                                    <option value="TT">Trinidad and Tobago 🇹🇹</option>
                              
                              
                                    <option value="TN">Tunisia 🇹🇳</option>
                              
                              
                                    <option value="TR">Turkey 🇹🇷</option>
                              
                              
                                    <option value="TV">Tuvalu 🇹🇻</option>
                              
                              
                                    <option value="TZ">Tanzania 🇹🇿</option>
                              
                              
                                    <option value="UG">Uganda 🇺🇬</option>
                              
                              
                                    <option value="UA">Ukraine 🇺🇦</option>
                              
                              
                                    <option value="UY">Uruguay 🇺🇾</option>
                              
                              
                                    <option value="US">United States 🇺🇸</option>
                              
                              
                                    <option value="UZ">Uzbekistan 🇺🇿</option>
                              
                              
                                    <option value="VA">Vatican City 🇻🇦</option>
                              
                              
                                    <option value="VC">Saint Vincent and the Grenadines 🇻🇨</option>
                              
                              
                                    <option value="VE">Venezuela 🇻🇪</option>
                              
                              
                                    <option value="VN">Vietnam 🇻🇳</option>
                              
                              
                                    <option value="VU">Vanuatu 🇻🇺</option>
                              
                              
                                    <option value="WS">Samoa 🇼🇸</option>
                              
                              
                                    <option value="YE">Yemen 🇾🇪</option>
                              
                              
                                    <option value="ZA">South Africa 🇿🇦</option>
                              
                              
                                    <option value="ZM">Zambia 🇿🇲</option>
                              
                              
                                    <option value="ZW">Zimbabwe 🇿🇼</option>
                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--<div class="row clearfix">
                                    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                        <button type="button" class="btn btn-primary m-t-15 waves-effect">Envoyer</button>
                                    </div>

                                </div> -->
                                <div style="margin-left: 10%" class="message_box"></div>
                        <div class="modal-footer">
                            <input type="submit" class="btn  waves-effect bg-theme" value="Valider">
                            <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">Fermer</button>

                        </div>
                            </form>
                        </div>
                    
                </div>
            </div>
                        </div>
                        
                    </div>
                </div>
            </div>

            <!-- Small Size -->
            <div class="modal fade" id="smallModal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="smallModalLabel">Modal title</h4>
                        </div>
                        <div class="modal-body">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sodales orci ante, sed ornare eros vestibulum ut. Ut accumsan
                            vitae eros sit amet tristique. Nullam scelerisque nunc enim, non dignissim nibh faucibus ullamcorper.
                            Fusce pulvinar libero vel ligula iaculis ullamcorper. Integer dapibus, mi ac tempor varius, purus
                            nibh mattis erat, vitae porta nunc nisi non tellus. Vivamus mollis ante non massa egestas fringilla.
                            Vestibulum egestas consectetur nunc at ultricies. Morbi quis consectetur nunc.
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-link waves-effect">SAVE CHANGES</button>
                            <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- For Material Design Colors -->
            <div class="modal fade" id="mdModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Modal title</h4>
                        </div>
                        <div class="modal-body">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sodales orci ante, sed ornare eros vestibulum ut. Ut accumsan
                            vitae eros sit amet tristique. Nullam scelerisque nunc enim, non dignissim nibh faucibus ullamcorper.
                            Fusce pulvinar libero vel ligula iaculis ullamcorper. Integer dapibus, mi ac tempor varius, purus
                            nibh mattis erat, vitae porta nunc nisi non tellus. Vivamus mollis ante non massa egestas fringilla.
                            Vestibulum egestas consectetur nunc at ultricies. Morbi quis consectetur nunc.
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-link waves-effect">SAVE CHANGES</button>
                            <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                        </div>
                    </div>
                </div>
            </div>
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

    <!-- Bootstrap Notify Plugin Js -->
    <script src="../../plugins/bootstrap-notify/bootstrap-notify.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../../plugins/node-waves/waves.js"></script>

    <!-- Custom Js -->
    <script src="../../js/admin.js"></script>
    <script src="../../js/pages/ui/modals.js"></script>

    <!-- Demo Js -->
    <script src="../../js/demo.js"></script>
    <script src="js/jquery.min.js"></script>
<script>
$(document).ready(function() {
    var delay = 2000;
    $('.bg-theme').click(function(e){
        e.preventDefault();
        
        var name = $('#name').val();
        if(name == ''){
            $('.message_box').html(
            '<span style="color:red;">Entrer le nom du bénéficiaire!</span>'
            );
            $('#name').focus();
            return false;
            }

            var bic = $('#bic').val();
        if(bic == ''){
            $('.message_box').html(
            '<span style="color:red;">Enter le BIC/SWIFT!</span>'
            );
            $('#bic').focus();
            return false;
            }

            var iban = $('#iban').val();
        if(iban == ''){
            $('.message_box').html(
            '<span style="color:red;">Veuillez IBAN!</span>'
            );
            $('#iban').focus();
            return false;
            }

            var pays = $('#pays').val();
        if(pays == ''){
            $('.message_box').html(
            '<span style="color:red;">Veuillez IBAN!</span>'
            );
            $('#pays').focus();
            return false;
            }

            var email = $('#email').val();
        if(email == ''){
            $('.message_box').html(
            '<span style="color:red;">Entrer une adresse email!</span>'
            );
            $('#email').focus();
            return false;
            }
        if( $("#email").val()!='' ){
            if( !isValidEmailAddress( $("#email").val() ) ){
            $('.message_box').html(
            '<span style="color:red;">L\'addresse Email entré est incorrect!</span>'
            );
            $('#email').focus();
            return false;
            }
            }

        
        
            
        //var message = $('#message').val();
        //if(message == ''){
           // $('.message_box').html(
            //'<span style="color:red;">Enter Your Message Here!</span>'
            //);
            //$('#message').focus();
            //return false;
            //}   
                    
            $.ajax
            ({
             type: "POST",
             url: "ajaxbeneficiaire.php",
             data: "name="+name+"&bic="+bic+"&iban="+iban+"&email="+email+"&pays="+pays,
             beforeSend: function() {
             $('.message_box').html(
             '<img src="Loader.gif" width="25" height="25"/>'
             );
             },      
             success: function(data)
             {
                 setTimeout(function() {
                    $('.message_box').html(data);
                    
                }, delay);
            
             }
             });
    });
            
});
//Email validation Function 
function isValidEmailAddress(emailAddress) {
    var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
    return pattern.test(emailAddress);
};

</script>
</body>

</html>