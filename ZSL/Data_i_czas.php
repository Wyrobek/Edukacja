<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Data i czas</title>
</head>
<body>
    
<?php

    echo "dzień-miesiąc-rok: ".date('d-m-Y')."<br>"; 
    echo date('d-M-Y')."<br>";
    echo date('d-F-Y')."<br>"; //28-October-2021

    setlocale(LC_ALL, 'polish');
    echo strftime('%d %B %Y')."<br>";

    echo date('G:i:s')."<br>"; //17:15:07
    echo date('G:i:sa')."<br>"; //17:15:37pm
    echo date('H:i:s')."<br>"; //17:15:37
    echo date('L')."<br><br><br>";

?>

<script>

    setTimeout(function(){
        //window.location.reload();
    }, 1000);

</script>

<?php

// getdate()
$date = getdate();
//print_r($date);
echo $date['wday']."<br>"; //4 - dzień tygodnia
echo $date['yday']+1; //301 - dzień roku
echo "<br>";
echo $date['0']+1; //znacznik czasu, pokazuje ile sekund minęło od 1 stycznia 1970  1635434731
echo "<br>";

//mktime()

$today = mktime(0, 0, 0, 10, 28, 2021); //1635372000
echo $today."<br>";
$today = mktime(date('H'), date('i'), date('s'), date('m'), date('d'), date('Y')); //1635372000
echo $today."<br>"; //1635435332
echo $date[0]."<br>"; //1635435332

//ile lat minęło od 1 stycznia 1970
$year = $today/(60*60*24*365)."<br>";
echo (int)$year."lat<br>";


$lastyear = mktime(0, 0, 0, 1, 1, 2020);
$lastyear = $lastyear/(60*60*24*365)."<br>";
echo (int)$lastyear."lat do 2020<br>";

?>

</body>
</html>