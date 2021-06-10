<div class="col-12 col-md-12 mt-2">
    <div class="card">
        <div class="card-header">
            <h1>Book's List</h1>
            <div class="row">
                <div class="col-6">
                </div>
                <div class="col-6">
                    <form class="d-flex" method="post" action="index.php?page=search">
                        <input class="form-control me-2" name="search" placeholder="Search By Name" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>

            </div>
            <div class="col-12">
                <table class="table table-bordered" style="margin-top: 10px">
                    <thead>
                    <tr style="text-align: center">
                        <th scope="col">STT</th>
                        <th scope="col">Image</th>
                        <th scope="col">Name</th>
                        <th scope="col">Publish Year</th>
                        <th scope="col">Republish</th>
                        <th scope="col">ISBN</th>
                        <th scope="col">Summary</th>
                        <th scope="col">Publisher</th>
                        <th scope="col">License</th>
                        <th scope="col">Sold</th>
                        <th scope="col">Amount</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($books as $key => $item): ?>
                        <tr style="text-align: center">
                            <td scope="row"><?php echo $key + 1 ?></td>
                            <td scope="row"><img src="<?php echo $item->image ?>"></td>
                            <td scope="row"><?php echo $item->name ?></td>
                            <td scope="row"><?php echo $item->publish ?></td>
                            <td scope="row"><?php echo $item->republish ?></td>
                            <td scope="row"><?php echo $item->ISBN ?></td>
                            <td scope="row"><?php echo $item->summary ?></td>
                            <td scope="row"><?php echo $item->publisher ?></td>
                            <td scope="row"><?php echo $item->license ?></td>
                            <td scope="row"><?php echo $item->sold ?></td>
                            <td scope="row"><?php echo $item->amount ?></td>
                            <td>
                                <a type="button" href="index.php?page=booklist"
                                   class="btn btn-success">Back</a>
<!--                                <a type="button" href="index.php?page=edit&id=--><?php //echo $item->id ?><!--"-->
<!--                                   class="btn btn-success">Edit</a>-->
<!--                                <a type="button" href="index.php?page=delete&id=--><?php //echo $item->id ?><!--"-->
<!--                                   class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a>-->
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>