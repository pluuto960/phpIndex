<?php
function clearVarsExcept($url, $varname){
    $url=basename($url);
    if(str_starts_with($url,"?")){
        return "?$varname=".$_REQUEST[$varname];
    }
    return strtok($url, "?")."?$varname=".$_REQUEST[$varname];
}

echo'<br>';
$linn="sss";
echo "<ol><li>Linn algab ".substr($linn,0,1)." tähega</li>";
?>
<form action="<?=clearVarsExcept($_SERVER['REQUEST_URI'], "leht")?>" method="post">
    <label for="linn">Sisesta linnanimi</label>
    <input type="text" id="linn" name="linn">
    <input type="submit" value="Kontrolli">
</form>
<?php
//if(isset($_REQUEST["linn"])){
//    if($_REQUEST["linn"]=="sss"){
//
//    }
//}



