<header>
			<div class="header-top-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="header-top-left">                            
								<ul>
									<li><a href="mailto:support@rstheme.com"><i class="fa fa-envelope-o" aria-hidden="true"></i> support@rstheme.com</a></li>
									<li><img  src="<?= get_template_directory_uri()?>/assets/images/logo/flag.jpg" alt="Logo">
                                        <a href="#">English 
                                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                                        </a>
										<ul>
											<li><img src="<?= get_template_directory_uri()?>/assets/images/logo/flag2.jpg" alt="Logo"><a href="#">Japanese</a></li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="social-media-area">
								<nav>
									<ul>
										<li><a href="#" class="active"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i> <sup>1</sup></a></li>
										<li class="log"><a href="#"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a></li> 
										<li class="sign"><a href="#"><span>/</span> Sign Up</a></li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="header-middle-area menu-sticky">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 col-sm-12 col-xs-12 logo">
                            <a href="index.html"><img  src="<?= get_template_directory_uri( )?>/assets/images/logo.png" alt="logo"></a>
                        </div>
                        <div class="col-md-10 col-sm-12 col-xs-12 mobile-menu">
                          
                            <div class="main-menu">
                                <a class="rs-menu-toggle"><i class="fa fa-bars"></i>Menu</a>
                                <nav class="rs-menu">
                                <?php wp_nav_menu(
                                [
                                    'theme_location' => 'primary',
                                    'menu_class' => 'nav-menu',
                                    'walker' => new My_Custom_Primary_Nav_Walker,
                                ]) ?>
                                   
                                      
                                        
                                      
                                        <li class="menu-item-has-children">
                                            <a href="#">Club List</a>
                                            <ul class="sub-menu">
                                               <li><a href="badda.html">Badda FC</a></li> 
                                               <li><a href="banani.html">Banani FC</a></li> 
                                               
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contact</a></li> 
                                        
                                       
                                    </ul> -->
                               </nav>
                              <!--Header Search Start  here-->
                                <div class="search">
                                    <a class="rs-search" data-target=".search-modal" data-toggle="modal" href="#"><i class="fa fa-search"></i></a>
                                </div>
                               <!--Header Search End  here--> 
                           </div>
                       </div>
                    </div>
                </div>
            </div>
		</header> 