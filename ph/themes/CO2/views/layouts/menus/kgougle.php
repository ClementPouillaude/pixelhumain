<style>
<?php if($subdomain == "page.type"){ ?>    
.navbar-custom.affix #main-title-top{
    display: inline;
}

input#second-search-bar{
    display: inline;
    font-size:13px;
    margin-bottom: 4px;
}
.navbar-custom.affix-top .menu-btn-start-search{
    display: inline;
}
.navbar-custom.affix #small_profil{
    display: inline;
}
<?php } ?>

.btn-star-fav {
    font-size: 20px;
    margin-top: 2px;
}
.navbar-header .nc_map {
    margin: 10px 5px 0 -10px;
}
.affix .navbar-header .nc_map {
    margin: 15px 10px 0 -15px;
}
#btn-sethome, #btn-apropos, #btn-radio{
    background-color: transparent !important;
    border:transparent;
}
#btn-sethome:hover, #btn-apropos:hover{
    color:white!important;
    background-color: #ea4335 !important;
    border:transparent;
}
.menu-btn-back-category{
    cursor:pointer;
}

a.text-dark.link-submenu-header {
    color : #ea4335 !important;
    padding-bottom: 5px;
}

a.link-submenu-header.active, 
a.link-submenu-header:hover, 
a.link-submenu-header:active, 
a.link-submenu-header:focus{  
    border-bottom: 2px solid #ea4335;
    text-decoration: none;
    /*background-color: rgba(255, 255, 255, 1);
    color:#ea4335 !important;
    text-decoration: none;*/
}


.navbar-collapse li .font-blackoutM, 
.navbar-map li .font-blackoutM{
    font-size:16px;
    letter-spacing: 0px;
}

.navbar-custom .btn-show-mainmenu{
    margin-top:7px;
    font-size: 25px;
    color: #595959;
    padding: 0 10px;
}


</style>

