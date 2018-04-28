<section id="first" class="wrapper alt style2" ng-controller="HobieController" ng-init="getHobies()">
    <section class="spotlight" ng-repeat="hobie in hobies">
        <div class="image"><img ng-src="img/{{hobie.photo}}" alt="" /></div>
        <div class="content">
            <h5><b><u>{{hobie.title}}</u></b></h5>
            <h6>{{hobie.subtitle}}</h6>
            <h6><small><i>{{hobie.date}}</i></small></h6>
            <p>{{hobie.resume}}</p>
            <ul class="actions">
                <li ng-repeat="link in hobie.links">
                    <a ng-if="link.url === '0' && link.importance === '1'" href="{{link.link}}" 
                       class="button fit">{{link.libl}} <span class="icon fa-angle-double-right"></span></a>
                    <a ng-if="link.url === '0' && link.importance === '0'" href="{{link.link}}" 
                       class="button fit special">{{link.libl}} <span class="icon fa-angle-double-right"></span></a>
                    <a ng-if="link.importance === '0' && link.url === '1'" href="{{link.link}}" download="{{link.liblLink}}" 
                       class="button fit special icon fa-download">{{link.libl}}</a>
                    <a ng-if="link.importance === '1' && link.url === '1'" href="{{link.link}}" download="{{link.liblLink}}" 
                       class="button fit icon fa-download">{{link.libl}}</a>
                </li>
            </ul>
        </div>
    </section>
</section>