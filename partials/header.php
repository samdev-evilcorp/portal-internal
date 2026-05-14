<?php
require_once __DIR__ . '/../includes/auth.php';
$viewer = current_user();
$page_title = $page_title ?? 'E Corp · Internal Portal';
$active_nav = $active_nav ?? '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($page_title) ?></title>
  <link rel="stylesheet" href="/assets/css/style.css">
  <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32'><rect width='32' height='32' fill='%23cc0000'/><text x='16' y='25' font-family='Impact,sans-serif' font-size='28' fill='white' text-anchor='middle' style='letter-spacing:-2px'>E</text></svg>">
  <!--
       ████  ▓████  ▓███████   ▓████  ▓██████ ▓██████ ████  ████ ▓███████ ██████
      ██  ██ ██     ██     ██ ██  ██ ██    ██   ██     ████████     ██     ██  ██
      ▓██████ ▓████  ▓██████  ▓██████ ▓██    ██   ██     ██████      ██     ██  ██
      ██  ██     ██ ██   ██  ██  ██ ██   ▓██   ██      ████       ██     ██  ██
      ██  ██  ▓████ ██    ██ ██  ██ ▓██████ ▓██████ ██   ██   ██████  ██  ██
                  Hello, friend.  Are you a 1 or a 0?
  -->
</head>
<body>
<div class="grain" aria-hidden="true"></div>
<div class="vignette" aria-hidden="true"></div>

<header class="topbar">
  <div class="topbar__inner">
    <a class="brand" href="/">
      <span class="brand__mark glitch"></span>
      <span>
        <span class="brand__name">E Corp</span>
        <span class="brand__tag">Internal Staff Portal · MMXV</span>
      </span>
    </a>
    <nav class="nav">
      <a class="nav__link <?= $active_nav === 'news'      ? 'is-active' : '' ?>" href="/news.php">News</a>
      <a class="nav__link <?= $active_nav === 'posts'     ? 'is-active' : '' ?>" href="/posts.php">Bulletin</a>
      <a class="nav__link <?= $active_nav === 'employees' ? 'is-active' : '' ?>" href="/employees.php">Directory</a>
      <a class="nav__link <?= $active_nav === 'status'    ? 'is-active' : '' ?>" href="/status.php">Status</a>
      <a class="nav__link <?= $active_nav === 'about'     ? 'is-active' : '' ?>" href="/about.php">About</a>
      <?php if ($viewer): ?>
        <a class="nav__link <?= $active_nav === 'dashboard' ? 'is-active' : '' ?>" href="/dashboard.php">Dashboard</a>
        <?php if (($viewer['role'] ?? '') === 'admin'): ?>
          <a class="nav__link <?= $active_nav === 'admin' ? 'is-active' : '' ?>" href="/admin/">Admin</a>
        <?php endif; ?>
        <span class="nav__user">
          <span class="v"><?= htmlspecialchars($viewer['sub']) ?></span> ·
          <span class="r <?= $viewer['role'] === 'admin' ? 'admin' : '' ?>"><?= htmlspecialchars($viewer['role']) ?></span>
        </span>
        <a class="nav__link" href="/logout.php">Sign Out</a>
      <?php else: ?>
        <a class="nav__cta" href="/login.php">Sign In</a>
      <?php endif; ?>
    </nav>
  </div>
</header>

<main class="main">
