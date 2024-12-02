

<?php

include_once('model.php');  // step 1 load model in controller so you can call logic function

class control extends model{  // extend mnodel class so yu can access function
	
	function __construct(){
		
		model::__construct();  // call model __construct for db connectivity
		
		$path=$_SERVER['PATH_INFO'];
		
		switch($path)
		{
			case '/index':
				include_once('index.php');
			break;
			
			case '/about':
				include_once('about.php');
			break;
			
			case '/services':
				
				include_once('services.php');
			break;
			
			case '/blog':
				include_once('blog.php');
			break;
			
			case '/blog_details':
				include_once('blog_details.php');
			break;
			
			case '/contact':	
				if(isset($_REQUEST['submit']))
				{
					$name=$_REQUEST['name'];
					$email=$_REQUEST['email'];
					$comment=$_REQUEST['comment'];
					
					$data=array("name"=>$name,"email"=>$email,"comment"=>$comment);
					
					$res=$this->insert('contacts',$data);
					if($res)
					{
						echo "<script>
							alert('Contact successful !');
						</script>";
					}
					
				}
				include_once('contact.php');
			break;
			
			case '/login':	
				if(isset($_REQUEST['login']))
				{
					
					$email=$_REQUEST['email'];
					$password=md5($_REQUEST['password']);

					$where=array("email"=>$email,"password"=>$password);
					
					$res=$this->select_where('customer',$where);
					
					
					$chk=$res->num_rows;
					if($chk===1) // 1 meanse true
					{
						$fetch=$res->fetch_object();
						$status=$fetch->status;
						if($status=="Unblock")
						{
						echo "<script>
							alert('Login successful !');
							window.location='index'
						</script>";
						}
						else
						{
							echo "<script>
							alert('Login Failed due to Blocked Account !');
							</script>";
						}
					}
					else
					{
						echo "<script>
							alert('Login Failed due to Wrong Creadential !');
						</script>";
					}
					
				}
				include_once('login.php');
			break;
			
			case '/signup':	
				$country=$this->select('country');
				if(isset($_REQUEST['submit']))
				{
					$name=$_REQUEST['name'];
					$email=$_REQUEST['email'];
					$password=md5($_REQUEST['password']);
					$gender=$_REQUEST['gender'];
					$lag_arr=$_REQUEST['lag']; 
					$lag=implode(",",$lag_arr); // arr to string
					
					$cid=$_REQUEST['cid'];
	
					// image upload
					$file=$_FILES['file']['name'];
					$path="assets/img/customer/".$file;
					$tmp_img=$_FILES['file']['tmp_name'];
					move_uploaded_file($tmp_img,$path);
					
					$data=array("name"=>$name,"email"=>$email,"password"=>$password,
					"gender"=>$gender,"lag"=>$lag,"cid"=>$cid,"file"=>$file);
					
					$res=$this->insert('customer',$data);
					if($res)
					{
						echo "<script>
							alert('Signup successful !');
						</script>";
					}
					
				}
				include_once('signup.php');
			break;
			
			default:
				echo "<h1> 404 : Page Nit Found</h1>";
			break;
		}
			
		
	}
	
}
$obj=new control;

?>