<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header class="row shadow" style="background-color: #000b73; color: #ffffff">
        <div class="container tete col-md-7 row p-2">
            <h1 class="col-md-2">Logo</h1>
            <button class="col-md-3 mt-2 btn btn-outline-white">Voir les benefice</button>
        </div>
    </header>

    <form act
    <div class="col-md-4 container mt-4">
        <form action="/bilan" method="post" class="row filtre">
            <input type="number" name="jour" class="col-md-2 rounded my-border me-2" placeholder="jour">/
            <input type="number" name="mois" class="col-md-2 rounded my-border ms-2 me-2" placeholder="mois">/
            <input type="number" name="annee" class="col-md-2 rounded my-border ms-2" placeholder="annee">
            <button type="submit" class="col-md-3  ms-3 btn btn-outline-blue-darck">Filtre</button>
        </form>
    </div>

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

        <tbody>
            <tr>
                <?php foreach($bilans as $bilan) { ?>
                    <td><?php echo $bilan['chiffreAffaire'] ?></td>
                    <td><?php echo $bilan['coutRevient'] ?></td>
                    <td><?php echo $bilan['benefice'] ?></td>
                    <td><?php echo $bilan['date'] ?></td>
                <?php } ?>
            </tr>
        </tbody>
    </table>
</body>
</html>