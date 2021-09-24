<table class="table table-bordered">
    <thead>
        <tr>
            <th>Sorszam</th>
            <th>Számlacim</th>
            <th>Nettóösszeg</th>
            <th>ÁFA</th>
            <th>Bruttó</th>
            <th>Telefonszám</th>
            <th>Adószám</th>
            <th>Típus</th>
        </tr>
    </thead>

<?php
$sql6="SELECT megrendelestabla.SorszamID,megrendelestabla.SzamlaCim,megrendelestabla.Nettoosszeg,megrendelestabla.AFA,megrendelestabla.Brutto,szamlazasicim.Telefonszam,szamlazasicim.Adoszam,szamlazasicim.Tipus FROM megrendelestabla INNER JOIN szamlazasicim ON megrendelestabla.SorszamID=szamlazasicim.ID WHERE 1;";
$result3=$conn->query($sql6);
if($result3->num_rows>0)
{
    while($row3=$result3->fetch_assoc())
    {
        echo '<tr><td>'.$row3["SorszamID"].'</td>';
        echo '<td>'.$row3["SzamlaCim"].'</td>';
        echo '<td>'.$row3["Nettoosszeg"].'</td>';
        echo '<td>'.$row3["AFA"].'</td>';
        echo '<td>'.$row3["Brutto"].'</td>';
        echo '<td>'.$row3["Telefonszam"].'</td>';
        echo '<td>'.$row3["Adoszam"].'</td>';
        echo '<td>'.$row3["Tipus"].'</td>';
        echo '</tr>';
        echo '</table>';
    }
}
?>