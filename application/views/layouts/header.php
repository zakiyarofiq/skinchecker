<?php $currentUrl = uri_string(); ?>
<!-- ======= Header ======= -->
<header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center">

        <h1 class="logo me-auto"><a href="<?= base_url('') ?>">SKIN CHECKER</a></h1>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto<?php if ($currentUrl == '') echo ' active'; ?>" href="<?= base_url('') ?>">Home</a></li>
                <li><a class="nav-link scrollto<?php if ($currentUrl == 'early-detection') echo ' active'; ?>" href="<?= base_url('early-detection') ?>">Early Detection</a></li>
                <li><a class="nav-link scrollto<?php if ($currentUrl == 'about') echo ' active'; ?>" href="<?= base_url('about') ?>">About Us</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->