<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 5 Website Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style>
</head>
<body>

<div class="p-5 bg-primary text-white text-center">
  <h1>Contact Page</h1>
  <p>Resize this responsive page to see the effect!</p> 
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link " href="/">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about">About</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link active" href="contact">Contact</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container mt-5">
  <div class="row">
    <div class="col-sm-8">
      <h2>Contact Page</h2>
		<form action="/action_page.php">
		  <div class="mb-3 mt-3">
			<label for="email" class="form-label">Email:</label>
			<input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
		  </div>
		  <div class="mb-3">
			<label for="pwd" class="form-label">Password:</label>
			<input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
		  </div>
		  <div class="form-check mb-3">
			<label class="form-check-label">
			  <input class="form-check-input" type="checkbox" name="remember"> Remember me
			</label>
		  </div>
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
  </div>
</div>

<div class="mt-5 p-4 bg-dark text-white text-center">
  <p>Footer</p>
</div>

</body>
</html>
