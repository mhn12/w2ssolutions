<?php include ("include/header.php"); ?>
<div id="content">
		
		<!-- /// CONTENT  /////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
			
            <div id="page-header" style="margin-bottom:0;">
            	
                <div class="row">
                	<div class="span12">
                    	
                        <i class="ifc-map_marker"></i>
                        <h3>Contact Us</h3>
                        
                    </div><!-- end .span12 -->
                </div><!-- end .row -->
                
            </div><!-- end #page-header -->
            
            <!--<div class="map" id="google-map"></div>-->
            <div> <iframe src="https://mapsengine.google.com/map/embed?mid=zMXObGpnGAOI.kQv-Qf_QQ0CM" width="100%" height="480"></iframe></div>
            <div class="box bg-parallax-1" style="margin-top:0;">
            	
                <div class="row">
                	<div class="span12 text-center">
                    	
                        <a href="https://www.facebook.com/way2smileSolutionspvtltd" class="facebook-icon social-icon">
                            <i class="ifc-facebook"></i>
                        </a>
                        <a href="https://twitter.com/w2ssolutions" class="twitter-icon social-icon">
                            <i class="ifc-twitter"></i>
                        </a>
                        <a href="http://www.pinterest.com/way2smile/" class="pinterest-icon social-icon">
                            <i class="ifc-pinterest"></i>
                        </a>
                        <a href="https://plus.google.com/100513502934104525715/posts" class="googleplus-icon social-icon">
                            <i class="ifc-google_plus"></i>
                        </a>
                        <a href="http://www.linkedin.com/company/w2s-solutions" class="linkedin-icon social-icon">
                            <i class="ifc-linkedin"></i>
                        </a>
                        
                    </div><!-- end .span12 -->
                </div><!-- end .row -->
                
            </div><!-- end .box -->
            
            <br><br>
            
			<div class="row">
				<div class="span12">
					
					<h3>Get in touch with us</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
					
				</div><!-- end .span12 -->
			</div><!-- end .row -->
			
			<br>
			
            <div class="row">
            	<div class="span8">

                    <form class="fixed" id="contact-form"  name="contact-form" method="post" action="_layout/php/send.php"> 
                        <fieldset>
                            
                            <div id="formstatus"></div>
                         	
                            <div class="row">
                            	<div class="span4">
                            		
									<p>
										<input class="span4" id="name" type="text" name="name" value="" placeholder="name">
									</p>
								
                                </div><!-- end .span4 --> 
                            	<div class="span4">
                            	
									<p>
										<input class="span4" id="email" type="text" name="email" value="" placeholder="e-mail">
									</p>
								
                                </div><!-- end .span4 --> 
                            </div><!-- end .row -->
							
							<p>
								<input class="span8" id="subject" type="text" name="subject" value="" placeholder="subject">
							</p>
							
							<p>
								<textarea class="span8" id="message" name="message" rows="10" cols="25" placeholder="Your Message"></textarea>
                            </p>
							
							<p class="text-right">
								<input class="btn btn-green" id="submit" type="submit" name="submit" value="Send">
                            </p>   
							   
                    	</fieldset>
                    </form>
                    
                </div><!-- end .span8 -->
                <div class="span4">

                    <address>
                    	<strong>USA Office</strong><br />
                        8585 Spicewood Springs Road,<br />
                        # 1335, Austin, <br />
                        Texas - 78759 <br />
                        Phone: +1 954 678 8492<br />
						
                    </address>
                    
                    <address>
                    	<strong>India Office</strong><br />
                        19, P.S. Tower,<br />
                        Govindarajapuram 2nd Street, Adyar, <br />
                        Chennai - 600020. <br />
                        Phone: +91 444 351 6331<br />
                        E-mail: Info@Way2Smile.com
                    </address>
                    
                </div><!-- end .span4 -->
            </div><!-- end .row -->
            
		<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

		</div><!-- end #content -->
<!-- /// Form validate ////////  -->
<script src="_layout/js/jqueryvalidate/jquery.validate.min.js"></script>
<!-- /// Form submit ////////  -->
<script src="_layout/js/jqueryform/jquery.form.min.js"></script>		
<?php include ("include/footer.php"); ?><!-- end #footer -->
