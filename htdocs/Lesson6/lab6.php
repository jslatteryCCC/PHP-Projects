<?php 

$first = filter_input(INPUT_POST, 'first');
$middle = filter_input(INPUT_POST, 'middle');
$last = filter_input(INPUT_POST, 'last');
$split = filter_input(INPUT_POST, 'split');
$shuffle = filter_input(INPUT_POST, 'shuffle');
$tolower = filter_input(INPUT_POST, 'tolower');
$compare1 = filter_input(INPUT_POST, 'compare1');
$compare2 = filter_input(INPUT_POST, 'compare2');
$num1 = (int) filter_input(INPUT_POST, 'num1');
$num2 = (int) filter_input(INPUT_POST, 'num2');
$currency = (float) filter_input(INPUT_POST, 'currency');
$year = filter_input(INPUT_POST, 'year');
$month = filter_input(INPUT_POST, 'month');
$day = filter_input(INPUT_POST, 'day');
$hour = filter_input(INPUT_POST, 'hour');
$minute = filter_input(INPUT_POST, 'minute');
$dateOutput = mktime($hour, $minute, 0, $month, $day, $year);

function combine($f, $m, $l) {
    return ($f . ' ' . substr($m, 0, 1) . '.' . ' ' . $l);
}
function split($s) {
    return explode('-', $s);
}
function compare($c1, $c2) {
    $withoutCase = "With strcmp(): " .
    (strcmp($c1, $c2) != 0 ?
    "Strings are not identical" :
    "Strings are identical");
    $withCase = "Without strcasecmp(): " .
    (strcasecmp($c1, $c2) != 0 ?
    "Strings are not identical" :
    "Strings are identical");
    return $withoutCase . "<br>" . $withCase;
}
function minMaxAvg($n1, $n2){
    $avg = ($n1 + $n2) / 2;
    return "Minimum: " . min($n1, $n2). "<br>" .
           "Maximum: " . max($n1, $n2). "<br>" .
           "Average: " . $avg . "<br>";
}
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <p>1.<i>Combine the first, last, and middle name to display as:
                [first name] [middle initial]. [last name]
                For example: Steven, Paul, and Jobs would display as "Steven P. Jobs".</i><br>
            <?php echo combine($first, $middle, $last)?>
        </p>
        <p>2.<i>Split the following string on each dash - character. Display each word on its own line.</i><br>
            <?php
                $splitResult = split($split);
                foreach ($splitResult as $segment) {
                    echo $segment . "<br>";
                }
            ?>
        </p>
        <p>3.<i>Randomly shuffle and output the value for the following string.</i><br>
            <?php echo str_shuffle($shuffle); ?>
        </p>
        <p>4.<i>Convert the following to all lowercase and output the value.</i><br>
            <?php echo strtolower($tolower)?>
        </p>
        <p>5.<i>Use both strcmp() and strcasecmp() to compare the following values.</i><br>
            <?php echo compare($compare1, $compare2);?>
        </p>
        <p>6.<i>For the following numbers, find the minimum, maximum, and average values.</i><br>
            <?php echo minMaxAvg($num1, $num2);?>
        </p>
        <p>7.<i>Generate a random integer between 0 and 100.</i><br>
            <?php echo random_int(0, 100); ?>
        </p>
        <p>8.<i>Use sprintf() to output the following value in currency 
                format with two decimal places and a $ sign.</i><br>
            <?php echo "$" . sprintf("%01.2f", $currency) ?>
        </p>
        <p>9.<i>Output the following date and time in two different formats.</i><br>
            <?php echo date('m-d-Y', $dateOutput); ?><br>
            <?php echo date('l, F d, Y', $dateOutput); ?>

        </p>

    </body>
</html>

 
