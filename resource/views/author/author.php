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
<div class="row" style="margin-top: 10px">
    <div class="col-6">
        <a class="btn btn-success mb-2" href="index.php?page=addAuthor">Add</a>
    </div>
    <div class="col-6">
        <form class="d-flex" method="post" action="index.php?page=searchAuthor">
            <input class="form-control me-2"  name="searchAuthor" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit" >Search</button>
        </form>
    </div>
</div>

<table class="table" style="text-align: center">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Author</th>
        <th scope="col">Name</th>
        <th scope="col">Year of birth</th>
        <th scope="col">Number of books</th>
        <th scope="col">Nationality</th>
<!--        <th scope="col">Link wiki</th>-->
    </tr>
    </thead>
    <tbody>
    <?php foreach ($authors as $key => $author): ?>
    <tr>
        <th scope="row"><?php echo $key+1 ?></th>
        <td><img width="150px" height="200px" src="<?php echo $author->image;?>"></td>
        <td><?php echo $author->name ?> </td>
        <td><?php echo $author->dateOfBirth ?> </td>
        <td><?php echo $author->numberOfBooks ?> </td>
        <td><?php echo $author->nationality ?> </td>
<!--        <td>--><?php //echo $author->linkWiki ?><!-- </td>-->
        <td><a href="index.php?page=deleteAuthor&id=<?php echo $author->id; ?>"
               class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</a>
        </td>
        <td><a href="index.php?page=editAuthor&id=<?php echo $author->id; ?>"
               class="btn btn-danger btn-sm" >Edit</a>
        </td>
        <td><a href="index.php?page=detailAuthor&id=<?php echo $author->id; ?>"
            class="btn btn-danger btn-danger">Detail</a>
        </td>

    </tr>
   <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>
