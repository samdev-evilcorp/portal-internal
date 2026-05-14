<?php
$page_title = 'Directory · E Corp';
$active_nav = 'employees';
require_once __DIR__ . '/includes/db.php';
include __DIR__ . '/partials/header.php';

$rows = db()->query('SELECT username, display_name, title, email, department FROM users ORDER BY id')->fetchAll();

$color_map = ['AllSafe' => 'green', 'Executive' => 'red', 'Marketing' => 'amber', 'Contract' => 'cyan'];
?>

<section class="shell">
  <span class="eyebrow">Internal · Roster MMXV</span>
  <h1 class="display">The Directory.</h1>
  <p class="subhead">Publicly listed staff. For internal contact details, sign in to the portal. Personnel records are maintained by Human Resources, Office of Records.</p>
</section>

<section class="shell">
  <div class="chips">
    <span class="chip is-active">All Departments</span>
    <span class="chip">Executive</span>
    <span class="chip">AllSafe</span>
    <span class="chip">Marketing</span>
    <span class="chip">Contract</span>
  </div>

  <table class="data-table">
    <thead>
      <tr><th>Member</th><th>Title</th><th>Email</th><th>Department</th></tr>
    </thead>
    <tbody>
      <?php foreach ($rows as $r):
        $color = $color_map[$r['department']] ?? 'red'; ?>
        <tr>
          <td>
            <div class="emp-card">
              <span class="avatar <?= $color ?>"><?= strtoupper(substr($r['display_name'], 0, 1)) ?></span>
              <div class="emp-card__info">
                <h4><?= htmlspecialchars($r['display_name']) ?></h4>
                <div class="login"><?= htmlspecialchars($r['username']) ?></div>
              </div>
            </div>
          </td>
          <td><?= htmlspecialchars($r['title']) ?></td>
          <td><code><?= htmlspecialchars($r['email']) ?></code></td>
          <td><?= htmlspecialchars($r['department']) ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</section>

<?php include __DIR__ . '/partials/footer.php'; ?>
