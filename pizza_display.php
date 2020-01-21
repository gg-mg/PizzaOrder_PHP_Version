<?php

if (isset($_POST['submit'])) {
    $pie_size = filter_input(INPUT_POST,'pie_size');
    $toppings = filter_input(INPUT_POST, 'top[]', FILTER_SANITIZE_SPECIAL_CHARS, FILTER_REQUIRE_ARRAY);
    $crust = filter_input(INPUT_POST,'crust');

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RocketMan Pizza</title>
</head>
<body>
<h1>Output</h1>    
<p><?php echo $pie_size; ?></p>
<p><?php   if(toppings !==NULL){
        foreach (toppings as  $value) {
            echo $value['name'] . '<br>';
        }
    }  else {
        echo 'No toppings selected.';
    } ?></p>
<p><?php echo $crust; ?></p>

</body>
</html>