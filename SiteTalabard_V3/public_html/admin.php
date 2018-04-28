<!DOCTYPE HTML>
<!--
        Spectral by HTML5 UP
        html5up.net | @n33co
        Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
    <?php include("./partOfPage/header.php"); ?>
    <body class="landing" ng-app="app" ng-controller="IndexController" ng-init="getHeads();getDescription();">

        <!-- Page Wrapper -->
        <div id="page-wrapper" >
            <!-- Header -->
            <?php include("./partOfPage/menu.php"); ?>
            <?php include("./partOfPage/head.php"); 
                echo showHead(6);
            ?>
            <?php include("./showItem/choiceUpdate.php"); ?>
        </div>

        <?php include("./partOfPage/script.php"); ?>
    </body>
</html>