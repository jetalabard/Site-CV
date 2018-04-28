

<!DOCTYPE HTML>
<!--    
        Spectral by HTML5 UP
        html5up.net | @n33co
        Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<?php
if (isset($_POST["submit"])) {

    $libl = $_POST["libl"];
    $link = $_POST["link"];
    $libllink = $_POST["libllink"];
    $idlinks = $_POST["item"];
    $url = $_POST["url"];
    $important = $_POST["important"];
    
    include '../../db/db.php';
    
$pdo = Database::connect();
    $pdo->exec("set names utf8");
    $pdo->exec("ALTER TABLE `link` AUTO_INCREMENT = 1");
    $stmt = $pdo->prepare("INSERT INTO link (idLinks,libl,link,libllink,url,importance) VALUES (?,?,?,?,?,?)");
    $stmt->bindParam(1, $idlinks);
    $stmt->bindParam(2, $libl);
    $stmt->bindParam(3, $link);
    $stmt->bindParam(4, $libllink);
    $stmt->bindParam(5, $url);
    $stmt->bindParam(6, $important);
    $stmt->execute();
    Database::disconnect();
    
    

    header("location: link.php");
}
else{
    $page = "admin";
    include('../connection/verifyConnection.php'); 
}
?>
<html>
    <?php include("../../partOfPage/headerForm.php"); ?>
    <body class="landing" ng-app="app" ng-controller="IndexController" ng-init="getHeads();
                    getDescription();">

        <div id="page-wrapper" >
            <?php include("../../partOfPage/menuForm.php"); ?>
            <article style="margin: 10%;">
                <section class="wrapper style4" >
                    <section style="text-align: center">
                        <h1>Ajout Lien : </h1>
                        <form action="create.php" method="post">
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
                                <select name="item" ng-controller="ConnectionController" ng-init="getListItem();" required="required">
                                    <option style="color: #000000;background-color: #8E8892;">--Projets/Stages--</option>
                                    <option ng-repeat="project in projects" style="color: #000000;" value="{{project.idlinks}}">{{project.title}}</option>
                                    <option style="color: #000000;background-color: #8E8892;">--Projets Personnels--</option>
                                    <option ng-repeat="perso in personalProjects" style="color: #000000;" value="{{perso.idlinks}}">{{perso.title}}</option>
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

        </div>

        <?php include("../../partOfPage/scriptForm.php"); ?>

    </body>
</html>