<!DOCTYPE html>
<!--
SNIPPETS
Name: List Of Specialties
Version: 1.0
Created: 10 February 2014

AUTHOR
Design and code by: http://www.bootshape.com

Read full license: http://www.bootshape.com/license/

CREDITS
Fonts: http://www.google.com/fonts (Carrois Gothic, Alegreya Sans)
Images: http://www.flickr.com/photos/johnhopephotography/ and http://www.flickr.com/photos/xvire/
Background: http://subtlepatterns.com/ (fabric_of_squares_gray)

SUPPORT
E-mail: bootshape.com@gmail.com
Contact: http://www.bootshape.com/contact/
-->
<?php	
			require_once('fields.php');
            require_once('validate.php');
			
			
			$validate = new Validate();
			$fields = $validate->getFields();
			$fields->addField('name');
			$fields->addField('lname');
			$fields->addField('address');
			$fields->addField('email', 'Must be a valid email address.');
			$fields->addField('password', 'Must be at least 6 characters.');
			
			$email = trim($_POST['email']);
			$password = $_POST['password'];
			$verify = $_POST['verify'];
			$firstName = trim($_POST['name']);
			$lastName = trim($_POST['lname']);
			$address = trim($_POST['address']);
			
			$validate->email('email', $email);
			$validate->password('password', $password);
			$validate->verify('verify', $password, $verify);
			$validate->text('first_name', $firstName);
			$validate->text('last_name', $lastName);
			$validate->text('address', $address);
			
			require_once'cellphone.php';
			 $query = "INSERT INTO tblproduct
            (Fname, Lname, Email, Password,ComformPassword,Address) VALUES ('$firstName', '$lastName', '$email', '$password','$verify','$address')";
			$db->exec($query);
?>
<html>
  <head>
    <title>List Of Specialties</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <!--Google Fonts-->
    <!--<link href='http://fonts.googleapis.com/css?family=Carrois+Gothic|Alegreya+Sans&subset=latin,latin-ext' rel='stylesheet' type='text/css'>-->
    
    <!--Bootshape-->
    <link href="snippet.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
    </style>
  </head>
  <body>
    <section class="bootshape">
      <div class="center-block main">
        <div class="head">
          <div class="icons pull-right">
            <span class="glyphicon glyphicon-star"></span> 
            <span class="glyphicon glyphicon-envelope"></span> 
          </div>
          <div class="person">
            <img src="BMIT-logo[2].png">
         
          </div>
        </div>
        <div class="navigation text-center">
          <table class="table">
            <tr>
              <td><a href="Home.php">Home</a></td>
              <td><a href="Aboutus.php">About us</a></td>
              <td><a href="Products.php">Products</a></td>
              <td><a href="Register.php">Register</a></td>
              
            </tr>
          </table>
        </div>

        <form class="search-form">
          
        </form>
     

        <table class="table table-striped list">
		<tr align="right">
		
		</tr>
    <form name="form1" method="post" action="Register.php" class="form">
      <p>
        <label>Name:</label>
        <input type="text" class="form-control" name="name" id='name'  />
      </p>
      <p>
        <label>Last name:</label>
        <input type="text" class="form-control" name="lname" id="lname" />
        <br />
        <label>Email:</label>
        <input type="text" class="form-control" name="email" id="email" />
        <br />
        <br />
        <label>Password:</label>
        <input type="text" class="form-control" name="password" maxlength="16" id="password" />
        <br />
        <label> Address: </label>
        <textarea name="address" class="form-control" id="address" cols="45" rows="5"></textarea>
        <br />
        <input class="btn btn-success"type="submit" name="button" id="button" value="register" onclick="valid();" />
      </p>
    </form>
	<p><a href = "LogIn.php"><h2>Log In</h2></a></p>
        </table>
      </div>
    </section>
    <div class="footer container text-center">
        © 2014 Created by 212184454 <a href="http://bootshape.com">Bootshape.com</a>
    </div>
  </body>
</html>