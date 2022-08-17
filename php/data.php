<?php
$subjects=array("english","tamil","maths","biology","chemistry","physics");
$vignesh=array("78","93","95","95","85","85");

$ashwin=array("95","90","90","90","90","90");
$sanjay=array("92","95","97","97","95","98");
$mithun=array("93","97","96","94","95","96");
$rajesh=array("3","97","96","94","95","9");

$students["5288913"]="vignesh";
$students["656565"]="ashwin";
$students["090909"]="sanjay";
$students["767676"]="mithun";
$students["787878"]="rajesh";
$length=count($vignesh);

$marks["5288913"]=$vignesh;
$marks["656565"]=$ashwin;
$marks["090909"]=$sanjay;
$marks["767676"]=$mithun;
$marks["787878"]=$rajesh;


$marks_1["5288913"]["name"]="vignesh";
$marks_1["5288913"]["marks"]=$vignesh;
$marks_1["656565"]["name"]="ashwin";
$marks_1["656565"]["marks"]=$ashwin;
$marks_1["090909"]["name"]="sanjay";
$marks_1["090909"]["marks"]=$sanjay;
$marks_1["767676"]["name"]="mithun";
$marks_1["767676"]["marks"]=$mithun;
$marks_1["787878"]["name"]="rajesh";
$marks_1["787878"]["marks"]=$rajesh;

var_dump($marks_1["5288913"]["name"]);


$mark_2 = array(
    "5288913"=> array(
      "name"=>"vignesh",
      "marks" => $vignesh 
    ),

    "656565"=> array(
        "name" => "ashwin",
        "marks" => $ashwin

    ), 

        "090909"=> array(
            "name" => "sanjay",
            "marks" => $sanjay
        ),

    "767676"=> array(
        "name" => "mithun",
        "marks" => $mithun
    ),

"787878"=> array(
    "name" => "rajesh",
    "marks" => $rajesh
),
);


$marks_3=array(
   "5288913"=> array(
    "name"=>"vignesh",
    "english"=>"78",
    "tamil"=>"90",
    "maths"=>"86",
    "physics"=>"78",
    "chemistry"=>"89",
    "biology" => "89",
   ),

   "656565"=> array(
    "name"=>"ashwin",
    "english"=>"70",
    "tamil"=>"96",
    "maths"=>"66",
    "physics"=>"88",
    "chemistry"=>"79",
    "biology" => "99",
   ),

   "090909"=> array(
    "name"=>"sanjay",
    "english"=>"79",
    "tamil"=>"97",
    "maths"=>"76",
    "physics"=>"68",
    "chemistry"=>"79",
    "biology" => "69",
   ),

   "767676"=> array(
    "name"=>"mithun",
    "english"=>"77",
    "tamil"=>"80",
    "maths"=>"89",
    "physics"=>"78",
    "chemistry"=>"80",
    "biology" => "83",
   ),

   "787878"=> array(
    "name"=>"rajesh",
    "english"=>"56",
    "tamil"=>"867",
    "maths"=>"76",
    "physics"=>"65",
    "chemistry"=>"89",
    "biology" => "83",
   ),
)

?>