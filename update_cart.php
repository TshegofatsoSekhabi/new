<?php
session_start(); //start session

if(isset($_GET["emptycart"]) && $_GET["emptycart"]==1)
{
    $return_url = base64_decode($_GET["return_url"]); //return url
    session_destroy();
    header('Location:'.$return_url);
}


if(isset($_POST["type"]) && $_POST["type"]=='add')
{
    $product_code   = filter_var($_POST["product_code"], FILTER_SANITIZE_STRING);
    $product_qty    = filter_var($_POST["product_qty"], FILTER_SANITIZE_NUMBER_INT); 
   
   
    
    if($product_qty > 10){
        die('<div align="center">This demo does not allowed more than 10 quantity!<br /></div>');
    }
	require_once('cellphone.php');
    
    $results = $db->query("SELECT productName,price FROM tblproduct WHERE product_code='$product_code' LIMIT 1");
    $obj = $results->fetch_object();
   
    if ($results) { 
       
        
        $new_product = array(array('name'=>$obj->product_name, 'code'=>$product_code, 'qty'=>$product_qty, 'price'=>$obj->price));
       
        if(isset($_SESSION["products"])) 
        {
            $found = false; 
           
            foreach ($_SESSION["products"] as $cart_itm) 
            {
                if($cart_itm["code"] == $product_code){ 

                    $product[] = array('name'=>$cart_itm["name"], 'code'=>$cart_itm["code"], 'qty'=>$product_qty, 'price'=>$cart_itm["price"]);
                    $found = true;
                }else{
                    //item doesn't exist in the list, just retrive old info and prepare array for session var
                    $product[] = array('name'=>$cart_itm["name"], 'code'=>$cart_itm["code"], 'qty'=>$cart_itm["qty"], 'price'=>$cart_itm["price"]);
                }
            }
           
            if($found == false) 
            {
                
                $_SESSION["products"] = array_merge($product, $new_product);
            }else{
                
                $_SESSION["products"] = $product;
            }
           
        }else{
            
            $_SESSION["products"] = $new_product;
        }
       
    }
   
    
    header('Location:'.$return_url);
}

//remove item from shopping cart
if(isset($_GET["removep"]) && isset($_GET["return_url"]) && isset($_SESSION["products"]))
{
    $product_code   = $_GET["removep"]; //get the product code to remove
    $return_url     = base64_decode($_GET["return_url"]); //get return url

   
    foreach ($_SESSION["products"] as $cart_itm) //loop through session array var
    {
        if($cart_itm["code"]!=$product_code){ //item does,t exist in the list
            $product[] = array('name'=>$cart_itm["name"], 'code'=>$cart_itm["code"], 'qty'=>$cart_itm["qty"], 'price'=>$cart_itm["price"]);
        }
       
        //create a new product list for cart
        $_SESSION["products"] = $product;
    }
   
    //redirect back to original page
    header('Location:'.$return_url);
}