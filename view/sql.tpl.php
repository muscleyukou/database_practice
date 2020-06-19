<!DOCTYPE html>
<html lang='ja'>
<head>
<meta charset='utf-8'>
<title>データベース修行</title>
</head>
<body>
    <h1><?php echo 'hellophp'; ?></h1>
    <?php foreach($results as $value){?>
       <p><?php print_r($value);?></p>
    <?php }?>
</body>