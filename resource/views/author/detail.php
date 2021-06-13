<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body >
<div style="background-color: white !important;">
<?php
foreach ($authors as $key => $author): ?>
   <div style="float:left;margin-top: 10px"> <img width="420px" height="400px" src="<?php echo $author->image;?>"></div>
    <div style="font-size: 25px;margin-left: 450px;margin-top: 50px"><p>Name: <?php echo $author->name ?></p>
    <p>Year: <?php echo $author->dateOfBirth ?></p>
    <p>Number of books: <?php echo $author->numberOfBooks ?></p>
    <p>Nationality: <?php echo $author->nationality ?></p>
   <a href="<?php echo $author->linkWiki ?>" target="_blank">Wikipedia</a>
    </div>
<?php endforeach; ?>
<div style="clear: left" ><a type="button" href="index.php?page=author" class="btn btn-secondary">Quay lại</a></div>
</div>
</body>
</html>
