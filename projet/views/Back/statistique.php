<!doctype html>

<body>


<?php 
//index.php
$connect = mysqli_connect("localhost", "root", "", "crud");
$query = "SELECT * FROM stat ";
$result = mysqli_query($connect, $query);
$chart_data = '';

while($row = mysqli_fetch_array($result))
{
 $chart_data .= "{ id:'"."ID Fournisseur : ".$row["id"]."', salaire:'" .$row["salaire"]."',}, ";
}
$chart_data = substr($chart_data, 0, -2);
?>


<!DOCTYPE html>
<html>
 <head>
  <title>chart with PHP & Mysql | lisenme.com </title>
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
  
 </head>
 <body>
  <br /><br />
  <div class="container" style="width:900px;">
   <h2 align="center">Salaires des fournisseurs </h2>
   <h3 align="center"></h3>   
   <br /><br />
   <div id="chart"></div>
  </div>
 </body>
</html>




<script>
	formatY = function (y) {
            return 'salaire '+y+' Dt';
        },
Morris.Bar({
	
 element : 'chart',
 data:[<?php echo $chart_data; ?>],
  xkey:['id'],
yLabelFormat:formatY,
 ykeys:['salaire'],
 labels:['Salaire en DT '],
	barColors: ["#328e72", "#1531B2", "#1AB244", "#B29215"],
 hideHover:'auto',
 stacked:true,
});
</script>
