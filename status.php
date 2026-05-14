<?php
$page_title = 'System Status · E Corp';
$active_nav = 'status';
include __DIR__ . '/partials/header.php';

$services = [
  ['name' => 'auth.identity.us-east',           'state' => 'up',   'uptime' => '99.99%'],
  ['name' => 'auth.identity.eu-west',           'state' => 'up',   'uptime' => '99.98%'],
  ['name' => 'consumer.credit.ledger',          'state' => 'up',   'uptime' => '99.99%'],
  ['name' => 'consumer.credit.write-replica',   'state' => 'up',   'uptime' => '99.95%'],
  ['name' => 'payments.processing.realtime',    'state' => 'up',   'uptime' => '99.97%'],
  ['name' => 'steel-mountain.cold-storage',     'state' => 'up',   'uptime' => '100.0%'],
  ['name' => 'steel-mountain.replication.us-w', 'state' => 'warn', 'uptime' => '99.7%'],
  ['name' => 'coney-island.backup.archive',     'state' => 'down', 'uptime' => '—'],
  ['name' => 'allsafe.monitoring.edge',         'state' => 'up',   'uptime' => '99.98%'],
  ['name' => 'allsafe.appsec.scanner',          'state' => 'up',   'uptime' => '99.91%'],
  ['name' => 'staff-portal.frontend',           'state' => 'up',   'uptime' => '99.99%'],
  ['name' => 'staff-portal.api',                'state' => 'up',   'uptime' => '99.99%'],
  ['name' => 'archive.legacy.cgi',              'state' => 'warn', 'uptime' => '94.2%'],
];
?>

<section class="shell">
  <span class="eyebrow">Live · auto-refresh disabled</span>
  <h1 class="display">SYSTEM STATUS.</h1>
  <p class="subhead">Real-time operational status of E Corp internal services. Failures and elevated lag are reported to AllSafe within 60 seconds of detection.</p>
</section>

<section class="shell">
  <div class="status-board">
    <div class="status-board__head">
      <span>OPERATIONS BOARD · <?= date('Y-m-d H:i:s T') ?></span>
      <span style="font-size: 0.8rem; color: var(--whisper);">refresh: manual</span>
    </div>
    <?php foreach ($services as $s): ?>
      <div class="status-board__row">
        <span class="status-board__service"><?= htmlspecialchars($s['name']) ?></span>
        <span class="status-board__time"><?= htmlspecialchars($s['uptime']) ?></span>
        <span class="status-board__state <?= $s['state'] ?>"><span class="dot"></span>
          <?= $s['state'] === 'up' ? 'operational' : ($s['state'] === 'warn' ? 'elevated' : 'anomaly') ?>
        </span>
      </div>
    <?php endforeach; ?>
  </div>
</section>

<div class="ascii-divider">RECENT EVENTS</div>

<section class="shell">
  <div class="log">
    <div><span class="time">[<?= date('H:i:s') ?>]</span> <span class="who">allsafe-edge</span> <span class="what">heartbeat OK · 412 sources · 0 anomalies</span></div>
    <div><span class="time">[<?= date('H:i:s', time()-37) ?>]</span> <span class="who">archive-legacy-cgi</span> <span class="warn">degraded: latency p95 = 1.4s (threshold 1.0s)</span></div>
    <div><span class="time">[<?= date('H:i:s', time()-94) ?>]</span> <span class="who">steel-mountain</span> <span class="warn">replication lag us-east → us-west: 87s</span></div>
    <div><span class="time">[<?= date('H:i:s', time()-301) ?>]</span> <span class="who">coney-island</span> <span class="err">connection refused · backup target unreachable</span></div>
    <div><span class="time">[<?= date('H:i:s', time()-410) ?>]</span> <span class="who">staff-portal-api</span> <span class="what">deploy v2.7.4 · OK</span></div>
    <div><span class="time">[<?= date('H:i:s', time()-590) ?>]</span> <span class="who">auth-identity</span> <span class="what">key rotation scheduled · pending review</span></div>
  </div>
</section>

<?php include __DIR__ . '/partials/footer.php'; ?>
