<section id="page" class="container">
  <section id="masthead">
    <?php if ($logo): ?>
    <a class="logo navbar-btn pull-left" href="<?php print $front_page; ?>
      " title="
      <?php print t('Home'); ?>
      ">
      <img src="<?php print $logo; ?>
      " alt="
      <?php print t('Home'); ?>" /></a>
    <?php endif; ?>

    <?php if (!empty($site_name)): ?>
    <a class="name navbar-brand" href="<?php print $front_page; ?>
      " title="
      <?php print t('Home'); ?>
      ">
      <?php print $site_name; ?></a>
    <?php endif; ?>
    <?php if (!empty($site_slogan)): ?>
    <p class="lead">
      <?php print $site_slogan; ?></p>
    <?php endif; ?></section>

  <header id="navbar" role="banner " class="navbar-inverse <?php print $navbar_classes; ?>
    ">
    <div class="navbar-header">

      <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
      <div class="navbar-collapse collapse">
        <nav role="navigation">
          <?php if (!empty($primary_nav)): ?>
          <?php print render($primary_nav); ?>
          <?php endif; ?>
          <?php if (!empty($page['navigation'])): ?>
          <?php print render($page['navigation']); ?>
          <?php endif; ?></nav>
      </div>
      <?php endif; ?></div>


  </header>
  <div class="bgbody">
    <div class="main-container container">

      <div class="row">

        <?php if (!empty($page['sidebar_first'])): ?>
        <aside class="col-sm-2" role="complementary">
          <?php print render($page['sidebar_first']); ?></aside>
        <!-- /#sidebar-first -->
        <?php endif; ?>

        <section class="col-sm-8 <?php print $content_column_class;?>">
          <?php print render($page['header']); ?>
          <?php if (!empty($breadcrumb)): print $breadcrumb; endif;?>
          <?php if (!empty($page['highlighted'])): ?>
          <div class="highlighted hero-unit">
            <?php print render($page['highlighted']); ?></div>
          <?php endif; ?>

          <a id="main-content"></a>
          <?php print render($title_prefix); ?>
          <?php if (!empty($title)): ?>
          <h1 class="page-header">
            <?php print $title; ?></h1>
          <?php endif; ?>
          <?php print render($title_suffix); ?>
          <?php print $messages; ?>
          <?php if (!empty($tabs)): ?>
          <?php print render($tabs); ?>
          <?php endif; ?>
          <?php if (!empty($page['help'])): ?>
          <?php print render($page['help']); ?>
          <?php endif; ?>
          <?php if (!empty($action_links)): ?>
          <ul class="action-links">
            <?php print render($action_links); ?></ul>
          <?php endif; ?>
          <?php print render($page['content']); ?>
        </section>

        <?php if (!empty($page['sidebar_second'])): ?>
        <aside class="col-sm-2" role="complementary">
          <?php print render($page['sidebar_second']); ?></aside>
        <!-- /#sidebar-second -->
        <?php endif; ?></div>
    </div>
  </div>
  <section class="prefooter">
    <?php print render($page['prefooter']); ?></section>
  <footer class="footer container">
    <?php print render($page['footer']); ?></footer>
</section>