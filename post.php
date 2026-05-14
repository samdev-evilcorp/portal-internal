<?php
$page_title = 'Bulletin Thread · E Corp';
$active_nav = 'posts';
require_once __DIR__ . '/includes/posts.php';
$id = max(1, (int)($_GET['id'] ?? 1));
$p = $POSTS[$id - 1] ?? null;
if (!$p) { header('Location: /posts.php'); exit; }
include __DIR__ . '/partials/header.php';
?>

<section class="shell" style="max-width: 820px;">
  <p><a href="/posts.php" style="color: var(--whisper); font-size: 0.8rem; letter-spacing: 0.18em; text-transform: uppercase;">← All Posts</a></p>

  <article class="post" style="padding: 2.5rem;">
    <div class="post__meta">
      <span>· <?= strtoupper($p['cat']) ?></span>
      <span class="by">@<?= htmlspecialchars($p['author']) ?></span>
      <span>· <?= date('d M Y · H:i', strtotime($p['date'])) ?></span>
    </div>
    <h1 class="post__title" style="font-size: 2.5rem;"><?= htmlspecialchars($p['title']) ?></h1>
    <div class="post__body"><?= $p['body'] ?></div>

    <div class="comments">
      <h3 class="comments__title">Thread · <?= count($p['comments']) ?> Replies</h3>
      <?php foreach ($p['comments'] as $c): ?>
        <div class="comment">
          <span class="avatar <?= $c['color'] ?>"><?= strtoupper(substr($c['by'], 0, 1)) ?></span>
          <div>
            <div class="comment__by">
              <strong>@<?= htmlspecialchars($c['by']) ?></strong>
              <span class="time"><?= htmlspecialchars($c['when']) ?></span>
            </div>
            <div class="comment__body"><?= htmlspecialchars($c['body']) ?></div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <div class="notice info" style="margin-top: 2rem;">
      Replies are disabled for staff at clearance level &lt; II. Contact your manager to request escalation.
    </div>
  </article>
</section>

<?php include __DIR__ . '/partials/footer.php'; ?>
