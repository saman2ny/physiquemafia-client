 <header>
 
 
            <!-- start navigation -->
            <nav class="navbar navbar-default bootsnav bg-transparent navbar-top navbar-transparent-no-sticky">
                <div class="container-fluid nav-header-container height-100px padding-three-half-lr sm-height-70px sm-padding-15px-lr">
                    <!-- start header navigation -->
                    <div class="col d-none d-md-block text-left pl-0">
                        <div class="social-icon">
                            <a href="https://www.facebook.com/" title="Facebook" target="_blank"><i class="fa fa-facebook-f text-extra-dark-gray" aria-hidden="true"></i></a>
                            <a href="https://twitter.com/" title="Twitter" target="_blank"><i class="fa fa-instagram text-extra-dark-gray" aria-hidden="true"></i></a>
                            <a href="https://twitter.com/" title="Whatsapp" target="_blank"><i class="fa fa-whatsapp text-extra-dark-gray" aria-hidden="true"></i></a>
                        </div>
						
                           
							
                    </div>
                    <!-- start logo 
                    <div class="col text-md-center pl-0 pl-md-3">
                        <a class="logo" href="index.php"><img src="assets/img/logo.png" data-rjs="assets/img/logo@2x.png" class="default" alt="Pofo"></a>
                    </div>
                     end logo -->
					 
					 

							
							
                    <div class="col text-right pr-0">
                        <div class="hamburger-menu">
                            <div class="btn btn-hamburger border-none">
                                <button class="navbar-toggler mobile-toggle" type="button" id="open-button" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </button>
                            </div>
                            <div class="hamburger-menu-wrepper sm-text-center">
                                <div class="hamburger-logo text-left">
								<a class="logo" href="index.html">
							<!--	<img src="assets/img/logo-white.png" data-rjs="assets/img/logo-white@2x.png" alt="Pofo">-->
								</a>
								</div> 
                                <div class="btn btn-hamburger border-none">
                                    <button class="close-menu close-button-menu" id="close-button"></button>
                                </div>
                                <div class="animation-box">
                                    <div class="menu-middle">
                                        <div class="menu-wrapper d-table-cell align-middle text-left">
                                            <div class="d-md-flex">
                                                <div class="col-lg-10 col-md-8 d-flex align-items-center">
                                                    <ul class="hamburger-menu-links alt-font">
                                                        <li><a href="index" title="Home">Home</a></li>
                                                        <li><a href="about" title="About Me">About Me</a></li>
                                                        <li><a href="contact" title="Say Hello">Say Hello</a></li>
														<li><a href="member" title="Membership">Membership</a></li>
														
															<?php
											if (isset($_SESSION['userName']) ) {
												?>
													<li><a href="javascript:void(0);">Hi, <?php echo $_SESSION['userName']; ?></a></li>
													<li><a href="javascript:void(0);"  onclick="logout()">Logout</a></li>  

										
											<?php }	else{ ?>
												<li><a href="signin" title="signin">Signin</a></li>
											<li><a href="signup" title="signup">Signup</a></li>  
											
											<?php } ?>
											

                                                    </ul>
                                                </div>
                                                <div class="col-lg-4 col-md-4 d-flex align-items-center social-style-3">
                                                    <div class="width-100">
                                                        <span class="text-extra-large text-deep-pink alt-font d-block margin-15px-bottom">Tamil Nadu</span>
                                                        <span class="text-medium alt-font d-block font-weight-300 margin-15px-bottom line-height-30">Chennai,<br/>Call - +91 89397 75102<br/>Email - <a href="mailto:reachme@physiquemafia.in" class="text-white-2" target="_blank">reachme@physiquemafia.in</a></span>
                                                        <div class="separator-line-horrizontal-medium-light2 bg-deep-pink margin-25px-tb sm-margin-15px-tb d-inline-block"></div>
                                                        <div class="social-icon-style-9">
                                                            <ul class="small-icon">
                                                                <li><a class="margin-20px-right facebook" href="https://www.facebook.com/pg/Jagadeesh-Jayaraman-1856031837742856/photos/" target="_blank"><i class="fa fa-facebook-f" aria-hidden="true"></i></a></li>
                                                                <li><a class="margin-20px-right twitter" href="https://www.instagram.com/jagadeesh_jayaraman_official" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                                                <li><a class="margin-20px-right twitter" href="https://api.whatsapp.com/send?phone=+918939775102&text=Hi,%2C%20am%2C%20looking%2C%20for%2C%20training!" target="_blank"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Header Navigation -->
            </nav>
            <!-- end navigation -->
        </header>