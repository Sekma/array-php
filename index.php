<?php

$liste=["Carottes","Miel","Tomates","Gateaux"];
echo "<pre>";
print_r($liste);
echo "</pre>";
$liste[]="Riz";
echo "<pre>";
print_r($liste);
echo "</pre>"; 
$character=[
            "firstname" => "Jesse",
            "name" => "Pinkman",
            "address" => "322 16th St SW",
            "city" => "Albuquerque",
            "country" => "USA"
];
echo "<pre>";
print_r($character);
echo "</pre>"; 
$character["job"]="dealer";
echo "<pre>";
print_r($character);
echo "</pre>";

