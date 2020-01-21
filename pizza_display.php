<?php

if (isset($_POST['submit'])) {
    $pie_size = filter_input(INPUT_POST, 'pie_size');
    $toppings = filter_input(INPUT_POST, 'top', FILTER_SANITIZE_SPECIAL_CHARS, FILTER_REQUIRE_ARRAY);
    $crust = filter_input(INPUT_POST, 'crust');
    $pizzaCount = filter_input(INPUT_POST, 'pizzaCount');
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
<h3>Pizza Order</h3>    
<p><strong>Size: </strong><?php echo $pie_size; ?></p>
<p><strong>Toppings:</strong></p>
<p><?php   if ($toppings !==null) {
    foreach ($toppings as  $value) {
        echo $value. '<br>';
    }
} else {
    echo 'No toppings selected.';
} ?></p>
<p><strong>Crust:</strong> <?php echo $crust; ?></p>
<p><strong>Quantity:</strong> <?php echo $pizzaCount; ?></p>

<!-- The code below will output key/value pair -->
<!-- Use.....foreach (toppings $key => $value).... to get key/value pair  -->
  <!-- echo $key . '=' . $value .'<br>'; -->

</body>
</html>

   