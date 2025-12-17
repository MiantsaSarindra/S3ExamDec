<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="number" name="jour" placeholder="jour">
        <input type="number" name="mois" placeholder="mois">
        <input type="number" name="annee" placeholder="annee">
        <button type="submit">Rechercher</button>
    </form>

    <h3>Les benefices par periode</h3>

    <table>
        <thead>
            <tr>
                <td>Chiffre d'affaire</td>
                <td>Cout de revient</td>
                <td>Benefice</td>
                <td>Date</td>
            </tr>
        </thead>

                    '' => $row['montant'],
                    '' => $row['salaire'],
                    '' => $row['benefice'],
                    '' => $row['date']
        <tbody>
            <tr>
                <?php foreach($bilans as $bilan) { ?>
                    <td><?php echo $bilan['chiffreAffaire'] ?></td>
                    <td><?php echo $bilan['coutRevient'] ?></td>
                    <td><?php echo $bilan['benefice'] ?></td>
                    <td><?php echo $bilan[''] ?></td>
                <?php } ?>
            </tr>
        </tbody>
    </table>
</body>
</html>