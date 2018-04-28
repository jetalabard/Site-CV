<!DOCTYPE HTML>
<!--
        Spectral by HTML5 UP
        html5up.net | @n33co
        Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<?php
    $page = "admin";
    include('../connection/verifyConnection.php'); 
?>
<html>
    <?php include("../../partOfPage/headerForm.php"); ?>
    <body class="landing" ng-app="app" ng-controller="IndexController" ng-init="getHeads();
                    getDescription();">

        <div id="page-wrapper" >
            <?php include("../../partOfPage/menuForm.php"); ?>
            <section class="wrapper style2">
                <div class="inner">
                    <h5>Compétence</h5>
                    <div class="table-wrapper">
                        <p>
                            <a href="create.php" class="button fit special">Nouvelle compétence</a>
                        </p>
                        <table class="alt">
                            <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Type</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include '../../db/db.php';
                                $pdo = Database::connect();
                                $pdo->exec("set names utf8");
                                $sql = 'SELECT * FROM competence ORDER BY ID DESC';
                                foreach ($pdo->query($sql) as $row) {
                                    echo '<tr>';
                                    echo '<td>' . $row['name'] . '</td>';
                                    echo '<td>' . $row['type'] . '</td>';
                                    echo '<td>' . $row['image'] . '</td>';
                                    echo '<td>';
                                    echo '<a class="button fit special" href="delete.php?id=' . $row['ID'] . '">Supprimer</a></td>';
                                    echo '</tr>';
                                }
                                Database::disconnect();
                                ?>
                            </tbody>
                        </table>
                    </div>
                    </div>
            </section>

        </div>

        <?php include("../../partOfPage/scriptForm.php"); ?>

    </body>
</html>