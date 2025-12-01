<?php
require('conf.php');
//lisamine
global $yhendus;
if(isset($_REQUEST["loomanimi"]) && $_REQUEST["loomanimi"]!==0){
    $kask=$yhendus->prepare("INSERT INTO loomad(loomanimi, kaal, varv) VALUES(?,?,?)");
    $kask->bind_param("sis", $_REQUEST['loomanimi'],$_REQUEST['kaal'],$_REQUEST['varv']); // i - integer, s - string
    $kask->execute();
    header("Location:loomadeKuvamine.php");
}

?>
<!DOCTYPE html>
<html lang="et">
<head>
    <title>Looma lisamine SQL tabeli sisse</title>
</head>
<body>
<h1>
    Looma lisamine
</h1>
<form action="" name="loom">
<table>
    <tr>
        <td><label for="loomanimi">Sisesta looma nimi</label></td>
        <td><input type="text" name="loomanimi" id="loomanimi"></td>
    </tr>

    <tr>
        <td>
            <label for="kaal">Sisesta looma kaal</label>
        </td>
        <td>
            <input type="number" name="kaal" id="kaal"> kg
        </td>
    </tr>
    <tr>
        <td>
            <label for="varv">Sisesta looma värv</label>
        </td>
        <td>
            <input type="color" name="varv" id="varv">
        </td>
    </tr>

    <tr>
        <td>
            <input type="submit" value="Lisa">
        </td>
    </tr>


    </form>
</table>
</body>
</html>