<section id="first" class="wrapper alt style2" ng-controller="ProjectController" ng-init="getProjects()">
    <section class="spotlight" ng-repeat="project in projects">
        <div class="image"><img ng-src="img/{{project.photo}}" alt="" /></div>
        <div class="content">
            <h5><b><u>{{project.title}}</u></b></h5>
            <h6>{{project.subtitle}}</h6>
            <h6><small><i>{{project.date}}</i></small></h6>
            <p>{{project.resume}}</p>
            <ul class="actions">
                <li ng-repeat="link in project.links">
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