<?php
require'task/task.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Решите задачу</h1>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>"  name="task">
<input type="hidden" value="<?= $sourceOperator1;?>" name="op1"/>
<input type="hidden" value="<?=$sourceOperator2;?>" name="sum"/>
<div>
    <span><?= $sourceOperator1;?>+</span>   
    <input type="text" value="<?= $sourceOperator3; ?>" size="2" name="op2"/>
    <span>=<?= $sourceOperator2;?></span>
</div>

    <input type="submit" name="form" value="Отправить"/>
</form>
</body>
</html>