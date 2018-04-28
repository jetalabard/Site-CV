<footer id="footer">
    <article class="container" id="contact"  >
        <div class="row" >
            <div class="12u 12u(mobile)">
                <h3><u>Contact</u></h3>
                <ul class="icons">
                    <li><a class="icon fa-envelope-o"><span class="label">Email</span></a>
                        <p>{{description.email}}</p>
                    </li>
                    <li><a href="tel:+{{description.tel}}" class="icon fa-phone">
                            <span class="label">Phone</span>
                        </a>
                        <p>{{description.tel}}</p>
                    </li>
                </ul>
                <ul class="icons">
                    <li>
                        <p>Ou sur : </p>
                    </li>   
                    <li>
                        <a href="{{description.faceBookLink}}" class="icon fa-facebook">
                            <span class="label">Facebook</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{description.linkedinLink}}" class="icon fa-linkedin">
                            <span class="label">Linkedin</span>
                        </a>
                    </li>
                </ul>
            </div>
            
        </div>
        <section class="wrapper">
            <div class="inner" id="googleMap" style="width:400px;height:280px;"></div>
        </section>
    </article>
    
    
    

    <ul class="copyright">
        <li>&copy; {{description.name}}</li>
    </ul>

</footer>