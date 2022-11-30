
<?php

  $entire_period = $_POST['entire-period'];
  $censored_word = $_POST['censored-word'];
  $censored_period = $entire_period;
  
  
  
  ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>... as you speech, my lord</title>
  </head>
  <body>
    
    

<h2>Your censored period is:</h2>
<p><?php echo str_replace($censored_word,'***', $censored_period); ?></p>
<p>The censored word is: <?php echo $censored_word; ?></p>
<h2>The entire period is:</h2>
<p><?php echo $entire_period; ?></p>

  
</body>
</html>