

<?php

include_once('../website/model.php');  // step 1 load model in controller so you can call logic function

class control extends model{  // extend mnodel class so yu can access function
	
	function __construct(){
		
		model::__construct();  // call model __construct for db connectivity
		
		$path=$_SERVER['PATH_INFO'];
		
		switch($path)
		{
			case '/admin-login':
				include_once('index.php');
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
			
			
			default:
				echo "<h1> 404 : Page Not Found</h1>";
			break;
		}
			
		
	}
	
}
$obj=new control;

?>