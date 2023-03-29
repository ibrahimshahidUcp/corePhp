<?php

function createArray($str){

$output=array();
foreach($str as $name){


    $numbers=array();

    for($i=1;i<strlen($name);$i++){

        $numbers[]=$i;


    }
    $output[$name]=$numbers;
}

    return $output;
}
$str=array("ibrahim" ,"ali","umer","khizar");
$output=createArray($str);
print_r($output);


?>