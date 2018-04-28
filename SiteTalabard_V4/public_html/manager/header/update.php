

<!DOCTYPE HTML>
<!--    
        Spectral by HTML5 UP
        html5up.net | @n33co
        Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->

<?php
$page = "admin";
include('../connection/verifyConnection.php');

require '../../db/db.php';

$id = null;
if (!empty($_GET['id'])) {
    $id = $_REQUEST['id'];
}

if (null == $id) {
    header("location: header.php");
}

if (isset($_POST["submit"])) {
    // keep track post values
    $title = '';
    $subtitle = '';
    $subsubtitle = '';
    $resume = '';
    if(isset($_POST["title"])){
        $title = $_POST["title"];
    }
    if(isset($_POST["subtitle"])){
        $subtitle = $_POST["subtitle"];
    }
    if(isset($_POST["subsubtitle"])){
        $subsubtitle= $_POST["subsubtitle"];
    }
    if(isset($_POST["resume"])){
        $resume = $_POST["resume"];
    }
    
    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec("set names utf8");
    $sql = "UPDATE head set title = ?, subtitle = ?, subsubtitle =?, resume =? WHERE ID = ?";
    $q = $pdo->prepare($sql);
    $q->execute(array($title, $subtitle, $subsubtitle, $resume,$id));
    Database::disconnect();
    header("location: header.php");
} else {
    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM head where ID = ?";
    $pdo->exec("set names utf8");
    $q = $pdo->prepare($sql);
    $q->execute(array($id));
    $data = $q->fetch(PDO::FETCH_ASSOC);

    $title = $data["title"];
    $subtitle = $data["subtitle"];
    $subsubtitle = $data["subsubtitle"];
    $resume = $data["resume"];
    
    Database::disconnect();
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
                    <section style="text-align: center" >
                        <h1>Modifier une entête: </h1>
                        <form action="update.php?id=<?php echo $id ?>" method="post">
                            <input type="text" id="title" name="title" placeholder="Titre" required="required" value="<?php echo!empty($title) ? $title : ''; ?>"/>
                            <br>
                            <input type="text" id="subtitle" name="subtitle" placeholder="Sous-titre" value="<?php echo!empty($subtitle) ? $subtitle : ''; ?>" />
                            <br>
                            <input type="text" id="subsubtitle" name="subsubtitle" placeholder="Sous-sous-titre" value="<?php echo!empty($subsubtitle) ? $subsubtitle : ''; ?>" />
                            <br>
                            <textarea name="resume" rows="10" cols="30" placeholder="Résumé"><?php echo $resume; ?></textarea>
                            <br>
                            <button type="submit" name="submit" class="button fit special" >Valider</button>
                        </form>
                    </section>
                </section>
            </article>

        </div>

        <?php include("../../partOfPage/scriptForm.php"); ?>

    </body>
</html>