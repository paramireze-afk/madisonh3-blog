<?php
$slug = $_GET['slug'] ?? '';

if (!preg_match('/^[a-z0-9-]+$/', $slug)) {
  http_response_code(400);
  echo "Bad slug.";
  exit;
}

$postFile = __DIR__ . '/../posts/' . $slug . '.php';

if (!file_exists($postFile)) {
  http_response_code(404);
  echo "Post not found.";
  exit;
}

require $postFile; // expects $post = ['title' =>..., 'date' =>..., 'html' =>...]
$title = $post['title'] ?? 'Post';

ob_start();
?>
<article class="post">
  <h1><?= htmlspecialchars($post['title']) ?></h1>
  <div class="meta"><?= htmlspecialchars($post['date']) ?></div>
  <?= $post['html'] ?>
</article>
<?php
$content = ob_get_clean();

require __DIR__ . '/template/layout.php';