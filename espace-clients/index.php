<?php session_start(); 
 require '../dbConnect.php';
 $id = $_SESSION['id'];
 $bddd = Database::connect();
 $insertions = $bddd->query("SELECT * FROM souscription WHERE id = $id");
 $result = $insertions->fetch();


?>
<!DOCTYPE html>
<html>

<head>
    <style>
    .btn.btn-file
        {
            cursor: pointer;
            border-radius: inherit;
            position: relative;
            overflow: hidden;
        }
        .btn.btn-file>input[type="file"]
        {
            position: absolute;
            opacity: 0;
            top: 0;
            right: 0;
            outline: none;
            background-color: #fff;
            display: inline-flex;
            width: 100%;
            padding: 0.4em;
            filter: alpha(opacity=0);
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Petroleum espace client</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">
    <!-- JQuery DataTable Css -->
    <link href="plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="css/themes/all-themes.css" rel="stylesheet" />

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
                <a href="javascript:void(0);" class="bars"></a><img style="margin-top: 0px" src="../images/banner/logo.png">
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
                            <span class="label-count">4</span>
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
                                                <h4>Bienvenue sur l'espace</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i>1 min déja
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
                                                <h4>Nous contactez</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> abyssiniea@gmail.com
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
                                                <h4><b>Nos</b> numeros</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> +3325422552145225
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
                                    
                                    
                                    
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="javascript:void(0);">Fin notifications</a>
                            </li>
                        </ul>
                    </li>
                    <!-- #END# Notifications -->
                    <!-- Tasks -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">flag</i>
                            <span class="label-count">3</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">TACHE</li>
                            <li class="body">
                                <ul class="menu tasks">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Frequence
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
                                                Progression 
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
                                                Espace virement prealable
                                                <small>54%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-teal" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 54%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    
                                    
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="javascript:void(0);">Fin des taches</a>
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
                    <img src="../document/<?php echo $result['photo']; ?>" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['name']; ?></div>
                    <div class="email"><?php echo $_SESSION['email']; ?></div>
                    
                    
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="seperator" class="divider"></li>
                            
                            
                            <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                            <li role="seperator" class="divider"></li>
                            <li><a href="deconnexion.php"><i class="material-icons">input</i>Deconnexion</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MEGA MENU</li>
                    <li class="active">
                        <a href="index.php">
                            <i class="material-icons">home</i>
                            <span>Compte</span>
                        </a>
                    </li>
                    
                    

                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">swap_calls</i>
                            <span>Virement</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="pages/ui/virement.php">Nouveau virement</a>
                            </li>
                            <li>
                                <a href="pages/ui/virement.php">Historique des virement</a>
                            </li>
                            <li>
                                <a href="pages/ui/ajouterbeneficiaire.php">Ajouter Bénéficiaire</a>
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
                                <a href="pages/forms/nouveau-message.php">Nouveau message</a>
                            </li>
                            <li>
                                <a href="pages/forms/message-envoyes.php">Message envoyé</a>
                            </li>
                            <li>
                                <a href="pages/forms/message-recu.php">Message reçu</a>
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
                                <a href="pages/ui/profil.php">Mon profil</a>
                            </li>
                            <li>
                                <a href="pages/ui/modifierpassword.php">Modifier mot de passe</a>
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
                                <a href="pages/forms/demandecredit.php">Mes crédits</a>
                            </li>
                            <li>
                                <a href="pages/forms/demandecredit.php">Démander un crédit</a>
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
                                <a href="pages/ui/virement.php">Effectuer un virement</a>
                            </li>
                            <li>
                                <a href="pages/charts/chartjs.html">Mon RIB</a>
                            </li>
                            <li>
                                <a href="pages/charts/sparkline.html">Relevés d'opérations</a>
                            </li>
                            
                        </ul>
                    </li>

                    <div class="email">
                     <form  method="post" action="changeprofil.php" enctype="multipart/form-data">

                      <div class="btn btn-default btn-file">
                        <label>Choisir la photo</label>
                          <input type="file" name="avatar" id="avatar"> 

                      </div>


                      <input type="submit" name="" value="changer">

                  </form>
                    </div>
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
                </ul> #Menu -->
            </div>
            
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

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Synthèse des comptes</h2>
                <p>consulter et gérer et temps réel vos compte et opérations en ligne.</p><li style="width: 10px; height: 20px;" class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="langues" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i style=" font-size:20px;" class="fa fa-globe hidden-xs hidden-sm hidden-md"></i> </a>
                            <ul class="dropdown-menu langues" aria-labelledby="langues">
                                <li><a class="dropdown-item lang" href="javascript:void()" onclick="window.location.hash='#googtrans(en)';location.reload();"><img style="width:15px; height:15px; margin-top:-2px; border-radius:50%" src="assets/lg/gb.png">&nbsp;&nbsp;Anglais&nbsp;&nbsp;</a></li>
                                <li><a class="dropdown-item lang" href="javascript:void()" onclick="window.location.hash='#googtrans(de)';location.reload();"><img style="width:15px; height:15px; margin-top:-2px; border-radius:50%" src="assets/lg/de.png">&nbsp;&nbsp;Allemand&nbsp;&nbsp;</a></li>
                                <li><a class="dropdown-item lang" href="javascript:void()" onclick="window.location.hash='#googtrans(bg)';location.reload();"><img style="width:15px; height:15px; margin-top:-2px; border-radius:50%" src="assets/lg/bg.png">&nbsp;&nbsp;Bulgare&nbsp;&nbsp;</a></li>
                                <li><a class="dropdown-item lang" href="javascript:void()" onclick="window.location.hash='#googtrans(hr)';location.reload();"><img style="width:15px; height:15px; margin-top:-2px; border-radius:50%" src="assets/lg/cr.png">&nbsp;&nbsp;Croate&nbsp;&nbsp;</a></li>
                                <li><a class="dropdown-item lang" href="javascript:void()" onclick="window.location.hash='#googtrans(es)';location.reload();"><img style="width:15px; height:15px; margin-top:-2px; border-radius:50%" src="assets/lg/es.png">&nbsp;&nbsp;Espagnol&nbsp;&nbsp;</a></li>
                                <li><a class="dropdown-item lang" href="javascript:void()" onclick="window.location.hash='#googtrans(et)';location.reload();"><img style="width:15px; height:15px; margin-top:-2px; border-radius:50%" src="assets/lg/et.png">&nbsp;&nbsp;Estonien&nbsp;&nbsp;</a></li>
                                <li><a class="dropdown-item lang" href="javascript:void()" onclick="window.location.hash='#googtrans(fr)';location.reload();"><img style="width:15px; height:15px; margin-top:-2px; border-radius:50%" src="assets/lg/fr.png">&nbsp;&nbsp;Français&nbsp;&nbsp;</a></li>
                                <li><a class="dropdown-item lang" href="javascript:void()" onclick="window.location.hash='#googtrans(fi)';location.reload();"><img style="width:15px; height:15px; margin-top:-2px; border-radius:50%" src="assets/lg/fi.png">&nbsp;&nbsp;Finnois&nbsp;&nbsp;</a></li>
                                <li><a class="dropdown-item lang" href="javascript:void()" onclick="window.location.hash='#googtrans(hu)';location.reload();"><img style="width:15px; height:15px; margin-top:-2px; border-radius:50%" src="assets/lg/hg.png">&nbsp;&nbsp;Hongrois&nbsp;&nbsp;</a></li>
                                <li><a class="dropdown-item lang" href="javascript:void()" onclick="window.location.hash='#googtrans(it)';location.reload();"><img style="width:15px; height:15px; margin-top:-2px; border-radius:50%" src="assets/lg/it.png">&nbsp;&nbsp;Italien&nbsp;&nbsp;</a></li>
                                <li><a class="dropdown-item lang" href="javascript:void()" onclick="window.location.hash='#googtrans(nl)';location.reload();"><img style="width:15px; height:15px; margin-top:-2px; border-radius:50%" src="assets/lg/pb.png">&nbsp;&nbsp;Néerlandais&nbsp;&nbsp;</a></li>
                                <li><a class="dropdown-item lang" href="javascript:void()" onclick="window.location.hash='#googtrans(pl)';location.reload();"><img style="width:15px; height:15px; margin-top:-2px; border-radius:50%" src="assets/lg/pn.png">&nbsp;&nbsp;Polonais&nbsp;&nbsp;</a></li>
                                <li><a class="dropdown-item lang" href="javascript:void()" onclick="window.location.hash='#googtrans(pt)';location.reload();"><img style="width:15px; height:15px; margin-top:-2px; border-radius:50%" src="assets/lg/pt.png">&nbsp;&nbsp;Portugais&nbsp;&nbsp;</a></li>
                                <li><a class="dropdown-item lang" href="javascript:void()" onclick="window.location.hash='#googtrans(ru)';location.reload();"><img style="width:15px; height:15px; margin-top:-2px; border-radius:50%" src="assets/lg/ru.png">&nbsp;&nbsp;Russe&nbsp;&nbsp;</a></li>
                                <li><a class="dropdown-item lang" href="javascript:void()" onclick="window.location.hash='#googtrans(sk)';location.reload();"><img style="width:15px; height:15px; margin-top:-2px; border-radius:50%" src="assets/lg/sq.png">&nbsp;&nbsp;Slovaque&nbsp;&nbsp;</a></li>
                                <li><a class="dropdown-item lang" href="javascript:void()" onclick="window.location.hash='#googtrans(cs)';location.reload();"><img style="width:15px; height:15px; margin-top:-2px; border-radius:50%" src="assets/lg/cz.png">&nbsp;&nbsp;Tchèque&nbsp;&nbsp;</a></li>
                                <li><a class="dropdown-item lang" href="javascript:void()" onclick="window.location.hash='#googtrans(uk)';location.reload();"><img style="width:15px; height:15px; margin-top:-2px; border-radius:50%" src="assets/lg/uk.png">&nbsp;&nbsp;Ukrainien&nbsp;&nbsp;</a></li>
                            </ul>
                        </li>
            </div>

            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">playlist_add_check</i>
                        </div>
                        <div class="content">
                            <div class="text">Solde a la date 12/12/2002 (en €)</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $result['solde'] ;?>" data-speed="15" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">help</i>
                        </div>
                        <div class="content">
                            <div class="text">Opérations à venir (en €)</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $result['avenir']  ;?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">forum</i>
                        </div>
                        <div class="content">
                            <div class="text">Previsionnel (en €)</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $result['previsionnel'] ;?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">person_add</i>
                        </div>
                        <div class="content">
                            <div class="text">Dernière session</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo time() ;?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Widgets -->
            <!-- CPU Usage -->
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>Taux d'accroissement de votre banque en temps réel (%)</h2>
                            <div class="pull-right">
                                <div class="switch panel-switch-btn">
                                    <span class="m-r-10 font-12">REAL TIME</span>
                                    <label>OFF<input type="checkbox" id="realtime" checked><span class="lever switch-col-cyan"></span>ON</label>
                                </div>
                            </div>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div id="real_time_chart" class="dashboard-flot-chart"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# CPU Usage -->
            <div class="row clearfix">
                <!-- Visitors -->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="body bg-pink">
                            <div class="sparkline" data-type="line" data-spot-Radius="4" data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#fff"
                                 data-min-Spot-Color="rgb(255,255,255)" data-max-Spot-Color="rgb(255,255,255)" data-spot-Color="rgb(255,255,255)"
                                 data-offset="90" data-width="100%" data-height="92px" data-line-Width="2" data-line-Color="rgba(255,255,255,0.7)"
                                 data-fill-Color="rgba(0, 188, 212, 0)">
                               compte
                            </div>
                            <ul class="dashboard-stat-list">
                                <li>
                                    N de compte:
                                    <span class="pull-right"><b>3245122XXXXXXX</b> <small></small></span>
                                </li>
                                <li>
                                    Bic
                                    <span class="pull-right"><b>BRXXXX</b> <small></small></span>
                                </li>
                                <li>
                                    Iban
                                    <span class="pull-right"><b>xxxxxxxxxx125xx</b> <small></small></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- #END# Visitors -->
                <!-- Latest Social Trends -->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="body bg-cyan">
                            <div class="m-b--35 font-bold">Opérations à venir</div>
                            <ul class="dashboard-stat-list">
                                <li>
                                   Virement
                                    <span class="pull-right">
                                        <i class="material-icons">inactif</i>
                                    </span>
                                </li>
                                <li>
                                    Transfert
                                    <span class="pull-right">
                                        <i class="material-icons">pas de demande</i>
                                    </span>
                                </li><br>
                                <li>Vos fond peut être transferer sur votre propre banque</li>
                                <li></li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- #END# Latest Social Trends -->
                <!-- Answered Tickets -->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="body bg-teal">
                            <div class="font-bold m-b--35">Etat du compte</div>
                            <ul class="dashboard-stat-list">
                                <li>
                                    ETAT
                                    <span class="pull-right"><b>inactif</b> <small></small></span>
                                </li>
                                <li>
                                    TRANSFERT
                                    <span class="pull-right"><b>possible</b> <small></small></span>
                                </li>
                                <li>
                                   VIREMENT
                                    <span class="pull-right"><b>impossible</b> <small></small></span>
                                </li>
                                <li>
                                    RENDRE ACTIFS
                                    <span class="pull-right"><b>contactez la banque</b> <small></small></span>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- #END# Answered Tickets -->
            </div>
                          <!-- <div class="row clearfix">
                Task Info 
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                    <div class="card">
                        <div class="header">
                            <h2>TASK INFOS</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover dashboard-task-infos">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Task</th>
                                            <th>Status</th>
                                            <th>Manager</th>
                                            <th>Progress</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Task A</td>
                                            <td><span class="label bg-green">Doing</span></td>
                                            <td>John Doe</td>
                                            <td>
                                                <div class="progress">
                                                    <div class="progress-bar bg-green" role="progressbar" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100" style="width: 62%"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Task B</td>
                                            <td><span class="label bg-blue">To Do</span></td>
                                            <td>John Doe</td>
                                            <td>
                                                <div class="progress">
                                                    <div class="progress-bar bg-blue" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Task C</td>
                                            <td><span class="label bg-light-blue">On Hold</span></td>
                                            <td>John Doe</td>
                                            <td>
                                                <div class="progress">
                                                    <div class="progress-bar bg-light-blue" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width: 72%"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Task D</td>
                                            <td><span class="label bg-orange">Wait Approvel</span></td>
                                            <td>John Doe</td>
                                            <td>
                                                <div class="progress">
                                                    <div class="progress-bar bg-orange" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Task E</td>
                                            <td>
                                                <span class="label bg-red">Suspended</span>
                                            </td>
                                            <td>John Doe</td>
                                            <td>
                                                <div class="progress">
                                                    <div class="progress-bar bg-red" role="progressbar" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100" style="width: 87%"></div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                #END# Task Info 
                Browser Usage 
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="header">
                            <h2>BROWSER USAGE</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div id="donut_chart" class="dashboard-donut-chart"></div>
                        </div>
                    </div>
                </div>
                 #END# Browser Usage -->
              
                 <a style="margin-left: 40%; margin-bottom: 8%" href="pages/tables/tarifs.php" class="btn btn-primary waves">Consulter notre grille Tarifs</a>
            </div>
        </div>
    </section>
    

    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="plugins/jquery-countto/jquery.countTo.js"></script>

    <!-- Morris Plugin Js -->
    <script src="plugins/raphael/raphael.min.js"></script>
    <script src="plugins/morrisjs/morris.js"></script>

    <!-- ChartJs -->
    <script src="plugins/chartjs/Chart.bundle.js"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="plugins/flot-charts/jquery.flot.js"></script>
    <script src="plugins/flot-charts/jquery.flot.resize.js"></script>
    <script src="plugins/flot-charts/jquery.flot.pie.js"></script>
    <script src="plugins/flot-charts/jquery.flot.categories.js"></script>
    <script src="plugins/flot-charts/jquery.flot.time.js"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="plugins/jquery-sparkline/jquery.sparkline.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/index.js"></script>
    <!-- Jquery DataTable Plugin Js -->
    <script src="plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

    <!-- Custom Js -->
    
    <script src="js/pages/tables/jquery-datatable.js"></script>
    <!-- Demo Js -->
    <script src="js/demo.js"></script>
    
</body>

</html>