<?php
require '../../db/db.php';
$id = 0;
if (!empty($_GET['id'])) {
    $id = $_REQUEST['id'];
}

if (!empty($_POST)) {
    // keep track post values
    $id = $_POST['id'];

    // delete data
    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "DELETE FROM job WHERE ID = ?";
    $q = $pdo->prepare($sql);
    $q->execute(array($id));
    Database::disconnect();
    header("Location: job.php");
}
else{
    $page = "admin";
    include('../connection/verifyConnection.php'); 
}
?>

<!DOCTYPE HTML>
<!--
        Spectral by HTML5 UP
        html5up.net | @n33co
        Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
    <?php include("../../partOfPage/headerForm.php"); ?>
    <body class="landing" ng-app="app" ng-controller="IndexController" ng-init="getHeads();
                    getDescription();">

        <div id="page-wrapper" >
            <?php include("../../partOfPage/menuForm.php"); ?>
            <article style="margin: 10%;">
                <section class="wrapper style4" >
                    <section style="text-align: center" >
                        <h1>Supprimer un emplois : </h1>
                        <form action="delete.php?id=<?php echo $id ?>" method="post">
                            <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                                <button type="submit" name="submit" class="button fit special">OUI</button>
                                <a  class="button fit" href="job.php">NON</a>
                            </ul>
                        </form>
                    </section>
                </section>
            </article>
        </div>

        <?php include("../../partOfPage/scriptForm.php"); ?>

    </body>
</html>