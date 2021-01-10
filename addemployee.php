<?php

$name = $_POST["name"];
$phone = $_POST["phone"];
$email = $_POST["email"];
$pass = $_POST["password"];
// $empid = $_POST["empid"];


$empidr = mt_rand(1, 10000);
$empid = strval($empidr);


// echo $name."<br>";
// echo $phone."<br>";
// echo $email."<br>";
// echo $pass."<br>";
// echo $empid."<br>";

//$f = json_decode(file_get_contents("../json/userdetails.json"), true);
//print_r($f)."<br>";

$myFile = "./json/userdetails.json";
$arr_data = array();

try
{
     //Get form data
     $formdata = array(
          'empid' => $empid, 
          'Name'=> $name,
          'phone'=> $phone,
          'email'=>$email,
          'password'=> $pass
        
     );

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
          header('Location: editEmployee.php');
         // echo 'Account Sucessfully Created';
      }
     else 
          echo "error";

 }
 catch (Exception $e) {
          echo 'Caught exception: ',  $e->getMessage(), "\n";
 }

?>


