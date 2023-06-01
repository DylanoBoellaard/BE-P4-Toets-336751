<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examens</title>
    <!-- INSERT CSS -->
</head>
<body>
    <main>
        <h3><?= $data['title'] ?></h3>

        <table>
            <thead>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </thead>
            <tbody>
                <?= $data['tableRows']; ?>
            </tbody>
        </table>

        <a href="<?= URLROOT ?>/home/index">Terug naar homepage</a>
    </main>
</body>
</html>