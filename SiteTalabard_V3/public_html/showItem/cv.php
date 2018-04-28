<section id="cv" class="wrapper style4" style="text-align: center;">
    <div class="inner">
        <h3><u>Curriculum Vitae</u></h3>
        <ul class="actions">
            <li ng-repeat="doc in documents">
                <a href="{{doc.link}}" download="{{doc.name}}" 
                   class="button fit special icon fa-download">
                    {{doc.libl}}
                </a>
            </li>
        </ul>
    </div>
</section>