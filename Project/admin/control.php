

<?php

class control{
	
	function __construct(){
		
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
				include_once('manage_categories.php');
			break;
			
			case '/add_product':
				include_once('add_product.php');
			break;
			
			case '/manage_product':	
				include_once('manage_product.php');
			break;
			
			case '/manage_contact':	
				include_once('manage_contact.php');
			break;
			
			case '/manage_customer':	
				include_once('manage_customer.php');
			break;
			
			case '/manage_cart':	
				include_once('manage_cart.php');
			break;
			
			case '/manage_order':	
				include_once('manage_order.php');
			break;
			
			case '/manage_feedback':	
				include_once('manage_feedback.php');
			break;
			
			case '/manage_order':	
				include_once('manage_order.php');
			break;
			
			case '/add_employee':	
				include_once('add_employee.php');
			break;
			
			case '/manage_employee':	
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