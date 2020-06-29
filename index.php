<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>patie 9 exercice 6</title>
</head>
<body>
    <?php
        //on recupere le nb de jour suivant le calendrier gregorian
        $number = cal_days_in_month(CAL_GREGORIAN, 2, 2016);
    ?>
    <p><?= 'Il y a eu ' . $number . ' jours en Fevrier 2016' ?></p>
    <?php
        $number2 = date('d', mktime(0, 0, 0, 3, 0, 2016))
    ?>
    <p><?= $number2 ?></p>
</body>
</html>