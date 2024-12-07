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
                                <h2>User Profile</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
    
        <!-- Services End -->
        <!--? Offer-services Start  -->
        <section class="offer-services pb-bottom2">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-tittle text-center mb-55">
                            <span class="element">Profile</span>
                            <h2>Manage User Profile</h2>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="col-lg-6 col-md-6">
                        <div class="single-offers">
                            <img src="assets/img/customer/<?php echo $fetch->file;?>" alt="" class=" w-100">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="single-offers">
                            <img src="assets/img/gallery/offers2.png" alt="" class=" w-100">
                            <div class="offers-caption text-center">
                                <div class="cat-icon">
                                    <i class="fa fa-user" style="color:white;font-size:100px; margin-bottom:20px"  alt=""></i>
                                </div>
                                <div class="cat-cap">
                                    <h5><a href="#">Welcome :<?php echo $fetch->name?></a></h5>
                                    <p>ID : <?php echo $fetch->id;?></p>
									<p>Email : <?php echo $fetch->email;?></p>
									<p>Gender : <?php echo $fetch->gender;?></p>
									<p>Launguages : <?php echo $fetch->lag;?></p>
									
									<p>Your Status : <?php echo $fetch->status;?></p>
									<a href="editprofile?user_edit=<?php echo $fetch->id;?>" class="btn btn-warning">Edit Profile</a>
								</div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <!-- Offer-services End  -->
        
    </main>
 
<?php
include_once('footer.php');
?> 