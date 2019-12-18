
<?php //////////////////////////

$cust_json = file_get_contents("/var/www/html/oop-pricecalculator/model/customers.json");
$cust_data = json_decode($cust_json);

$group_json = file_get_contents("/var/www/html/oop-pricecalculator/model/groups.json");
$group_data = json_decode($group_json);

$products_json = file_get_contents("/var/www/html/oop-pricecalculator/model/products.json");
$products_data = json_decode($products_json);


// $merged_data=array_merge_recursive($cust_data,$group_data);
// print_r($merged_data);
 ///////////////////////////////

 ?>