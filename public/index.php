<?php
$title = "madisonh3 — Paul Ramirez";

$featured = [
  'title'   => 'The Mysterious Oval Portrait (Is This My Grandmother Lila?)',
  'date'    => '2026-02-20',
  'slug'    => 'mysterious-oval-lila',
  'excerpt' => "I found an unlabeled oval portrait in the archive. No name, no date—just a face that might be my grandmother. This is the start of the investigation."
];

ob_start();
?>
<section class="hero">
  <h1>madisonh3</h1>
  <p class="subhead">
    Monthly posts from a person who can’t leave mysteries alone.
    Yes, I’m a weirdo. No, I’m not stopping :-)
  </p>
</section>

<section class="card">
  <div class="kicker">Featured</div>
  <h2 class="title">
    <a href="/post.php?slug=<?= urlencode($featured['slug']) ?>">
      <?= htmlspecialchars($featured['title']) ?>
    </a>
  </h2>
  <div class="meta"><?= htmlspecialchars($featured['date']) ?></div>
  <p><?= htmlspecialchars($featured['excerpt']) ?></p>

  <div class="cta-row">
    <a class="btn" href="/post.php?slug=<?= urlencode($featured['slug']) ?>">Read the first post →</a>
  </div>

  <div class="thumbs">
    <img src="/images/photo_1.jpeg" alt="Oval portrait">
    <img src="/images/photo_3.png" alt="Signed portrait close-up">
    <img src="/images/photo_2.png" alt="Comparison photo">
  </div>
</section>

<section class="card">
  <h3>What this blog is</h3>
  <ul>
    <li>Family archive investigations (photos, letters, mysteries)</li>
    <li>Reflections on trust, institutions, and how narratives get manufactured</li>
    <li>Occasional “why am I like this?” posts</li>
  </ul>
</section>
<?php
$content = ob_get_clean();

require __DIR__ . '/template/layout.php';