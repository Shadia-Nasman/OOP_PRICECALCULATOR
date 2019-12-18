

    <?php
class customer {
    // Properties
    public $customer_name;
    public $customer_group;
  
  }

  class product {
    // Properties
    public $product_name;
    public $product_price;

  }

  class group {
    // Properties
    public $group_name;
    public $group_discount;
  }
  ?>

  
<?php

		$selected_cust=$_POST['customers'];
    //$selected_prod=$_POST['products'];
   
  
    // If the submit button has been pressed
    
		if(isset($_POST['submit']))
		{
      if(!empty($_POST['products'])) {
        echo "<span>Your invoice : </span><br/>";
        echo array_sum($_POST['products']);
        echo "<table style=' border: 1px solid black'>";
        echo "<tr> <th> PRODUCT</th> <th> PRICE</th> </tr> ";
        foreach ($_POST['products'] as $select)
        {
        
        echo "<tr> <th> ".$select."</th> <th>".$select."</th> </tr> ";

        } 
        echo "</table>";
        }
        else { echo "<span>Please Select Atleast One product.</span><br/>";}
  }

    ?>

 