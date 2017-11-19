<?php snippet('header') ?>
<div class = 'mainImg'>
<?php if($image = $page->image()): ?>
  <img src="<?php echo $image->url() ?>" alt="<?php echo html($image->title()) ?>">
<?php endif?>

</div>

<div class ='areaTwo'>
  <h1> <?= $page->title()->kirbytext() ?></h1>
</div>
  <div class = 'contentTwo'>
<h2> <?= $page->intro()->kirbytext() ?> </h2>
  </div>

<div class ="sideTwo">
  <h2><?= $page->text()->kirbytext() ?></h2>
</div>


<?php snippet('footer') ?>
