<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<header class="page-heading">
    <p class="eyebrow">About the project</p>
    <h1>A focused CodeIgniter POS demo.</h1>
    <p class="lead">
        This application demonstrates controller-to-view data flow, routing, reusable
        layouts, and PHP array iteration without requiring a database.
    </p>
</header>

<section class="about-grid">
    <article class="about-copy">
        <h2>Built for clarity</h2>
        <p>
            CounterFlow keeps the example intentionally small. The landing and About
            pages are handled by the Pages controller, while Customers and Users each
            have a dedicated controller and account view.
        </p>
        <p>
            Account records currently live in static PHP arrays. That makes the project
            easy to run locally while leaving a clear path for replacing the arrays with
            models and database queries later.
        </p>
    </article>

    <aside class="about-list">
        <p class="eyebrow">Included</p>
        <h3>Project highlights</h3>
        <ul>
            <li>Four clean, named application routes</li>
            <li>Shared responsive navigation and layout</li>
            <li>Five customer account records</li>
            <li>Five POS user account records</li>
            <li>No database setup required</li>
        </ul>
    </aside>
</section>
<?= $this->endSection() ?>
