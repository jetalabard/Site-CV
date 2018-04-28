<?php
include('./session/login.php'); // Includes Login Script
if (isset($_SESSION['login_user'])) {
    header("location: admin.php");
}
?>
<article style="margin: 10%;">
    <section class="wrapper style4"  >
        <section style="text-align: center">
            <h1>Connexion</h1>
            <form action="" method="post">
                <input type="text" id="name" name="username" placeholder="Identifiant" required="required" />
                <br>
                <input type="password" id="password" name="password" placeholder="Mot de passe" required="required" />
                <br>
                <button type="submit" name="submit" class="button fit special" value=" Login ">Valider</button>
                <br>
                <span><?php echo $error; ?></span>
            </form>
        </section>
    </section>
</article>