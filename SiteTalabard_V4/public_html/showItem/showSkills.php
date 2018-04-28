<article id="first">
    <section class="wrapper style2">
        <div class="inner">
            <h3><u>Compétences Informatiques</u></h3>
            <h6>Langages et Framework de programmation</h6>
            <div class="box alt">
                <div class="row uniform 0%">
                    <?php
                    include './db/db.php';
                    $pdo = Database::connect();
                    $pdo->exec("set names utf8");
                    $sql = 'SELECT * FROM competence where type="language"';
                    foreach ($pdo->query($sql) as $row) {
                        echo'<div class="2u">';
                        echo'<span class="image">';
                        echo'<img src="./img/' . $row["image"] . '" alt="" style="margin:10%;"/>';
                        echo'</span>';
                        echo'</div>';
                    }
                    echo'</div>';
                    echo'<hr>';
                    echo'<h6>Méthodologie et Outils</h6>';
                    echo'<div class="row uniform 0%">';
                    $sqlTool = 'SELECT * FROM competence where type="tool"';
                    foreach ($pdo->query($sqlTool) as $rowTool) {
                        echo'<div class="2u">';
                        echo'<span class="image">';
                        echo'<img src="./img/' . $rowTool["image"] . '" alt="" style="margin:10%;"/>';
                        echo'</span>';
                        echo'</div>';
                    }
                    Database::disconnect();
                    ?>
                </div>
            </div>
        </div>
    </section>
</article>