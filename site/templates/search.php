<?php snippet('header') ?>
<forum class = "searchbar">

  <input type="search" value="<?php echo esc($query) ?>">
  <input type="submit" value="Search">
</forum>
<ul>
  <?php foreach($results as $result): ?>
  <li>
    <a class= "results" href="<?php echo $result->url() ?>">
      <?php echo $result->title()->html() ?>
    </a>
  </li>
  <?php endforeach ?>
</ul>

<?php snippet('footer') ?>
