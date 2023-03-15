<?php

// This is a comment
//  echo "Hello World ";
// echo "<h2>Hello Members</h2>";

$phone ='785353353535';
$friend_name="Jerry";
$isMarried =true;
$age =30;
$price =3500.00;

$name = "Kisakye Moses";
$date_of_birth = "04th April 2001";
$nationality="Ugandan";
$course_name ="PHP Bootcamp";
$email ="kiskayemoses@gmail.com";
$phone_number = "+256770981193";

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
  <title>Assignment</title>
</head>

<body>
  <h1 style="text-align:center">BIO DATA</h1>
  <h5>Name : <?php echo $name ?></h5>
  <h5>Nationality : <?php echo $nationality ?></h5>
  <h5>DOB : <?php echo $date_of_birth ?></h5>
  <h5>Course Pursued :<?php echo $course_name ?></h5>
  <h5>Email : <?php echo $email ?> </h5>
  <h5>Phone Number : <?php echo $phone_number ?> </h5>
</body>

</html>