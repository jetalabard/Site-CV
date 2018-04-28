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
                    <h5>Information Personnelle</h5>
                    <div class="table-wrapper">
                        <table class="alt">
                            <thead>
                                <tr>
                                    <th>Intitulé</th>
                                    <th>Nom</th>
                                    <th>Email</th>
                                    <th>Photo</th>
                                    <th>Résumé</th>
                                    <th>Téléphone</th>
                                    <th>Facebook</th>
                                    <th>Linkedin</th>
                                    <th>Adresse</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include '../../db/db.php';
                                $pdo = Database::connect();
                                $pdo->exec("set names utf8");
                                $sql = 'SELECT * FROM description ORDER BY ID DESC';
                                foreach ($pdo->query($sql) as $row) {
                                    echo '<tr>';
                                    echo '<td>' . $row['intitule'] . '</td>';
                                    echo '<td>' . $row['name'] . '</td>';
                                    echo '<td>' . $row['email'] . '</td>';
                                    echo '<td>' . $row['photo'] . '</td>';
                                    echo '<td>' . $row['resume'] . '</td>';
                                    echo '<td>' . $row['tel'] . '</td>';
                                    echo '<td>' . $row['faceBookLink'] . '</td>';
                                    echo '<td>' . $row['linkedinLink'] . '</td>';
                                    echo '<td>' . $row['adress'] . '</td>';
                                    echo '<td>';
                                    echo '<a class="button fit special" href="update.php?id=' . $row['ID'] . '">Modifier</a>';
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