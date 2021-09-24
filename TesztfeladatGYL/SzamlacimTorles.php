<?php
require_once './csatlakozas.php';
$id= filter_input(INPUT_POST,"torles",FILTER_SANITIZE_NUMBER_INT);
if($id!=null)
{
    $sql3="DELETE FROM `szamlazasicim` WHERE `ID`=".$id;
    $conn->query($sql3);
    echo '<div class="alert alert-success col-12" role="alert">Sikeres Törlés</div>';
}
?>
<h1>Számlázási cím törlése</h1>
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
                echo '<button class="btn btn-danger" type="submit" name="torles" value="'.$row2["ID"].'">Törlés</button>';
                echo '</table>';
            }
        }
        ?>
    </div>
</form>