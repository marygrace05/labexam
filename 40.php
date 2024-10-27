<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Countries Visited</title>
</head>
<body>

<?php

if (isset($_POST['num_countries'])) {
    $numCountries = intval($_POST['num_countries']);
    ?>

    <form action="" method="post">
        <h3>Please enter the names of the countries you have visited:</h3>
        <?php
       
        for ($i = 1; $i <= $numCountries; $i++) {
            echo "<input type='text' name='country[]' placeholder='Country $i'><br>";
        }
        ?>
        <input type="submit" name="submit_countries" value="Submit Countries">
    </form>

    <?php
} elseif (isset($_POST['submit_countries'])) {
    
    $countries = $_POST['country'];
    echo "<h3>You have visited the following countries:</h3>";
    echo "<ul>";
    foreach ($countries as $country) {
        echo "<li>" . htmlspecialchars($country) . "</li>";
    }
    echo "</ul>";
} else {
    
    ?>

    <form action="" method="post">
        <label for="num_countries">How many countries have you visited?</label>
        <input type="number" name="num_countries" min="1" required>
        <input type="submit" value="Submit">
    </form>

    <?php
}
?>

</body>
</html>