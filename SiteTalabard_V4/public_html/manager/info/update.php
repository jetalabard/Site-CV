

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
    header("location: info.php");
}

if (isset($_POST["submit"])) {
    // keep track post values
    $intitule = $_POST["intitule"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $photo = $_POST["photo"];
    $resume = $_POST["resume"];
    $tel = $_POST["tel"];
    $linkedinLink = $_POST["linkedinLink"];
    $faceBookLink = $_POST["faceBookLink"];
    $adress = $_POST["adress"];

    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec("set names utf8");
    $sql = "UPDATE description  set intitule = ?, name = ?, email =?, photo =?, resume =?, tel =?, faceBookLink =?, linkedinLink =?, adress =? WHERE ID = ?";
    $q = $pdo->prepare($sql);
    $q->execute(array($intitule, $name, $email, $photo, $resume,$tel,$faceBookLink,$linkedinLink,$adress,$id));
    Database::disconnect();
    header("location: info.php");
} else {
    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM description where ID = ?";
    $pdo->exec("set names utf8");
    $q = $pdo->prepare($sql);
    $q->execute(array($id));
    $data = $q->fetch(PDO::FETCH_ASSOC);

    $intitule = $data["intitule"];
    $name = $data["name"];
    $email = $data["email"];
    $photo = $data["photo"];
    $resume = $data["resume"];
    $tel = $data["tel"];
    $linkedinLink = $data["linkedinLink"];
    $faceBookLink = $data["faceBookLink"];
    $adress = $data["adress"];
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
                        <h1>Modifier info : </h1>
                        <form action="update.php?id=<?php echo $id ?>" method="post">
                            <input type="text" id="intitule" name="intitule" placeholder="Intitulé" required="required" value="<?php echo!empty($intitule) ? $intitule : ''; ?>"/>
                            <br>
                            <input type="text" id="name" name="name" placeholder="Nom" required="required" value="<?php echo!empty($name) ? $name : ''; ?>" />
                            <br>
                            <input type="email" id="email" name="email" placeholder="email" required="required" value="<?php echo!empty($email) ? $email : ''; ?>" />
                            <br>
                            <select name="image" >
                                <option style="color: #000000;" selected><?php echo $photo; ?></option>
                                <option ng-repeat="image in images" style="color: #000000;" ng-show="<?php echo $image; ?> != image.name" value="{{image.name}}">{{image.name}}</option>
                            </select>
                            <br>
                            <input type="text" name="tel" id="tel" placeholder="Téléphone" required="required" value="<?php echo $tel; ?>"></input>
                            <br>
                            <input type="text" name="faceBookLink" id="faceBookLink" placeholder="Facebook" required="required" value="<?php echo $faceBookLink; ?>"></input>
                            <br>
                            <input type="text" name="linkedinLink" id="linkedinLink" placeholder="Linkedin" required="required" value="<?php echo $linkedinLink; ?>"></input>
                            <br>
                            <input type="text" name="adress" id="adress" placeholder="Adresse" required="required" value="<?php echo $adress; ?>"></input>
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