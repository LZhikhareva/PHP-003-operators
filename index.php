<?php

echo "Введите фамилию: ";
$surname = trim(fgets(STDIN));
echo "Введите имя: ";
$name = trim(fgets(STDIN));
echo "Введите отчество: ";
$lastname = trim(fgets(STDIN));

if ($surname == "") {
    echo "Фамилия не указана";
} else if ($name == "") {
    echo "Имя не указано";
} else if ($lastname == "") {
    echo "Отчество не указано";
} else {
    // Формируем полное имя
    $fullName =  mb_convert_case("$surname $name $lastname", MB_CASE_TITLE, "UTF-8");
    echo "Полное имя: $fullName" . PHP_EOL;

    // Фамилия и инициалы
    $surnameAndInitials = mb_convert_case($surname, MB_CASE_TITLE, "UTF-8") . " " . mb_convert_case(mb_substr($name, 0, 1), MB_CASE_TITLE, "UTF-8") . "." . mb_convert_case(mb_substr($lastname, 0, 1), MB_CASE_TITLE, "UTF-8") . ".";
    echo "Фамилия и инициалы: $surnameAndInitials" . PHP_EOL;

    // Аббревиатура
    $fio = mb_convert_case(mb_substr($surname, 0, 1), MB_CASE_TITLE, "UTF-8") . mb_convert_case(mb_substr($name, 0, 1), MB_CASE_TITLE, "UTF-8") . mb_convert_case(mb_substr($lastname, 0, 1), MB_CASE_TITLE, "UTF-8");
    echo "Аббревиатура: $fio" . PHP_EOL;
}


