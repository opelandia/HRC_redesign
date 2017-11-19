<div class= "logoEnd">

  <?php if( $site->sitealtlogo()->isNotEmpty()): ?>
    <a href="/"><img class = "footerLogo" src="<?= $site->sitealtlogo()->toFile()->url() ?>"></a>
  <?php endif ?>
</div>

</html>
