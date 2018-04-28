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
                    <h1>Ajout Image : </h1>
                    <form action="upload.php" method="post" enctype="multipart/form-data">
                        <input type="file" name="fileToUpload" id="fileToUpload" required="required"/>
                        <br>
                        <input type="submit" name="submit" value="Envoyer le fichier" class="button fit special"/>
                        <br>
                        <span><?php echo $error; ?></span>
                    </form>
                </div>
            </section>

        </div>

        <?php include("../../partOfPage/scriptForm.php"); ?>

    </body>
</html>