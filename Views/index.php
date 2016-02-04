<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/../bootstrap.min.css">
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
        <form action="/../news.local/news.php" method="get">
            <input type="hidden" name="id" value="<?php echo $art['id']?>">
            <input type="submit" value="Смотреть далее..." class="bg-info btn">
        </form>
        <hr>
    <?php endforeach;?>
    </div>
</body>
</html>