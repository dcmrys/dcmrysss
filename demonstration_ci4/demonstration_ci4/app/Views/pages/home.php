<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<section class="hero">
    <p class="eyebrow">Simple point-of-sale management</p>
    <h1>Your store accounts, clearly organized.</h1>
    <p class="lead">
        CounterFlow is a lightweight POS demonstration for browsing customer and staff
        accounts from one clean workspace.
    </p>
    <div class="actions">
        <a class="button" href="<?= esc(site_url('customers'), 'attr') ?>">View customer accounts</a>
        <a class="button secondary" href="<?= esc(site_url('users'), 'attr') ?>">View user accounts</a>
    </div>
</section>

<section class="grid" aria-label="POS sections">
    <article class="card">
        <p class="eyebrow">Customers</p>
        <h3>Account directory</h3>
        <p>Review contact details and current account status for sample customers.</p>
        <a class="card-link" href="<?= esc(site_url('customers'), 'attr') ?>">Open customers &rarr;</a>
    </article>
    <article class="card">
        <p class="eyebrow">Users</p>
        <h3>Staff access</h3>
        <p>See the team members, usernames, roles, and access status in the POS.</p>
        <a class="card-link" href="<?= esc(site_url('users'), 'attr') ?>">Open users &rarr;</a>
    </article>
    <article class="card">
        <p class="eyebrow">Project</p>
        <h3>About this demo</h3>
        <p>Learn how this database-free CodeIgniter application is structured.</p>
        <a class="card-link" href="<?= esc(site_url('about'), 'attr') ?>">Read about it &rarr;</a>
    </article>
</section>
<?= $this->endSection() ?>
