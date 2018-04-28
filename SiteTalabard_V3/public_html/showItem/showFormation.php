<?php
session_start();
$connected = 0;
if (isset($_SESSION['login_user'])) {
    $connected = 1;
}
?>
<section id="first" class="wrapper alt style2" ng-controller="FormationController" ng-init="getFormations()">
    <section class="spotlight" ng-repeat="formation in formations">
        <div class="image"><img ng-src="img/{{formation.photo}}" alt="" /></div>
        <div class="content">
            <h5><b><u>{{formation.title}}</u></b></h5>
            <h6>{{formation.subtitle}}</h6>
            <h6><small><i>{{formation.date}}</i></small></h6>
            <p>{{formation.resume}}</p>
            <ul class="actions">
                <li ng-repeat="link in formation.links">
                    <a ng-if="link.url === '0' && link.importance === '1'" href="{{link.link}}" class="button fit">
                        {{link.libl}} <span class="icon fa-angle-double-right"></span></a>
                    <a ng-if="link.url === '0' && link.importance === '0'" href="{{link.link}}" 
                       class="button fit special">{{link.libl}} <span class="icon fa-angle-double-right"></span></a>
                    <a ng-if="link.importance === '0' && link.url === '1'" href="{{link.link}}" download="{{link.libllink}}" 
                       class="button fit special icon fa-download">{{link.libl}}</a>
                    <a ng-if="link.importance === '1' && link.url === '1'" href="{{link.link}}" download="{{link.libllink}}"
                       class="button fit icon fa-download">{{link.libl}}</a>
                </li>
            </ul>
            <a ng-if="<?php echo $connected ?> === 1" ng-controller="ConnectionController" ng-click="GoUpdate(formation, './form/pageFormFormation.php')" class="button fit">Modifier<span class="icon fa-angle-double-right"></span></a>
        </div>
    </section>
</section>