<?php
$Tipus= filter_input(INPUT_POST,"tipus",FILTER_SANITIZE_STRING);
$ceg= filter_input(INPUT_POST,"Ceg",FILTER_SANITIZE_STRING);
$Telefonszam= filter_input(INPUT_POST,"telefon",FILTER_SANITIZE_NUMBER_INT);
$Adoszam= filter_input(INPUT_POST,"ado",FILTER_SANITIZE_NUMBER_INT);
$Orszag= filter_input(INPUT_POST,"orszag",FILTER_SANITIZE_STRING);
$Iranyitoszam= filter_input(INPUT_POST,"iranyito",FILTER_SANITIZE_NUMBER_INT);
$Varos= filter_input(INPUT_POST,"varos",FILTER_SANITIZE_STRING);
$Utca= filter_input(INPUT_POST,"utca",FILTER_SANITIZE_STRING);
if($Tipus!=null || $ceg!=null || $Telefonszam!=null || $Adoszam!=null || $Orszag!=null || $Varos!=null || $Utca!=null)
{
    $sql="INSERT INTO `szamlazasicim`(`ID`, `Tipus`, `Cegnev`, `Telefonszam`, `Adoszam`, `Orszag`, `Iranyitoszam`, `Varos`, `Utca`) VALUES (NULL,'".$Tipus."','".$ceg."','".$Telefonszam."','".$Adoszam."','".$Orszag."','".$Iranyitoszam."','".$Varos."','".$Utca."');";
    $conn->query($sql);
    echo '<div class="alert alert-success col-12" role="alert">Sikeres felvétel!</div>';
}
?>
<h1>Új számlázási cím létrehozása:</h1>
<form method="post">
    <div class="form-group">
        <label for="tipus">Típus<p style="color:red;">*</p></label>
        <select class="form-control" id="tipus" name="tipus">
            <option>Magánszemély</option>
            <option>Cég</option>
        </select>
    </div>
    <div class="form-group">
        <label for="Ceg">Név/Cégnév<p style="color:red;">*</p></label>
        <input class="form-control" type="text" name="Ceg" id="Ceg"  required/>
    </div> 
    <div class="form-group">
        <label for="telefon">Telefonszam</label>
        <input  class="form-control" type="text" name="telefon" id="telefon"/>
    </div> 
    <div class="form-group">
        <label for="ado">Adószám</label>
        <input class="form-control" type="text" name="ado" id="ado"/>
    </div> 
    <div class="form-group">
        <label for="orszag">Ország <p style="color:red;">*</p></label>
        <select class="form-control" id="orszag" name="orszag">
            <option>Magyarország</option>
            <option>Anglia</option>
            <option>Románia</option>
            <option>Amerika</option>
        </select>
    </div> 
    <div class="form-group">
        <label for="iranyito">Irányítószám<p style="color:red;">*</p></label>
        <input class="form-control" type="text" name="iranyito" id="iranyito" required/>
    </div> 
    <div class="form-group">
        <label for="varos">Varos<p style="color:red;">*</p></label>
        <input class="form-control" type="text" name="varos" id="varos" required/>
    </div> 
    <div class="form-group">
        <label for="utca">Utca/Házszám<p style="color:red;">*</p></label>
        <input class="form-control" type="text" name="utca" id="utca" required/>
    </div> 
    <p style="color:red;text-align: center;">A *jelölt mezők kitöltése kötelező</p>
    <button class="btn btn-danger" type="submit">ÚJ CÍM FELVÉTELE</button>
</form>
<p>Számlázási címeim:</p>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Típus</th>
            <th>Név</th>
            <th>Telefonszám</th>
            <th>Adószám</th>
            <th>Orzság</th>
            <th>Irányítószám</th>
            <th>Város</th>
            <th>Utca</th>
            <th>Műveletek</th>
        </tr>
    </thead>
<?php
$sql2="SELECT `ID`, `Tipus`, `Cegnev`, `Telefonszam`, `Adoszam`, `Orszag`, `Iranyitoszam`, `Varos`, `Utca` FROM `szamlazasicim` WHERE 1;";
$result=$conn->query($sql2);
if($result->num_rows>0)
{
    while($row=$result->fetch_assoc())
    {
        echo '<td>'.$row["ID"].'</td>';
        echo '<td>'.$row["Tipus"].'</td>';
        echo '<td>'.$row["Cegnev"].'</td>';
        echo '<td>'.$row["Telefonszam"].'</td>';
        echo '<td>'.$row["Adoszam"].'</td>';
        echo '<td>'.$row["Orszag"].'</td>';
        echo '<td>'.$row["Iranyitoszam"].'</td>';
        echo '<td>'.$row["Varos"].'</td>';
        echo '<td>'.$row["Utca"].'</td>';
        echo '</table>';
    }
}
?>