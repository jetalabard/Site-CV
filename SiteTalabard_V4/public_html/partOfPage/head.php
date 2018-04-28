
<?php

function showHead($index) {
    echo'<section id = "banner" >';
    echo'<div class = "inner">';
    echo'<h2>{{heads['.$index.'].title}}</h2>';
    echo'<h3>{{heads['.$index.'].subtitle}}</h3>';
    echo'<h4><u>{{heads['.$index.'].subsubtitle}}</u></h4>';
    echo'<p>';
    echo'{{heads['.$index.'].resume}}';
    echo'</p>';
	if($index == 7){
		include './db/db.php';
		$pdo = Database::connect();
		$pdo->exec("set names utf8");
		$sql = 'SELECT * FROM description';
		foreach ($pdo->query($sql) as $row) {
			echo'<a ng-if="android" href = "' . $row['linkApp'] . '" download="TalabardJeremy.apk" class = "button icon special fa-android">Télécharger l\'application Android</a>';
			echo'<h6 ng-if="android">Penser à activité les sources inconnues avant d\'installer l\'application Réglages->Sécurité</h6>';
		}
		Database::disconnect();
	}
    echo'<a href = "#first" class = "more scrolly">En apprendre plus</a>';
    echo'</div>';
    echo'</section>';
}

?>