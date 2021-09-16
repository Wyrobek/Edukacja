<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>4_string.php</title>
</head>
<body>

<?php

   $text = <<< L
        ZSŁ - Zespół
        Szkół
        Łączności<br>
L;

    echo $text;
    echo nl2br($text);

    echo "<br><br><hr><br>";

    $name = "jAnUsZ";
    //zamiana wsyzstkich liter na małe
    $name = strtolower($name);
    echo $name; //janusz
    echo "<br>";
    echo "<br>";
    //zamiana wszystkich liter na duże
    echo strtoupper($name); //JANUSZ
    echo "<br><br>";
    //zamiana pierwszej litery na dużą

    $nameSurname = "januSZ koWALski";
    echo ucfirst($nameSurname);

    echo "<br><br>";

    //zamiana każdej pierwszej litery w słowie na dużą
    echo ucwords($nameSurname);

    echo "<br><br>";

    //zamiana wszystkich liter na małe a pierwszej na wielką
    $name="jAnuSz";
    echo $name."<br>";
    echo ucfirst(strtolower($name));

    echo '<br><br>';

    $lorem='Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam pharetra elit vel risus venenatis, nec feugiat elit porttitor. Maecenas laoreet at tortor varius rhoncus. Fusce pellentesque mi quis massa malesuada venenatis. Praesent ac nisi turpis. Suspendisse id bibendum lacus, sed rutrum eros. Duis pellentesque sit amet eros id finibus. Donec diam metus, faucibus vitae efficitur in, luctus lacinia urna. Duis pharetra, risus nec luctus pulvinar, turpis velit dictum nisi, sit amet finibus lorem risus sed dui. Morbi semper dignissim vestibulum. Nullam viverra posuere justo, et consectetur lacus. Aliquam tincidunt leo at congue faucibus. Mauris suscipit eu magna elementum pretium. Phasellus cursus urna convallis turpis mollis, in fermentum lectus imperdiet. Nulla a consequat leo, ac eleifend dui. Nullam blandit, ante id lobortis venenatis, enim nisi varius enim, a ultricies orci dolor ut ante.';
    echo $lorem;

    echo "<br><br>";

    $col=wordwrap($lorem, 30, "<br>"); //wstawianie w kolumny (zmienna, ilość znaków w linijce, czym ma być zakończony)
    //$col=wordwrap($lorem, 30, "TEXT");
    //$col=wordwrap($lorem, 30, "<hr>");
    echo $col;


    //wyczyszczenie bufora(ekranu);
    //ob_clean();

    echo "<br><br><hr><br>";

    //usuwanie białych znaków(np. spacja, CTRL)
    $name="Janusz";
    $name1="  Janusz  ";

    echo "Długość \$name: ".strlen($name)."<br>"; //6
    echo "Długość \$name1: ".strlen($name1)."<br>";//10

    echo strlen(ltrim($name1));//8
    echo "<br>";
    echo strlen(rtrim($name1));//8
    echo "<br>";
    echo strlen(trim($name1))."<hr>";//6

    //przeszukiwanie ciągów znaków
    $mail="janusz@gmail.com";
    echo strstr($mail, "@"); //sprawdza czy w stringu znjaduje się dany element(zmienna, co chcemy znaleźć). Gdy znajdzie wyświetla wszystko po tym znaku
    echo "<br>";
    echo strstr($mail, 64); // sprawdza za pomocą tablicy ascii
    echo "<br>";
    echo strstr($mail, "G"); //nic nie wyświetli
    echo "<br>";
    echo stristr($mail, "G"); //gmail.com
    echo "<br>";

    //substr - wycinanie

    echo substr($mail, 2); //nusz@gmail.com
    echo "<br>";
    echo substr($mail, 6); //@gmail.com
    echo "<br>";
    echo substr($mail, -3); //com
    echo "<br>";
    echo substr($mail, -2,1); //o


    //zadanie

    $personality="Janusz Kowalski";

    /* do zmiennej name przypisać imię, do zmiennej surname
     przypisać nazwisko wykorzystując funkcję substr 
    */
    echo "<br><br><br>";

    $name = substr($personality, 0, 6);
    echo $name."<br>";

    $surname = substr($personality, 7);
    echo $surname."<br>";

?>
    
</body>
</html>