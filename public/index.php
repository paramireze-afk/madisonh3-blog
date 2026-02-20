<?php
$title = "madisonh3 — Paul Ramirez";

/**
 * Add posts here (manual list for now).
 * Slug must match: /posts/{slug}.php
 */
$posts = [
  [
    'title'   => 'The Mysterious Oval Portrait (Is This My Grandmother Lila?)',
    'date'    => '2026-02-20',
    'slug'    => 'mysterious-oval-lila',
    'excerpt' => "I found an unlabeled oval portrait in the archive. No name, no date—just a face that might be my grandmother. This is the start of the investigation."
  ],
  [
    'title'   => 'Imaging Overreads — Almost Live',
    'date'    => '2026-03-20',
    'slug'    => 'imaging-overreads-going-live',
    'excerpt' => "After many months of building and refactoring, Imaging Overreads is nearly ready to go live, pending final approval from Dr. Biswal."
  ],
];

/**
 * Choose which post is featured (pick one slug).
 */
$featured_slug = 'mysterious-oval-lila';

/**
 * Find featured post from the list
 */
$featured = null;
foreach ($posts as $p) {
  if ($p['slug'] === $featured_slug) {
    $featured = $p;
    break;
  }
}
if (!$featured) {
  $featured = $posts[0]; // fallback
}

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
    <a class="btn" href="/post.php?slug=<?= urlencode($featured['slug']) ?>">Read the featured post →</a>
  </div>

  <!-- NOTE: your server is currently serving /public as a URL path, so images must use /public/images/... -->
  <div class="thumbs">
    <img src="/images/photo_1.jpeg" alt="Oval portrait">
    <img src="/images/photo_3.png" alt="Signed portrait close-up">
    <img src="/images/photo_2.png" alt="Comparison photo">
  </div>
</section>

<section class="card">
  <h3>Recent posts</h3>

  <ul style="margin: 0; padding-left: 1.2rem;">
    <?php foreach ($posts as $p): ?>
      <li style="margin: 0.75rem 0;">
        <div class="meta" style="margin-bottom: 0.15rem;">
          <?= htmlspecialchars($p['date']) ?>
        </div>

        <div>
          <a href="/post.php?slug=<?= urlencode($p['slug']) ?>">
            <?= htmlspecialchars($p['title']) ?>
          </a>
        </div>

        <div style="opacity: 0.85; margin-top: 0.25rem;">
          <?= htmlspecialchars($p['excerpt']) ?>
        </div>
      </li>
    <?php endforeach; ?>
  </ul>
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