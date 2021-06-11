<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="col-12 col-sm-12 row mb-2">
    <?php foreach ($books as $item): ?>
        <div class="col-sm-3 grow" style="margin-top: 10px">
            <div class="card text-center">
                <!--            <div class="card-header">-->
                <!---->
                <!--            </div>-->
                <div>
                    <a href="index.php?page=detail&id=<?php echo $item->id ?>">
                        <div class="card-body">
                            <img src="<?php echo $item->image ?>" style="width: 70% ; height: 200px"/>
                        </div>
                        <div class="card-header">
                            <?php echo $item->name ?> <span class="right badge badge-danger">Hot</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
</body>
</html>
<style>
    .grow img{
        transition: 1s ease;
    }

    .grow img:hover{
        -webkit-transform: scale(1.2);
        -ms-transform: scale(1.2);
        transform: scale(1.2);
        transition: 1s ease;
    }
</style>