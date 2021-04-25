<?php

//DZ#2.1

function task1($str, $return = true)
{
    $result = implode('тут тег "p"', array_map(function ($bmw) {
        return '<p>'.$bmw.'</p>';
    }, $str));
    if ($return) {
        return $result = implode(',', array_map(function ($bmw) {
            return $bmw;
        }, $str));
    }
        echo $result;

}

//DZ#2.2

function task2($exe)
{
    $args = func_get_args();
    $result = '0';
    if ($exe == '+') {
        echo 'Результат: ';
        for ($i = 1; $i < sizeof($args); $i++) {
            $result += $args[$i];
        }
    } elseif ($exe == '*') {
        $result = '1';
        echo 'Результат: ';
        for ($i = 1; $i < sizeof($args); $i++) {
//            echo $args[$j] . $args[0];
            $result *= $args[$i];
        }

    }
    return $result;
}

//DZ#2.3

function task3(int $num1, int $num2)
{
    if (is_int($num1) && is_int($num2)) {
        echo '<table border = "5px solid">';
        for ($i=1; $i<=$num1; $i++) {
            echo '<tr>';
            for ($j = 1; $j <= $num2; $j++) {
                $result = $i*$j;
                echo '<td>' . $result . '</td>';
            }
        }
            echo '</tr>';
        echo '</table>';
    }
}

//DZ#2.4

function task4()
{
    echo date("d.m.Y H:i").'<br>';
}
function task5()
{
    $date = date_create("24.02.2016 00:00:00");
    echo date_timestamp_get($date);
}

//DZ#2.5

function task6($str)
{
    $result = str_replace('К', '', $str);
    echo $result;
}

function task7($str)
{
    echo str_replace('Две', 'три', $str);
}

//DZ#2.6

function task8()
{
    $fp = fopen('text.txt', 'w');
    $data = 'Hello again!';
    fputs($fp, $data);
    fclose($fp);
}

function task9($name)
{
    echo file_get_contents($name);
}











