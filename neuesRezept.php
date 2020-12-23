<?php 
$check=true;
$rnamew="";
$rnamec="";
$kbeschw="";
$kbeschc="";
$zubw="";
$zubc="";
$menw="";
$menc="";

$rnamew=$_POST["rnameeingabe"];
if (checkName($rnamew)==true) {
    $rnamec="is-valid";
} else {
    $rnamec="is-invalid";
    $check=false;
}
$kbeschw=$_POST["kbescheingabe"];
if (checkBesch($kbeschw)==true) {
    $kbeschc="is-valid";
} else {
    $kbeschc="is-invalid";
    $check=false;
}
if ($check==true) {
    header("Location:rezeptAnlegen.php?name=".$rnamew."&kurztext=".$kbeschw);
}
else{
    echo("nein");
}

function checkName($a){
    if (strlen($a)<5||strlen($a)>50) {
        return false;
    }
    return true;
}
function checkBesch($b){
    if (strlen($b)<5||strlen($b)>100) {
        return false;
    }
    return true;
}
?>

<form method="post">
    <label>Rezeptname
        <input type="text" name="rnameeingabe" class="<?php echo $rnamec;?>" value="<?php echo $rnamew;?>">
    </label>
    <label>Kurzbeschreibung
        <input type="text" name="kbescheingabe" class="<?php echo $kbeschc;?>" value="<?php echo $kbeschw;?>">
    </label>

    <label>Zubereitung
        <input type="text" name="zubeingabe" class="<?php echo $zubc;?>" value="<?php echo $zubw;?>">
    </label>     
    <input type="submit" name="sub" value="Weiter">
</form>