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
<table class="table">
    <thead>
     <tr>
         <td><a class="btn btn-success mb-2" href="index.php?page=addAuthor">Add</a></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
     </tr>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Year of birth</th>
        <th scope="col">Number of books</th>
        <th scope="col">Nationality</th>
        <th scope="col">Link wiki</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($authors as $key => $author): ?>
    <tr>
        <th scope="row"><?php echo $author->id ?></th>
        <td><?php echo $author->name ?> </td>
        <td><?php echo $author->dateOfBirth ?> </td>
        <td><?php echo $author->numberOfBooks ?> </td>
        <td><?php echo $author->nationality ?> </td>
        <td><?php echo $author->linkWiki ?> </td>
        <td><a href="index.php?page=deleteAuthor&id=<?php echo $author->id; ?>"
               class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</a>
        </td>

        </td>

    </tr>
   <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>
