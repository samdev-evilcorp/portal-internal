<?php
$page_title = 'Staff Bulletin · E Corp';
$active_nav = 'posts';
require_once __DIR__ . '/includes/posts.php';
include __DIR__ . '/partials/header.php';
?>

<section class="shell">
  <span class="eyebrow">Internal · Bulletin</span>
  <h1 class="display">Staff Posts.</h1>
  <p class="subhead">Bulletin board for E Corp internal staff. Topics include operations, integration milestones, and informal company communications.</p>
</section>

<section class="shell">
  <?php foreach ($POSTS as $p): ?>
    <article class="post">
      <div class="post__meta">
        <span>· <?= strtoupper($p['cat']) ?></span>
        <span class="by">@<?= htmlspecialchars($p['author']) ?></span>
        <span>· <?= date('d M Y · H:i', strtotime($p['date'])) ?></span>
        <span>· <?= count($p['comments']) ?> COMMENTS</span>
      </div>
      <h2 class="post__title"><a href="/post.php?id=<?= $p['id'] ?>"><?= htmlspecialchars($p['title']) ?></a></h2>
      <div class="post__body"><p><?= htmlspecialchars($p['summary']) ?></p></div>
      <p style="margin-top:1rem"><a class="btn ghost" href="/post.php?id=<?= $p['id'] ?>">Open thread →</a></p>
    </article>
  <?php endforeach; ?>
</section>

<?php include __DIR__ . '/partials/footer.php'; ?>
