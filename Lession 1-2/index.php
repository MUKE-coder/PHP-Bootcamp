<?php

// This is a comment
//  echo "Hello World ";
// echo "<h2>Hello Members</h2>";

$name = "Wit Andrew";
$phone ='785353353535';
$friend_name="Jerry";
$isMarried =true;
$age =30;
$price =3500.00;
$nationality="Ugandan";

echo '<br>'. $age ;
echo '<br>'.$phone;
echo '<br>'.$price;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1 style="text-align:center">BIO DATA</h1>
  <h5>Name : <?php echo $name ?></h5>
  <h5>Nationality : <?php echo $nationality ?></h5>
  <h5>DOB :......... </h5>
  <h5>Course Pursued :............. </h5>
  <h5>Email :.................. </h5>
  <h5>Phon Number :................. </h5>
</body>

</html>