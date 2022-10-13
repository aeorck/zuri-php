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

print_r("Name:". $name ."\n");

print_r($email); 




$the_file="./contacts.csv";
$file=fopen($the_file, "a");
fwrite($file, "$name \t \t  $email \t \t $dob \t \t $gender \t \t $country \n \n");
// fwrite($file, $name);
fclose($file);

?>
</body>
</html>

