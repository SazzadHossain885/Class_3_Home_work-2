<?php

$inName = "Sazzad";
$inPassword = "sazzad";

$exName = $_POST["name"];
$exPassword = $_POST['password'];
$exNumber = $_POST['number'];

if ($exName == $inName && $exPassword == $inPassword){
    for ($i =1; $i<= 10; $i++){
        echo "$exNumber * $i" . "=" . $exNumber * $i . "<br>";
    }
}
else{
    echo "Your task Don't process !";
}

?>