<!-- Navigation -->
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header pull-left">
           
            <?php if($subdomain == "web"){ ?>
                <a href="#web" class="menu-btn-back-category">
            <?php } else { ?>
                <a href="#web" class="lbh menu-btn-back-category">
            <?php } ?>
            <img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/img/KGOUGLE-logo.png" 
                     class="logo-menutop pull-left show-top hidden-xs hidden-sm" height=20>
            <img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/img/LOGOS/kgougle/logo-min-k.png" 
                     class="logo-menutop pull-left show-top visible-xs visible-sm" height=25>
            </a>

            <span class="hidden-xs skills font-montserrat <?php if($subdomain == "page.type") echo 'hidden-sm'; ?>">
                <?php echo $mainTitle; ?>
            </span>
            
            

            <?php if($subdomain != "page.type"){ ?>
                <?php if($subdomain == "web"){ ?>
                    <a href="#web" class="navbar-brand font-blackoutM menu-btn-back-category">
                <?php } else { ?>
                    <a href="#web" class="lbh navbar-brand font-blackoutM menu-btn-back-category">
                <?php } ?>
                <img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/img/KGOUGLE-logo.png" 
                     class="nc_map pull-left hidden-xs hidden-sm" height=20>
                
                <img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/img/LOGOS/kgougle/logo-min-k.png" 
                     class="nc_map pull-left visible-xs visible-sm" height=25>
                
                <!-- <small class="letter letter-red pastille font-blackoutT <?php if($subdomain == "page.type") echo 'hidden-sm'; ?>">
                    <?php //echo $subdomainName; ?>
                </small> -->
            </a>
            <?php }else{ ?>
                <div id="small_profil" class="hidden-top pull-left"></div>
            <?php } ?>
        </div>

        <?php if( $subdomain == "web" ||
                  $subdomain == "actu" ||
                  $subdomain == "search" ||
                  $subdomain == "social" ||
                  $subdomain == "agenda" ||
                  $subdomain == "power"  ||
                  $subdomain == "freedom"||
                  $subdomain == "admin"||
                  $subdomain == "page" ){ ?>
        
            <div id="input-sec-search" class="hidden-xs col-sm-4 col-md-3 col-lg-4">
                <input type="text" class="form-control" id="second-search-bar" 
                        placeholder="<?php echo $placeholderMainSearch; ?>">
                <?php if($subdomain == "page"){ ?>
                    <div class="dropdown-result-global-search hidden-xs col-sm-6 col-md-5 col-lg-5 no-padding"></div>
                <?php } ?>
            </div>
            <button class="btn btn-default hidden-xs pull-left menu-btn-start-search btn-directory-type" 
                    data-type="<?php echo @$type; ?>">
                    <i class="fa fa-search"></i>
            </button>

        <?php } ?>

        <button class="btn-show-map hidden-xs"  data-toggle="tooltip" data-placement="bottom" title="Afficher la carte">
            <i class="fa fa-map"></i>
        </button>
        <!-- <button class="btn-show-appmenu hidden-xs"  data-toggle="tooltip" data-placement="bottom" title="Afficher la carte">
            <i class="fa fa-th"></i>
        </button> -->

       <?php if( isset( Yii::app()->session['userId']) ){ ?>
            <button class="menu-button btn btn-link btn-open-floopdrawer text-dark" 
                  data-toggle="tooltip" data-placement="top" title="Mon réseau" alt="<?php echo Yii::t("common","My network") ?>">
              <i class="fa fa-link"></i>
            </button>
            <button class="btn-show-mainmenu btn btn-link" title="Menu">
                <i class="fa fa-bars tooltips" data-toggle="tooltip" data-placement="bottom" title=""></i>
            </button>
        <?php } ?>
        
        
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="pull-right navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <?php 
                    if( isset( Yii::app()->session['userId']) ){
                      $profilThumbImageUrl = Element::getImgProfil($me, "profilThumbImageUrl", $this->module->assetsUrl);
                      $countNotifElement = ActivityStream::countUnseenNotifications(Yii::app()->session["userId"], Person::COLLECTION, Yii::app()->session["userId"]);
                ?> 
                     
                    <a  href="#page.type.citoyens.id.<?php echo Yii::app()->session['userId']; ?>"
                        class="menu-name-profil lbh text-dark pull-right"
                        data-toggle="dropdown">
                                <small class="hidden-xs" id="menu-name-profil"><?php echo $me["name"]; ?></small> 
                                <img class="img-circle" id="menu-thumb-profil" 
                                     width="40" height="40" src="<?php echo $profilThumbImageUrl; ?>" alt="image" >
                    </a>

                    <div class="dropdown pull-right" id="dropdown-user">
                        <div class="dropdown-main-menu">
                            <ul class="dropdown-menu arrow_box">
                                <!-- <li class="text-left">
                                    <a href="#page.type.citoyens.id.<?php echo Yii::app()->session['userId']; ?>"
                                       target="_blank" class="lbh bg-white">
                                        <i class="fa fa-user-circle"></i> Ma page
                                    </a>
                                </li>
                                <li role="separator" class="divider"></li> -->
                                <!-- <li class="text-left">
                                    <a href="#social" target="_blank" class="lbh bg-white">
                                        <i class="fa fa-plus-circle"></i> Créer une page
                                    </a>
                                </li>
                                <li role="separator" class="divider"></li> -->
                                <li class="text-left">
                                    <a href="#web" target="_blank" class="lbh bg-white letter-red font-blackoutM">
                                        <i class="fa fa-search"></i> Web
                                    </a>
                                </li>
                                <li role="separator" class="divider"></li>
                                <li class="text-left">
                                    <a href="#actu" target="_blank" class="lbh bg-white letter-red font-blackoutM">
                                        <i class="fa fa-newspaper-o"></i> Actu
                                    </a>
                                </li>
                                <li role="separator" class="divider"></li>
                                <li class="text-left">
                                    <a href="#freedom" target="_blank" class="lbh bg-white letter-red font-blackoutM">
                                        <i class="fa fa-stack-exchange"></i> Freedom
                                    </a>
                                </li>
                                <li role="separator" class="divider"></li>
                                <li class="text-left">
                                    <a href="#social" target="_blank" class="lbh bg-white letter-red font-blackoutM">
                                        <i class="fa fa-user-circle"></i> Social
                                    </a>
                                </li>
                                <!-- <li role="separator" class="divider"></li>
                                <li class="text-left">
                                    <a href="#annonces" target="_blank" class="lbh bg-white">
                                        <i class="fa fa-bullhorn"></i> Annonces
                                    </a>
                                </li> -->
                                <li role="separator" class="divider"></li>
                                <li class="text-left">
                                    <a href="#agenda" target="_blank" class="lbh bg-white letter-red font-blackoutM">
                                        <i class="fa fa-calendar"></i> Agenda
                                    </a>
                                </li>
                                
                                <li role="separator" class="divider"></li>
                                <li class="text-left">
                                    <a href="#info.p.apropos" target="_blank" class="lbh bg-white">
                                        <small><i class="fa fa-info-circle"></i> A propos</small>
                                    </a>
                                </li>

                                <li role="separator" class="divider"></li>
                                <li class="text-left">
                                    <a href="#info.p.sethome" target="_blank" class="lbh bg-white">
                                        <small><i class="fa fa-home"></i> Garder en page d'accueil</small>
                                    </a>
                                </li>

                                <li role="separator" class="divider"></li>
                                <!-- <li role="separator" class="divider">
                                </li>
                                <li class="text-left">
                                    <a href="#" target="_blank" class="lbh bg-white">
                                        <i class="fa fa-crosshairs"></i> Autour de moi
                                    </a>
                                </li> 
                                <li role="separator" class="divider">
                                </li>-->
                                <li class="text-left">
                                    <a href="#" class="bg-white logout">
                                        <small class="bold"><i class="fa fa-sign-out"></i> Déconnecter</small>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>


                    <button class="menu-button btn-menu btn-menu-notif text-dark pull-right hidden-xs" 
                          data-toggle="tooltip" data-placement="bottom" title="<?php echo Yii::t("common","Notifications") ?>" alt="<?php echo Yii::t("common","Notifications") ?>">
                      <i class="fa fa-bell"></i>
                      <span class="notifications-count topbar-badge badge animated bounceIn 
                              <?php if(!@$countNotifElement || (@$countNotifElement && $countNotifElement=="0")) 
                              echo 'badge-transparent hide'; else echo 'badge-success'; ?>">
                            <?php echo @$countNotifElement ?>
                        </span>
                    </button>
                    
                    <button class="menu-button btn-menu btn-dashboard-dda text-dark pull-right" 
                          data-toggle="tooltip" data-placement="bottom" title="<?php echo Yii::t("common","Cooperation") ?>" 
                          alt="<?php echo Yii::t("common","Cooperation") ?>">
                      <i class="fa fa-inbox"></i>
                      <span class="coopNotifs topbar-badge badge animated bounceIn badge-warning"></span>
                    </button>


                     <div class="dropdown pull-right" id="dropdown-dda">
                        <div class="dropdown-main-menu">
                            <ul class="dropdown-menu arrow_box menuCoop" id="list-dashboard-dda">
                                
                            </ul>
                        </div>
                    </div>
                    
                    

                    <button class="menu-button btn-menu btn-menu-chat text-dark pull-right hidden-xs" 
                          onClick='rcObj.loadChat("","citoyens", true, true)' data-toggle="tooltip" data-placement="bottom" 
                          title="<?php echo Yii::t("common","Messaging") ?>" alt="<?php echo Yii::t("common","Messaging") ?>">
                      <i class="fa fa-comments"></i>
                      <span class="chatNotifs topbar-badge badge animated bounceIn badge-warning"></span>
                    </button>

                    
                   
                <?php } else { ?>
                    <li class="page-scroll">
                        <button class="letter-green font-montserrat btn-menu-connect" data-toggle="modal" data-target="#modalLogin">
                        <span class="hidden-xs"><i class="fa fa-sign-in"></i> SE CONNECTER</span>
                        <span class="visible-xs"><i class="fa fa-sign-in fa-2x"></i></span>
                        </button>
                    </li>
                <?php } ?>                
            </ul>
        </div>

        <?php if($subdomain == "web"){ ?>
            <button class="btn btn-link letter-yellow tooltips btn-star-fav pull-right font-montserrat"  
                    data-placement="bottom" title="Gérer vos favoris"
                    data-target="#modalFavorites" data-toggle="modal"><i class="fa fa-star"></i>
            </button>   
        <?php }//else{ ?>
            
        <!-- <a href="#info.p.sethome" class="btn btn-default btn-sm letter-red tooltips pull-right font-montserrat hidden-sm hidden-xs" 
            id="btn-sethome" style=" margin-top:6px;"  
            data-placement="bottom" title="Utiliser KGOUGLE en page d'accueil sur votre navigateur">
            <i class="fa fa-plus"></i> <i class="fa fa-home fa-2x"></i>
        </a>


        <a href="#info.p.apropos" class="btn btn-default btn-sm letter-red tooltips pull-right font-montserrat" 
            id="btn-apropos" style=" margin-top:6px;"  
            data-placement="bottom" title="A propos de KGOUGLE">
            <i class="fa fa-question-circle fa-2x"></i>
        </a> -->

        <div class="hidden">
        <?php //if(false){
                $params = CO2::getThemeParams();
                foreach (array_reverse($params["pages"]) as $key => $value) {
                if(@$value["inMenu"]==true && @$value["open"]==true){ ?>
                <a href="<?php echo $key; ?>" 
                    class="<?php echo $key; ?>ModBtn lbh btn btn-link letter-red pull-right btn-menu-to-app hidden-top hidden-xs
                            <?php if($subdomainName==$value["subdomainName"]) echo 'active'; ?> tooltips"
                    data-placement="bottom" title="<?php echo Yii::t("common",$value["subdomainName"]); ?>">
                    <i class="fa fa-<?php echo $value["icon"]; ?>"></i>

                    <!-- <span class=""><?php echo $value["subdomainName"]; ?></span> -->
                    <?php if(@$value["notif"]){ ?>
                    <span class="<?php echo $value["notif"]; ?> topbar-badge badge animated bounceIn badge-warning"></span>
                    <?php } ?>
                </a>  
            <?php   }} ?>
        <?php //} ?>
        </div>

        <button class="btn btn-default btn-sm letter-red tooltips pull-right font-montserrat" 
            id="btn-radio" style=" margin-top:6px;"  
            data-target="#modalRadioTool" data-toggle="modal"
            data-placement="bottom" title="Écouter la radio">
            <img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/img/radios/radio-ico.png" height="25">
        </button>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->

</nav>

<?php if(isset(Yii::app()->session['userId'])) 
                $this->renderPartial($layoutPath.'notifications'); ?>


<?php $this->renderPartial($layoutPath.'formCreateElement'); ?>


 <?php $this->renderPartial($layoutPath.'modals.kgougle.mainMenu', array("me"=>$me) ); ?>

<?php   $this->renderPartial($layoutPath.'modals.kgougle.loginRegister', array("subdomain" => $subdomain)); 
?>

<?php //$this->renderPartial($layoutPath.'loginRegister', array( ) ); ?>


