<?php

$title = "My first webside";

$header = "Kalkulator";

$sum = 0;

$x = isset($_GET['x'])? (float)$_GET['x'] : 0.0;
$y = isset($_GET['y'])? (float)$_GET['y'] : 0.0;

//sprawdzamy czy x i y zostaly przeslane
//oraz sprawdzamy czy sa liczbami bo tak to idzie tekst
if (($x || $x === 0.0) &&
    ($y || $y===0.0 ) &&
    is_numeric($x) &&
    is_numeric($y)) {

            $sum = $x + $y;
   }



//tu sa wszystkie globalne dane ktore zostsaly przekazanew adresie url
//var_dump($_GET);exit; //exit aby nie pobierac tymczasowo tego html ponizej

include_once './html/home.html';

