
<div class="col-12 col-md-12 mt-2">
    <div class="card">
        <div class="card-header">
            Danh sách tác giả
        </div>
        <div class="card-body">
            <div class="col-12">
                <nav class="navbar navbar-light bg-light">
                    <div class="container-fluid">
                        <form class="d-flex" method="post">
                            <input class="form-control me-2"  name="search" placeholder="Search" aria-label="Search">
                            <a href="./index.php?page=search" <button class="btn btn-outline-success" type="submit" >Search</button></a>
                        </form>
                    </div>
                </nav>
                <a class="btn btn-success mb-2" href="./index.php?page=add">Thêm mới</a>
                <table class="table">
                    <thead>
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
                    <?php foreach($authors as $key => $author): ?>
                    <tr>
                        <th scope="row"><?php echo $author->id ?></th>
                        <td><?php echo $author->name ?></td>
                        <td><?php echo $author->yearOfBirth ?></td>
                        <td><?php echo $author->numberOfBooks ?></td>
                        <td><?php echo $author->nationality ?></td>
                        <td><?php echo $author->linkWiki ?></td>
                    </tr>
                   <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>