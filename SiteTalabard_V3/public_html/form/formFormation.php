<?php
session_start();
if (isset($_SESSION['errorMsgInsertFormation'])) {
    $error =$_SESSION['errorMsgInsertFormation'];
}
?>
<article style="margin: 10%;" ng-controller="ConnectionController" ng-init="getImages();">
    <section class="wrapper style4" >
        <section style="text-align: center" >
            <h1>Ajout formation : </h1>
            <form action="../db/insertFormation.php" method="post" ng-show="{{update===false}}">
                <input type="text" id="title" name="title" placeholder="Titre" required="required"/>
                <br>
                <select name="image" >
                    <option ng-repeat="image in images" style="color: #000000;" value="{{image.name}}">{{image.name}}</option>
                </select>
                <br>
                <input type="text" id="subtitle" name="subtitle" placeholder="Sous Titre" required="required" />
                <br>
                <input type="text" id="date" name="date" placeholder="Date" required="required" />
                <br>
                <textarea name="resume" rows="10" cols="30" placeholder="Résumé" required="required"></textarea>
                <br>
                <button type="submit" name="submit" class="button fit special" value=" Login ">Valider</button>
                <span><?php echo $error; ?></span>
            </form>
            
            <form action="../db/updateFormation.php" method="post" ng-show="{{update===true}}">
                <input type="text" id="title" name="title" placeholder="Titre" required="required" value="{{current_item.title}}"/>
                <br>
                <select name="image" >
                    <option ng-repeat="image in images" style="color: #000000;" value="{{image.name}}">{{image.name}}</option>
                </select>
                <br>
                <input type="text" id="subtitle" name="subtitle" placeholder="Sous Titre" required="required" />
                <br>
                <input type="text" id="date" name="date" placeholder="Date" required="required" />
                <br>
                <textarea name="resume" rows="10" cols="30" placeholder="Résumé" required="required"></textarea>
                <br>
                <button type="submit" name="submit" class="button fit special" value=" Login ">Valider</button>
                <span><?php echo $error; ?></span>
            </form>
        </section>
    </section>
</article>