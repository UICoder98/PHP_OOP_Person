<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="../Stylesheet/Design.css">
    <?php require_once "Person.php";?>
</head>
<body>
    <h2>Personen</h2>
    <table>
        <tr>
            <th>Nr.</th>
            <th>Vorname</th>
            <th>Name</th>
            <th>Geschlecht</th>
            <th>Alter</th>
            <th>Größe in m</th>
            <th>Gewicht in kg</th>
            <th>Augenfarbe</th>
        </tr>

        <tr>
            <td><?=$robbieWilliams->getId();?></td>
            <td><?=$robbieWilliams->getFirstName();?></td>
            <td><?=$robbieWilliams->getLastName();?></td>
            <td><?=$robbieWilliams->getSex();?></td>
            <td><?=$robbieWilliams->getAge();?></td>
            <td><?=$robbieWilliams->getSize();?></td>
            <td><?=$robbieWilliams->getWeight();?></td>
            <td><?=$robbieWilliams->getEyeColor();?></td>
        </tr>

        <tr>
            <td><?=$aydaField->getId();?></td>
            <td><?=$aydaField->getFirstName();?></td>
            <td><?=$aydaField->getLastName();?></td>
            <td><?=$aydaField->getSex();?></td>
            <td><?=$aydaField->getAge();?></td>
            <td><?=$aydaField->getSize();?></td>
            <td><?=$aydaField->getWeight();?></td>
            <td><?=$aydaField->getEyeColor();?></td>
        </tr>

        <tr>
            <td><?=$jakeGyllenhaal->getId();?></td>
            <td><?=$jakeGyllenhaal->getFirstName();?></td>
            <td><?=$jakeGyllenhaal->getLastName();?></td>
            <td><?=$jakeGyllenhaal->getSex();?></td>
            <td><?=$jakeGyllenhaal->getAge();?></td>
            <td><?=$jakeGyllenhaal->getSize();?></td>
            <td><?=$jakeGyllenhaal->getWeight();?></td>
            <td><?=$jakeGyllenhaal->getEyeColor();?></td>
        </tr>

        <tr>
            <td><?=$heathLedger->getId();?></td>
            <td><?=$heathLedger->getFirstName();?></td>
            <td><?=$heathLedger->getLastName();?></td>
            <td><?=$heathLedger->getSex();?></td>
            <td><?=$heathLedger->getAge();?></td>
            <td><?=$heathLedger->getSize();?></td>
            <td><?=$heathLedger->getWeight();?></td>
            <td><?=$heathLedger->getEyeColor();?></td>
        </tr>

        <tr>
            <td><?=$cristianoRonaldo->getId();?></td>
            <td><?=$cristianoRonaldo->getFirstName();?></td>
            <td><?=$cristianoRonaldo->getLastName();?></td>
            <td><?=$cristianoRonaldo->getSex();?></td>
            <td><?=$cristianoRonaldo->getAge();?></td>
            <td><?=$cristianoRonaldo->getSize();?></td>
            <td><?=$cristianoRonaldo->getWeight();?></td>
            <td><?=$cristianoRonaldo->getEyeColor();?></td>
        </tr>

        <tr>
            <td><?=$richardMadden->getId();?></td>
            <td><?=$richardMadden->getFirstName();?></td>
            <td><?=$richardMadden->getLastName();?></td>
            <td><?=$richardMadden->getSex();?></td>
            <td><?=$richardMadden->getAge();?></td>
            <td><?=$richardMadden->getSize();?></td>
            <td><?=$richardMadden->getWeight();?></td>
            <td><?=$richardMadden->getEyeColor();?></td>
        </tr>

        <tr>
            <td><?=$aaronTaylorJohnson->getId();?></td>
            <td><?=$aaronTaylorJohnson->getFirstName();?></td>
            <td><?=$aaronTaylorJohnson->getLastName();?></td>
            <td><?=$aaronTaylorJohnson->getSex();?></td>
            <td><?=$aaronTaylorJohnson->getAge();?></td>
            <td><?=$aaronTaylorJohnson->getSize();?></td>
            <td><?=$aaronTaylorJohnson->getWeight();?></td>
            <td><?=$aaronTaylorJohnson->getEyeColor();?></td>
        </tr>
    </table>
</body>
</html>