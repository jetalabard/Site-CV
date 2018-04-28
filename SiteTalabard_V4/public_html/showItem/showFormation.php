<section id="first" class="wrapper alt style2">
    <?php
    include './db/db.php';
    $pdo = Database::connect();
    $pdo->exec("set names utf8");
    $sql = 'SELECT * FROM formation ORDER BY ID DESC';
    foreach ($pdo->query($sql) as $row) {
        echo'<section class="spotlight">';
        echo'<div class="image"><img src="./img/' . $row['photo'] . '" alt="" /></div>';
        echo'<div class="content">';
        echo'<h5><b><u>' . $row['title'] . '</u></b></h5>';
        echo'<h6>' . $row['subtitle'] . '</h6>';
        echo'<h6><small><i>' . $row['date'] . ' </i></small></h6>';
        echo'<p>' . $row['resume'] . '</p>';
        echo'<ul class="actions">';
        $sqlLinks = 'SELECT * FROM link where idLinks=' . $row['idlinks'] . ' ORDER BY id DESC';
        foreach ($pdo->query($sqlLinks) as $rowLinks) {
            echo'<li>';
            if ($rowLinks['importance'] == '1' && $rowLinks['url'] == '0') {
                echo' <a href = "' . $rowLinks['link'] . '" class = "button fit">
        ' . $rowLinks['libl'] . ' <span class = "icon fa-angle-double-right"></span></a>';
            } elseif ($rowLinks['importance'] == '0' && $rowLinks['url'] == '0') {
                echo' <a href = "' . $rowLinks['link'] . '" class = "button fit special icon fa-download">
        ' . $rowLinks['libl'] . ' <span class = "icon fa-angle-double-right"></span></a>';
            } elseif ($rowLinks['importance'] == '0' && $rowLinks['url'] == '1') {
                    echo' <a href = "' . $rowLinks['link'] . '" download="' . $rowLinks['libllink'] . '" class = "button fit special">
        ' . $rowLinks['libl'] . '</a>';
            } else {
                echo' <a href = "' . $rowLinks['link'] . '" download="' . $rowLinks['libllink'] . '" class = "button fit icon fa-download">
        ' . $rowLinks['libl'] . '</a>';
            }
            echo' </li>';
        }
        echo' </ul>';

        echo' </div>';

        Database::disconnect();
        echo'</section>';
    }
    ?>
</section>