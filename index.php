<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<body>
    <section class="corona_update conatiner-fluid">
    <div class="my-5">
    <h3 class="text-centre text-uppercase" style="color:red; text-align:center;"><u>COVID-19 LIVE UPDATES OF INDIA</u></h3>
    </div>

    <div class="table-responsive">
    <table class="table table-bordered table-striped text-center">
    <tr>
    <!--<th class="text-capitalize">Country</th>-->
    <th class="text-capitalize">LastupdatedTime</th>
    <th class="text-capitalize">State</th>
    <th class="text-capitalize">Confirmed</th>
    <th class="text-capitalize">Active</th>
    <th class="text-capitalize">Recovered</th>
    <th class="text-capitalize">Deaths</th>
   
    </tr>

<?php



$data = file_get_contents('https://api.covid19india.org/data.json');
$coranalive = json_decode($data, true);

$statescount = count($coranalive['statewise']);

 


$i=1;
while($i < $statescount){
    ?>
    <tr>

        
        <td><?php echo $coranalive['statewise'][$i]['lastupdatedtime'] . "<br>"  ;?></td>
        <td><?php echo $coranalive['statewise'][$i]['state'] . "<br>"  ;?></td>
        <td><?php echo $coranalive['statewise'][$i]['confirmed'] . "<br>"  ;?></td>
        <td><?php echo $coranalive['statewise'][$i]['active'] . "<br>"  ;?></td>
        <td><?php echo $coranalive['statewise'][$i]['recovered'] . "<br>"  ;?></td>
        <td><?php echo $coranalive['statewise'][$i]['deaths'] . "<br>"  ;?></td>
        
    </tr>
  <!--echo $coranalive['statewise'][$i]['lastupdatedtime'] . "<br>"  ;
  echo $coranalive['statewise'][$i]['state'] . "<br>"  ;
  echo $coranalive['statewise'][$i]['confirmed'] . "<br>"  ;
  echo $coranalive['statewise'][$i]['active'] . "<br>"  ;
  echo $coranalive['statewise'][$i]['recovered'] . "<br>"  ;
  echo $coranalive['statewise'][$i]['deaths'] . "<br>"  ; -->


  <?php
  $i++;
}


?>






    </table>
    </div>
    </section>


</body>
</html>


