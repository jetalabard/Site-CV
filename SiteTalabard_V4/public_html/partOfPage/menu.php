<?php
$connect = 0;
session_start(); 
if (isset($_SESSION['login_user'])) {
    $connect = 1;
}
?>

<header id="header" class="alt" ng-controller="MenuController as menuCtrl">
    <h1><a href="index.php">{{description.name}}</a></h1>
    <nav id="nav">
        <ul>
            <li class="special" >
                <a href="#menu" class="menuToggle"><span>{{menuCtrl.menus[0].libl}}</span></a>
                <div id="menu" >
                    <ul>
                        <li ng-repeat="menu in menuCtrl.menus[0].sous_menu">
                            
                            <a ng-if="<?php echo $connect?>===1 && menu.libl === 'Déconnexion'" href='{{menu.url}}'>{{menu.libl}}</a>
                            <a ng-if="<?php echo $connect?>===1 && menu.libl === 'Administration'" href='{{menu.url}}'>{{menu.libl}}</a>
                            <a ng-if="<?php echo $connect?>===0 && menu.libl === 'Connexion'" href='{{menu.url}}'>{{menu.libl}}</a>
                            <a ng-if="menu.libl !== 'Connexion'
                                        && menu.libl !== 'Déconnexion'
                                        && menu.libl !== 'Administration'" href="{{menu.url}}">{{menu.libl}}</a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </nav>
</header>
