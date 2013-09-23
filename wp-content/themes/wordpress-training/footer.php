<?php
/**
 * The template for displaying the footer.
 * @author Mr Rony<mrtrandangtrinh@gmail.com>
 */

if( !defined('HTML_MODE') )
	define('HTML_MODE', (!empty($_GET['htmlmode']) ? '.min' : '') );

global $sTemplateURL;
?>
<footer>
            <section class="container">
                <div id="info_footer">
                    <h3 id="title">
                    Lorem ipsum dolor sit amet consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.
                    </h3>
                    <div class="row">
                        <ul id="info">
                            <li id="twitter" class="col-md-3">
                                <h3 class="uppercase bold">Follow on twitter</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat
                                </p>
                                <a href="#"><img src="img/face.jpg" alt="facebook" /></a>
                            </li>

                            <li id="link" class="col-md-6">
                                <h3 class="uppercase bold">liên kết</h3>

                                <ul>
                                    <li><a href="#">Lorem ipsum</a></li>
                                    <li><a href="#">Duis autem</a></li>
                                    <li><a href="#">Typi non habent</a></li>
                                    <li><a href="#">Odio dignissim</a></li>
                                    <li><a href="#">Accumsan et</a></li>
                                </ul>

                                <ul>
                                    <li><a href="#">Dolor sit amet</a></li>
                                    <li><a href="#">FAQs</a></li>
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">Clients</a></li>
                                    <li><a href="#">Donate</a></li>
                                </ul>

                                <ul>
                                    <li><a href="#">BBC Vietnamese</a></li>
                                    <li><a href="#">Quarta decima et</a></li>
                                    <li><a href="#">Legere me lius</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>

                            </li>

                            <li id="contact" class="col-md-3">
                                <h3 class="uppercase bold">Contact Us</h3>

                                <p id="tel_number">
                                    <span class="bold">Tel :</span> 01699169049
                                </p>

                                <p id="email">
                                    <span class="bold">Email :</span> tien06051992@gmail.com<script type="text/javascript">
                        /* <![CDATA[ */
                        (function(){try{var s,a,i,j,r,c,l,b=document.getElementsByTagName("script");l=b[b.length-1].previousSibling;a=l.getAttribute('data-cfemail');if(a){s='';r=parseInt(a.substr(0,2),16);for(j=2;a.length-j;j+=2){c=parseInt(a.substr(j,2),16)^r;s+=String.fromCharCode(c);}s=document.createTextNode(s);l.parentNode.replaceChild(s,l);}}catch(e){}})();
                        /* ]]> */
                        </script>
                                </p>

                                <p id="address">
                                    Nature tours. Your city. <span>Your state. 123 456 789</span>
                                </p>
                            </li>
                        </ul>
                    </div><!-- End .row-->
              </div><!--end #info_footer-->

                <ul id="coryright">                  
                        <li>&copy; Nature tours 2013.</li>
                        <li>Copyright and design by <span class="uppercase bold">izwebz.com</span>. All right reserved.</li>                   
                </ul>
            </section>
        </footer>
    </div> <!-- /End #container -->        
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php echo $sTemplateURL; ?>/js/vendor/jquery-1.10.1.min.js"><\/script>')</script>


        <script src="<?php echo $sTemplateURL; ?>/js/vendor/bootstrap.min.js"></script>             
        <script type="text/javascript" src="<?php echo $sTemplateURL; ?>/js/libs/jquery.blinds-0.9.js"></script>       
        <script src="<?php echo $sTemplateURL; ?>/js/script.js?v=1"></script>

        <script type="text/javascript">
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));          
        </script>
        <?php wp_footer(); ?>
    </body>
</html>