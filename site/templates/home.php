<?php snippet('header') ?>
<?php
$directionNext = @$flip ? 'left'  : 'right';
?>
  <div class = 'mainStory'>
    <?php if($image = $page->image()): ?>
      <img src="<?php echo $image->url('') ?>" alt="<?php echo html($image->title()) ?>">
    <?php endif?>
  </div>
    <div class= "mainStoryTitle">
       <h1> <?= $page->intro()->kirbytext() ?> </h1>
    </div>

<div class = 'aside'>
  <?php if($image = $page->image('side.jpg')): ?>
    <img class="sideImg" src="<?php echo $image->url('side.jpg') ?>" alt="<?php echo html($image->title('side')) ?>">
  <?php endif?>
  <h3> TRENDING</h3>

  <h2><?= $page->text()->kirbytext() ?></h2>

  <p><?= $page->aside()->kirbytext() ?></p>
  <div class = "youthLink" <?php $directionNext = @$flip ? 'left'  : 'right'; if($page->hasNextVisible()) ?>

    <nav class="pagination <?= !@$flip ?: ' flip' ?> wrap cf"> <?php if($page->hasNextVisible()): ?>

      <a class="pagination-item <?= $directionNext ?>" href="<?= $page->nextVisible()->url() ?>" rel="next" title="<?= $page->nextVisible()->title()->html() ?>">
      Read More...
      </a>
    <?php endif ?>
    </nav>
  </div>
</div>


<?php snippet('footer') ?>
