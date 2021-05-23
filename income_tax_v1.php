<?php
   

function incomeTaxSingle($taxableIncome) {
    $incTax = 0.0; 
      
    if($_SERVER['REQUEST_METHOD']=="POST"){
     $taxableIncome = $_POST['netIncome']; 
    

        if($taxableIncome > 0 && $taxableIncome <=9700){
            $incTax = ($taxableIncome-0) * 0.1; 
               
              return $incTax;           
        }elseif($taxableIncome > 9700 && $taxableIncome <=39475){
            $incTax = 970 + ($taxableIncome-9700) * 0.12 ;        
            return $incTax;           
        }elseif($taxableIncome > 39475 && $taxableIncome <= 84200){
            $incTax= 4543 +  ($taxableIncome - 39475) * 0.22;        
            return $incTax;        
        }elseif($taxableIncome > 84200 && $taxableIncome <= 160725){
            $incTax = 14382 + ($taxableIncome - 84200) * 0.24;            
            return $incTax;
        }elseif($taxableIncome > 160725 && $taxableIncome <= 204100){
            $incTax = 32748 + ($taxableIncome - 160725) * 0.32;           
            return $incTax;
        }elseif($taxableIncome > 204100 && $taxableIncome <= 510300){
            $incTax =  46628 +  ($taxableIncome -204100) * 0.35;          
            return $incTax;
        }elseif($taxableIncome > 510300){
            $incTax = 153798+  ($taxableIncome - 510300) * 0.37;
                     
            return $incTax;         
        }          
    }
    
        return $incTax;   
}
incomeTaxSingle('$incTax');

function incomeTaxMarriedJointly($taxableIncome) {
    $incTax = 0.0;

    if($_SERVER['REQUEST_METHOD']=="POST"){ 
            $taxableIncome = $_POST['netIncome'];          
    if($taxableIncome > 0 && $taxableIncome < 19400){
        $incTax = $taxableIncome * 0.1;    
          return $incTax;       
    }elseif($taxableIncome > 19400 && $taxableIncome <= 78950){
        $incTax= 1940 +  ($taxableIncome - 19400) * 0.12 ;    
        return $incTax;       
    }elseif($taxableIncome > 78950 && $taxableIncome <= 168400){
        $incTax= 9086 + ($taxableIncome - 78950) * 0.22;    
        return $incTax;    
    }elseif($taxableIncome > 168400 && $taxableIncome <= 321450){
        $incTax = 28765 + ($taxableIncome  -168400)* 0.24;        
        return $incTax;
    }elseif($taxableIncome > 321450 && $taxableIncome <= 408200){
        $incTax = 65497 +  ($taxableIncome - 321450) * 0.32;       
        return $incTax;
    }elseif($taxableIncome > 408200 && $taxableIncome <= 612350){
        $incTax = 93257 +  ($taxableIncome - 408200) * 0.35;      
        return $incTax;
    }elseif($taxableIncome > 612350){
        $incTax = 164709 +  ($taxableIncome -612350) * 0.37;     
        return $incTax;      
    }   
}
    return $incTax;

}
incomeTaxMarriedJointly('$incTax');

function incomeTaxMarriedSeparately($taxableIncome) {
            $incTax = 0.0;

    if($_SERVER['REQUEST_METHOD']=="POST") {
            $taxableIncome = $_POST['netIncome'];         
    if($taxableIncome > 0 && $taxableIncome <= 9700){
        $incTax= ($taxableIncome) * 0.1;   
          return $incTax;       
    }elseif($taxableIncome > 9700 && $taxableIncome <= 39475){
        $incTax= 970 + ($taxableIncome -  9700) * 0.12 ;    
        return $incTax;       
    }elseif($taxableIncome > 39475 && $taxableIncome <= 84200){
        $incTax= 4543 + $taxableIncome * 0.22;    
        return $incTax;
    
    }elseif($taxableIncome > 84200 && $taxableIncome <= 160725){
        $incTax = 14382.50 + ($taxableIncome - 84200) * 0.24;        
        return $incTax;
    }elseif($taxableIncome > 160725 && $taxableIncome <= 204100){
        $incTax = 32748.50 +  ($taxableIncome - 160725) * 0.32;       
        return $incTax;
    }elseif($taxableIncome > 204100 && $taxableIncome <= 306175){
        $incTax = 46628.50 +  ($taxableIncome - 204100) * 0.35;      
        return $incTax;
    }elseif($taxableIncome > 306175){
        $incTax = 82354.75 +  ($taxableIncome - 306175) * 0.37;     
        return $incTax;
       
    }
 }
    return $incTax;

}
incomeTaxMarriedSeparately('$incTax');

