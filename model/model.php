

<?php

		//$selected_cust=$_POST['customers'];
    //$selected_prod=$_POST['products'];
   
  
    // If the submit button has been pressed
    
		if(isset($_POST['submit']))
		{
      if (!empty($_POST['customers'])){
        $group_id=$_POST['customers'];
        
        // echo "<br>".$group."<br>";
        
      if(!empty($_POST['products'])) {
        
       
       echo "<br>customer: ".$_POST['customers']."<br>";
       echo "<span>Your invoice : </span><br/>";
       echo array_sum($_POST['products']);
        echo "<table style=' border: 1px solid black'>";

        echo "<tr> <th> Products</th></tr> ";
        foreach ($_POST['products'] as $select)
        {
        
        echo "<tr> <th> € ".$select."</th> </tr> ";
        

        } 
        echo "</table>";
       
        }
        else { echo "<span>Please Select Atleast One product.</span><br/>";}
  }
}
    ?>

 