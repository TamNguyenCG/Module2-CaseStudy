<div class="col-12 col-sm-12 row mb-2">
    <?php foreach ($books as $item): ?>
    <div class="col-sm-3" style="margin-top: 10px">
        <div class="card text-center">
            <!--            <div class="card-header">-->
            <!---->
            <!--            </div>-->
            <div class="card-body">
                <img src="<?php echo $item->image ?>" style="width: 70% ; height: 200px"/>
            </div>
            <div class="card-header">
                <?php echo $item->name ?> <span class="right badge badge-danger">Hot</span>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>