<!DOCTYPE html>

<html lang="fr">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <title>Hackathon Santé Nancy</title>

         <!-- Vendor CSS -->
        <link href="vendors/bower_components/jquery-ui-1.11.4/jquery-ui.css" rel="stylesheet">
        <link href="vendors/bower_components/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
        <link href="vendors/bower_components/animate.css/animate.min.css" rel="stylesheet">
        <link href="vendors/bower_components/bootstrap-sweetalert/lib/sweet-alert.css" rel="stylesheet">
        <link href="vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css" rel="stylesheet">

         <!-- CSS -->
        <!-- <link href="css/app.min.1.css" rel="stylesheet"> -->
        <link href="css/app.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">

    </head>

    <body>

        <header id="header">
            <ul class="header-inner">
                <li id="menu-trigger" data-trigger="#sidebar">
                    <div class="line-wrap">
                        <div class="line top"></div>
                        <div class="line center"></div>
                        <div class="line bottom"></div>
                    </div>
                </li>
            
                <li class="logo hidden-xs">
                    <a href="index.php">Hackathon Santé Nancy</a>
                </li>
                
                <li class="pull-right">
                <ul class="top-menu">
<!--                     <li class="hidden-xs" id="chat-trigger" data-trigger="#chat">
                        <a class="tm-chat" href=""></a>
                    </li>
 -->
                    <li id="top-search">
                        <a class="tm-search" href="search.php"></a>
                    </li>

                    <!-- Planning des gardes -->
                    <li class="dropdown hidden-xs">
                        <a data-toggle="dropdown" class="tm-task" href=""><i class="tmn-counts">2</i></a>
                        <div class="dropdown-menu pull-right dropdown-menu-lg">
                            <div class="listview">
                                <div class="lv-header">
                                    Planning des Gardes
                                </div>
                                <div class="lv-body">
                                    <div class="lv-item">
                                        <div class="lv-title m-b-5">John</div>
                    
                                                <span class="">5H - Samedi 26 sept 2015</span>
                                    </div>
                                    <hr style="margin: 0;">
                                    <div class="lv-item">
                                        <div class="lv-title m-b-5">Guillaume</div>
                    
                                                <span class="">22H - Dimanche 27 sept 2015</span>
                                        
                                    </div>
                                    <hr style="margin: 0;">
                                    <div class="lv-item">
                                        <div class="lv-title m-b-5">Paul</div>
                    
                                                <span class="">00H - Dimanche 27 sept 2015</span>
                                    </div>
                                    <hr style="margin: 0;">
                                    <div class="lv-item">
                                        <div class="lv-title m-b-5">Arnaud</div>
                    
                                                <span class="">23H - Mardi 12 oct 2015</span>
                                        
                                    </div>
                                    <hr style="margin: 0;">
                                    <div class="lv-item">
                                        <div class="lv-title m-b-5">Matthieu</div>
                    
                                                <span class="">21H - Lundi 28 oct 2015</span>
                                        
                                    </div>
                                </div>
                    
                                <a class="lv-footer" href="">Voir toutes les gardes</a>
                            </div>
                        </div>
                    </li>

                    <!-- Messages -->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="tm-message" href=""><i class="tmn-counts">5</i></a>
                        <div class="dropdown-menu dropdown-menu-lg pull-right">
                            <div class="listview">
                                <div class="lv-header">
                                    Messages
                                </div>
                                <div class="lv-body">
                                    <a class="lv-item" href="">
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="lv-img-sm" src="img/profile-pics/1.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="lv-title">David Belle</div>
                                                <small class="lv-small">Hey, tu veux changer ta garde avec moi?</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="lv-item" href="">
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="lv-img-sm" src="img/profile-pics/2.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="lv-title">Jonathan Morris</div>
                                                <small class="lv-small">Pas trop fatigué?</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="lv-item" href="">
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="lv-img-sm" src="img/profile-pics/3.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="lv-title">Fredric Mitchell Jr.</div>
                                                <small class="lv-small">Rdv demain matin 6h</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="lv-item" href="">
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="lv-img-sm" src="img/profile-pics/4.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="lv-title">Glenn Jecobs</div>
                                                <small class="lv-small">Epitech c'est les meilleurs</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="lv-item" href="">
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="lv-img-sm" src="img/profile-pics/4.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="lv-title">Bill Phillips</div>
                                                <small class="lv-small">Super hackathon!</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <a class="lv-footer" href="">Voir toutes les conversations</a>
                            </div>
                        </div>
                    </li>

                    <!-- Notifications -->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="tm-notification" href=""><i class="tmn-counts">9</i></a>
                        <div class="dropdown-menu dropdown-menu-lg pull-right">
                            <div class="listview" id="notifications">
                                <div class="lv-header">
                                    Notifications
                    
                                    <ul class="actions">
                                        <li class="dropdown">
                                            <a href="" data-clear="notification">
                                                <i class="zmdi zmdi-check-all"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="lv-body">
                                    <a class="lv-item" href="">
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="lv-img-sm" src="img/profile-pics/1.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="lv-title">David Belle</div>
                                                <small class="lv-small">Hey, tu veux changer ta garde avec moi?</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="lv-item" href="">
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="lv-img-sm" src="img/profile-pics/2.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="lv-title">Jonathan Morris</div>
                                                <small class="lv-small">Pas trop fatigué?</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="lv-item" href="">
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="lv-img-sm" src="img/profile-pics/3.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="lv-title">Fredric Mitchell Jr.</div>
                                                <small class="lv-small">Rdv demain matin 6h</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="lv-item" href="">
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="lv-img-sm" src="img/profile-pics/4.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="lv-title">Glenn Jecobs</div>
                                                <small class="lv-small">Epitech c'est les meilleurs</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="lv-item" href="">
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="lv-img-sm" src="img/profile-pics/4.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="lv-title">Bill Phillips</div>
                                                <small class="lv-small">Super hackathon!</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                    
                                <a class="lv-footer" href="">Voir toutes les notifications</a>
                            </div>
                    
                        </div>
                    </li>

                    <!-- Options -->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="tm-settings" href=""></a>
                        <ul class="dropdown-menu dm-icon pull-right">
                            <li>
                                <a href=""><i class="zmdi zmdi-settings"></i> Se déconnecter</a>
                            </li>
                        </ul>
                    </li>
                </li>
            </ul>
            
            <!-- Top Search Content -->
            <div id="top-search-wrap">
                <input type="text">
                <i id="top-search-close">&times;</i>
            </div>
        </header>

        