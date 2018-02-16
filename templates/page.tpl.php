<?php global $base_url; ?>

 <header class="header">
  <div class="container">
    <div class="row">
      <div class="col-3 branding">
        <a href="<?php print $front_page;?>">
          <img class="logo" src="<?php print $base_url?>/<?php print $directory;?>/logo.png" alt="<?php print $site_name;?>" />
        </a>
      </div>
      <div class="col-9 text-right pull-right">
        <?php if ($main_menu): ?>
            <?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'main-menu'))); ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</header>

<?php if (!empty($page['banner_area'])): ?>
    <div class="front-banner text-center">
        <?php print render($page['banner_area']); ?>
    </div>
<?php endif; ?>

<?php if (!empty($page['content_top'])): ?>
  <div class="content-top">
    <div class="container">
      <div class="row">
        <?php print render($page['content_top']); ?>
      </div>
    </div>
  </div>
<?php endif; ?>

<div class="action-tabs">
  <div class="container">
      <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
      <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
      <?php print render($messages); ?>
  </div> 
</div>

<div id="wrapper" class="inner-pages">
  <div id="content">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <?php print render($title_prefix); ?>
          <?php if ($title): ?><h1 class="page-title"><?php print $title; ?></h1><?php endif; ?>
          <?php print render($title_suffix); ?>
          <?php print render($page['content']); ?>
        </div>
    </div>
  </div>
  </div> 
</div>

<?php if (!empty($page['content_bottom'])): ?>
  <div class="content-bottom">
    <div class="container">
      <div class="row">
        <?php print render($page['content_bottom']); ?>
      </div>
    </div>
  </div>
<?php endif; ?>

<?php if (!empty($page['content_last'])): ?>
  <div class="content-last">
    <div class="container">
      <div class="row">
        <?php print render($page['content_last']); ?>
      </div>
    </div>
  </div>
<?php endif; ?>

<div id="footer" class="footer text-center">
    <div class="container">
        <!-- social links -->
        <?php if (!empty($page['footer_upper'])): ?>
          <div class="social-links">
              <?php print render($page['footer_upper']); ?>
          </div>
        <?php endif; ?>
        <hr>
        <!-- copyright area -->
        <div class="copyright-text text-center">
          <?php print render($page['footer']); ?>
        </div>
    </div>
</div>