<?php


$my = file_get_contents("./json/admin.json");
$f = json_decode($my, true);


$email = $_GET["email"];
$pass = $_GET["password"];

$pass = strval($pass);

//echo $email."<br>";
//echo $pass."<br>";

$flag = 0;


foreach($f as $b){

    if (($b["email"] == $email) and ($b["password"] == $pass)){
        $flag = 1;
    }
}

if($flag == 1){
    //echo "Password match"."<br>";
   header("Location:admin.html");
}
else{
    echo "Incorrect credentials"."<br>";

    
}

?>
