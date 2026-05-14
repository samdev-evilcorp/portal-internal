<?php
$page_title = 'E Corp · A Global Trust In Progress';
$active_nav = 'home';
include __DIR__ . '/partials/header.php';
?>

<section class="shell">
  <div class="hero">
    <div class="hero__copy">
      <span class="eyebrow">A Global Trust · Since 1944</span>
      <h1 class="display">
        <span class="muted">Evil</span> Corp.<br>
        <span class="red">Your Data.</span><br>
        Our Promise.
      </h1>
      <p class="hero__term">$ connect e-corp.internal.portal — ok</p>
      <p class="hero__sub">
        The world's largest conglomerate — financial services, secure data storage,
        consumer credit, and cybersecurity, all under one roof. Sign in to your
        employee dashboard. Stay productive. Stay loyal.
      </p>
      <div class="btn-row">
        <a class="btn primary" href="/login.php">Access Portal →</a>
        <a class="btn secondary" href="/about.php">Learn More</a>
      </div>
    </div>
    <div class="hero__art">
      <img src="/assets/img/hero.jpg" alt="">
      <div class="hero__art-tag">
        <span><span class="red">●</span> LIVE</span>
        <span>NYC · 24/7</span>
      </div>
    </div>
  </div>
</section>

<section class="shell">
  <div class="stats">
    <div class="stat">
      <div class="stat__num">847M</div>
      <div class="stat__label">Customers Served</div>
    </div>
    <div class="stat">
      <div class="stat__num">52K</div>
      <div class="stat__label">Employees Worldwide</div>
    </div>
    <div class="stat">
      <div class="stat__num">99.99<span class="sm">%</span></div>
      <div class="stat__label">Uptime · Steel Mountain</div>
    </div>
    <div class="stat">
      <div class="stat__num">0</div>
      <div class="stat__label">Active Breaches Reported</div>
    </div>
  </div>
</section>

<section class="shell">
  <div class="divider">From <span class="red">the Newsroom</span></div>
  <div class="grid cols-3">
    <article class="card">
      <img class="card__img" src="/assets/img/news-wallpaper.jpg" alt="">
      <div class="card__meta">Newsroom · <span class="red">19 Nov 2015</span></div>
      <h3 class="card-heading">Five/Nine Recovery Reaches 100%</h3>
      <p>The Board confirms that all consumer credit databases have been restored to pre-incident operational status. AllSafe leads forensics.</p>
      <p style="margin-top: 1rem;"><a class="btn ghost" href="/news.php">Read more →</a></p>
    </article>
    <article class="card">
      <img class="card__img" src="/assets/img/news-13.jpg" alt="">
      <div class="card__meta">Operations · <span class="red">14 Nov 2015</span></div>
      <h3 class="card-heading">Steel Mountain Tier IV Recertification</h3>
      <p>Our flagship facility passes its biennial audit. Steel Mountain now hosts 73 exabytes of customer financial records.</p>
      <p style="margin-top: 1rem;"><a class="btn ghost" href="/news.php">Read more →</a></p>
    </article>
    <article class="card">
      <img class="card__img" src="/assets/img/news-14.jpg" alt="">
      <div class="card__meta">Bulletin · <span class="red">09 Nov 2015</span></div>
      <h3 class="card-heading">AllSafe Adds Mobley to AppSec Team</h3>
      <p>Sunil "Mobley" Markesh joins our AppSec rotation. Welcome to the Family. Loyalty above all.</p>
      <p style="margin-top: 1rem;"><a class="btn ghost" href="/posts.php">Read more →</a></p>
    </article>
  </div>
</section>

<section class="shell">
  <div class="divider">System <span class="red">Status</span></div>
  <div class="status-board">
    <div class="status-board__head">
      <span>Operations Board</span>
      <span>last refresh · <?= date('H:i:s') ?></span>
    </div>
    <div class="status-board__row">
      <span class="status-board__service">consumer.credit.ledger</span>
      <span class="status-board__time">99.99%</span>
      <span class="status-board__state up"><span class="dot"></span>operational</span>
    </div>
    <div class="status-board__row">
      <span class="status-board__service">steel-mountain.replication.us-east</span>
      <span class="status-board__time">99.7%</span>
      <span class="status-board__state warn"><span class="dot"></span>elevated lag</span>
    </div>
    <div class="status-board__row">
      <span class="status-board__service">coney-island.backup.archive</span>
      <span class="status-board__time">—</span>
      <span class="status-board__state down"><span class="dot"></span>anomaly detected</span>
    </div>
    <div class="status-board__row">
      <span class="status-board__service">allsafe.monitoring.edge</span>
      <span class="status-board__time">99.98%</span>
      <span class="status-board__state up"><span class="dot"></span>operational</span>
    </div>
  </div>
  <p style="text-align: center; margin-top: 1.25rem;">
    <a class="btn ghost" href="/status.php">Open full status board →</a>
  </p>
</section>

<?php include __DIR__ . '/partials/footer.php'; ?>
