<?php

helper('url');

$title      = $title ?? 'Home';
$activePage = $activePage ?? '';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="A simple CodeIgniter point-of-sale demonstration.">
    <title><?= esc($title) ?> | CounterFlow POS</title>
    <style>
        :root {
            --ink: #17211c;
            --muted: #68736d;
            --paper: #f5f7f3;
            --surface: #ffffff;
            --line: #dfe5df;
            --brand: #176b4b;
            --brand-dark: #0d4d35;
            --brand-soft: #e6f3ec;
            --amber: #d88b20;
            --shadow: 0 18px 50px rgba(23, 33, 28, 0.08);
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            color: var(--ink);
            background:
                radial-gradient(circle at 10% 0%, rgba(23, 107, 75, 0.09), transparent 28rem),
                var(--paper);
            font-family: Inter, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
            line-height: 1.6;
        }

        a {
            color: inherit;
        }

        .topbar {
            position: sticky;
            top: 0;
            z-index: 10;
            border-bottom: 1px solid rgba(223, 229, 223, 0.9);
            background: rgba(255, 255, 255, 0.92);
            backdrop-filter: blur(14px);
        }

        .nav-wrap,
        .shell,
        .footer-wrap {
            width: min(1120px, calc(100% - 2rem));
            margin-inline: auto;
        }

        .nav-wrap {
            min-height: 72px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 1.5rem;
        }

        .brand {
            display: inline-flex;
            align-items: center;
            gap: 0.7rem;
            font-weight: 800;
            letter-spacing: -0.03em;
            text-decoration: none;
        }

        .brand-mark {
            width: 36px;
            height: 36px;
            display: grid;
            place-items: center;
            border-radius: 11px;
            color: #fff;
            background: var(--brand);
            box-shadow: 0 8px 20px rgba(23, 107, 75, 0.24);
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 0.35rem;
            flex-wrap: wrap;
        }

        .nav-link {
            padding: 0.55rem 0.85rem;
            border-radius: 9px;
            color: #53605a;
            font-size: 0.92rem;
            font-weight: 650;
            text-decoration: none;
        }

        .nav-link:hover,
        .nav-link.active {
            color: var(--brand-dark);
            background: var(--brand-soft);
        }

        .shell {
            min-height: calc(100vh - 145px);
            padding-block: 3.5rem 4.5rem;
        }

        .eyebrow {
            margin: 0 0 0.5rem;
            color: var(--brand);
            font-size: 0.76rem;
            font-weight: 800;
            letter-spacing: 0.12em;
            text-transform: uppercase;
        }

        h1,
        h2,
        h3,
        p {
            margin-top: 0;
        }

        h1 {
            max-width: 780px;
            margin-bottom: 1rem;
            font-size: clamp(2.35rem, 6vw, 4.8rem);
            line-height: 1.03;
            letter-spacing: -0.055em;
        }

        h2 {
            margin-bottom: 0.65rem;
            font-size: clamp(1.55rem, 3vw, 2.15rem);
            line-height: 1.15;
            letter-spacing: -0.035em;
        }

        h3 {
            margin-bottom: 0.35rem;
            font-size: 1.05rem;
        }

        .lead {
            max-width: 650px;
            color: var(--muted);
            font-size: 1.08rem;
        }

        .hero {
            padding: clamp(2rem, 6vw, 4.5rem);
            overflow: hidden;
            position: relative;
            border: 1px solid var(--line);
            border-radius: 28px;
            background: var(--surface);
            box-shadow: var(--shadow);
        }

        .hero::after {
            content: "";
            width: 260px;
            height: 260px;
            position: absolute;
            right: -80px;
            bottom: -110px;
            border: 45px solid var(--brand-soft);
            border-radius: 50%;
        }

        .actions {
            margin-top: 1.7rem;
            display: flex;
            gap: 0.75rem;
            flex-wrap: wrap;
        }

        .button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 44px;
            padding: 0.65rem 1rem;
            border: 1px solid var(--brand);
            border-radius: 11px;
            color: #fff;
            background: var(--brand);
            font-weight: 750;
            text-decoration: none;
        }

        .button:hover {
            background: var(--brand-dark);
        }

        .button.secondary {
            color: var(--brand-dark);
            background: #fff;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1rem;
            margin-top: 1.2rem;
        }

        .card {
            padding: 1.35rem;
            border: 1px solid var(--line);
            border-radius: 17px;
            background: var(--surface);
            box-shadow: 0 10px 30px rgba(23, 33, 28, 0.04);
        }

        .card p {
            margin-bottom: 0;
            color: var(--muted);
            font-size: 0.94rem;
        }

        .card-link {
            display: inline-block;
            margin-top: 1rem;
            color: var(--brand);
            font-size: 0.9rem;
            font-weight: 750;
            text-decoration: none;
        }

        .page-heading {
            margin-bottom: 2rem;
        }

        .page-heading h1 {
            margin-bottom: 0.55rem;
            font-size: clamp(2.2rem, 5vw, 3.7rem);
        }

        .panel {
            border: 1px solid var(--line);
            border-radius: 20px;
            overflow: hidden;
            background: var(--surface);
            box-shadow: var(--shadow);
        }

        .panel-head {
            padding: 1.2rem 1.35rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 1rem;
            border-bottom: 1px solid var(--line);
        }

        .panel-head h2 {
            margin: 0;
            font-size: 1.15rem;
        }

        .record-count {
            padding: 0.3rem 0.65rem;
            border-radius: 999px;
            color: var(--brand-dark);
            background: var(--brand-soft);
            font-size: 0.78rem;
            font-weight: 800;
        }

        .table-wrap {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            white-space: nowrap;
        }

        th,
        td {
            padding: 1rem 1.35rem;
            border-bottom: 1px solid #edf0ed;
            text-align: left;
        }

        th {
            color: var(--muted);
            background: #fafbf9;
            font-size: 0.75rem;
            letter-spacing: 0.07em;
            text-transform: uppercase;
        }

        tbody tr:last-child td {
            border-bottom: 0;
        }

        tbody tr:hover {
            background: #fafcf9;
        }

        .primary-cell {
            font-weight: 750;
        }

        .secondary-cell {
            color: var(--muted);
        }

        .badge {
            display: inline-flex;
            padding: 0.27rem 0.62rem;
            border-radius: 999px;
            font-size: 0.76rem;
            font-weight: 800;
        }

        .badge.active {
            color: #13613f;
            background: #e1f5e9;
        }

        .badge.pending {
            color: #84500d;
            background: #fff0d5;
        }

        .badge.inactive {
            color: #6f7471;
            background: #ecefed;
        }

        .about-grid {
            display: grid;
            grid-template-columns: 1.2fr 0.8fr;
            gap: 1rem;
        }

        .about-copy,
        .about-list {
            padding: clamp(1.5rem, 4vw, 2.4rem);
            border: 1px solid var(--line);
            border-radius: 20px;
            background: var(--surface);
        }

        .about-copy p,
        .about-list li {
            color: var(--muted);
        }

        .about-list ul {
            margin: 1rem 0 0;
            padding-left: 1.2rem;
        }

        .about-list li + li {
            margin-top: 0.65rem;
        }

        footer {
            border-top: 1px solid var(--line);
            color: var(--muted);
            background: #fff;
        }

        .footer-wrap {
            min-height: 72px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 1rem;
            font-size: 0.84rem;
        }

        .demo-pill {
            color: var(--brand-dark);
            font-weight: 700;
        }

        @media (max-width: 760px) {
            .nav-wrap {
                padding-block: 0.8rem;
                align-items: flex-start;
                flex-direction: column;
            }

            .nav-links {
                width: 100%;
                overflow-x: auto;
                flex-wrap: nowrap;
            }

            .nav-link {
                flex: 0 0 auto;
            }

            .shell {
                padding-block: 2rem 3rem;
            }

            .grid,
            .about-grid {
                grid-template-columns: 1fr;
            }

            .hero::after {
                display: none;
            }

            .footer-wrap {
                padding-block: 1rem;
                align-items: flex-start;
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
<header class="topbar">
    <div class="nav-wrap">
        <a class="brand" href="<?= esc(site_url(), 'attr') ?>">
            <span class="brand-mark">CF</span>
            <span>CounterFlow POS</span>
        </a>

        <nav class="nav-links" aria-label="Main navigation">
            <a class="nav-link <?= $activePage === 'home' ? 'active' : '' ?>" href="<?= esc(site_url(), 'attr') ?>" <?= $activePage === 'home' ? 'aria-current="page"' : '' ?>>Home</a>
            <a class="nav-link <?= $activePage === 'about' ? 'active' : '' ?>" href="<?= esc(site_url('about'), 'attr') ?>" <?= $activePage === 'about' ? 'aria-current="page"' : '' ?>>About</a>
            <a class="nav-link <?= $activePage === 'customers' ? 'active' : '' ?>" href="<?= esc(site_url('customers'), 'attr') ?>" <?= $activePage === 'customers' ? 'aria-current="page"' : '' ?>>Customers</a>
            <a class="nav-link <?= $activePage === 'users' ? 'active' : '' ?>" href="<?= esc(site_url('users'), 'attr') ?>" <?= $activePage === 'users' ? 'aria-current="page"' : '' ?>>Users</a>
        </nav>
    </div>
</header>

<main class="shell">
    <?= $this->renderSection('content') ?>
</main>

<footer>
    <div class="footer-wrap">
        <span>&copy; <?= date('Y') ?> CounterFlow POS</span>
        <span class="demo-pill">Demo mode &middot; Static PHP data</span>
    </div>
</footer>
</body>
</html>
