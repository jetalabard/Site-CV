<article style="margin: 10%;">
    <section class="wrapper style4" >
        <section style="text-align: center">
            <h1>Ajout Lien : </h1>
            <form action="../db/insertLink.php" method="post">
                <input type="text" id="libl" name="libl" placeholder="Libellé" required="required" />
                <br>
                <input type="text" id="link" name="link" placeholder="Lien" required="required" />
                <br>
                <input type="text" id="libllink" name="libllink" placeholder="Libellé Lien" />
                <br>
                <p>Le lien redirige vers un autre site ?</p>
                <div>
                    <input type="radio" id="url-yes" name="url" value="0" >
                    <label for="url-yes">OUI</label>
                    <input type="radio" id="url-no" value="1" name="url" checked>
                    <label for="url-no">NON</label>
                </div>
                <br>
                <p>Le lien est important ou de second plan ?</p>
                <div>
                    <input type="radio" id="important" name="important" value="0" checked>
                    <label for="important">Important</label>
                    <input type="radio" id="secondPlan" value="1" name="important">
                    <label for="secondPlan">Second Plan</label>
                </div>
                <br>
                <div>
                    <select name="item" ng-controller="ConnectionController" ng-init="getListItem();">
                        <option style="color: #000000;background-color: #8E8892;">--Projets/Stages--</option>
                        <option ng-repeat="project in projects" style="color: #000000;" value="{{project.idlinks}}">{{project.title}}</option>
                        <option style="color: #000000;background-color: #8E8892;">--Emplois--</option>
                        <option ng-repeat="job in jobs" style="color: #000000;" value="{{job.idlinks}}">{{job.title}}</option>
                        <option style="color: #000000;background-color: #8E8892;">--Formation--</option>
                        <option ng-repeat="formation in formations" style="color: #000000;" value="{{formation.idlinks}}">{{formation.title}}</option>
                        <option style="color: #000000;background-color: #8E8892;">--Loisirs--</option>
                        <option ng-repeat="hobie in hobies" style="color: #000000;" value="{{hobie.idlinks}}">{{hobie.title}}</option>
                    </select>
                </div>
                <br>
                <button type="submit" name="submit" value="Valider" class="button fit special">Valider</button>
            </form>
        </section>
    </section>
</article>