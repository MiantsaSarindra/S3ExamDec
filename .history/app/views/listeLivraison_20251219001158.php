<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <header class="row shadow" style="background-color: #000b73; color: #ffffff">
        <div class="container tete col-md-7 row p-2">
            <h1 class="col-md-2">Logo</h1>
            <button class="col-md-3 mt-2 btn btn-outline-white">Voir les benefice</button>
        </div>
    </header>
    
    <div class="col-md-4 container mt-4">
        <form action="/bilan" method="post" class="row filtre">
            <input type="number" name="jour" class="col-md-2 rounded my-border me-2" placeholder="jour">/
            <input type="number" name="mois" class="col-md-2 rounded my-border ms-2 me-2" placeholder="mois">/
            <input type="number" name="annee" class="col-md-2 rounded my-border ms-2" placeholder="annee">
            <button type="submit" class="col-md-3  ms-3 btn btn-outline-blue-darck">Filtre</button>
        </form>
    </div>

    <h3 class="text-center text-primary mt-5">Les benefices par periode</h3>

    <div class="col-md-10 container mt-5 shadow p-5 rounded">
        <table class="table table-hover text-center col-md-7 border rounded">
            <thead>
                <tr>
                    <td  style="background-color: #000b73; color: #ffffff">Chiffre d'affaire</td>
                    <td  style="background-color: #000b73; color: #ffffff">Cout de revient</td>
                    <td  style="background-color: #000b73; color: #ffffff">Benefice</td>
                    <td  style="background-color: #000b73; color: #ffffff">Date</td>
                </tr>
            </thead>
    
                    'id' => $row['id'],
                    '' => $colis,
                    '' => $row['adresseDepart'],
                    '' => $row['adresseDestination'],
                    '' => $statut,
                    '' => $chauffeur,
                    '' => $voiture,
                    '' => $row['daty']
            <tbody>
                <tr>
                    <?php foreach($listeLivraisons as $listeLivraison) { ?>
                        <td><?php echo $listeLivraison['Colis'] ?></td>
                        <td><?php echo $listeLivraison['adresseDepart'] ?></td>
                        <td><?php echo $listeLivraison['adresseDestination'] ?></td>
                        <td><?php echo $listeLivraison['Chauffeur'] ?></td>
                        <td><?php echo $listeLivraison['Voiture'] ?></td>
                        <td><?php echo $listeLivraison['Statut'] ?></td>
                    <?php } ?>
                </tr>
            </tbody>

            <tfoot>
                <tr>
                    <td style="color: #000b73"><strong>total chiffreAffaire</strong></td>
                    <td style="color: #000b73"><strong>total coutRevient</strong></td>
                    <td style="color: #000b73"><strong>total benefice</strong></td>
                </tr>
            </tfoot>
        </table>
    </div>
</body>
</html>