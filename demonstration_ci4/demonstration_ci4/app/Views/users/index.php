<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<header class="page-heading">
    <p class="eyebrow">Access management</p>
    <h1>User Accounts</h1>
    <p class="lead">The sample staff members who can access this POS workspace.</p>
</header>

<section class="panel">
    <div class="panel-head">
        <h2>All users</h2>
        <span class="record-count"><?= count($users) ?> records</span>
    </div>
    <div class="table-wrap">
        <table>
            <thead>
                <tr>
                    <th scope="col">User ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Username</th>
                    <th scope="col">Role</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                    <tr>
                        <td class="secondary-cell"><?= esc($user['user_id']) ?></td>
                        <td class="primary-cell"><?= esc($user['name']) ?></td>
                        <td><?= esc($user['username']) ?></td>
                        <td><?= esc($user['role']) ?></td>
                        <td>
                            <span class="badge <?= esc(strtolower($user['status']), 'attr') ?>">
                                <?= esc($user['status']) ?>
                            </span>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</section>
<?= $this->endSection() ?>
