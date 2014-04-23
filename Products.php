<!DOCTYPE html>
<?php
require('cellphone.php');
$query = 'SELECT *
          FROM tblCategory
          ORDER BY category_Name';
$categories = $db->query($query);
?>
<html>
  <head>
    <title>List Of Specialties</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    
    <link href="snippet.css" rel="stylesheet">

    
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
		
		 <h1>Add Product</h1>
            <form action="add_product.php" method="post"
                  id="Products">

                <label>Category:</label>
                <select name="categoryName">
                <?php foreach ($categories as $category) : ?>
                    <option class="form-control" value="<?php echo $category['categoryName']; ?>">
                        
                    </option>
                <?php endforeach; ?>
                </select>
                <br />

                <label>Code:</label>
                <input type="input" class="form-control" name="code" />
                <br />

                <label>Name:</label>
                <input type="input" class="form-control" name="name" />
                <br />

                <label>List Price:</label>
                <input type="input" class="form-control" name="price" />
                <br />

                <label>&nbsp;</label>
                <input type="submit" class="btn btn-success" value="Add Product" />
                <br />
				<p><a href="List.php">View Product List</a></p>
            </form>
     

        <table class="table table-striped list">
           
        </table>
      </div>
    </section>
    <div class="footer container text-center">
        © <?php ?>. Proudly created by 212184454 $ 21
    </div>
  </body>
</html>