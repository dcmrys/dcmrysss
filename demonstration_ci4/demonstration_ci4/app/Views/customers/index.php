<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<header class="page-heading">
    <p class="eyebrow">Directory</p>
    <h1>Customer Accounts</h1>
    <p class="lead">A quick view of customer contact information and account status.</p>
</header>

<section class="panel">
    <div class="panel-head">
        <h2>All customers</h2>
        <span class="record-count"><?= count($customers) ?> records</span>
    </div>
    <div class="table-wrap">
        <table>
            <thead>
                <tr>
                    <th scope="col">Account</th>
                    <th scope="col">Customer</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($customers as $customer): ?>
                    <tr>
                        <td class="secondary-cell"><?= esc($customer['account_no']) ?></td>
                        <td class="primary-cell"><?= esc($customer['name']) ?></td>
                        <td><?= esc($customer['email']) ?></td>
                        <td><?= esc($customer['phone']) ?></td>
                        <td>
                            <span class="badge <?= esc(strtolower($customer['status']), 'attr') ?>">
                                <?= esc($customer['status']) ?>
                            </span>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</section>
<?= $this->endSection() ?>
