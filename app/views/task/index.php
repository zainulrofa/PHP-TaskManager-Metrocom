<div class="container mt-4">
    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash() ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-dark mb-3 addModalButton" data-bs-toggle="modal" data-bs-target="#formModal">
                Add New Task
            </button>
        </div>
        <div class="col-lg-6">
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown button
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </div>
            <!-- search -->
            <form action="<?= BASURL ?>/task/search" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search here . . ." name="keyword" id="keyword" autocomplete="off">
                    <button class="btn btn-dark" type="submit" id="searchButton">Search</button>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <h4>Daftar Task</h4>
            <?php if (isset($data['task']) && is_array($data['task'])) : ?>
                <ul class="list-group">
                    <?php foreach ($data['task'] as $task) : ?>
                        <li class="list-group-item align-itme">
                            <div class="fw-bold"><?= $task['title'] ?></div>
                            <?php
                            $badgeColor = '';
                            switch ($task['status']) {
                                case 'In Progress':
                                    $badgeColor = 'bg-dark';
                                    break;
                                case 'Pending':
                                    $badgeColor = 'bg-warning';
                                    break;
                                case 'Completed':
                                    $badgeColor = 'bg-success';
                                    break;
                                default:
                                    break;
                            }
                            ?>
                            <span class="badge text-white <?= $badgeColor ?>"><?= $task['status'] ?></span>
                            <a href="<?= BASURL ?>/task/delete/<?= $task['id'] ?>" class="badge text-bg-danger text-decoration-none float-end" onclick="return confirm('anda yakin ingin menghapus task?')">delete</a>
                            <a href="<?= BASURL ?>/task/edit/<?= $task['id'] ?>" class="badge text-bg-light text-decoration-none float-end mx-1 showEditModal" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $task['id'] ?>">edit</a>
                            <a href="<?= BASURL ?>/task/detail/<?= $task['id'] ?>" class="badge text-bg-light text-decoration-none float-end">detail</a>
                        </li>
                    <?php endforeach; ?>
                </ul>

            <?php else : ?>
                <p>Tidak ada task yang tersedia.</p>
            <?php endif; ?>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="judulModal">Task Form</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= BASURL ?>/task/add" method="post">
                    <input type="hidden" name="id" id="id">
                    <div class="mb-3">
                        <label for="id" class="form-label">Title Task</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Input title" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description Task</label>
                        <input type="text" class="form-control" id="description" name="description" placeholder="Input description">
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select class="form-select" name="status" id="status">
                            <option value="Pending">Pending</option>
                            <option value="In Progress">In Progress</option>
                            <option value="Completed">Completed</option>
                        </select>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-dark">Add Task</button>
                </form>
            </div>
        </div>
    </div>
</div>