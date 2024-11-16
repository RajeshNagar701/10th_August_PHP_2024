

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
				include_once('contact.php');
			break;
			
			case '/login':	
				include_once('login.php');
			break;
			
			case '/signup':	
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