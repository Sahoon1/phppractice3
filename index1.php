<?php


$my_array = array("PHP", "Programming", 'true', 50);
foreach($my_array as $y){
echo $y ."<br>";
}

$my_array = array("PHP", "Programming", 'true', 50);

echo($my_array[0]);
$my_array[3] = "Replace";
echo($my_array[1]);
echo($my_array[2]);
echo($my_array[3]);
echo($my_array[3]);

$my_array = array("PHP", "Programming", 'false', 50,["sahoon",18]);
$countt = count($my_array);
echo($countt);
echo $my_array[4][0];
foreach ($my_array as $z){
echo "<h1 style='color: red'> $z </h1>" . "<br>";
}
$my_array_ = array("year"=> 2024, "car" => "civic");
 echo $my_array_["year"];
$my_array[4] = "<h1>Sahoon Hussain</h1>";

echo $my_array[4];


function abc()  {
    echo ("This is function");

}
$a = array("php",abc());
foreach($a as $x){
    echo $x . "<br>";
}
?>