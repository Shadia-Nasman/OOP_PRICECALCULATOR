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

<?php include '/var/www/html/OOP_PRICECALCULATOR/model/model.php';?>   
<?php include '/var/www/html/OOP_PRICECALCULATOR/controller/control.php';?>

<div class="container" style="margin-top: 50px">
        <form method="post" action="view.php">
	      
          <?php
///////////////////////////
echo "<div>";
        echo '<select name="customers" id="customers">';
        foreach ($cust_data as $name) {
          
            echo '<option value="'.$name->price.'">'.$name->name.'</option>';
            
          }
          echo '</select>';
          
          echo "</div>";
///////////////////////////
        ?>  
           <?php
//////////////////////////       
echo '<select name="products[]" id="products" multiple>';
foreach ($products_data as $product) {
  
    echo '<option value="'.$product->price.'">'.$product->name.'</option>';
    
  }
  echo '</select>';

          
//////////////////////////         
        ?>  

          <select name="operation">
	        	  <option value="plus">Plus</option>
	            <option value="minus">Minus</option>
	            <option value="multiply">Multiply</option>
	            <option value="divided by">Devide</option>
	        </select>


	        <!-- <input name="number2" type="text" class="form-control" style="width: 150px; display: inline" /> -->
	        <input name="submit" type="submit" value="Calculate" class="btn btn-primary" />
	    </form>

       
   </div>   
    
</body>

</html>