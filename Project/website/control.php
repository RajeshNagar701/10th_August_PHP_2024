

<?php

class control{
	
	function __construct(){
		
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