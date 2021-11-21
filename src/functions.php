<?php

// task1
function task1(array $strings, bool $return = true)
{ 
    $result = implode("\n", array_map(function (string $str) {
        return "<p>$str</p>";
    }, $strings));

    if ($return) {
        return $result;
    }

    echo $result;
}

//task2
function task2(string $action, ...$args)
{
    foreach ($args as $n => $arg) {
        if (!is_int($arg) && !is_float($arg)) {
            trigger_error('argument #' . $n . 'is not integer or float');
            return 'ERROR: incorrect entry';
        }
    }
    switch ($action) {
        case '+':
            return array_sum($args);
        case '-':
            return array_shift($args) - array_sum($args);
        case '/':
            $result = array_shift($args);
            foreach ($args as $n => $arg) {
                if ($arg == 0) {
                    trigger_error('division by zero on argument #' . ($n + 1));
                    return 'ERROR: division by zero';
                }
                $result = $result / $arg;
            }
            return $result;
        case '*':
            $result = 1;
            foreach ($args as $arg) {
                $result *= $arg;
            }
            return $result;
        
        default:
            return 'ERROR: unknown actions';
    }
}

//Task3

function task3($a, $b)
{
    if (!is_int($a) || !is_int($b)) {
        trigger_error( 'argument is not an integer');
//        return 'ERROR: incorrect entry';
        return false;
    }
    elseif ($a < 0 || $b < 0) {
        trigger_error('Argument is not positive');
        return false;
    }
    $result = '<table>';
    for ($i = 1; $i <= $a; $i++) {
        $result .= '<tr>';
        for ($j = 1; $j <= $b; $j++) {
           $result .= '<td>';
           $result .= $i * $j;
           $result .= '</td>';
        }
        $result .= '</tr>';
    }
    $result .= '</table>';
    echo $result;
}

//Task 6
function my_file_get_contents(string $filename)
{
    $fp =fopen($filename, 'r');
    if (!$fp) {
        return false;
    }

    $str = '';
    while (!feof($fp)) {
        $str .= fgets($fp, 123);
    }

    echo $str;
}