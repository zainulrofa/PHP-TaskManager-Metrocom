<div class="container mt-4">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $data['task']['title'] ?></h5>
            <span class="badge <?php
                if ($data['task']['status'] === 'In Progress') {
                    echo 'text-bg-dark';
                } elseif ($data['task']['status'] === 'Pending') {
                    echo 'text-bg-warning';
                } elseif ($data['task']['status'] === 'Completed') {
                    echo 'text-bg-success';
                }
            ?>">
                <?= $data['task']['status'] ?>
            </span>
            <p class="card-text"><?= $data['task']['description'] ?></p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="<?= BASURL ?>/task" class="btn btn-dark">Back</a>
            </div>
        </div>
    </div>
</div>
