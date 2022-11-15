<?php 

$pwd = filter_input(INPUT_POST, 'pwd');
$favseason = filter_input(INPUT_POST, 'favseason');
$weather = filter_input(INPUT_POST, 'weather');
$operand1 = filter_input(INPUT_POST, 'operand1');
$operand2 = filter_input(INPUT_POST, 'operand2');

function filterPWD($p) {
    $checker = preg_match('/[!^]/', $p);
    if ($checker === false) {
        echo 'Password not processed.';
    }
    if ($checker) {
        echo '<p>Contains invalid characters.</p>';
    }
    if (!$checker) {
        echo '<p>Password accepted.</p>';
    }
}
function weather($w) {
    $w =strtolower($w);
    $sunny_checker = preg_match('/sunny/', $w);
    $cold_checker = preg_match('/cold/', $w);
    $raining_checker = preg_match('/raining/', $w);

    if(!$sunny_checker && !$cold_checker && !$cold_checker) echo '<h1>There\'s weather out there!</h1>';
    if($sunny_checker) echo "Hey... $w <br><h1>Wear sunscreen!</h1>";
    if($cold_checker) echo '<h1>Wear a hat!</h1>';
    if($raining_checker) echo '<h1>Bring an umbrella!</h1>';
}
function favseason($fs) {   
    $fall_count = preg_match_all('/fall/', $fs);
    $winter_count = preg_match_all('/winter/', $fs);
    $spring_count = preg_match_all('/spring/', $fs);
    $summer_count = preg_match_all('/summer/', $fs);
    echo "Winter: $winter_count <br>
          Spring: $spring_count <br>
          Summer: $summer_count <br>
          Fall:   $fall_count <br><br>";
}
function division($o1, $o2) {
    try {
        $quo = $o1 / $o2;
        return $quo;
    } catch (DivisionByZeroError $e) {
        echo "You can't divide by zero; Stop! You're breaking it!";
    }
    ;
}
?>

<!DOCTYPE html>
<html>
<head>
<style>
input { width: 200px; }
input.operand { width: 50px; }
* { font-family: Arial; }
</style>
</head>
<body>
<form method="post" action="validate.php">
<h2>Regular Expressions Exercises</h2>
<p>
1. Make sure the following password does not contain the symbols ! or ^.
Display "Contains invalid character" and display the illegal character(s) or "Password accepted."<br><br>
<b>Password</b><br>
<?php filterPWD($pwd) ?>
<p>2. Display the following reminders if the value has any of the following.
    Note: it should work regardless of case.<br></p>
<?php weather($weather) ?>
<p>3. The following value contains a list of votes for favorite seasons including spring,
    summer, fall, and winter. Display a count of votes for each. If there are no votes,
    still display it with a count of 0.<br><br>
<b>Favorite season</b><br><br>
<?php favseason($favseason) ?>
<br>

4. Perform the following division problem. Catch an exceptions that occur and display the exception message.<br><br>
<b>Division problem</b><br>
<h1><?php division($operand1, $operand2); ?></h1>



</body>
</html>