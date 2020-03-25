<?php
$input = $argv[1];
$bedrag = intval($input);

define(
    "GELDEENHEDEN",
    [
    50, 
    20,
    10, 
    5, 
    2, 
    1
    ]
);

$restbedrag = $bedrag;

foreach(GELDEENHEDEN as $geldeenheid){
    if($restbedrag >= $geldeenheid) {
        $aantalKeerGeldEenheidInRestBedrag = floor($restbedrag / $geldeenheid);
        $restbedrag = $restbedrag % $geldeenheid;
        print($aantalKeerGeldEenheidInRestBedrag. "*" .$geldeenheid. "euro".PHP_EOL);
    }
}

?>