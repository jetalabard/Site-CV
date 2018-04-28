<article id="first">
    <section class="wrapper style2" ng-controller="SkillController">
        <div class="inner" ng-init="getSkills()">
            <h3><u>Compétences Informatiques</u></h3>
            <h6>Langages et Framework de programmation</h6>
            <div class="box alt">
                <div class="row uniform 0%">
                    <div class="2u" ng-repeat="skill in skills" ng-if="skill.type === 'language'">
                        <span class="image fit">
                            <img ng-src='./img/{{skill.image}}' alt="" style="margin:10%;"/>
                        </span>
                    </div>
                </div>
                <hr>
                <h6>Méthodologie et Outils</h6>
                <div class="row uniform 0%">
                    <div class="2u" ng-repeat="skill in skills" ng-if="skill.type === 'tool'">
                        <span class="image fit">
                            <img ng-src='./img/{{skill.image}}' alt="" style="margin:10%;" />
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
</article>