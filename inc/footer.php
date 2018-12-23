<footer class="section-gap">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="company-detail">
                    <figure>
                        <a href="./"><img src="assets/images/dit-name.png" alt="dit"></a>
                    </figure>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                    
                </div>
            </div>
            <div class="col-md-2">
                <div class="footer-links">
                    <h4>Quick links</h4>
                    <ul>
                        <li><a href="./">Home</a></li>
                        <li><a href="about.php">Company</a></li>
                        <li><a href="testimonial.php">Testimonials</a></li>
                        <li><a href="blog.php">Blog</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2">
                <div class="footer-links">
                    <h4>Service</h4>
                    <ul>
                        <li><a href="service.php">SEO</a></li>
                        <li><a href="service.php">Web development</a></li>
                        <li><a href="service.php">App development</a></li>
                        <li><a href="service.php">Graphic designing</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2">
                <div class="footer-links">
                    <h4>Help</h4>
                    <ul>
                        <li><a href="privacy.php">Support desk</a></li>
                        <li><a href="privacy.php">Terms & Conditions</a></li>
                        <li><a href="privacy.php">Privacy policy</a></li>
                        <li><a href="career.php">Career</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="footer-links">
                    <h4>Get in touch</h4>
                    <ul>
                        <li>Address: <a href="!#">Kathmandu, Nepal</a></li>
                        <li>Phone: <a href="!#">9800000000</a></li>
                        <li>Email: <a href="!#">Support@ditsolution.com</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <span>©2018 DIT Solution. All rights reserved.</span>
            <ul>
                <li><a href="!#" target="_blank" class="fb"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="!#" target="_blank" class="twitter"><i class="fab fa-twitter"></i></a></li>
                <li><a href="!#" target="_blank" class="linkedin"><i class="fab fa-linkedin-in"></i></a></li>
            </ul>
        </div>
    </div>
</footer>

<script src="assets/bower_components/jquery/dist/jquery.js"></script>
<!-- <script src="assets/bower_components/jquery/dist/jquery.slim.js"></script> -->
<script src="assets/bower_components/jquery/dist/jquery.popper.js"></script>
<!-- jQuery for Venobox -->
<script src="assets/bower_components/venobox/venobox.min.js"></script>
<!-- bootstrap -->
<script src="assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Slick -->   
<script src="assets/bower_components/slick-carousel/slick/slick.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.mixitup.min.js"></script>
<!-- custom -->
<script src="assets/js/global.js" type="text/javascript"></script>
<script src="assets/js/css3-animate-it.js" type="text/javascript"></script>
<!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->
<script src="assets/js/jquery.mixitup.min.js" type="text/javascript"></script>
<script type="text/javascript">
    $(function () {
        
        var filterList = {
        
            init: function () {
            
                // MixItUp plugin
                // http://mixitup.io
                $('#portfoliolist').mixItUp({
                selectors: {
                  target: '.portfolio',
                  filter: '.filter' 
              },
              load: {
              filter: '.app'  
            }     
                });                             
            
            }

        };
        
        // Run the show!
        filterList.init();
        
        
    }); 
    </script>


</body>
</html>