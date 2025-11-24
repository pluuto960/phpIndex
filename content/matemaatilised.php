<?php
function clearVarsExcept($url, $varname){
    $url=basename($url);
    if(str_starts_with($url, "?")){
        return "?$varname=".$_REQUEST[$varname];
    }
    return strtok($url, "?")."?$varname=".$_REQUEST[$varname];

}
echo "<h2>Matemaatilised tehted/funktsioonid </h2>";

$arv1=100;
$arv2=15;
$liitmine=$arv1+$arv2;
$lahut=$arv1-$arv2;
$korrutis=$arv1*$arv2;
$jagamine=$arv1/$arv2;
echo "arv1 on".$arv1." ja arv2 on".$arv2."<br>";
echo"<strong>Vastused:</strong><br>";
echo "Liitmine: ".$liitmine."<br>";
echo "Lahutamine: ".$lahut."<br>";
echo "Korrutis: ".$korrutis."<br>";
echo "Jagamine: ".$jagamine."<br>";
echo "<h2>Omistamise operaatorid: </h2>";
echo "<br>";
// $arv1++ - suurendamine ühe võrra
$arv1++;
echo $arv1."- suurendamine ühe võrra";
echo "<br>";
// $arv1-- - vähendamine ühe võrra
$arv1--;
echo $arv1."- vähendamine ühe võrra";
echo "<br>";

echo "<h2>Matemaatilised funktsioonid: </h2>";
echo "<br>";
echo "<strong>Ruutjuur -sqrt($arv1)</strong> =".sqrt($arv1);
echo "<br>";
echo "<strong> Kõige väiksem jadast -min($arv1, $arv2) = ".min($arv1, $arv2);
echo "<br>";
echo "<strong> Kõige suurem jadast -max($arv1, $arv2) = ".max($arv1, $arv2);
echo "<br>";
$arv2=3.455;
echo "<strong>Ümardamine -round($arv2)</strong> =".round($arv2);
echo "<br>";
echo "<strong>Ümardamine 2kohta -round($arv2, 2)</strong> =".round($arv2,2);
echo "<br>";
echo "<strong>Juhuslik arv -rand()</strong> =".rand();
echo "<br>";
echo "<strong>Juhuslik arv kindlas vahemikus -rand(1, 10)</strong> =".rand(1, 10);
echo "<br>";
echo "<strong>Astendatud arv -pow(5, 2)</strong> =".pow(5, 2);
echo "<br>";
echo "<strong>Pi leidmine -pi</strong> =".pi();
echo "<br>";
echo "<strong>Cos leidmine -cos(0.8)</strong> =".cos(0.8);
echo "<br>";
echo "<strong>Sin leidmine -sin(0.8)</strong> =".sin(0.8);
echo "<br>";
echo "<strong>Tangensi leidmine -tan(0.8)</strong> =".tan(0.8);
echo "<br>";
echo "<strong>Nurga teisendamine radiaaniks -red2deg(40)</strong> =".deg2rad(40);
echo "<br>";
$percentage = 50;
$totalWidth= 350;
echo "<strong>Protsendi leidmine - ($percentage/100)*totalWidth</strong> =".($percentage/100)*$totalWidth;
echo "<h2>Arvumõistatus. Arva ära kaks arvu vahemikus 0->10</h2>";
$salaarv1=3;
$salaarv2=6;
//kirjuta matemaatilise tehtega või funktsioonidega 5 vihjet
echo "<ol><li>Kui esimene arv korrutada 5-ga, siis tuleb ";
echo ($salaarv1*5)."</li>";
echo "<li>Kui Esimene arv korrutada 15-ga ja jagada sqrt 4, siis tuleb ";
echo ($salaarv2*15/sqrt(4))."</li>";
echo "<li>Kui teine arv korrutada 87-ga ja jagada sqrt 5, siis tuleb ";
echo ($salaarv2*87/sqrt(5))."</li>";
echo "<li>Kui teine arv jagada 55-ga , siis tuleb ";
echo ($salaarv2/55)."</li>";
echo "<li>Kui votta sqrt teise arvu väärtus, siis tuleb  ";
echo (sqrt($salaarv2))."</li>";
echo "<br>"
?>
<form action="<?=clearVarsExcept($_SERVER['REQUEST_URI'], "leht")?>" method="post">
    <label for="arv1">Arv1: </label>
    <input type="text" id="arv1" name="arv1" min="0" max="10" step="1">
    <br>
    <label for="arv2">Arv2: </label>
    <input type="text" id="arv2" name="arv2" min="0" max="10" step="1">
    <input type="submit" value="Kontrolli">
</form>
<?php
//ja kirjuta arvude kontroll sarnaselt tekstfunktsioonidega
if(isset($_REQUEST["arv1"])){
    if($_REQUEST["arv1"]=="$salaarv1"){
        echo $_REQUEST["arv1"]." - Esimene arv on õige";
    } else{
        echo $_REQUEST["arv1"]." - Esimene arv on vale";
    }
}
echo "<br>";
if(isset($_REQUEST["arv2"])){
    if($_REQUEST["arv2"]=="$salaarv2"){
        echo $_REQUEST["arv2"]." - Teine arv on õige";
    } else{
        echo $_REQUEST["arv2"]." - Teine arv on vale";
    }
}



