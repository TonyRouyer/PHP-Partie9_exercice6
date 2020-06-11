<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>patie 9 exercice 6</title>
</head>
<body>
    <?php
        $number = cal_days_in_month(CAL_GREGORIAN, 2, 2016);
    ?>
    <?= 'Il y a eu ' . $number . ' jours en Fevrier 2016' ?>
</body>
</html>