<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$obj  = new Huis("Van Echtenskanaal NZ", "31", "Amsterdam");
$obj->setOppervlakte("453m2");
$obj->setWozWaarde("10000000");
$obj->setAantalKamers("12");
$obj->setAantalToiletten("1");
$obj->setVerwarming("ja");
$obj->setSoortVerwarming("vloerverwarming");
$obj->berekenBelasting();

?>
