

<?php

include_once('../website/model.php');  // step 1 load model in controller so you can call logic function

class control extends model{  // extend mnodel class so yu can access function
	
	function __construct(){
		
		session_start();
		
		model::__construct();  // call model __construct for db connectivity
		
		$path=$_SERVER['PATH_INFO'];
		
		switch($path)
		{
			case '/admin-login':
				if(isset($_REQUEST['login']))
				{
					
					$email=$_REQUEST['email'];
					$password=md5($_REQUEST['password']);

					$where=array("email"=>$email,"password"=>$password);
					
					$res=$this->select_where('admins',$where);
					
					$chk=$res->num_rows; // check cond by rows
					if($chk===1) // 1 meanse true
					{
						$fetch=$res->fetch_object();
						//session create_function
						
						$_SESSION['adminid']=$fetch->id;
						$_SESSION['adminname']=$fetch->name;
						
						echo "<script>
							alert('Login successful !');
							window.location='dashboard'
						</script>";
						
					}
					else
					{
						echo "<script>
							alert('Login Failed due to Wrong Creadential !');
							window.location='admin-login'
						</script>";
					}
					
				}
				include_once('index.php');
			break;
			
			case '/adminlogout':
				unset($_SESSION['adminid']);
				unset($_SESSION['adminname']);
				echo "<script>
						alert('Logout successful !');
						window.location='admin-login'
					</script>";
			break;
			
			
			case '/dashboard':
				include_once('dashboard.php');
			break;
			
			case '/add_categories':
				include_once('add_categories.php');
			break;
			
			case '/manage_categories':
				$categories_arr=$this->select('categories');
				include_once('manage_categories.php');
			break;
			
			case '/add_product':
				include_once('add_product.php');
			break;
			
			case '/manage_product':
				$product_arr=$this->select('product');
				include_once('manage_product.php');
			break;
			
			case '/manage_contact':	
				$contct_arr=$this->select('contacts');
				include_once('manage_contact.php');
			break;
			
			case '/manage_customer':
				$customer_arr=$this->select('customer');
				include_once('manage_customer.php');
			break;
			
			case '/manage_cart':	
				$cart_arr=$this->select('cart');
				include_once('manage_cart.php');
			break;
			
			case '/manage_order':
				$order_arr=$this->select('order');
				include_once('manage_order.php');
			break;
			
			case '/manage_feedback':
				$feedback_arr=$this->select('feedback');
				include_once('manage_feedback.php');
			break;
			
			
			case '/add_employee':	
				include_once('add_employee.php');
			break;
			
			case '/manage_employee':
				$employee_arr=$this->select('employee');
				include_once('manage_employee.php');
			break;
			
			case '/delete':
				
				if(isset($_REQUEST['del_contacts']))
				{
					$id=$_REQUEST['del_contacts'];
					$where=array("id"=>$id);
					$res=$this->delete_where('contacts',$where);
					if($res)
					{
						echo "<script>
							alert('Contact Deleted successful !');
							window.location='manage_contact';
						</script>";
					}
				}
				
				if(isset($_REQUEST['del_customer']))
				{
					$id=$_REQUEST['del_customer'];
					$where=array("id"=>$id);
					
					// img delete
					$res_select=$this->select_where('customer',$where);
					$fetch=$res_select->fetch_object();
					$del_img=$fetch->file;
					
					$status=$fetch->status;
					
					if($status=="Block")
					{
						$res_delete=$this->delete_where('customer',$where);
						unlink('../website/assets/img/customer/'.$del_img);
						echo "<script>
							alert('Customer Deleted successful !');
							window.location='manage_customer';
						</script>";
					}
					else
					{
						echo "<script>
							alert('Customer NOT deleted So Blocked first!');
							window.location='manage_customer';
						</script>";
					}
					
					
				}
				
				if(isset($_REQUEST['del_categories']))
				{
					$id=$_REQUEST['del_categories'];
					$where=array("id"=>$id);
					$res=$this->delete_where('categories',$where);
					if($res)
					{
						echo "<script>
							alert('Categories Deleted successful !');
							window.location='manage_categories';
						</script>";
					}
				}
				
			break;
			
			
			default:
				echo "<h1> 404 : Page Not Found</h1>";
			break;
		}
			
		
	}
	
}
$obj=new control;

?>