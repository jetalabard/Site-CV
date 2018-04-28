

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
    header("location: link.php");
}

if (isset($_POST["submit"])) {
// keep track post values
    $libl = $_POST["libl"];
    $link = $_POST["link"];
    $liblLink = $_POST["libllink"];
    $url = $_POST["url"];
    $importance = $_POST["importance"];
    $idlinks = $_POST["item"];

    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec("set names utf8");
    $sql = "UPDATE link set idLinks =?, libl = ?, link = ?, libllink =?, url =?, importance =?  WHERE ID = ?";
    $q = $pdo->prepare($sql);
    $q->execute(array($idlinks, $libl,$link, $liblLink, $url, $importance, $id));
    Database::disconnect();
    header("location: link.php");
} else {
    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM link where ID = ?";
    $pdo->exec("set names utf8");
    $q = $pdo->prepare($sql);
    $q->execute(array($id));
    $data = $q->fetch(PDO::FETCH_ASSOC);

    $libl = $data["libl"];
    $link = $data["link"];
    $liblLink = $data["libllink"];
    $url = $data["url"];
    $importance = $data["importance"];
    $idlinks = $data["idLinks"];

    $sql = "SELECT title FROM personalproject where idlinks = ?";
    $pdo->exec("set names utf8");
    $q = $pdo->prepare($sql);
    $q->execute(array($idlinks));
    if ($q->rowCount() != 0) {
        $data = $q->fetch(PDO::FETCH_ASSOC);
        $current_item = $data["title"];
    } else {


        $sql = "SELECT title FROM project where idlinks = ?";
        $pdo->exec("set names utf8");
        $q = $pdo->prepare($sql);
        $q->execute(array($idlinks));
        if ($q->rowCount() != 0) {
            $data = $q->fetch(PDO::FETCH_ASSOC);
            $current_item = $data["title"];
        } else {
            $sql = "SELECT title FROM job where idlinks = ?";
            $pdo->exec("set names utf8");
            $q = $pdo->prepare($sql);
            $q->execute(array($idlinks));
            if ($q->rowCount() != 0) {
                $data = $q->fetch(PDO::FETCH_ASSOC);
                $current_item = $data["title"];
            } else {
                $sql = "SELECT title FROM formation where idlinks = ?";
                $pdo->exec("set names utf8");
                $q = $pdo->prepare($sql);
                $q->execute(array($idlinks));
                if ($q->rowCount() != 0) {
                    $data = $q->fetch(PDO::FETCH_ASSOC);
                    $current_item = $data["title"];
                } else {
                    $sql = "SELECT title FROM hobie where idlinks = ?";
                    $pdo->exec("set names utf8");
                    $q = $pdo->prepare($sql);
                    $q->execute(array($idlinks));
                    if ($q->rowCount() != 0) {
                        $data = $q->fetch(PDO::FETCH_ASSOC);
                        $current_item = $data["title"];
                    } else {
                        $current_item = "Indéterminé";
                    }
                }
            }
        }
    }


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
                    <section style="text-align: center">
                        <h1>Modifier un Lien : </h1>
                        <form action="update.php?id=<?php echo $id ?>" method="post">
                            <input type="text" id="libl" name="libl" placeholder="Libellé" required="required"  value="<?php echo $libl; ?>"/>
                            <br>
                            <input type="text" id="link" name="link" placeholder="Lien" required="required" value="<?php echo $link; ?>" />
                            <br>
                            <input type="text" id="libllink" name="libllink" placeholder="Libellé Lien" value="<?php echo $liblLink; ?>" />
                            <br>
                            <p>Le lien redirige vers un autre site ?</p>
                            <div>
                                <?php
                                if ($url == 1) {
                                    echo'<input type="radio" id="url-yes" name="url" value="0"/>';
                                    echo'<label for="url-yes">OUI</label>';
                                    echo'<input type="radio" id="url-no" value="1" name="url" checked />';
                                    echo'<label for="url-no">NON</label>';
                                } else {
                                    echo'<input type="radio" id="url-yes" name="url" value="0" checked/>';
                                    echo'<label for="url-yes">OUI</label>';
                                    echo'<input type="radio" id="url-no" value="1" name="url"  />';
                                    echo'<label for="url-no">NON</label>';
                                }
                                ?>
                            </div>
                            <br>
                            <p>Le lien est important ou de second plan ?</p>
                            <div>
                                <?php
                                if ($importance == 1) {
                                    echo'<input type="radio" id="important" name="important" value="0">';
                                    echo'<label for="important">Important</label>';
                                    echo'<input type="radio" id="secondPlan" value="1" name="important" checked >';
                                    echo'<label for="secondPlan">Second Plan</label>';
                                } else {
                                    echo'<input type="radio" id="important" name="important" value="0" checked >';
                                    echo'<label for="important">Important</label>';
                                    echo'<input type="radio" id="secondPlan" value="1" name="important">';
                                    echo'<label for="secondPlan">Second Plan</label>';
                                }
                                ?>
                            </div>
                            <br>
                            <div>
                                <select name="item" ng-controller="ConnectionController" ng-init="getListItem();" required="required">
                                    <option value="<?php echo $idlinks; ?>" style="color: #000000;"  selected><?php echo $current_item; ?></option>";
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

        </div>

        <?php include("../../partOfPage/scriptForm.php"); ?>

    </body>
</html>