<?php
if(isset($_SESSION['userid']))
{
	
}
else
{
	echo "<script>
			window.location='index'
		</script>";
}
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
                                <h2>Edit Profile</h2>
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
                        <h2 class="contact-title">Edit Profile</h2>
                    </div>
                    <div class="col-lg-12">
                        <form enctype="multipart/form-data" class="form-contact contact_form" action="" method="post" >
                            <div class="row">
                               
								<div class="col-sm-12">
                                    <div class="form-group">
                                        <input class="form-control valid" value="<?php echo $fetch->name;?>" name="name" id="email" type="text" placeholder="Enter Name">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input class="form-control valid" value="<?php echo $fetch->email;?>" name="email" id="email" type="email" placeholder="Email">
                                    </div>
                                </div>
								<div class="col-sm-12">
                                    <div class="form-group">
										<?php
										$gender=$fetch->gender;
										?>
										Gender : 
                                        Male : <input name="gender" type="radio" value="Male" <?php if($gender=="Male") { echo "checked";}?> />
										Female : <input name="gender" type="radio" value="Female" <?php if($gender=="Female") { echo "checked";}?> />
                                    </div>
                                </div>
								<div class="col-sm-12">
										<?php
										$lag=$fetch->lag; // string
										$lag_arr=explode(',',$lag);
										?>
                                    <div class="form-group">
										Language : 
                                        Hindi : <input name="lag[]" type="checkbox" value="Hindi" <?php if(in_array("Hindi",$lag_arr)) { echo "checked";}?> />
										English : <input name="lag[]" type="checkbox" value="English" <?php if(in_array("English",$lag_arr)) { echo "checked";}?> />
										Gujarati : <input name="lag[]" type="checkbox" value="Gujarati" <?php if(in_array("Gujarati",$lag_arr)) { echo "checked";}?> />
                                    </div>
                                </div>
								<div class="col-sm-12">
									<div class="form-group">
										<select name="cid" class="form-select">
										  <option>Select Country</option>
										 <?php
										 foreach($country as $c)
										 {
											 if($c->id==$fetch->cid)
											 {
										 ?>
												<option value="<?php echo $c->id;?>" selected><?php echo $c->cnm;?></option>
										 <?php	
											 }	
										     else
											 {
											 ?>
												<option value="<?php echo $c->id;?>"><?php echo $c->cnm;?></option>
											<?php	
											 }												 
										 }
										 ?>
										</select>
									</div>	
                                </div>
								
								<div class="col-sm-12 mt-5">
                                    <div class="form-group">
                                        <input class="form-control valid" name="file" type="file" placeholder="Upload your Profile Iamge">
										<img src="assets/img/customer/<?php echo $fetch->file;?>" width="100px"/>
									</div>
                                </div>
                                
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" name="save" class="button button-contactForm boxed-btn">Save</button>
								<br>
								<br>
								<a href="userprofile" class="ms-5 text-primary">Back</a>
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