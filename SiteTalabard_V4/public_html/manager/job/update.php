

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
    header("location: job.php");
}

if (isset($_POST["submit"])) {
    // keep track post values
    $title = $_POST["title"];
    $subtitle = $_POST["subtitle"];
    $image = $_POST["image"];
    $date = $_POST["date"];
    $resume = $_POST["resume"];

    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec("set names utf8");
    $sql = "UPDATE job set title = ?, photo = ?, subtitle =?, date =?, resume =? WHERE ID = ?";
    $q = $pdo->prepare($sql);
    $q->execute(array($title, $image, $subtitle, $date, $resume, $id));
    Database::disconnect();
    header("location: job.php");
} else {
    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM job where ID = ?";
    $pdo->exec("set names utf8");
    $q = $pdo->prepare($sql);
    $q->execute(array($id));
    $data = $q->fetch(PDO::FETCH_ASSOC);
    
    $title = $data["title"];
    $subtitle = $data["subtitle"];
    $image = $data["photo"];
    $date = $data["date"];
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
            <article style="margin: 10%;" ng-controller="ConnectionController" ng-init="getImages();">
                <section class="wrapper style4" >
                    <section style="text-align: center" >
                        <h1>Modifier un emplois : </h1>
                        <form action="update.php?id=<?php echo $id ?>" method="post">
                            <input type="text" id="title" name="title" placeholder="Titre" required="required" value="<?php echo!empty($title) ? $title : ''; ?>"/>
                            <br>
                            <select name="image" >
                                <option style="color: #000000;" selected><?php echo $image; ?></option>
                                <option ng-repeat="image in images" style="color: #000000;" ng-show="<?php echo $image; ?>!=image.name" value="{{image.name}}">{{image.name}}</option>
                            </select>
                            <br>
                            <input type="text" id="subtitle" name="subtitle" placeholder="Sous Titre" required="required" value="<?php echo!empty($subtitle) ? $subtitle : ''; ?>" />
                            <br>
                            <input type="text" id="date" name="date" placeholder="Date" required="required" value="<?php echo!empty($date) ? $date : ''; ?>" />
                            <br>
                            <textarea name="resume" rows="10" cols="30" placeholder="Résumé" required="required"><?php echo $resume; ?></textarea>
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