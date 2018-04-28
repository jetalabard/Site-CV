
<?php
function showHead($index) {
    return <<<HTML
<section id = "banner" >
    <div class = "inner">
        <h2>{{heads[$index].title}}</h2>
        <h3>{{heads[$index].subtitle}}</h3>
        <h4><u>{{heads[$index].subsubtitle}}</u></h4>
        <p>
            {{heads[$index].resume}}
        </p>
        <a href = "#first" class = "more scrolly">En apprendre plus</a>
    </div>
</section>
HTML;
}

?>