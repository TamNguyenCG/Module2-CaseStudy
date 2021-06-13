<div class="col-12 col-md-12 mt-2">
    <div class="card">
        <div class="card-header">
            <a href="index.php?page=author" style="text-decoration: none"><h1>Author's list</h1></a>
            <div class="row">
                <div class="col-6">
                    <?php if ($_SESSION['userLogin']['role'] == 'admin'): ?>
                        <a class="btn btn-success" href="index.php?page=addAuthor">Add New Author</a>
                    <?php endif; ?>
                </div>
                <div class="col-6">
                    <form class="d-flex" method="post" action="index.php?page=searchAuthor">
                        <input class="form-control me-2" name="searchAuthor" placeholder="Search By Name" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>

            </div>
            <div class="col-12">
                <table class="table table-bordered table-hover" style="margin-top: 10px">
                    <thead class="thead-dark">
                    <tr style="text-align: center">
                        <th scope="col">No.</th>
                        <th scope="col">Author</th>
                        <th scope="col">Name</th>
                        <th scope="col">Date of birth</th>
                        <th scope="col">Number of books</th>
                        <th scope="col">nationality</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($authors as $key => $item): ?>
                        <tr style="text-align: center">
                            <td scope="row"><?php echo $key + 1 ?></td>
                            <td><img width="150px" height="200px" src="<?php echo $item->image;?>"></td>
                            <td scope="row"><?php echo $item->name ?></td>
                            <td scope="row"><?php echo $item->dateOfBirth ?></td>
                            <td scope="row"><?php echo $item->numberOfBooks ?></td>
                            <td scope="row"><?php echo $item->nationality ?></td>
                            <td>
                                <a type="button" href="index.php?page=detailAuthor&id=<?php echo $item->id ?>"
                                   class="btn btn-success">Detail</a>
                                <?php if ($_SESSION['userLogin']['role'] == 'admin'): ?>
                                    <a type="button" href="index.php?page=editAuthor&id=<?php echo $item->id ?>"
                                       class="btn btn-success">Edit</a>
                                    <a type="button" href="index.php?page=deleteAuthor&id=<?php echo $item->id ?>"
                                       class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
