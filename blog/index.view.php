<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Blog</title>
  </head>
  <body>
    <header>
      <h1>My blog</h1>
    </header>
    <section>
      <?php if ( !empty($posts) ) : foreach ($posts as $post) :?>
        <article>
          <h2><?= $post['title']; ?></h2>
          <p><?= $post['body']; ?></p>
        </article>
      <?php endforeach; else : ?>
      <p>No posts found.</p>
      <?php endif; ?>
    </section>
  </body>
</html>
