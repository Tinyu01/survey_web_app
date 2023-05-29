<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Output Page</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>

<?php

session_start();
$conn=mysqli_connect("localhost","root","","survey");

//run query
$querysc ="SELECT * FROM scale ORDER BY ScaleID ASC";

$resultsc= mysqli_query($conn,$querysc);

//set array
$arraysc = array();
$arraysc = array();

//look through query
while($rowsc = mysqli_fetch_array($resultsc)) {
    //add each row returned into an array
    $arraysc[] = $rowsc;

    echo $rowsc['ScaleName'];
    
}

//run query
$queryho = "SELECT * FROM hobby ORDER BY HobbyID ASC";

$resultho = mysqli_query($conn,$queryho);

//set array
$arrayho = array();

//look through query
while($rowho = mysqli_fetch_array($resultho)) {
    //add each row returned into an array
    $arrayho[] = $rowho;

    echo $rowho['HobbyName'];
    
}

//run query
$queryfood = "SELECT * FROM `food` ORDER BY `FoodID` ASC";

$resultfood = mysqli_query($conn,$queryfood);

//set array
$arrayfood = array();

//look through query
while($rowfood = mysqli_fetch_array($resultfood)) {
    //add each row returned into an array
    $arrayfood[] = $rowfood;

    echo $rowfood['FoodName'];
    
}

    $surname= 'Maluleke';
    $names= 'Masingita Otis';
    $contact= '0738847449';
    $date= 'date';
    $age= '27';

$insetclient = "INSERT INTO client_tep (Contact, Surname, Names, Age, TodayDate) VALUES ('$contact','$surname', '$names', '$age', '$date');";
$resultclientin = mysqli_query($conn,$insetclient);




print_r($rowho); //show all array data


$today = getdate();
print_r($today);

?>



</body>
</head>

