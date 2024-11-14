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
                                <h2>Signup us</h2>
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
                        <h2 class="contact-title">Signup Here</h2>
                    </div>
                    <div class="col-lg-12">
                        <form enctype="multipart/form-data" class="form-contact contact_form" action="" method="post" id="contactForm" novalidate="novalidate">
                            <div class="row">
                               
								<div class="col-sm-12">
                                    <div class="form-group">
                                        <input class="form-control valid" name="name" id="email" type="text" placeholder="Enter Name">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input class="form-control valid" name="email" id="email" type="email" placeholder="Email">
                                    </div>
                                </div>
								 <div class="col-sm-12">
                                    <div class="form-group">
                                        <input class="form-control valid" name="password" id="password" type="text" placeholder="Enter your password">
                                    </div>
                                </div>
								<div class="col-sm-12">
                                    <div class="form-group">
										Gender : 
                                        Male : <input name="gender" type="radio" value="Male" />
										Female : <input name="gender" type="radio" value="Female" />
                                    </div>
                                </div>
								<div class="col-sm-12">
                                    <div class="form-group">
										Language : 
                                        Hindi : <input name="lag[]" type="checkbox" value="Hindi" />
										English : <input name="lag[]" type="checkbox" value="English" />
										Gujarati : <input name="lag[]" type="checkbox" value="Gujarati" />
                                    </div>
                                </div>
								<div class="col-sm-12">
									<div class="form-group">
										<select name="cid" class="form-select">
										  <option>Select Country</option>
										  <option>India</option>
										  <option>Japan</option>
										  <option>Rasia</option>
										</select>
									</div>	
                                </div>
								
								<div class="col-sm-12 mt-5">
                                    <div class="form-group">
                                        <input class="form-control valid" name="file" type="file" placeholder="Upload your Profile Iamge">
                                    </div>
                                </div>
                                
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="button button-contactForm boxed-btn">Signup</button>
								<br>
								<br>
								<a href="login" class="ms-5 text-primary">If you already Regisrtered then Login Here</a>
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