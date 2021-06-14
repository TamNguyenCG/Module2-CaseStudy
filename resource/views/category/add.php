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
    <div class="card-header"><h2>Add New Category</h2></div>
    <div>
        <form method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" name="name">
                <?php if (isset($errors['name'])): ?>
                    <p class="text-danger"><?php echo $errors['name'] ?></p>
                <?php endif; ?>
            </div>
            <div class="mb-3">
                <label class="form-label">Quantity</label>
                <input type="text" class="form-control" name="quantity">
                <?php if (isset($errors['quantity'])): ?>
                    <p class="text-danger"><?php echo $errors['quantity'] ?></p>
                <?php endif; ?>
            </div>
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
    <a type="button" href="index.php?page=default" class="btn btn-primary">Back</a>
    </form>
</div>
</div>
</body>
</html>