<?php

// $idr = $_GET["id"];

$name = $_POST["name"];
$id = $_POST["id"];
$price = $_POST["price"];
$category = $_POST["category"];

// $id = strval($idr);

// echo $id."<br>";
// echo $name."<br>";
// echo $price."<br>";
// echo $caregory."<br>";

// $f = json_decode(file_get_contents("cart.json"), true);
//print_r($f)."<br>";

$myFile = "./json/cart.json";
$arr_data = array();

try
{
     //Get form data
     $formdata = array(
        'name'=> $name,
        'price'=>$price,
        'category'=> $category,
        "id"=> $id
    );


     // $formdata = array(
     //      $cat=>array(
     //      'name'=> $pname,
     //      'image'=> $image ,
     //      'price'=>$price
     //   ));



     //Get data from existing json file
     $jsondata = file_get_contents($myFile);

     // converts json data into array
     $arr_data = json_decode($jsondata, true);

     // Push user data to array
     array_push($arr_data,$formdata);

     //Convert updated array to JSON
     $jsondata = json_encode($arr_data, JSON_PRETTY_PRINT);
     
     //write json data into data.json file
     if(file_put_contents($myFile, $jsondata)) {
          echo 'Account Sucessfully Created';
      }
     else 
          echo "error";

 }
 catch (Exception $e) {
          echo 'Caught exception: ',  $e->getMessage(), "\n";
 }

header('Location: home.php');

?>