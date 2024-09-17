<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/style.css">
    <title>Document</title>
</head>

<body>
    <h1>ЗАДАНИЕ 1</h1>
    <?

    $array = ['Александрова', 'Сидоров', 'Каримов', 'Быков', 'Сайфуллин', 'Фомин', 'Банников'];
    foreach ($array as $student) {
        echo "<div class='qwe'>- $student\n</div>";
    }
    $expelled = array_pop($array);

    echo "<br>Удаленная фамилия: $expelled";
    ?><br>
    <?
    $count = count($array);
    echo "<p>Количество студентов: $count</p>";
    ?>
    <?
    if (in_array('Сидоров', $array)) {
        echo "В списке есть 'Сидоров'";
    } else {
        echo 'no';
    }
        ?>

    <h1>ЗАДАНИЕ 2</h1>

    <?

    $clubs = [
        "Спортивный" => "Сидоров",
        "Художественный" => "Емелина",
        "Музыкальный" => "Иванова",
        "Литературный" => "Петров",
        "Биологический" => "Антонова"
    ];

    asort($clubs);

    echo "<ol>";
    foreach ($clubs as $club => $surname) {
        echo "<li>$club - $surname</li>";
    }
    echo "</ol>";
    ?>

    <h1>ЗАДАНИЕ 3</h1>

    <?

    $student = [
        'name' => 'Карина',
        'surname' => 'Александрова',
        'group' => '435',
        'hobby' => ['Чтение'],
        'social' => ['Telegram' => '@kardewg']
    ];
    ?>
    <h2>Мои данные</h2>
        <p><span>Мое имя:</span> <?php echo $student['name']?></p>
        <p><span>Моя фамилия:</span> <?php echo $student['surname']?></p>
        <p><span>Моя группа:</span> <?php echo $student['group']?></p>
        <p><span>Мои хобби:</span> <?php echo $student['hobby'][0] ?></p>
        <p><span>Мои соцсети:</span> <?php echo $student['socials']['Telegram'] .'<br>', $student['socials']['Tg'] ?></p>
</body>

</html>