function incomeTaxHeadOfHousehold($taxableIncome) {

    $incTax = 0.0;   
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $taxableIncome = $_POST['netIncome']; 
      
    if($taxableIncome > 0 && $taxableIncome <= 13850){
        $incTax+= $taxableIncome * 0.1;        
          return $incTax;           
    }elseif($taxableIncome > 13850 && $taxableIncome <= 52850){
        $incTax= 1385 + ($taxableIncome -13850) * 0.12 ;        
        return $incTax;           
    }elseif($taxableIncome > 52850 && $taxableIncome <= 84200){
        $incTax= 6065 + ($taxableIncome - 52850) * 0.22;        
        return $incTax;        
    }elseif($taxableIncome > 84200 && $taxableIncome <= 160700){
        $incTax = 12962 + ($taxableIncome - 84200) * 0.24;            
        return $incTax;
    }elseif($taxableIncome > 160700 && $taxableIncome <= 204100){
        $incTax = 31322 +  ($taxableIncome - 160700) * 0.32;           
        return $incTax;
    }elseif($taxableIncome > 204100 && $taxableIncome <= 510300){
        $incTax = 45210 +  ($taxableIncome - 204100) * 0.35;          
        return $incTax;
    }elseif($taxableIncome > 510300){
        $incTax =152380 +  ($taxableIncome - 510300) * 0.37;         
        return $incTax;
       
    } 
    }
    return $incTax;
    

}
 incomeTaxHeadOfHousehold('$incTax') 
 
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

</head>
<body>

<div class="container">

        <h3>Income Tax Calculator</h3>

        <form  class="form-horizontal" method="post" action="?php $_SERVER['PHP_SELF'] ?">

            
        <div class="form-group">
            <label class="control-label col-sm-2" for="netIncome">Your Net Income:</label>
           

            <div class="col-sm-10">
            <input type="number" step="any" name="netIncome" placeholder="Taxable  Income" required autofocus>
           
         
            </div>
          
        </div>
     
        <div class="form-group"> 
            <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary">Submit </button>
            
            
            
            </div>

            
        </div>
     
             
        </form>
        
    
</div>




<?php
 
if(isset($_POST['netIncome'])){
    
     $taxableIncome = $_POST['netIncome'];
     if(empty($taxableIncome))
     echo "no data";
     else
     echo 'With a net taxable income of $'.number_format($taxableIncome).'.00';

 ?>


<?php

}
  
 ?>

    <table>
  <tr>
    <th>Status</th>
    <th>Tax</th> 
   
  </tr>
  <tr>
    <td>Single</td>
    <td><?php echo '$'.incomeTaxSingle('$incTax'); ?></span><br></td>
  </tr>
  <tr>
    <td>Married filing jointly</td>
    <td><?php echo '$'.incomeTaxMarriedJointly('$incTax'); ?></span><br></td>

  </tr>
  <tr>
    <td>Married filing <br>Separetly</td>
    <td><?php echo '$'.incomeTaxMarriedSeparately('$incTax'); ?></td>
   
  </tr>
  
  <tr>
    <td>Head of Household</td>
    <td><?php echo '$'.incomeTaxHeadOfHousehold('$incTax'); ?></td>
   
  </tr>
</table>





</body>
</html>