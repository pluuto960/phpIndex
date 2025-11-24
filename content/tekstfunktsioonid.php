<?php
function clearVarsExcept($url, $varname){
    $url=basename($url);
    if(str_starts_with($url,"?")){
        return "?$varname=".$_REQUEST[$varname];
    }
    return strtok($url, "?")."?$varname=".$_REQUEST[$varname];
}

echo'<br>';
$linn="Põlva";
echo "<ol><li>Linn algab ".substr($linn,0,1)." tähega</li>";
?>
<form action="<?=clearVarsExcept($_SERVER['REQUEST_URI'], "leht")?>" method="post">
    <label for="linn">Sisesta linnanimi</label>
    <input type="text" id="linn" name="linn">
    <input type="submit" value="Kontrolli">
</form>

<?php
if(isset($_REQUEST["linn"])){
    if($_REQUEST["linn"]=="Põlva"){
        echo $_REQUEST["linn"]." - Linnanimi Õige";
    } else{
        echo $_REQUEST["linn"]." - Linnanimi vale";
    }
}


echo "<h2>MÕISTATUS – ARVA ÄRA EESTI LINNANIMI</h2>";
/* eesmärk on ära arvata, millist Eesti linna on kirjeldatud.
// Kirjuta abiks 5–6 tekstipõhist funktsiooni” ehk vihjet,
// mis aitavad samm-sammult lähemale jõuda õigele linnanimele.
// funktsioonid on näiteks selliseid - esimene täht on .. jne*/
//Näiteks,
echo '<br>';
$linn="Põlva";
echo "<ol><li>Linn algab ".substr($linn, 0,1)." tähega</li>";
echo "<li>Linna nimi on ".strlen($linn)." tähte</li>";
echo "<li>Linn on Volkswagen Passatite pealinn</li>";
echo"<li>Linn lõppeb ".substr($linn, -1)." tähega</li>";
echo"<li>Linn asub Lõuna-Eestis</li>";
