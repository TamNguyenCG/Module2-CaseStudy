<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .form-control {
            width: 30%;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="card-header"><h2>Edit Product's Information</h2></div>
    <div>
        <form method="post" enctype="multipart/form-data">
            <?php foreach ($books as $item): ?>
                <div class="mb-3">
                    <label class="form-label">Book Image</label>
                    <img width="150px" height="200px" src="<?php echo $item->image ?>">
                    <input type="file" class="form-control" name="image">
                </div>
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" value="<?php echo $item->name?>">
                    <?php if(isset($errors['name'])): ?>
                        <p class="text-danger"><?php echo $errors['name'] ?></p>
                    <?php endif; ?>
                </div>
                <div class="mb-3">
                    <label class="form-label">Publish Year</label>
                    <input type="text" class="form-control" name="publish" value="<?php echo $item->publish?>">
                    <?php if(isset($errors['publish'])): ?>
                        <p class="text-danger"><?php echo $errors['publish'] ?></p>
                    <?php endif; ?>
                </div>
                <div class="mb-3">
                    <label class="form-label">Republish</label>
                    <input type="text" class="form-control" name="republish" value="<?php echo $item->republish?>">
                    <?php if(isset($errors['republish'])): ?>
                        <p class="text-danger"><?php echo $errors['republish'] ?></p>
                    <?php endif; ?>
                </div>
                <div class="mb-3">
                    <label class="form-label">ISBN Code</label>
                    <input type="text" class="form-control" name="ISBN" value="<?php echo $item->ISBN?>">
                    <?php if(isset($errors['ISBN'])): ?>
                        <p class="text-danger"><?php echo $errors['ISBN'] ?></p>
                    <?php endif; ?>
                </div>
                <div class="mb-3">
                    <label class="form-label">Summary</label>
                    <input type="text" class="form-control" name="summary" value="<?php echo $item->summary?>">
                    <?php if(isset($errors['summary'])): ?>
                        <p class="text-danger"><?php echo $errors['summary'] ?></p>
                    <?php endif; ?>
                </div>
                <div class="mb-3">
                    <label class="form-label">Publisher</label>
                    <input type="text" class="form-control" name="publisher" value="<?php echo $item->publisher?>">
                    <?php if(isset($errors['publisher'])): ?>
                        <p class="text-danger"><?php echo $errors['publisher'] ?></p>
                    <?php endif; ?>
                </div>
                <div class="mb-3">
                    <label class="form-label">License</label>
                    <input type="text" class="form-control" name="license" value="<?php echo $item->license?>">
                    <?php if(isset($errors['license'])): ?>
                        <p class="text-danger"><?php echo $errors['license'] ?></p>
                    <?php endif; ?>
                </div>
                <div class="mb-3">
                    <label class="form-label">Sold</label>
                    <input type="text" class="form-control" name="sold" value="<?php echo $item->sold?>">
                    <?php if(isset($errors['sold'])): ?>
                        <p class="text-danger"><?php echo $errors['sold'] ?></p>
                    <?php endif; ?>
                </div>
                <div class="mb-3">
                    <label class="form-label">Amount</label>
                    <input type="text" class="form-control" name="amount" value="<?php echo $item->amount?>">
                    <?php if(isset($errors['amount'])): ?>
                        <p class="text-danger"><?php echo $errors['amount'] ?></p>
                    <?php endif; ?>
                </div>
                <div class="mb-3">
                    <label class="form-label">Recommend</label>
                    <input type="text" class="form-control" name="recommend" value="<?php echo $item->recommend?>">
                    <?php if(isset($errors['recommend'])): ?>
                        <p class="text-danger"><?php echo $errors['recommend'] ?></p
                    <?php endif; ?>
                </div>
                <div class="mb-3">
                    <label class="form-label">Best-selling</label>
                    <input type="text" class="form-control" name="selling" value="<?php echo $item->selling?>">
                    <?php if(isset($errors['selling'])): ?>
                        <p class="text-danger"><?php echo $errors['selling'] ?></p
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
            <button type="submit" class="btn btn-primary">Edit</button>
            <a type="button" href="index.php?page=booklist" class="btn btn-primary">Back</a>
        </form>
    </div>
</div>
</body>
</html>

