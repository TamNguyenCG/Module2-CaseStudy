<div class="col-12 col-md-12 mt-2">
    <div class="card">
        <div class="card-header">
            <h1>Book's List</h1>
            <div class="row">
                <div class="col-6">
                    <a class="btn btn-success" href="index.php?page=add">Add New Book</a>
                </div>
                <div class="col-6">
                    <form class="d-flex" method="post" action="index.php?page=search">
                        <input class="form-control me-2" name="search" placeholder="Search By Name" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>

            </div>
            <div class="col-12">
                <table class="table table-bordered table-hover" style="margin-top: 10px">
                    <thead class="thead-dark">
                    <tr style="text-align: center">
                        <th scope="col">STT</th>
                        <th scope="col">Book</th>
                        <th scope="col">Name</th>
                        <th scope="col">Publish Year</th>
                        <th scope="col">Republish</th>
                        <th scope="col">Publisher</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($books as $key => $item): ?>
                        <tr style="text-align: center">
                            <td scope="row"><?php echo $key + 1 ?></td>
                            <td><img width="150px" height="200px" src="<?php echo $item->image;?>"></td>
                            <td scope="row"><?php echo $item->name ?></td>
                            <td scope="row"><?php echo $item->publish ?></td>
                            <td scope="row"><?php echo $item->republish ?></td>
                            <td scope="row"><?php echo $item->publisher ?></td>
                            <td>
                                <a type="button" href="index.php?page=detail&id=<?php echo $item->id ?>"
                                   class="btn btn-success">Detail</a>
                                <a type="button" href="index.php?page=edit&id=<?php echo $item->id ?>"
                                   class="btn btn-success">Edit</a>
                                <a type="button" href="index.php?page=delete&id=<?php echo $item->id ?>"
                                   class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

