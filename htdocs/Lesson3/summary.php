<?php 
    $name = filter_input(INPUT_POST, 'name');
    $major = filter_input(INPUT_POST, 'major');
    $fav_language = filter_input(INPUT_POST, 'fav_language');
    $vscode = filter_input(INPUT_POST, 'vscode');
    $brackets = filter_input(INPUT_POST, 'brackets');
    $other = filter_input(INPUT_POST, 'othername');
    $ide_array = array($vscode, $brackets, $other);
    
    function ide_list($array) {
        $ide_list = '';
        for($i = 0, $count = count($array); $i < $count; $i++){
            if(isset($array[$i])){
                $ide_list .= ucwords($array[$i]) . '<br>';
            }
        }
        return $ide_list;
    }
    $ide_list = ide_list($ide_array);
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="main.css">
    </head>
    <body>
        <main> <h1>Summary</h1>
            <label>Name: </label> <br>
            <span><?php echo $name; ?></span> <br>
            <label>Major: </label> <span><br>
            <?php echo $major; ?></span> <br>
            <label>Favorite Language: </label> <br>
            <span><?php echo $fav_language; ?></span> <br>
            <label>IDE Choice: </label><br>
            <span><?php echo $ide_list?></span> <br>
        </main>
    </body>
</html> 