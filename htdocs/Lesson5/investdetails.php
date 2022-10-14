<?php
    function fmt($x) {
    return number_format($x, 2);
    }
?>
<!DOCTYPE html>
<html>
<head>
<title>Investment Calculator</title>
<style>
    td, th { text-align: right }
    td {padding:4px; width: 110px; }
    tr:nth-child(even) {background-color: #e5e5e5; }
    tr {border-bottom:1px solid #cccccc; }
    .year {width:30px;}
</style>
</head>
<body>
    <h1>Simple Investment Calculator</h1>
    <?php
    setlocale(LC_MONETARY, "en_US");
    $newamount = filter_input(INPUT_POST, 'amount');
    $rate = filter_input(INPUT_POST, 'rate');
    $years = filter_input(INPUT_POST, 'years');
    $addamount = filter_input(INPUT_POST, 'addamount');
    $extra = filter_input(INPUT_POST, 'extra');
    $hasAddAmount = false;
    if ($addamount === 'Yes') {
        $hasAddAmount = true;
    }
    $originalamount = $newamount;
    ?>
    <h3>Investment Details</h3>
    <?php echo "This investment schedule represents an initial investment of $" . number_format($newamount) .
    " for a period of " . $years . " years at ". $rate . "%.";
    if ($hasAddAmount) {
        echo "<br>An additional annual investment of $" . fmt($extra) . " has been selected.";
    }
    ?>
    <h3>Annual Schedule</h3>
    <table aria-describedby="Investment Schedule">
        <tr>
            <th>Year</th>
            <th>Start Amount</th>
            <th>Interest</th>
            <th>End Amount</th>
            <?php if ($hasAddAmount) {
                echo "<th>Extra Amount</th>";
                echo "<th>New Total</th>";
            }
            ?>
        </tr>
    <?php
    for ($x=0; $x<$years; $x++) {
        $startamount = $newamount;
        $interest = $newamount * ($rate/100);
        $newamount += $interest;
        if ($addamount==="Yes") {
            $newamount += $extra;
        }
    ?>
    <tr>
        <td class="year"><?php echo $x+1; ?>
        <td><?php echo fmt($startamount); ?></td>
        <td><?php echo fmt($interest); ?></td>
        <td><?php echo fmt($startamount + $interest); ?></td>
        <?php if ($hasAddAmount) {
            echo "<td>" . fmt($extra) . "</td>";
            echo "<td>" . fmt($newamount) . "</td>";
         }
         ?>
    </tr>
    <?php
    }
    ?>
    <?php
        $investmentSummaryAmount = $originalamount;
        if ($hasAddAmount) {
            $investmentSummaryAmount = $originalamount += $extra * $years;
        }
        echo "SUMMARY: The total amount invested is $" . fmt($investmentSummaryAmount) .
        ", earning $" . fmt($newamount - $investmentSummaryAmount) . " in interest for a total of $" .
        fmt($newamount) . "." ?>


</body>
</html>