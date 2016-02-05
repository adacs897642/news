<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/bootstrap.min.css">
    <title>News Paper</title>
</head>
<body>
<div class="container">
    <header class="h1">News Paper</header>
    <hr>
    <?php foreach($news as $art):?>
        <p><?php echo $art['time'];?></p>
        <h2><?php echo $art['title'];?></h2>
        <p><?php echo $art['annotation'];?></p>
        <p><?php echo $art['text'];?></p>
        <hr>
    <?php endforeach;?>
</div>
</body>
</html>