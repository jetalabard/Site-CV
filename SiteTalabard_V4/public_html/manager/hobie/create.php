

<!DOCTYPE HTML>
<!--    
        Spectral by HTML5 UP
        html5up.net | @n33co
        Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<?php

if (isset($_POST["submit"])) {

    $title = $_POST["title"];
    $subtitle = $_POST["subtitle"];
    $image = $_POST["image"];
    $date = $_POST["date"];
    $resume = $_POST["resume"];

   include '../../db/db.php';
    
    $pdo = Database::connect();
    $pdo->exec("set names utf8");
    $pdo->exec("ALTER TABLE `hobie` AUTO_INCREMENT = 1");
    $pdo->exec("INSERT INTO links (ID) values(DEFAULT)");
    
    $stmt = $pdo->prepare("INSERT INTO hobie (title,photo,subtitle,date,resume,idlinks) VALUES (? ,? ,? ,? ,? ,?)");
    $stmt->bindParam(1, $title);
    $stmt->bindParam(2, $image);
    $stmt->bindParam(3, $subtitle);
    $stmt->bindParam(4, $date);
    $stmt->bindParam(5, $resume);
    $value = $pdo->lastInsertId();
    $stmt->bindParam(6,$value);
    $stmt->execute();

    Database::disconnect();

    header("location: hobie.php");
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
            <article style="margin: 10%;" ng-controller="ConnectionController" ng-init="getImages();">
                <section class="wrapper style4" >
                    <section style="text-align: center" >
                        <h1>Ajout Loisir : </h1>
                        <form action="create.php" method="post">
                            <input type="text" id="title" name="title" placeholder="Titre" required="required"/>
                            <br>
                            <select name="image">
                                <option ng-repeat="image in images" style="color: #000000;" value="{{image.name}}">{{image.name}}</option>
                            </select>
                            <br>
                            <input type="text" id="subtitle" name="subtitle" placeholder="Sous Titre" required="required" />
                            <br>
                            <input type="text" id="date" name="date" placeholder="Date"/>
                            <br>
                            <textarea name="resume" rows="10" cols="30" placeholder="Résumé" required="required"></textarea>
                            <br>
                            <button type="submit" name="submit" class="button fit special" value=" Login ">Valider</button>
                        </form>
                    </section>
                </section>
            </article>

        </div>

        <?php include("../../partOfPage/scriptForm.php"); ?>

    </body>
</html>