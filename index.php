<!DOCTYPE html>
<html lang="ru">
    <head>
        <title>Обучение PHP</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
            $nameUser = "Данила Климкин";
            $ageUser = 19;
            $heightUser = 179.5;
            $cityUser = "Челябинск";
            $idUser = 5507; // Данные о пользователе

            $arrUser = compact("nameUser", "ageUser", "heightUser", "cityUser", "idUser"); // Создание массива для данных

            natsort($arrUser);
            print_r($arrUser); // Сортировка по значению (Возрастание с учётом регистра и цифр)

            echo "<br>";

            ksort($arrUser);
            print_r($arrUser); // Сортировка по ключу (По алфавиту)
        ?>
    </body>
</html>