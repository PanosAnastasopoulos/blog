<title> My Blog </title>
<link rel="stylesheet" href="/app.css" />

<body>
    <?php foreach ($posts as $post) : ?>
        <article>
            <h1>
                <a href="post/<?= $post->slug ?>">
                    <?= $post->title ?>
                </a>
            </h1>
            <?= $post->excerpt ?>
        </article>
    <?php endforeach; ?>
</body>