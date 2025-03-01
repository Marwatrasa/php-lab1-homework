<?php
 if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: POST, GET, DELETE, PUT, PATCH, OPTIONS');
    header('Access-Control-Allow-Headers: token, Content-Type');
    header('Access-Control-Max-Age: 1728000');
    header('Content-Length: 0');
    header('Content-Type: text/plain');
    die();
}

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

$ret = [
    'result' => 'OK',
];
print json_encode($ret);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $expression = $_POST['expression'];

    // Проверка на допустимые символы
    if (!preg_match('/^[0-9+\-*\/() ]+$/', $expression)) {
        echo "Ошибка: Недопустимые символы в выражении.";
        exit;
    }

    if (strpos($expression, '/0') !== false) {
        echo "Ошибка: на ноль делить нельзя.";
        exit;
    }

    if (preg_match('/^[()+\-\/*\s]+$/', $expression)) {
        echo "Ошибка: введите числа для расчёта.";
        exit;
    }

    if (preg_match('/\)[123456789\/*]/', $expression)) {
        echo "Ошибка: Недопустимые символы в выражении.";
        exit;
    }

    // Вычисление выражения
    function calculate($expression) {
        // Удаляем все пробелы
        $expression = str_replace(' ', '', $expression);

        // Рекурсивно вычисляем выражение
        return eval("return $expression;");
    }

    try {
        $result = calculate($expression);
        echo $result;
    } catch (Exception $e) {
        echo "Ошибка: Невозможно вычислить выражение.";
    }
} else {
    echo "Ошибка: Неверный метод запроса.";
}
?>