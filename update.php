<?php

session_start();
// read file
$data = file_get_contents('./json/userdetails.json');

// decode json to array
$json_arr = json_decode($data, true);
/*
echo $_POST["empid"];
echo $_POST["name"];
echo $_POST["phone"];
echo $_POST["email"];
echo $_POST["password"]."<br>";;
*/
$name = $_POST["name"];
// $empid = $_POST["empid"];
$empidr = $_SESSION["empid"];
$email = $_POST["email"];
$pass = $_POST["password"];
$phone = $_POST["phone"];

echo $name."<br>";
echo $empidr."<br>";
echo $phone."<br>";
// echo $empid."<br>";
echo $pass."<br>";

$empid = trim($empidr,'"');
echo $empid."<br>";

// $flag = 0;

foreach ($json_arr as $key => $value) {
    if ($value['empid'] == $empid) {
       
        $json_arr[$key]['empid'] = $empid;
        $json_arr[$key]["Name"] = $name;
        $json_arr[$key]['phone'] = $phone;
        $json_arr[$key]['email'] = $email;
        $json_arr[$key]['password'] = $pass;
       
        // echo "hello";
        
        // echo $json_arr[$key]['empid']."<br>";
        // echo $json_arr[$key]["Name"]."<br>";
        // echo $json_arr[$key]['phone']."<br>";
        // echo $json_arr[$key]['email']."<br>";
        // echo $json_arr[$key]['password']."<br>"; 
        
    }
    else{
        echo "ID not found";
    }
}

// // encode array to json and save to file
file_put_contents('./json/userdetails.json', json_encode($json_arr, JSON_PRETTY_PRINT));

header('Location: editEmployee.php');
?>