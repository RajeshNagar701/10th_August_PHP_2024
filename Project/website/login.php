<?php
include_once('header.php');
?>	
    <main>
        <!--? Hero Start -->
        <div class="slider-area2 section-bg2 hero-overly" data-background="assets/img/hero/hero2.png">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2">
                                <h2>Login us</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
        <!--?  Contact Area start  -->
        <section class="contact-section">
            <div class="container">
                
                <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title">Login Here</h2>
                    </div>
                    <div class="col-lg-12">
                        <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                            <div class="row">
                               
                               
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                                    </div>
                                </div>
								 <div class="col-sm-12">
                                    <div class="form-group">
                                        <input class="form-control valid" name="password" id="password" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your password'" placeholder="Enter your password">
                                    </div>
                                </div>
                                
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="button button-contactForm boxed-btn">Login</button>
								<br>
								<br>
								<a href="signup.php" class="ms-5 text-primary">If Not Regisrtered then Signup Here</a>
							</div>
                        </form>
                    </div>
                   
                </div>
            </div>
        </section>
        <!-- Contact Area End -->
    </main>
    
<?php
include_once('footer.php');
?> 