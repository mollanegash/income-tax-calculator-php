<?php

define('TAX_RATES', array(
    'Single' => array(
        'Rates' => array(10,12,22,24,32,35,37),
        'Ranges' => array(0,9700,39475,84200,160725,204100,510300),
        'MinTax' => array(0, 970,4543,14382,32748,46628,153798)
                                        ),
    'Married_Jointly' => array(
        'Rates' => array(10,12,22,24,32,35,37),
        'Ranges' => array(0,19400,78950,168400,321450,408200,612350),
        'MinTax' => array(0, 1940,9086,28765,65497,93257,164709)
                                      ),
    'Married_Separately' => array(
      'Rates' => array(10,12,22,24,32,35,37),
      'Ranges' => array(0,9700,39475,84200,160725,204100,306175),
      'MinTax' => array(0, 970,4543,14382.50,32748.50,46628.50,82354.75)
      ),
    'Head_Household' => array(
      'Rates' => array(10,12,22,24,32,35,37),
      'Ranges' => array(0,13850,52850,84200,160700,204100,510300),
      'MinTax' => array(0, 1385,6065,12962,31322,45210,152380)
      )
    )
);

function incomeTax($taxableIncome, $status) {
    $incTax = 0.0;
    $ranges = TAX_RATES[$status]['Ranges'];
    $rate = -1;
    $length = count($ranges);
    $untaxedIncome = $taxableIncome;
    
    for($i = 0; $i < $length - 1; $i++){ 
      $rate = TAX_RATES[$status]['Rates'][$i];
      $range_max = $ranges[$i+1];
      $range_min = $ranges[$i];
      if($untaxedIncome == 0) {
        break;
      }
      $taxed_at_this_rate = $untaxedIncome;
    }
    if ($rate == -1) {
      $rate = TAX_RATES[$status]['Rates'][$i];
    
    return $rate;
    return $incTax;
  
}


   
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>my tax return</title>
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

  <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
  <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;

}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<div class="container">
    <h3>Income Tax Calculator</h3>

    <form class="form-horizontal" method="post">

      <div class="form-group">
        <label class="control-label col-sm-2">Enter Net Income:</label>
        <div class="col-sm-10">
          <input type="number"  step="any" name="netIncome" placeholder="Taxable  Income" required autofocus>
        </div>
      </div>
      <div class="form-group"> 
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>

    </form>


    
    <?php  
       
      //  $incTax = 0.0; 
        $incTaxSingle=0;
      
       if($_SERVER['REQUEST_METHOD']=="POST"){
           
            $taxableIncome=0;
            $taxableIncome = $_POST['netIncome'];
           if($taxableIncome > TAX_RATES['Single']['Ranges'][0] && $taxableIncome <=TAX_RATES['Single']['Ranges'][1]){
               $incTaxSingle = ($taxableIncome-TAX_RATES['Single']['Ranges'][0]) * 0.1;        
           }elseif($taxableIncome > TAX_RATES['Single']['Ranges'][1] && $taxableIncome <=TAX_RATES['Single']['Ranges'][2]){
            $incTaxSingle = 970 + ($taxableIncome-TAX_RATES['Single']['Ranges'][1]) * 0.12;   
           }elseif($taxableIncome > TAX_RATES['Single']['Ranges'][2] && $taxableIncome <=TAX_RATES['Single']['Ranges'][3]){
            $incTaxSingle= 4543 +  (($taxableIncome-TAX_RATES['Single']['Ranges'][2])) * 0.22;        
           }elseif($taxableIncome > TAX_RATES['Single']['Ranges'][3] && $taxableIncome <=TAX_RATES['Single']['Ranges'][4]){
            $incTaxSingle = 14382 + (($taxableIncome-TAX_RATES['Single']['Ranges'][3])) * 0.24;            
           }elseif($taxableIncome > TAX_RATES['Single']['Ranges'][4] && $taxableIncome <=TAX_RATES['Single']['Ranges'][5]){
            $incTaxSingle = 32748 + (($taxableIncome-TAX_RATES['Single']['Ranges'][4])) * 0.32;           
           }elseif($taxableIncome > TAX_RATES['Single']['Ranges'][5] && $taxableIncome <=TAX_RATES['Single']['Ranges'][6]){
            $incTaxSingle =  46628 +  (($taxableIncome-TAX_RATES['Single']['Ranges']['Single'][5])) * 0.35;         
           }elseif($taxableIncome > TAX_RATES['Single']['Ranges'][6]){
            $incTaxSingle = 153798+  (($taxableIncome-TAX_RATES['Single']['Ranges']['Single'][6])) * 0.37;
            return $incTaxSingle;
                        
                   
           }  
                   
       }
       
            $incTaxJoin = 0; 
          if($_SERVER['REQUEST_METHOD']=="POST"){
          
            $taxableIncome = $_POST['netIncome'];          
    if($taxableIncome > 0 && $taxableIncome < 19400){
        $incTaxJoin = $taxableIncome * 0.1;    
        
    }elseif($taxableIncome > 19400 && $taxableIncome <= 78950){
      $incTaxJoin= 1940 +  ($taxableIncome - 19400) * 0.12 ;    
               
    }elseif($taxableIncome > 78950 && $taxableIncome <= 168400){
      $incTaxJoin= 9086 + ($taxableIncome - 78950) * 0.22;    
           
    }elseif($taxableIncome > 168400 && $taxableIncome <= 321450){
      $incTaxJoin = 28765 + ($taxableIncome  -168400)* 0.24;        
        
    }elseif($taxableIncome > 321450 && $taxableIncome <= 408200){
      $incTaxJoin = 65497 +  ($taxableIncome - 321450) * 0.32;       
       
    }elseif($taxableIncome > 408200 && $taxableIncome <= 612350){
      $incTaxJoin = 93257 +  ($taxableIncome - 408200) * 0.35;      
        
    }elseif($taxableIncome > 612350){
      $incTaxJoin = 164709 +  ($taxableIncome -612350) * 0.37;     
          
    }   
}

