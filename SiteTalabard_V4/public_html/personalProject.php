<!DOCTYPE html>
<html>
    <?php include("./partOfPage/header.php"); ?>
    <body class="landing" ng-app="app" ng-controller="IndexController" ng-init="getDescription();getHeads();">
        <!-- Page Wrapper -->
        <div id="page-wrapper"> 
            <!-- Header -->
            <?php include("./partOfPage/menu.php"); ?>
            <?php include("./partOfPage/head.php"); 
                echo showHead(0);
            ?>
            <?php include("./showItem/showPersonalProject.php"); ?>
            <?php include("./partOfPage/footer.php"); ?>

        </div>

        <?php include("./partOfPage/script.php"); ?>

    </body>
</html>