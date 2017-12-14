<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
  <meta name="description" content="<?= $site->description()->html() ?>">

  <?= css('assets/css/main.css') ?>
</head>

<body>

  <div class ="navBar">
    <div class="logoContainer">
      <?php if( $site->sitelogo()->isNotEmpty()): ?>
        <a href="/"><img class = "logo-full" src="<?= $site->sitelogo()->toFile()->url() ?>"></a>
      <?php endif ?>
      </div>

    <div class = 'navigationMain'>
        <p>Explore ▾</p>
        <p>HRC Issues</p>
        <p>Local Issues</p>
        <p>Support the HRC</p>
        <p>Blog ▾</p>
        <p>Resist</p>
    </div>

    <div class = "navBarEnd">
      <div class = 'shop'>
          <p>Shop</p>
      </div>
      <div class = 'donate'>
          <p>Donate</p>
      </div>
      <div class = 'finder'>
      <a href="https://hrcredesign.herokuapp.com/search">
        🔍

        </a>

      </div>
    </div>
  </div>
