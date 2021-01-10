<?php

session_start();



// read file
$data = file_get_contents('./json/list.json');

// decode json to array
$json_arr = json_decode($data, true);


/*
echo $_POST["empid"];
echo $_POST["name"];
echo $_POST["image"];
echo $_POST["price$price"];
echo $_POST["ca$categoryword"]."<br>";
*/


$name = $_POST["name"];
$id = $_SESSION["id"];
$price = $_POST["price"];
$category = $_POST["category"];
$image = $_POST["image"];

// $idr = 1;
echo $id."<br>";

$idr = trim($id,'"');

// $idr = (int)$id;


echo $idr."<br>";




// print_r($json_arr);

/*
echo $name."<br>";
echo $empid."<br>";
echo $image."<br>";
echo $empid."<br>";
echo$category."<br>";
*/

// $flag = 0;

$image = "./img/".$image;

foreach ($json_arr as $key => $value) {
    //echo  '"'.$value["id"].'"'."<br>";
    //if ('"'.$value['id'].'"' == $id) {
        if ($value['id'] == $idr) {
       
        
        $json_arr[$key]["name"] = $name;
        $json_arr[$key]['image'] = $image;
        $json_arr[$key]['price'] =$price;
        $json_arr[$key]['category'] = $category;

        
        // echo $json_arr[$key]['id']."<br>";
        // echo $json_arr[$key]["name"]."<br>";
        // echo $json_arr[$key]['image']."<br>";
        // echo $json_arr[$key]['price']."<br>";
        // echo $json_arr[$key]['category']."<br>"; 
       


    }
    else{
        echo "ID not found";
    }
}

// encode array to json and save to file
file_put_contents('./json/list.json', json_encode($json_arr, JSON_PRETTY_PRINT));

header('Location: editProduct.php');
?>