<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title><?= htmlspecialchars($title ?? 'madisonh3') ?></title>
  <link rel="stylesheet" href="/assets/style.css" />
</head>
<body>
  <div class="wrap">
    <nav class="topnav">
      <a class="brand" href="/">madisonh3</a>
      <div class="navlinks">
        <a href="/post.php?slug=mysterious-oval-lila">First post</a>
      </div>
    </nav>

    <?= $content ?? '' ?>

    <footer class="footer">
      <small>© <?= date('Y') ?> Paul Ramirez — paul.madisonh3.com</small>
    </footer>
  </div>
</body>
</html>