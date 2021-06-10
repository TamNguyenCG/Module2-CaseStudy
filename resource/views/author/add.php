<div class="col-12 col-md-12 mt-2">
    <div class="card">
        <div class="card-header">
            ADD AUTHOR
        </div>
        <div class="card-body">
            <div class="col-12">
                <form method="post">
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" class="form-control">
                        <?php if (isset($errors['name'])): ?>
                            <p class="text-danger"><?php echo $errors['name'] ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Date of birth</label>
                        <input type="number" class="form-control" name="year">
                        <?php if (isset($errors['year'])): ?>
                            <p class="text-danger"><?php echo $errors['year'] ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Number of books</label>
                        <input type="number" class="form-control" name="published">
                        <?php if (isset($errors['published'])): ?>
                            <p class="text-danger"><?php echo $errors['published'] ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nationality</label>
                        <input type="text" class="form-control" name="nationality">
                        <?php if(isset($errors['nationality'])): ?>
                            <p class="text-danger"><?php echo $errors['nationality'] ?></p>
                        <?php endif; ?>
                    </div> <div class="mb-3">
                        <label class="form-label">Link Wiki</label>
                        <input type="text" class="form-control" name="wikipedia">
                        <?php if(isset($errors['wikipedia'])): ?>
                            <p class="text-danger"><?php echo $errors['wikipedia'] ?></p>
                        <?php endif; ?>
                    </div>
                    <button type="submit" class="btn btn-primary">Lưu</button>
                    <a type="button" href="index.php?page=author" class="btn btn-secondary">Quay lại</a>
                </form>
            </div>
        </div>
    </div>
