<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration </title>
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
                            <li><a href="index.html"> HOME</a></li>
                            <li><a href="register.php">register</a></li>
                            <li><a href="about.html"> about</a></li>
                            
                        </ul>
                    </div>
               
            
            </div>
    
        </header>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
	  
  	  <input type="text" name="username" placeholder="Enter Username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
	  
  	  <input type="email" name="email" placeholder="Enter Email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
	  <input type="password" name="password_1" placeholder="Enter Password" >
  	  
  	</div>
  	<div class="input-group">
  	  <label>Confirm Password</label>
	  <input type="password" name="password_2" placeholder="Confirm Password" >
  	  
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>