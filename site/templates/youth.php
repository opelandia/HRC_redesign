<?php snippet('header') ?>

<div class = "leftSideYouth">
<?php if($image = $page->image()): ?>
  <img class= 'youthSplashImg' src="<?php echo $image->url() ?>" alt="<?php echo html($image->title()) ?>">
<?php endif?>
  <div class ='title'>
    <h1> <?= $page->title()->kirbytext() ?></h1>
  </div>
  <div class="quote">
    <?= $page->intro()->kirbytext() ?>
  </div>
</div>
<div class="actionTitle">
  <?= $page->titletwo()->kirbytext() ?>
</div>
<div class ='callToAction'>
 <?= $page->text()->kirbytext() ?>
</div>

  <div class = "youthIntroHeader">
    <?= $page->titlethree()->kirbytext() ?>
  </div>

<div class ="youthIntro">
  <?= $page->texttwo()->kirbytext() ?>
</div>

<div class="meth">
  <?= $page->textthree()->kirbytext() ?>
</div>

  <?php snippet('showcase') ?>

<?php snippet('footer') ?>
