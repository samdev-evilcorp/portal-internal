<?php
$page_title = '404 · Not in the Ledger';
http_response_code(404);
include __DIR__ . '/partials/header.php';
?>

<section class="shell notfound">
  <div class="notfound__code glitch" data-text="404">404</div>
  <h2 class="section-heading" style="margin-top: 1.5rem;">Not in the Ledger.</h2>
  <p class="subhead" style="margin: 1.5rem auto;">
    The resource you requested doesn't exist, has been moved, or was never
    written down. The system has logged this attempt.
  </p>
  <p style="margin-top: 2rem;">
    <a class="btn primary" href="/">Return to Portal</a>
    <a class="btn secondary" href="/status.php">Check Status</a>
  </p>

  <div class="terminal" style="margin-top: 3rem; text-align: left; max-width: 560px; margin-left: auto; margin-right: auto;">
    <div><span class="prompt">$</span> tail /var/log/portal/404.log</div>
    <div class="dim">[<?= date('Y-m-d H:i:s') ?>] 404 · path: <?= htmlspecialchars($_SERVER['REQUEST_URI'] ?? '/') ?></div>
    <div class="dim">[<?= date('Y-m-d H:i:s') ?>] hello, friend.</div>
  </div>
</section>

<?php include __DIR__ . '/partials/footer.php'; ?>
