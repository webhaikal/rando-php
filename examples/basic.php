<?php
require_once "./vendor/autoload.php";

use HiFolks\RandoPhp\Draw;
use HiFolks\RandoPhp\Randomize;
use HiFolks\RandoPhp\Sequence;


echo "--- FLIP THE COIN".PHP_EOL;
$randomBool = Randomize::boolean()->generate();
echo ($randomBool) ? "HEADS": "TAILS" ;
echo PHP_EOL. "-----------------".PHP_EOL;

echo "--- ROLL THE DICE (min, max)".PHP_EOL;
$randomNumber = Randomize::integer()->min(1)->max(6)->generate();
echo "DICE: ". $randomNumber;
echo PHP_EOL. "-----------------".PHP_EOL;

echo "--- ROLL THE DICE (range)".PHP_EOL;
$randomNumber = Randomize::integer()->range(1,6)->generate();
echo "DICE: ". $randomNumber;
echo PHP_EOL. "-----------------".PHP_EOL;
echo "--- GENERATE RGB HEX COLOR ".PHP_EOL;
$randomRGB = Randomize::byte()->length(3)->generate();
echo "REG COLOR: #". $randomRGB;
echo PHP_EOL. "-----------------".PHP_EOL;

echo "--- ROLL THE DICE 15 times ".PHP_EOL;
$randomRolls = Randomize::sequence()->min(1)->max(6)->count(15)->implode()->generate();
echo "15 ROLLS: ". $randomRolls;
echo PHP_EOL. "-----------------".PHP_EOL;

echo "--- TOMBOLA ".PHP_EOL;
$randomTombola = Randomize::sequence()->min(1)->max(90)->count(90)->unique("true")->implode()->generate();
echo "TOMBOLA: ". $randomTombola;
echo PHP_EOL. "-----------------".PHP_EOL;
$randomTombola = Randomize::sequence()->min(1)->max(90)->count(90)->noDuplicates()->generate();
var_dump($randomTombola);
echo "--- SUGGEST ME THE  JS FRAMEWORK TO USE ".PHP_EOL;
$array=["React.js", "Vue.js", "Svelte.js", "Angular.js" , "Alpine.js", "Vanilla js"];
$randomJs = Draw::sample($array)->count(1)->implode()->extract();
echo "FRAMEWORK: ". $randomJs;
echo PHP_EOL. "-----------------".PHP_EOL;
$array=[
    "react"=>"React.js",
    "vue" => "Vue.js",
    "svelte" => "Svelte.js",
    "angular"=> "Angular.js" ,
    "alpine" => "Alpine.js",
    "vanilla" => "Vanilla js"
];
$randomJs = Draw::sample($array)->count(2)->preserveKeys()->extract();
var_dump($randomJs);


