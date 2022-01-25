<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exam1</title>
</head>
<body>
<?php

function input() {
    return fgets(STDIN);
}

echo "Please type your salary. 10,000 or 50,000 or 100,000 " . PHP_EOL;
$salary = input();
if ($salary == 10000) {
    $bonut = $salary * 3;
    $total = $bonut + $salary;
    echo "salary total =" . $total . PHP_EOL;
} else {
    if ($salary == 50000) {
        $bonut = $salary * 2;
        $total = $bonut + $salary;
        echo "salary total =" . $total . PHP_EOL;
    } else {
        if ($salary == 100000) {
            $total = $salary + $salary;
            echo "salary total =" . $total . PHP_EOL;
        } else {
            echo "sorry not bonut" . PHP_EOL;
        }
    }
}
?>
</body>
</html>