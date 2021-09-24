<?php
require_once './ClassRendelOOP.php';
$Netto=18996;
$AFA=8.9344;
$Brutto=3123244;
$Net= filter_input(INPUT_POST,"net",FILTER_SANITIZE_NUMBER_INT);
$AF= filter_input(INPUT_POST,"af",FILTER_SANITIZE_NUMBER_INT);
$Bru= filter_input(INPUT_POST,"bru",FILTER_SANITIZE_NUMBER_INT);
$Rendeles= filter_input(INPUT_POST,"rendeles",FILTER_SANITIZE_STRING);
$Sorszam= filter_input(INPUT_POST,"sorszam",FILTER_SANITIZE_NUMBER_INT);
if($Net!=null || $AF!=null || $Bru!=null || $Rendeles!=null)
{
    $sql5="INSERT INTO `megrendelestabla`(`SorszamID`, `SzamlaCim`, `Nettoosszeg`, `AFA`, `Brutto`) VALUES ('.$Sorszam.','.$Rendeles.','.$Net.','.$AF.','.$Bru.');";
    $result=$conn->query($sql5);
    echo '<div class="alert alert-succes" role="alert">Sikeres rendelés!</div>';
}
?>
<div class="container">
    <div id="osszeg">
        <p>Nettó végösszeg:<?php echo ''.$Netto.''?>FT</p>
        <p>Áfa összeg:<?php echo ''.$AFA.''?>FT</p>
        <p>Burttó végösszeg:<p style="color:red;"><?php echo ''.$Brutto.'';?>FT</p></p>
    </div>
    <h1>Számlázási cím:</h1>
    <form method="post">
        <div class="form-group">
            <label for="sorszam">sorszam:</label>
            <input class="form-control" type="text" name="sorszam" id="sorszam"/>
        </div>
        <div class="form-group">
            <label for="rendeles">szamlacim:</label>
            <select class="form-control" id="rendeles" name="rendeles">
                <option>CegnevKFT-Magyarország 4320 Debrecen mikepércsiút 54</option>
                <option value="Új számlázási címet adadok meg" name="uj" id="uj"  >Új számlázási címet adadok meg </option>
            </select>
            
        </div>
        <div class="form-group">
            <label for="net">Netto:</label>
            <input class="form-control" type="text" name="net" id="net"/>
        </div>
        <div class="form-group">
            <label for="af">Áfa:</label>
            <input class="form-control" type="text" name="af" id="af"/>
        </div>
        <div class="form-group">
            <label for="bru">Brutto</label>
            <input class="form-control" type="text" name="bru" id="bru"/>
        </div>
        <input type="checkbox"/>Kijelentem hogy elolvastam és elfogadom az általános szerződési ismereteket.
        <button class="btn btn-danger" type="submit" name="kuldes" id="kuldes">MEGRENDELÉS</button>
    </form>
</div>
