<!DOCTYPE html>
<html>
<body>

<?php
echo "ZSŁ";
echo "<br>";
echo "ZSŁ";

echo"<br><br><br>";

$name = "Janusz";
echo 'Imie: $name'; //Imie: $name;
echo "<br>Imie: $name<br>"; //Imie: $name;

$x = "Tomasz";
$y = "Nowak";

echo "$x $y<br>";

//konkatenacja
echo $x.$y."<hr>";

echo "<br><br><br>";


//Typy danych

	//liczba całkowita
$calkowita = 10;
$bin = 0b1010; //10 liczba binarna
echo $bin."<br>";
$oct = 011;// 9 liczba ósemkowa
echo $oct."<br>";
$hex = 0x11; // 17 liczba szesnastkowa
echo $hex."<br>";

	//liczba zmiennoprzecinkowa
$liczba = 10.23;

	//logiczny
$prawda = true;
$fałsz = false; //można dodawać polskie znaki w nazwach zmiennych

echo "<br>".gettype($prawda); //boolean
echo "<br>".gettype($liczba); //double
echo "<br>".gettype($hex); //integer

	//składnia heredoc
$name = "Krystyna<br>";


echo <<< ETYKIETA

	<hr>Imię: $name<br>
    ZSŁ<br>
    
ETYKIETA;


$text = <<< ETYKIETA

	<hr>Anna Nowak<br>
    
ETYKIETA;


echo $text."<br><br>";
	
    
//składnia nowdoc - wszystko traktuje jak zwykły tekst, nawet polecenia
	
echo <<< 'ETYKIETA'

	<hr>Imię: $name<br>
    ZSŁ<br>
    
ETYKIETA;

echo "<hr><br>";

$name = "Jagoda";
echo "Imię: $name, nazwisko: Kowalska";
echo "Imię: \$name, nazwisko: Kowalska";



?>

</body>
</html>
