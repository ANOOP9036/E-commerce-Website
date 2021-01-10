<?php

$pname = $_POST["name"];
$price = $_POST["price"];
$image = $_POST["image"];
$cat = $_POST["category"];


$idr = mt_rand(1, 10000);
$id = strval($idr);


// if(isset($_POST["p"])){
//      $price = $_POST["p"]; 
// }else{
//      $price = "p not set in POST Method";
// }

// echo $pname."<br>";
// echo $price."<br>";
// echo $image."<br>";
// echo $cat."<br>";

$image = "./img/".$image;


// $f = json_decode(file_get_contents("./json/list.json"), true);
//print_r($f)."<br>";

$myFile = "./json/list.json";
$arr_data = array();

try
{
     //Get form data
     $formdata = array(
        'name'=> $pname,
        'image'=> $image ,
        'price'=>$price,
        'category'=> $cat,
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

?>


