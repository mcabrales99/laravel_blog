<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

 <h1>Guess, <?php echo $guess; ?>!</h1>
  <h1>Random, <?php echo $random; ?>!</h1>
<?php if ($random == $guess):?>
<h1><p>you are correct</p></h1>
<?php else:?>
<h1><p>try again</p></h1>   
<?php endif?>
</body>
</html>