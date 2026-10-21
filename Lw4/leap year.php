<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculator</title>
</head>
<body>
  <div>
    <h1>
        <?php
            $year = $_POST['year'];
            if ($year == '') {
                print "нужно ввести год" . "<br>";
                } else if ($year % 400 == 0) {
                    print "Год високосный" . "<br>";
                } elseif ($year % 100 == 0) {
                    print "Год не високосный" . "<br>";
                } else if ($year % 4 == 0) {
                    print "Год високосный" . "<br>";      
                } else {
                    print "Год не високосный" . "<br>";
                }
        ?>
    </h1>
</div>
</body>
</html>