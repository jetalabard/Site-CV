

<!DOCTYPE HTML>
<!--    
        Spectral by HTML5 UP
        html5up.net | @n33co
        Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<?php
if (isset($_POST["submit"])) {

    $name = $_POST["name"];
    $type = $_POST["type"];
    $image = $_POST["image"];
    
    
    include '../../db/db.php';
    $pdo = Database::connect();
    $pdo->exec("set names utf8");
    $pdo->exec("ALTER TABLE `job` AUTO_INCREMENT = 1");
    $pdo->exec("INSERT INTO links (ID) values(DEFAULT)");
    
        $stmt = $pdo->prepare("INSERT INTO competence (name,type,image) VALUES (? ,? ,? )");
    $stmt->bindParam(1, $name);
    $stmt->bindParam(2, $type);
    $stmt->bindParam(3, $image);
    $stmt->execute();

    Database::disconnect();

    header("location: skill.php");
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
                        <h1>Ajout Compétence : </h1>
                        <form action="create.php" method="post">
                            <input type="text" id="name" name="name" placeholder="Nom" required="required" />
                            <br>
                            <div>
                                <input type="radio" id="langage" name="type" value="language" checked>
                                <label for="language">Langage</label>
                                <input type="radio" id="tool" value="tool" name="type">
                                <label for="tool">Outil</label>
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

        </div>

        <?php include("../../partOfPage/scriptForm.php"); ?>

    </body>
</html>