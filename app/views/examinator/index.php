<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examens</title>
    <link rel="stylesheet" href="../../../public/css/examinator.css">
</head>
<body>
    <main>
        <h3><?= $data['title'] ?></h3>

        <table>
            <thead>
                <th>Naam examinator</th>
                <th>Datum Examen</th>
                <th>Rijbewijscategorie</th>
                <th>Rijschool</th>
                <th>Stad</th>
                <th>Uitslag examen</th>
            </thead>
            <tbody>
                <?= $data['tableRows']; ?>
            </tbody>
        </table>

        <a href="<?= URLROOT ?>/home/index">Terug naar homepage</a>
    </main>
</body>
</html>