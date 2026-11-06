<?php
require "./order_functions.php";
$orderSummary = order();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Order Receipt & Feedback</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="receipt-card"><?php echo $orderSummary; ?></div>

    <div class="insight-card">
        <h1>Order Feedback</h1>
        <p><?php echo htmlspecialchars(completionMessage()); ?></p>
        <p class="insight-note"><?php echo htmlspecialchars(pairingSuggestion()); ?></p>
    </div>

    <div class="insight-card pricing-grid">
        <div>
            <h2>Estimated Total</h2>
            <p class="price-figure"><?php echo htmlspecialchars(formattedTotal()); ?></p>
        </div>
        <div>
            <h2>Order Profile</h2>
            <p><?php echo htmlspecialchars(orderProfile()); ?></p>
        </div>
        <p class="insight-note full-width-note"><?php echo htmlspecialchars(pricingNote()); ?></p>
    </div>
</body>
</html>