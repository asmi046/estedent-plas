# Задание на создание сидера для таблицы prices

Возьми информацию для заполенения мз следующих файлов:

- public\tmp_data\prices\terapy.txt (Терапия)
- public\tmp_data\prices\ortoped.txt (Ортопедия)
- public\tmp_data\prices\hirurgia.txt (Хирургия)
- public\tmp_data\prices\rengen.txt (Ренгенология)

Проанализируй проанализируй эти файлы и распредели информацию следующим образом:

- service_code - В01.067.002
- service_name - Первичная консультация врача-хирурга
- price - 500 (убираем название валюты)
- unit - наименование в скобках рядом с файлом

Результат помести в файл database\seeders\PriceSeeder.php

Работай при помощи фасада DB
