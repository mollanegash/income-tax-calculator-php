
<html>
<head>
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
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

<?php
$numbers = array("BU"=>"Commonwealth", "Northeastern"=>"Columbus", "MIT"=>"MassAve");
?>
<div class="container">
<table>
    <thead>

        <tr>
            <td >University</td>
            <td>Street</td>
        </tr>

    </thead>
    
        <?php 
        foreach($numbers as $key=>$value){
        ?>
        <tr>
             <td><?php echo $key ?></td>
             <td><?php echo $value ?></td>
         </tr>
        <?php }
         ?>


</table>

</div>
</body>
</html>
