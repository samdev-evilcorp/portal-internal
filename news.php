<?php
$page_title = 'News · E Corp';
$active_nav = 'news';
include __DIR__ . '/partials/header.php';

$news = [
  ['date' => '2015-11-19', 'cat' => 'Bulletin',  'title' => 'Five/Nine Recovery Reaches 100%', 'body' => 'The Board confirms full restoration of consumer credit databases following the September incident. AllSafe Cybersecurity led the forensic recovery effort over a 71-day operational window. Customer-facing services have been fully restored.', 'img' => '/assets/img/news-wallpaper.jpg'],
  ['date' => '2015-11-17', 'cat' => 'Operations','title' => 'Steel Mountain Recertified · Tier IV', 'body' => 'Our flagship secure data facility has passed its biennial Uptime Institute audit. Steel Mountain now stores 73 exabytes of customer financial records across redundant cold and warm tiers.', 'img' => '/assets/img/news-13.jpg'],
  ['date' => '2015-11-14', 'cat' => 'Newsroom',  'title' => 'AllSafe Expands AppSec Team', 'body' => 'Sunil Markesh joins the AppSec rotation. The team continues monitoring of internal applications 24/7 from the Manhattan office. Loyalty above all.', 'img' => '/assets/img/news-14.jpg'],
  ['date' => '2015-11-09', 'cat' => 'Compliance','title' => 'FBI Inquiry · Closed Without Findings', 'body' => 'The federal inquiry initiated in late September related to alleged unauthorised access has been closed. No further action required. We thank the Bureau for their cooperation.', 'img' => '/assets/img/news-15.jpg'],
  ['date' => '2015-10-28', 'cat' => 'Notice',    'title' => 'Acceptable Use Policy · Effective Immediately', 'body' => 'Reminder to all staff: corporate devices are monitored. Personal use of internal endpoints is logged. By order of the Board.', 'img' => '/assets/img/news-walpaper.jpg'],
  ['date' => '2015-10-12', 'cat' => 'Newsroom',  'title' => 'Tyrell Wellick · Promoted to Acting CTO', 'body' => 'Effective immediately, Tyrell Wellick assumes the role of Acting Chief Technology Officer. Mr. Wellick brings over a decade of executive experience.', 'img' => '/assets/img/hero.jpg'],
];
?>

<section class="shell">
  <span class="eyebrow">Newsroom · Internal</span>
  <h1 class="display">The Newsdesk.</h1>
  <p class="subhead">Company announcements, security bulletins, and personnel updates. Curated by the Office of Communications.</p>
</section>

<section class="shell">
  <div class="chips">
    <span class="chip is-active">All</span>
    <span class="chip">Bulletin</span>
    <span class="chip">Operations</span>
    <span class="chip">Newsroom</span>
    <span class="chip">Compliance</span>
    <span class="chip">Notice</span>
  </div>

  <div class="grid cols-3">
    <?php foreach ($news as $n): ?>
      <article class="card">
        <img class="card__img" src="<?= htmlspecialchars($n['img']) ?>" alt="">
        <div class="card__meta"><?= $n['cat'] ?> · <?= date('d M Y', strtotime($n['date'])) ?></div>
        <h3 class="card-heading"><?= htmlspecialchars($n['title']) ?></h3>
        <p><?= htmlspecialchars($n['body']) ?></p>
      </article>
    <?php endforeach; ?>
  </div>
</section>

<?php include __DIR__ . '/partials/footer.php'; ?>
