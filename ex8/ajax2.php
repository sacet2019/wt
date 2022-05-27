<?php
$a[] = "Anna";
$a[] = "Brittany";
$a[] = "Cindey";
$a[] = "Diana";
$a[] = "Eva";
$a[] = "Fiona";
$a[] = "Gus";
$a[] = "Hege";
$a[] = "Inga";
$a[] = "Johan";
$a[] = "Karth";
$a[] = "Linda";
$a[] = "Nikhi";
$a[] = "Ophelia";
$a[] = "Petunia";
$a[] = "Akhi";
$a[] = "Raquel";
$a[] = "Cindy";
$a[] = "Doris";
$a[] = "Eve";
$a[] = "Evita";
$a[] = "Sunniva";
$a[] = "Tove";
$a[] = "Unni";
$a[] = "Vinny";
$a[] = "Liza";
$a[] = "Elizabeth";
$a[] = "Ellen";
$a[] = "Wenche";
$a[] = "Vicky";
$q = $_REQUEST["q"];
$info = "";
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($info === "") {
                $info = $name;
            } else {
                $info .= ", $name";
            }
        }
    }
}
echo $info=== "" ? "no suggestions" : $info;
?> 
