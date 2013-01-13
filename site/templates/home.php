<?php snippet('header') ?>
<?php snippet('menu') ?>
<?php snippet('submenu') ?>

<section class="content">

  <article>
    <h1><?php echo html($page->title()) ?></h1>
    <span><?php echo kirbytext($page->text()) ?></span>
  </article>

</section>

<?php snippet('footer') ?>