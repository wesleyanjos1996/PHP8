<?php

$lastName = "Anjos";

$name = "Wesley $lastName";
$name2 = 'Wesley $lastName';

echo $name;
echo "<br>";
echo $name2;
echo "<br>";

echo gettype($name);
echo "<br>";
echo gettype($name2);
echo "<br>";

//Teste pela função nova em PHP8

echo get_debug_type($name);
echo "<br>";
echo get_debug_type($name2);
echo "<br>";

$year = 50;
echo get_debug_type($year);
echo "<br>";

$year2 = "50";
echo get_debug_type($year2);
echo "<br>";

$number = 50.2;
echo get_debug_type($number);
echo "<br>";

$number2 = 50.2845414684654636;
echo gettype($number2);
echo "<br>";

$vip = false;
echo get_debug_type($vip);
echo "<br>";

$airplaneCompany = ["Gol", "Latam", "Azul"];
echo $airplaneCompany[2];
echo "<br>";
echo get_debug_type($airplaneCompany);
echo "<br>";
echo gettype($airplaneCompany);
echo "<br>";
echo get_debug_type($airplaneCompany[2]);
echo "<br>";

class User
{
    public function __construct(public string $name)
    {
        echo $this->name;
    }
}

$wesley = new User("Wesley dos Anjos");
echo "<br>";
echo gettype($wesley);
echo "<br>";
echo get_debug_type($wesley);
echo "<br>";

$airplaneLines = function(): iterable{return ["Gol", "Latam", "Azul"];};
echo gettype($airplaneLines());
echo "<br>";
echo get_debug_type($airplaneLines());
echo "<br>";
var_dump(is_iterable($airplaneLines()));
echo "<br>";
var_dump(is_callable($airplaneLines));

$null = NULL;
echo "<br>";
echo gettype($null);
echo "<br>";
echo get_debug_type($null);
echo "<br>";

$file = fopen("./variaveis.php", "a+");
echo gettype($file);
echo "<br>";
echo get_debug_type($file);
echo "<br>";

$closeFile = fclose($file);

function execute(mixed $param): void{}
echo gettype(execute(1));
echo "<br>";
echo get_debug_type(execute(1));

?>