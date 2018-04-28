<article style="margin: 10%;" ng-controller="ConnectionController" ng-init="getImages();">
    <section class="wrapper style4" >
        <section style="text-align: center" >
            <h1>Ajout Compétence : </h1>
            <form action="../db/insertSkill.php" method="post">
                <input type="text" id="name" name="name" placeholder="Nom" required="required" />
                <br>
                <div>
                    <input type="radio" id="langage" name="type" value="langage" checked>
                    <label for="langage">Langage</label>
                    <input type="radio" id="tool" value="tool" name="type">
                    <label for="tool">Tool</label>
                </div>
                <select name="image">
                    <option ng-repeat="image in images" style="color: #000000;" value="{{image.name}}">{{image.name}}</option>
                </select>
                <br>
                <button type="submit" name="submit" class="button fit special" value="Valider">Valider</button>
                <span><?php echo $error; ?></span>
            </form>
        </section>
    </section>
</article>