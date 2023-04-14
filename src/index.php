<?php
function calculate($value) {
    if (is_int($value)) {
        throw new Exception('переданно число (int)');
    }
    if (is_float($value)) {
        throw new Exception('переданно число (float)');
    }
    if (is_string($value)) {
        throw new Exception('переданна строка (string)');
    }
    if (is_bool($value)) {
        throw new Exception('переданно логическое значение (bool)');
    }
    if (is_array($value)) {
        throw new Exception('передан массив (array)');
    }
    if (is_null($value)) {
        throw new Exception('переданно значение (null)');
    }
}
$arr = [3, 3.14, null, 'string', true, []];

foreach ($arr as $value) {
    try {
        calculate($value); 
    } catch(Exception $e) {
        echo $e->getMessage() . PHP_EOL;
    }
}