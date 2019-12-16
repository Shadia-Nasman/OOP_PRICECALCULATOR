<!DOCTYPE html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="style.css">
</head>

<body>
    
    <?php



$cust_json = file_get_contents("/var/www/html/oop-pricecalculator/model/customers.json");
$cust_data = json_decode($cust_json);

$group_json = file_get_contents("/var/www/html/oop-pricecalculator/model/groups.json");
$group_data = json_decode($group_json);

$products_json = file_get_contents("/var/www/html/oop-pricecalculator/model/products.json");
$products_data = json_decode($products_json);
 

?>
<form action="post">
<?php
 echo '<select name="customers" id="customers">';
foreach ($cust_data as $name) {
   
    echo '<option value="'.$name->id.'">'.$name->name.'</option>';
    
  }
  echo '</select>';
  
//$selected_name=$_POST['customers'];
?>    
          
<?php
 echo '<select name="pruducts" id="products">';
 
foreach ($products_data as $product) {
    
    echo '<option value="'.$product->id.'">'.$product->name.'</option>';
  }
  echo '</select>';
  // $selected_product=$_POST['products'];
  
// echo '<textarea name="show_prod" id="show_prod" cols="30" rows="10">'.$selected_product->description.'price: '.$selected_product->price.'</textarea>
// ';
?>          


<input type="submit" name="select">
  
</form>  
       

    
</body>

</html>