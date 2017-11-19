<div class ='resourceNav'>

<?php $projects = page('youth')->children()->visible(); ?>

<ul class="showcase">

  <?php foreach($projects as $project): ?>

    <li class="showcase-item">
        <a href="<?= $project->url() ?>" class="showcase-link">
          <?php if($image = $project->images()->sortBy('sort', 'asc')->first()): $thumb = $image->crop(400, 200); ?>
            <img src="<?= $thumb->url() ?>"
            alt="Thumbnail for <?= $project->title()->html() ?>" class="showcase-image" />
          <?php endif ?>
          <div class="showcase-caption">
            <h3 class="showcase-title"><?= $project->title()->html() ?></h3>
          </div>
        </a>
    </li>

  <?php endforeach ?>

</ul>

</div>
