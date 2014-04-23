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
<html>
  <head>
    <title>T&T</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    
    <!--Google Fonts-->
    <!--<link href='http://fonts.googleapis.com/css?family=Carrois+Gothic|Alegreya+Sans&subset=latin,latin-ext' rel='stylesheet' type='text/css'>-->
    
    <!--Bootshape-->
    <link rel="stylesheet" type="text/css" href="snippet.css" />

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
          <div class="form-group has-feedback">
            <input type="text" class="form-control" id="">
            <span class="glyphicon glyphicon-search form-control-feedback"></span>
          </div>
        </form>
     

        <table class="table table-striped list">
		  <img src="Lumia-Family-HP-Hero-jpg.jpg" height="50" width="150">
          Be aware that the CSS for these layouts is heavily commented. If you do most of your work in Design view, have a peek at the code to get tips on working with the CSS for the liquid layouts. You can remove these comments before you launch your site. To learn more about the techniques used in these CSS Layouts, read this article at Adobe's Developer Center - http://www.adobe.com/go/adc_css_layouts.

Clearing Method

Because all the columns are floated, this layout uses a clear:both declaration in the .footer rule. This clearing technique forces the .container to understand where the columns end in order to show any borders or background colors you place on the .container. If your design requires you to remove the .footer from the .container, you'll need to use a different clearing method. The most reliable will be to add a <br class="clearfloat" /> or <div class="clearfloat"></div> after your final floated column (but before the .container closes). This will have the same clearing effect.

Logo Replacement

An image placeholder was used in this layout in the .header where you'll likely want to place a logo. It is recommended that you remove the placeholder and replace it with your own linked logo. 

Be aware that if you use the Property inspector to navigate to your logo image using the SRC field (instead of removing and replacing the placeholder), you should remove the inline background and display properties. These inline styles are only used to make the logo placeholder show up in browsers for demonstration purposes
        </table>
      </div>
    </section>
    <div class="footer container text-center">
        © 2014 List Of Specialties. Proudly created by <a href="http://bootshape.com">Bootshape.com</a>
    </div>
  </body>
</html>