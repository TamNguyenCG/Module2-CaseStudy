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
    <div class="card-header"><h2>Add New Book</h2></div>
    <div>
        <form method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label class="form-label">Image</label>
                <input type="file" class="form-control" name="image">
            </div>
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" name="name">
                <?php if (isset($errors['name'])): ?>
                    <p class="text-danger"><?php echo $errors['name'] ?></p>
                <?php endif; ?>
            </div>
            <div class="mb-3">
                <label class="form-label">Publish Year</label>
                <input type="text" class="form-control" name="publish">
                <?php if (isset($errors['publish'])): ?>
                    <p class="text-danger"><?php echo $errors['publish'] ?></p>
                <?php endif; ?>
            </div>
            <div class="mb-3">
                <label class="form-label">Republish</label>
                <input type="text" class="form-control" name="republish">
                <?php if (isset($errors['republish'])): ?>
                    <p class="text-danger"><?php echo $errors['republish'] ?></p>
                <?php endif; ?>
            </div>
            <div class="mb-3">
                <label class="form-label">Summary</label>
                <input type="text" class="form-control" name="summary">
                <?php if (isset($errors['summary'])): ?>
                    <p class="text-danger"><?php echo $errors['summary'] ?></p>
                <?php endif; ?>
            </div>
            <div class="mb-3">
                <label class="form-label">Publisher</label>
                <input type="text" class="form-control" name="publisher">
                <?php if (isset($errors['publisher'])): ?>
                    <p class="text-danger"><?php echo $errors['publisher'] ?></p>
                <?php endif; ?>
            </div>
            <div class="mb-3">
                <label class="form-label">Sold</label>
                <input type="text" class="form-control" name="sold">
                <?php if (isset($errors['sold'])): ?>
                    <p class="text-danger"><?php echo $errors['sold'] ?></p>
                <?php endif; ?>
            </div>
            <div class="mb-3">
                <label class="form-label">Amount</label>
                <input type="text" class="form-control" name="amount">
                <?php if (isset($errors['amount'])): ?>
                    <p class="text-danger"><?php echo $errors['amount'] ?></p
                <?php endif; ?>
            </div>
            <div class="mb-3">
                <label class="form-label">Recommend</label>
                <input type="text" class="form-control" name="recommend" placeholder="Yes or No">
                <?php if (isset($errors['recommend'])): ?>
                    <p class="text-danger"><?php echo $errors['recommend'] ?></p
                <?php endif; ?>
            </div>
            <div class="mb-3">
                <label class="form-label">Best-selling</label>
                <input type="text" class="form-control" name="selling" placeholder="Yes or No">
                <?php if (isset($errors['selling'])): ?>
                    <p class="text-danger"><?php echo $errors['selling'] ?></p
                <?php endif; ?>
            </div>
            <div class="mb-3 ">
                <label for="category">Select a category</label>
                <select id="category" name="categoryId">
                    Categories
                    <?php foreach ($categories as $key => $item): ?>
                        <option value="<?php echo $item['id'] ?>" ><?php echo $item['name'] ?></option>
                    <?php endforeach; ?>
                    <?php if (isset($errors['categoryId'])): ?>
                        <p class="text-danger"><?php echo $errors['categoryId'] ?></p
                    <?php endif; ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
            <a type="button" href="index.php?page=booklist" class="btn btn-primary">Back</a>
        </form>
    </div>
</div>
</body>
</html>