<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
$name=$_POST['name'];
$email=$_POST['mail'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$country=$_POST['country'];

print_r("Name: $name <br> <br>"  );


print_r("Email: $email  <br> <br>");

print_r("Date of Birth: $dob <br> <br> ");

print_r("Gender: $gender <br> <br>");

print_r("Country: $country <br> <br>");



$jim= array($name,$email,$dob,$gender,$country);




$file=fopen("./user_data.csv", "a");

fputcsv($file,$jim);

fclose($file);

?>
</body>
</html>

