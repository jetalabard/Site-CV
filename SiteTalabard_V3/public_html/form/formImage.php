<?php
session_start();
if (isset($_SESSION['errormsg'])) {
    $error =$_SESSION['errormsg'];
}
?>
<article style="margin: 10%">
    <section class="wrapper style4" >
        <section style="text-align: center" >
            <h1>Ajout Image : </h1>
            <form action="../server/upload.php" method="post" enctype="multipart/form-data">
                <input type="file" name="fileToUpload" id="fileToUpload" required="required"/>
                <br>
                <input type="submit" name="submit" value="Envoyer le fichier" class="button fit special"/>
                <br>
                <span><?php echo $error; ?></span>
            </form>
        </section>
    </section>
</article>