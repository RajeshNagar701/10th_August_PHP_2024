<?php
include_once('header.php');
?>
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Manage Customer</h1>
                    </div>
                </div>
                <!-- /. ROW  -->
              
            <div class="row">
                <div class="col-md-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Manage Customer
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#id</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Gender</th>
											<th>Lag</th>
											<th>country</th>
											<th>Image</th>
											<th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
									foreach($customer_arr as $d)
									{
									?>
                                        <tr>
                                            <td><?php echo $d->id;?></td>
                                            <td><?php echo $d->name;?></td>
                                            <td><?php echo $d->email;?></td>
                                            <td><?php echo $d->gender;?></td>
											<td><?php echo $d->lag;?></td>
											<td><?php echo $d->cid;?></td>
											<td><img width="50px" src="../website/assets/img/customer/<?php echo $d->file;?>" /></td>
											<td>
												<a href="" class="btn btn-primary">Edit</a>
												<a href="" class="btn btn-danger">Delete</a>
											</td>
                                        </tr>
									<?php
									}
									?>	
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
                </div>

            </div>

            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
<?php
include_once('footer.php');
?>   