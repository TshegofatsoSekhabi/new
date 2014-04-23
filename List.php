<?php
    require_once('cellphone.php');

    // Get category ID
    if(!isset($categoryName)) {
        $categoryName = $_GET['categoryName'];
        if (!isset($categoryName)) {
            $categoryName = 1;
        }
    }

    // Get name for current category
    $query = "SELECT * FROM tblcategory
              WHERE categoryName = $categoryName";
    $category = $db->query($query);
    $category = $category->fetch();
    $category_name = $category['categoryName'];

    // Get all categories
    $query = 'SELECT * FROM tblcategory
              ORDER BY categoryName';
    $categories = $db->query($query);

    // Get products for selected category
    $query = "SELECT * FROM tblproducts
              WHERE category = $categoryName
              ORDER BY productName";
    $products = $db->query($query);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<body>
    <div id="page">

    <div id="header">
        <h1>Product Manager</h1>
    </div>

    <div id="main">

        <h1>Product List</h1>

        <div id="sidebar">
            <!-- display a list of categories -->
            <h2>Categories</h2>
            <ul class="nav">
            <?php foreach ($categories as $category) : ?>
                <li>
                <a href="?category_id=<?php echo $category['categoryName']; ?>">
                    
                </a>
                </li>
            <?php endforeach; ?>
            </ul>
        </div>

        <div id="content">
            
            <h2><?php echo $category_name; ?></h2>
            <table>
                <tr>
                    <th>Code</th>
                    <th>Name</th>
                    <th class="right">Price</th>
                    <th>&nbsp;</th>
                </tr>
                <?php foreach ($products as $product) : ?>
                <tr>
                    <td><?php echo $product['productCode']; ?></td>
                    <td><?php echo $product['productName']; ?></td>
                    <td class="right"><?php echo $product['listPrice']; ?></td>
                    <td><form action="delete_product.php" method="post"
                              id="delete_product_form">
                        <input type="hidden" name="productName"
                               value="<?php echo $product['productName']; ?>" />
                        <input type="hidden" name="categoryName"
                               value="<?php echo $product['categoryName']; ?>" />
                        <input type="submit" value="Delete" />
                    </form></td>
                </tr>
                <?php endforeach; ?>
            </table>
            <p><a href="Products.php">Add Product</a></p>
            <p><a href="category_list.php">List Categories</a></p>
        </div>
    </div>

    <div id="footer">
        <p>
            &copy; <?php echo date("Y"); ?> My Guitar Shop, Inc.
        </p>
    </div>

    </div>
</body>
</html>