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
                    <h5>Loisirs</h5>
                    <div class="table-wrapper">
                        <p>
                            <a href="create.php" class="button fit special">Nouveau Loisir</a>
                        </p>
                        <table class="alt">
                            <thead>
                                <tr>
                                    <th>Titre</th>
                                    <th>Photo</th>
                                    <th>Sous-Titre</th>
                                    <th>Date</th>
                                    <th>Résumé</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include '../../db/db.php';
                                $pdo = Database::connect();
                                $pdo->exec("set names utf8");
                                $sql = 'SELECT * FROM hobie ORDER BY ID DESC';
                                foreach ($pdo->query($sql) as $row) {
                                    echo '<tr>';
                                    echo '<td>' . $row['title'] . '</td>';
                                    echo '<td>' . $row['photo'] . '</td>';
                                    echo '<td>' . $row['subtitle'] . '</td>';
                                    echo '<td>' . $row['date'] . '</td>';
                                    echo '<td>' . $row['resume'] . '</td>';
                                    echo '<td>';
                                    echo '<a class="button fit special" href="update.php?id=' . $row['ID'] . '">Modifier</a>';
                                    echo ' ';
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