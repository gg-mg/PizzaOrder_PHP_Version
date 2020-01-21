<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rocketman Pizza</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
<header>
<h1>Rocketman Pizza</h1>
</header>
    <form action="pizza_display.php" method="post">
    <div>
   <p><strong>Pizza Size:</strong>
    <inline><input type="radio" name="pie_size" value="small">Small</inline>
    <inline><input type="radio" name="pie_size" value="medium">Medium</inline>
    <inline><input type="radio" name="pie_size" value="large">Large</inline>
    <inline><input type="radio" name="pie_size" value="extra_large">Extra_Large</inline></p>
    </div>
    <div class="radio-container">
    <p><strong>Veg Toppings:</strong>
    <input type="checkbox" name="top[]" value="mushroom">Mushroom
    <input type="checkbox" name="top[]" value="olives">Olives
    <input type="checkbox" name="top[]" value="peppers">Green Peppers
    <input type="checkbox" name="top[]" value="tomato">Tomatoes & Pepper</p>
    </div>
  
    <div>
    <h4><strong>Meat Toppings:</strong>
    <input type="checkbox" name="top[]" value="pepperoni">Pepperoni
    <input type="checkbox" name="top[]" value="borewors">Borewors
    <input type="checkbox" name="top[]" value="chicken">Fried Chicken
     <input type="checkbox" name="top[]" value="ham">Ham Delight</h4>
    </div>

    <div>
   <p><strong>Crust:</strong>
    <inline><input type="radio" name="crust" value="crispy">Crispy</inline>
    <inline><input type="radio" name="crust" value="italian">Italian</inline>
    <inline><input type="radio" name="crust" value="stuffed">Stuffed Crust</inline>
    <inline><input type="radio" name="crust" value="gelatin_free">Gelatin Free</inline></p>
    </div> 
    <div class="form-group row align-items-center">
            <label><strong>Number of Pizzas</strong></label>
            <input class="form-control" id="pizzaCount" type="number" name="pizzaCount" min="1" />
          </div>
    
    <input class = "click" type="submit" value="click" name="submit">
    </form>
     
    <div id="buttons">
    <label>&nbsp</label>
    <input type="submit" value="Calculate" name="submit"> <br>
    </div>
     
    
</body>
</html>