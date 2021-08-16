<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>DISTRICT SAINT JEAN PAUL II</title>

        <!-- Bootstrap Core CSS -->
        <link href="../templantes/css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="../templantes/css/metisMenu.min.css" rel="stylesheet">

        <!-- Timeline CSS -->
        <link href="../templantes/css/timeline.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../templantes/css/startmin.css" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="../templantes/css/morris.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="../templantes/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- LES CRIPTS PROPRES POUR LA CONCEPTION DE L'APPLICATION
        =========================================== -->
		<link rel="stylesheet" href="vues/css/labo.css">
		<script type="text/javascript" src="../js/ajax.js"></script>
		<script type="text/javascript" src="../js/navigation.js"></script>
		<script type="text/javascript" src="../js/validation.js"></script>       
        <script type="text/javascript" src="../js/fonction.js"></script>
        <script type="text/javascript" src="../js/type.js"></script>
        <script type="text/javascript" src="../js/pays.js"></script>
        <script type="text/javascript" src="../js/communaute.js"></script>
        <script type="text/javascript" src="../js/frere.js"></script>
        <script type="text/javascript" src="../js/anneTravail.js"></script>
        <script type="text/javascript" src="../js/affectation.js"></script>
        <script type="text/javascript" src="../js/article.js"></script>
        <script type="text/javascript" src="../js/livre.js"></script>
        <script type="text/javascript" src="../js/autresfonctions.js"></script>
        <script type="text/javascript" src="../js/jquery-3.4.1.js"></script> 

    </head>
    <body>

        <div id="wrapper">

            <!-- Début partie de navigation -->

            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <a class="navbar-brand" href="menu.php">Administration</a>
                </div>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <ul class="nav navbar-nav navbar-left navbar-top-links">
                    <li><a href="menu.php"><i class="fa fa-home fa-fw"></i> Accueil</a></li>
                </ul>

                 <!-- Début partie profile-->

                <ul class="nav navbar-right navbar-top-links">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i> Admin <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#"><i class="fa fa-user fa-fw"></i>Profile</a>
                            </li>
                            <li><a href="#"><i class="fa fa-gear fa-fw"></i>Réglages</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="#"><i class="fa fa-sign-out fa-fw"></i>Se déconnecter</a> 
                            </li>
                        </ul>
                    </li>
                </ul>

                <!-- Fin partie profile-->

                <!-- Début partie de sidebar -->

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">

                              <!-- Début recherche -->

                            <!--li class="sidebar-search">
                                <div class="input-group custom-search-form">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                </div> 
                            </li-->

                            <!-- Fin recherche-->

                            <!-- Début partie logo-->

                            <li class="sidebar-search">
                                <div id="loader_icon" class="loader_div" ></div>
                                <img src="..templantes/img/logo.jpg" class="img-circle img-responsive">
                            </li>

                            <!-- Fin partie logo-->

                            <li>
                                <a href="menu.php"><i class="fa fa-dashboard fa-fw"></i> Accueil</a>
                            </li>

                            <!-- les différents menu de sidebar (1 Gestion obédiance)---> 

                            <li>
                                <a href="javascript:;" onclick="lienvers('#fonction','0');"><i class="fa fa fa-server"></i> <span>Créer fonction</span></a>
                            </li>

                            <li>
                            <a href="#"><i class="fa fa-id-card"></i> Gestion obédiance<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="javascript:;" onclick="lienvers('#type','0');"  ><i class="fa fa-bars"></i> <span>Créer type</span></a>
                                    </li>
                                    <li>
                                        <a href="javascript:;" onclick="lienvers('#communaute','0');"  ><i class="fa fa-bars"></i> <span>Créer communauté</span></a>
                                    </li>
                                    <li>
                                        <a href="javascript:;" onclick="lienvers('#pays','0');"  ><i class="fa fa-bars"></i> <span>Créer pays</span></a>
                                    </li>
                                    <li>
                                        <a href="javascript:;" onclick="lienvers('#frere','0');"  ><i class="fa fa-bars"></i> <span>Créer frère</span></a>
                                    </li>
                                    <li>
                                        <a href="javascript:;" onclick="lienvers('#anneTravail','0');"  ><i class="fa fa-bars"></i> <span>Créer année</span></a>
                                    </li>
                                    <li>
                                        <a href="javascript:;" onclick="lienvers('#affectation','0');"  ><i class="fa fa-bars"></i> <span>Créer affectation</span></a>
                                    </li>
                                    <li>
                                        <a href="javascript:;" onclick="lienvers('#livre','0');"  ><i class="fa fa-bars"></i> <span>Créer livre</span></a>
                                    </li>

                                </ul>
                            </li>

                            <!-- les différents menu de sidebar (2 Gestion forum)---> 

                            <li>
                            <a href="#"><i class="fa fa-mortar-board"></i> Gestion formun<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="javascript:;" onclick="lienvers('#type','0');"  ><i class="fa fa-bars"></i> <span>Créer type</span></a>
                                    </li>
                                    <li>
                                        <a href="javascript:;" onclick="lienvers('#communaute','0');"  ><i class="fa fa-bars"></i> <span>Créer communauté</span></a>
                                    </li>
                                    <li>
                                        <a href="javascript:;" onclick="lienvers('#pays','0');"  ><i class="fa fa-bars"></i> <span>Créer pays</span></a>
                                    </li>
                                </ul>
                            </li>

                            <!-- les différents menu de sidebar (3 Gestion scolaire)---> 

                            <li>
                            <a href="#"><i class="fa fa-product-hunt"></i> Gestion scolaire<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="javascript:;" onclick="lienvers('#type','0');"  ><i class="fa fa-bars"></i> <span>Créer type</span></a>
                                    </li>
                                    <li>
                                        <a href="javascript:;" onclick="lienvers('#communaute','0');"  ><i class="fa fa-bars"></i> <span>Créer communauté</span></a>
                                    </li>
                                    <li>
                                        <a href="javascript:;" onclick="lienvers('#pays','0');"  ><i class="fa fa-bars"></i> <span>Créer pays</span></a>
                                    </li>
                                </ul>
                            </li>

                            <!-- les différents menu de sidebar (4 Gestion de blog)---> 

                            <li>
                            <a href="#"><i class="fa fa-users"></i>Gestion blog<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="javascript:;" onclick="lienvers('#article','0');"  ><i class="fa fa-bars"></i> <span> Rédiger un article</span></a>
                                    </li>
                                    <li>
                                        <a href="javascript:;" onclick="lienvers('#communaute','0');"  ><i class="fa fa-bars"></i> <span>Créer communauté</span></a>
                                    </li>
                                    <li>
                                        <a href="javascript:;" onclick="lienvers('#pays','0');"  ><i class="fa fa-bars"></i> <span>Créer pays</span></a>
                                    </li>
                                </ul>
                            </li>

                            <!-- les différents menu de sidebar (5 Gestion de messagerie)---> 

                            <li>
                            <a href="#"><i class="fa fa-edit fa-fw"></i> Gestion messagerie<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="javascript:;" onclick="lienvers('#type','0');"  ><i class="fa fa-bars"></i> <span>Créer accueil</span></a>
                                    </li>
                                    <li>
                                        <a href="javascript:;" onclick="lienvers('#communaute','0');"  ><i class="fa fa-bars"></i> <span>Créer a propos</span></a>
                                    </li>
                                    <li>
                                        <a href="javascript:;" onclick="lienvers('#pays','0');"  ><i class="fa fa-bars"></i> <span>Créer galerie</span></a>
                                    </li>
                                </ul>
                            </li>

                            <!-- les différents menu de sidebar (6 Gestion de site)--->

                            <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i>Gestion de site<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="javascript:;" onclick="lienvers('#type','0');"  ><i class="fa fa-bars"></i> <span>Nouveau</span></a>
                                    </li>
                                    <li>
                                        <a href="javascript:;" onclick="lienvers('#communaute','0');"  ><i class="fa fa-bars"></i> <span>Envoyé</span></a>
                                    </li>
                                    <li>
                                        <a href="javascript:;" onclick="lienvers('#pays','0');"  ><i class="fa fa-bars"></i> <span>Annulé</span></a>
                                    </li>
                                </ul>
                            </li>

                            <!-- les différents menu de sidebar (7 Gestion de données)--->

                            <li>
                                <a href="#"><i class="fa fa-sitemap fa-fw"></i> Les données<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="javascript:;" onclick="lienvers('#type','0');"  ><i class="fa fa-bars"></i> <span>Nouveau</span></a>
                                    </li>
                                    <li>
                                        <a href="javascript:;" onclick="lienvers('#communaute','0');"  ><i class="fa fa-bars"></i> <span>Envoyé</span></a>
                                    </li>
                                    <li>
                                        <a href="javascript:;" onclick="lienvers('#pays','0');"  ><i class="fa fa-bars"></i> <span>Annulé</span></a>
                                    </li>
                                </ul>
                            </li>


                            <!-- les différents menu de sidebar (8 Gestion de pages)--->

                            <li>
                                <a href="#"><i class="fa fa-files-o fa-fw"></i>Gestion pages<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="javascript:;" onclick="lienvers('#type','0');"  ><i class="fa fa-bars"></i> <span>Nouveau</span></a>
                                    </li>
                                    <li>
                                        <a href="javascript:;" onclick="lienvers('#communaute','0');"  ><i class="fa fa-bars"></i> <span>Envoyé</span></a>
                                    </li>
                                    <li>
                                        <a href="javascript:;" onclick="lienvers('#pays','0');"  ><i class="fa fa-bars"></i> <span>Annulé</span></a>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                        
                    </div>
               
                </div>

                <!-- Fin partie de sidebar -->
            </nav>
            <!-- Fin partie de navigation -->

            <!-- -------------------------------------------------Ici nous commençons autres choses---------------------------------->

            <!-- Début contenu de la page-->

            <div id="page-wrapper">

                <div class="container-fluid">

                    <!-- Début tableau de bord de la page-->

                    <div class="row">
                        <div class="col-lg-12">
                            <h3 class="page-header">GESTION DES FRERES DE DISTRICT SAINT JEAN PAUL II RDC-RWANDA 2020-2021</h3>
                        </div>
                    </div>

                    <!-- Fin tableau de bord de la page-->

                    <!-- Début de statistiques de la page-->

                    <div class="row">

                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-users fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">40</div>
                                            <div>Total frères RDC</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#">
                                    <div class="panel-footer">
                                        <span class="pull-left">Voir plus !</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-green">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-users fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">35</div>
                                            <div>Total frère Rwanda</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#">
                                    <div class="panel-footer">
                                        <span class="pull-left">Voir plus </span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-yellow">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-tasks fa-5x"></i>
                                            <i class="fas fa-house"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">20</div>
                                            <div>Total oeuvre</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#">
                                    <div class="panel-footer">
                                        <span class="pull-left">Voir plus</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-red">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-tasks fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">26</div>
                                            <div>Total communauté</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#">
                                    <div class="panel-footer">
                                        <span class="pull-left">Voir plus !</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <hr>

                    <!-- Fin de statistiques de la page-->

                    <!-- Début affichage toutes les pages via javascript-->

                    <div id="conteneur">
                            
                    </div>

                    <!-- Fin affichage toutes les pages via javascript-->

                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="../templantes/js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../templantes/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../templantes/js/metisMenu.min.js"></script>

        <!-- Morris Charts JavaScript -->
        <script src="../templantes/js/raphael.min.js"></script>
        <script src="../templantes/js/morris.min.js"></script>
       

        <!-- Custom Theme JavaScript -->
        <script src="../templantes/js/startmin.js"></script>

    </body>
</html>
