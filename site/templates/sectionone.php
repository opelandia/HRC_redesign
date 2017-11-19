<?php snippet('header') ?>
<div class = 'mainImgOne'>
<?php if($image = $page->image()): ?>
  <img src="<?php echo $image->url() ?>" alt="<?php echo html($image->title()) ?>">
<?php endif?>

</div>

<div class ='title'>
  <h1> <?= $page->title()->kirbytext() ?></h1>
</div>
  <div class = 'contentOne'>
    <?= $page->text()->kirbytext() ?> 
  </div>

<div class ="sideOne">
  <h2><?= $page->aside()->kirbytext() ?></h2>
</div>


<?php snippet('footer') ?>