if(isset($_POST['netIncome'])){
    
  $taxableIncome = $_POST['netIncome'];
  if(empty($taxableIncome))
  echo "no data";
  else
  // echo 'With a net taxable income of $'.number_format($taxableIncome).'.00';


    $taxableIncome = $_POST['netIncome'] ?>
    <span>With a net income of <?php echo '$'.number_format($taxableIncome)?></span>


<?php
}
?>
    
    <table>
    <tr>
    <th>Status</th>
    <th>Tax</th> 
   
  </tr>
  
      
  <?php foreach(TAX_RATES as $status=>$status_table) {
    
  ?>

      <tr>
        
        <td><?php echo $status; ?></td>
        <td><?php 
                  $taxableIncome=0; 
                  echo incomeTax($taxableIncome, $status);
                  echo '$'.$incTaxSingle;?>          
        </td>
        
        
      </tr>      
      <?php } ?>


    </table>
    <hr>
    <h2>2019 Tax Table</h2> 
    <?php foreach(TAX_RATES as $status=>$status_table) { ?>

      <div><?php echo $status; ?></div>
      <table>
        <tr>
          <th>Taxable Income</th>
          <th>Tax Rate</th> 
      </tr>
      <!---first row--->
      <?php 
      $range_min = $status_table["Ranges"][0];
      $range_max = $status_table["Ranges"][1];
      $rate = $status_table["Rates"][0];
      ?> 
      <tr>
          <td><?php echo "$" . $range_min . " - " . "$". $range_max ?></td>
          <td><?php echo $rate . "%" ?></td>
        </tr>

      <!--rows after first and before last-->
      <?php
      $length = count($status_table["Ranges"]);
      $taxed_at_smaller_rate=$rate * $range_max / 100;
      for($i=1; $i < $length - 1; $i++) {
        $range_min = $status_table["Ranges"][$i];
        $range_max = $status_table["Ranges"][$i+1];
        $rate = $status_table["Rates"][$i];
        ?>
        <tr>
          <td><?php echo "$" . $range_min . " - " . "$". $range_max ?></td>
          <td><?php echo "$" . $taxed_at_smaller_rate . " plus " . $rate . "% of the amount over $" . ($range_min -1) ?></td>
        </tr>
      <?php 
        $taxed_at_smaller_rate += $rate * ($range_max-$range_min) / 100;
     } ?>
     <!--last row-->
    <?php
   
    
   

    
   } ?>
   
   

</div>

</body>
</html>