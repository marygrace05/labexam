<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="" method="post">
<input type="number" name="percent" id="" value="Grade" placeholder="Enter your Grade: ">
<input type="submit" name="submit" value="Show Status">
</form>
    <?php
    if (isset($_POST['submit'])){
    $percent=$_POST['percent'];
    

  if(!is_numeric($percent)||$percent < 0|| $percent >= 100){

    }
    if ( $percent >= 90 && $percent <= 100){
      echo'Excellent';
    }
    elseif($percent >= 85 && $percent <= 89){
        echo'Good';
    }
    elseif($percent >= 80 && $percent <= 84){
      echo'Fair';
    }
    elseif($percent >= 75 && $percent <= 79){
      echo'Poor';
    }
    elseif($percent >= 60 && $percent <= 74){
      echo'Fail';
    }else{
      echo 'Invalid';
    }
    
  }
    
    ?>





</body>
</html>