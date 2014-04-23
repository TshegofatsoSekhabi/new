<?php
    require_once('cellphone.php');

    // Get all categories
    $query = 'SELECT * FROM tblcategory
              ORDER BY category_Name';
    $categories = $db->query($query);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<!-- the head section -->
<head>
    <title>T&T Cellular</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>

<!-- the body section -->
<body>
    <div id="page">

    <div id="header">
        <h1>Product Manager</h1>
    </div>

    <div id="main">

    <h1>Category List</h1>
    <table>
        <tr>
            <th>Product Name</th>
            <th>&nbsp;</th>
        </tr>
        
		<tr>
            <th>Product Code</th>
            <th>&nbsp;</th>
        </tr>
		
		<tr>
            <th>Product Price</th>
            <th>&nbsp;</th>
        </tr>
		
		<tr>
            <th>Product Quantity</th>
            <th>&nbsp;</th>
        </tr>
    </table>
    <br />

    <h2>Add Category</h2>
    
		
    
    <br />
    <p><a href="List.php">List Products</a></p>

    </div> <!-- end main -->

    <div id="footer">
        <p>
            &copy; <?php echo date("Y"); ?> T&T Cellular, Inc.
        </p>
    </div>

    </div><!-- end page -->
</body>
</html>