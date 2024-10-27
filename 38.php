<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="" method="post">
    <input type="text" name="chars" placeholder="Enter Letters: ">
    <input type="submit" name="submit" value="Enter">
</form>

<?php
if (isset($_POST['submit'])) {
    $chars = $_POST['chars'];
    $charsArray = str_split($chars); 

    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $results = []; 

    foreach ($charsArray as $char) {

        if (strlen($char) != 1 || !ctype_alpha($char)) {
            echo "Error: Please input only letters.<br>";
            continue; 
        }

        $char = strtolower($char); 
        
        if (in_array($char, $vowels)) {
            $results[] = "$char is a Vowel";
        } else {
            $results[] = "$char is a Consonant";
        }
    }

    foreach ($results as $result) {
        echo $result . "<br>";
    }
}
?>

</body>
</html>