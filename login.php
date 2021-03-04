<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>login</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<header>
            <div class="header_menu">
                <div class="logo">
                    <img src="img/images (2).jfif" alt="logo" srcset="">
                    <p>W D L</p>
                </div>
    
            
    
                    <div class="menu">
                        <ul>
                            <li><a href="#"> HOME</a></li>
                            <li><a href="register.php">register</a></li>
                            <li><a href="about.html"> about</a></li>
                            
                        </ul>
                    </div>
               
            
            </div>
    
        </header>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	
  		<input type="text" name="username" placeholder="Enter Username" >
  	</div>
  	<div class="input-group">
  	
  		<input type="password" name="password" placeholder="Enter Password" >
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
</body>
</html>