<?php
require "./order_functions.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Menu</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <form action="process_order.php" method="POST">
        <label for="dessert">Dessert</label>
        <select id="dessert" name="dessert">
            <option value="none">(choose a dessert)</option>
            <option value="Cheesecake" <?php if (dessertSelected("Cheesecake")) echo 'selected'; ?>>Cheesecake</option>
            <option value="Chocolate Cake" <?php if (dessertSelected("Chocolate Cake")) echo 'selected'; ?>>Chocolate Cake</option>
            <option value="Tiramisu" <?php if (dessertSelected("Tiramisu")) echo 'selected'; ?>>Tiramisu</option>
            <option value="Carrot Cake" <?php if (dessertSelected("Carrot Cake")) echo 'selected'; ?>>Carrot Cake</option>
        </select>

        <label for="drink">Drink:</label>
        <select name="drink" id="drink">
            <option value="none">(choose a drink)</option>
            <option value="Coffee" <?php if (drinkSelected("Coffee")) echo 'selected'; ?>>Coffee</option>
            <option value="Hot Chocolate" <?php if (drinkSelected("Hot Chocolate")) echo 'selected'; ?>>Hot Chocolate</option>
            <option value="Root Beer" <?php if (drinkSelected("Root Beer")) echo 'selected'; ?>>Root Beer</option>
            <option value="Tea" <?php if (drinkSelected("Tea")) echo 'selected'; ?>>Tea</option>
            <option value="Milk" <?php if (drinkSelected("Milk")) echo 'selected'; ?>>Milk</option>
        </select>

        <fieldset>
            <legend>Drink Size</legend>
            <label><input type="radio" name="drinkSize" value="Small" <?php if (drinkSizeSelected("Small")) echo 'checked'; ?>> Small</label>
            <label><input type="radio" name="drinkSize" value="Medium" <?php if (drinkSizeSelected("Medium")) echo 'checked'; ?>> Medium</label>
            <label><input type="radio" name="drinkSize" value="Large" <?php if (drinkSizeSelected("Large")) echo 'checked'; ?>> Large</label>
        </fieldset>

        <button type="submit">Send choices</button>
    </form>

    <div class="insight-card">
        <h3>Live guidance</h3>
        <p><?php echo htmlspecialchars(completionMessage()); ?></p>
        <p class="insight-note"><?php echo htmlspecialchars(pairingSuggestion()); ?></p>
    </div>

    <div class="insight-card pricing-grid">
        <div>
            <h3>Estimated total</h3>
            <p class="price-figure"><?php echo htmlspecialchars(formattedTotal()); ?></p>
        </div>
        <div>
            <h3>Order profile</h3>
            <p><?php echo htmlspecialchars(orderProfile()); ?></p>
        </div>
    </div>

    <div class="forget-order">
        <a href="forget_order.php">Forget Order</a>
    </div>
</body>
</html>