<?php
require_once './csatlakozas.php';
$id2= filter_input(INPUT_POST,"Modosit",FILTER_SANITIZE_NUMBER_INT);
if($id2!=null)
{
 $sql4="UPDATE `szamlazasicim` SET `Tipus`='Magánszemély' WHERE `ID`=".$id2;
 $conn->query($sql4);
 echo '<div class="alert alert-succes col-12" role="alert">Sikeres Módosítás</div>';
}
?>
<h1>Számlázási cím módosítása</h1>
<table>
    <thead>
        <tr>
            <th>Tipus</th>
            <th>Cegnev</th>
            <th>Telefonszam</th>
            <th>Adoszam</th>
            <th>Orszag</th>
            <th>Iranyitoszam</th>
            <th>Varos</th>
            <th>Utca</th>
        </tr>
    </thead>
<form method="post">
    <div class="row">
        <?php
        $sql3="SELECT `ID`, `Tipus`, `Cegnev`, `Telefonszam`, `Adoszam`, `Orszag`, `Iranyitoszam`, `Varos`, `Utca` FROM `szamlazasicim` WHERE 1;";
        $result2=$conn->query($sql3);
        if($result2->num_rows>0)
        {
            while($row2=$result2->fetch_assoc())
            {
                echo '<td>'.$row2["Tipus"].'</td>';
                echo '<td>'.$row2["Cegnev"].'</td>';
                echo '<td>'.$row2["Telefonszam"].'</td>';
                echo '<td>'.$row2["Adoszam"].'</td>';
                echo '<td>'.$row2["Orszag"].'</td>';
                echo '<td>'.$row2["Iranyitoszam"].'</td>';
                echo '<td>'.$row2["Varos"].'</td>';
                echo '<td>'.$row2["Utca"].'</td>';
                echo '<button class="btn btn-success" type="submit" name="Modosit" value="'.$row2["ID"].'">MÓDOSÍTÁSOK MENTÉSE</button>';
                echo '<button class="btn btn-danger" type="reset" name="reset">MÉGSE</button>';
                echo '</table>';
            }
        }
        ?>
    </div>
</form>