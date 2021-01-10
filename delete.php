<?php
// read json file
$data = file_get_contents('./json/userdetails.json');

// decode json to associative array
$json_arr = json_decode($data, true);

// get array index to delete
$arr_index = array();

$empid = $_GET["id"];



foreach ($json_arr as $key => $value)
{
    $x = $value['empid'];
    $x = '"'.$x.'"';
    if ($x == $empid)
    {
        $arr_index[] = $key;
    }
}

// delete data
foreach ($arr_index as $i)
{
    unset($json_arr[$i]);
}

// rebase array
$json_arr = array_values($json_arr);

// encode array to json and save to file
file_put_contents('./json/userdetails.json', json_encode($json_arr, JSON_PRETTY_PRINT));

header('Location: editEmployee.php');
?>