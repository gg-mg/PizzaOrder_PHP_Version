<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rocketman Pizza</title>
</head>
<body>
<header>
<h1>Rocketman Pizza</h1>
</header>
    <form action="pizza-dsplay.php" method="post">
    <div>
   <p><strong>Pizza Size:</strong>
    <inline><input type="radio" name="pie_size" value="small">Small</inline>
    <inline><input type="radio" name="pie_size" value="medium">Medium</inline>
    <inline><input type="radio" name="pie_size" value="large">Large</inline>
    <inline><input type="radio" name="pie_size" value="extra_large">Extra_Large</inline></p>
    </div>

    <p><strong>Veg Toppings:</strong>
    <inline><input type="checkbox" name="top[]" value="mushroom">Mushroom</inline>
    <inline><input type="checkbox" name="top[]" value="olives">Olives</inline>
    <inline><input type="checkbox" name="top[]" value="peppers">Green Peppers</inline>
    <inline><input type="checkbox" name="top[]" value="tomato">Tomatoes & Pepper</inline></p>
    </div>

    <p><strong>Meat Toppings:</strong>
    <inline><input type="checkbox" name="top[]" value="pepperoni">Pepperoni</inline>
    <inline><input type="checkbox" name="top[]" value="borewors">Borewors</inline>
    <inline><input type="checkbox" name="top[]" value="chicken">Fried Chicken</inline>
    <inline><input type="checkbox" name="top[]" value="ham">Ham Delight</inline></p>
    </div>

    <div>
   <p><strong>Crust:</strong>
    <inline><input type="radio" name="crust" value="crispy">Crispy</inline>
    <inline><input type="radio" name="crust" value="italian">Italian</inline>
    <inline><input type="radio" name="crust" value="stuffed">Stuffed Crust</inline>
    <inline><input type="radio" name="crust" value="gelatin_free">Gelatin Free</inline></p>

    </div>   

    </form>
    <div id="buttons">
    <label>&nbsp</label>
    <input type="submit" value="Calculate"> <br>
    
</body>
</html>