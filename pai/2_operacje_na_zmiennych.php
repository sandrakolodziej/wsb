<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$potega=2**10;
echo $potega,"<br>";

//systemy liczbowe
$int=10;
$hex=0xA; 
$oct=012; //2*8^0 + 1*8^1 =10
$bin=0b1011; //11(10)

echo $int, "<br>";  //10
echo $hex, "<br>"; //10
echo $oct, "<br>"; //10
echo $bin, "<br>"; //11

//echo phpinfo();
//operatory bitowe
$x=0b1010;
echo $x; //10
$x=$x>>1;
echo $x; //5
$x=$x<<2;
echo $x; //20

//równe oraz identyczne
$x=1;
$y=1.0;
if  ($X==$y){
    echo "równe<br>";
    else 
    echo "rózne"<br>";
}
if  ($X==$y){
    echo "identyczne<br>";
    else 
    echo "nieidentyczne"<br>";
}
echo gettype($x);//integer
echo gettype($y);//double

// operatory rzutowania danych
$text="123ssd";
$x=(int)$text;
echo $x; //123
echo gettype($x); //integer

$text=0;
$x=(bool)$text;
echo "\$text: $text";
echo "\$x: $x";

$text=10;
$x=(unset)$text;
echo "$text: $text";
echo "\$x: $x";

echogettype($text); //integer
echogettype($x); //NULL
//rozmiar typu integer
echo PHP_INT_SIZE; //8
echo PHP_INT_MIN,"<br"; //-9222
echo PHP_INT_MAX,"<br"; //-9222

//kontrola typu zmiennych
$x=10;
echo is_int($x); //1
echo is_string($x); //
echo is_bool($x); //
echo is_float($x); //
echo is_null($x); //

//operator ignorowania błędów
$w;
echo @$w;
echo @gettype($w); //NULL

//zmienne superglobalne
//$_Get, $_POST, $_COOKIE, $_FILES, $_SESSION,$_SERVER
echo $_SERVER['SERVER_PORT']; //81
echo $_SERVER['SERVER_NAME']; //127.0.0.1
echo $_SERVER['SCRIPT_PORT']; //
echo $_SERVER['DOCUMENT_ROOT']; //C:/xampp/htdocks

$filelocal =  $_SERVER['DOCUMENT_ROOT'];
$filelocal =  $_SERVER['SCRIPT_NAME'];

echo $filelocal,"<hr>";

//stałe - nazwa stałej z dużej litery
define("NAME", "Janusz");
echo NAME;

define("surnamE", "Kowal",true);
echo surnamE;

//stałe predefiniowane

echo PHP_VERSION; //7.3.2
echo PHP_OS; //WINNT
echo _LINE_; //107
echo _FILE_; //107
echo _DIR_; //107
?>
</body>
</html>
