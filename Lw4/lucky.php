<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lucky tickets</title>
</head>
<body>
  <div>
    <h1>
        <?php

        function getLuckyTickets($start, $end) {
            // Приводим к типу int, чтобы избежать ошибок при сравнении строк
            $start = (int)$start;
            $end = (int)$end;

            if ($start < 0 || $start > 999999 || $end > 999999) {
                return 'Введите числа в диапазоне [000000, 999999]';
            }
            if ($start > $end) {
                return 'Начальное число должно быть меньше конечного';
            }

            $result = '';

            for ($ticket = $start; $ticket <= $end; $ticket++) {
                $firstHalf = (int)($ticket / 1000);
                $secondHalf = (int)($ticket % 1000);

                $sum1 = 0;
                $temp = $firstHalf;
                for ($i = 0; $i < 3; $i++) {
                    $sum1 += $temp % 10;
                    $temp = (int)($temp / 10);
                }

                $sum2 = 0;
                $temp = $secondHalf;
                for ($i = 0; $i < 3; $i++) {
                    $sum2 += $temp % 10;
                    $temp = (int)($temp / 10);
                }

                if ($sum1 == $sum2) {
                    // Форматируем вывод, чтобы числа всегда были 6-значными (например, 001001 вместо 1001)
                    $result = $result . sprintf("%06d", $ticket) . '<br>';
                }
            }

            if ($result == '') {
                return 'Нет счастливых билетов';
            }

            return $result;
        }

        // Проверяем, отправлена ли форма, чтобы избежать ошибок Notice
        if (isset($_POST['number-first']) && isset($_POST['number-second'])) {
            $first_number = $_POST['number-first'];
            $second_number = $_POST['number-second'];
            
            echo getLuckyTickets($first_number, $second_number);
        } else {
            echo "Введите диапазон номеров билетов";
        }

        ?>
    </h1>
</div>
</body>
</html>
