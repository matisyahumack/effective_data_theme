<!--.page -->

<div role="document" class="page"> 
  
  <!--.l-header region -->
  <header role="banner" class="l-header ">
    <nav class="top-bar"<?php print $top_bar_options; ?>>
      <ul class="title-area">
        <li class="name">
          <h1><?php print $linked_site_name; ?></h1>
        </li>
        <li class="toggle-topbar menu-icon show-for-small"><a href="#"><span><?php print $top_bar_menu_text; ?></span></a></li>
      </ul>
      <section class="top-bar-section show-for-small">
        <?php if ($top_bar_secondary_menu) :?>
        <?php print $top_bar_secondary_menu; ?>
        <?php endif; ?>
      </section>
    </nav>
    <div class="ed-header-wrapper">
      <?php if ($top_bar): ?>
      <!--.top-bar -->
      <?php if ($top_bar_classes): ?>
      <div class="<?php print $top_bar_classes; ?>">
        <?php endif; ?>
        <div class="large-12 row ed-header">
          <div class="the-logo large-4 columns small-12"> <?php print $linked_logo; ?> </div>
          <div class="large-8 left small-12">
            <div class="large-12 columns">
              <ul class="menu-name-menu-red-menu hide-for-small">
                <li><a  href="tel:(877)825-5233">877.825.5233</a></li>
                <li><a  href="/careers">CAREERS</a></li>
                <li><a  href="/ongoing-support">SUPPORT</a></li>
                <li><a  href="/contact">CONTACT</a></li>
                <li><a  href="http://portal.effective-data.com/" target="blank">LOGIN</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="large-12 left main-nav-desk">
          <section class="top-bar-section">
            <?php if (!empty($page['blue_menu'])): ?>
            <div class="large-12 small-12 left"><?php print render($page['blue_menu']); ?></div>
            <?php endif; ?>
          </section>
        </div>
        <?php if ($top_bar_classes): ?>
      </div>
      <?php endif; ?>
      <!--/.top-bar -->
      <?php endif; ?>
    </div>
    <!-- Title, slogan and menu --> 
    
  </header>
  <div class="show-for-small mobile-phone"><a  href="tel:(877)825-5233">877.825.5233</a> <a href="http://portal.effective-data.com/" target="blank" class="right">Log In</a></div>
  <!--/.l-header -->
  <?php if (!empty($page['sub_nav'])): ?>
  <div class="partition">
    <div class="ed-sub-nav"> <?php print render($page['sub_nav']); ?> </div>
    <?php endif; ?>
  </div>
  <?php if (!empty($page['featured'])): ?>
  <!--/.featured -->
  <section class="l-featured row">
    <div class="large-12 columns"> <?php print render($page['featured']); ?> </div>
  </section>
  <!--/.l-featured -->
  <?php endif; ?>
  <?php if ($messages && !$zurb_foundation_messages_modal): ?>
  <!--/.l-messages -->
  <section class="l-messages row">
    <div class="large-12 columns">
      <?php if ($messages): print $messages; endif; ?>
    </div>
  </section>
  <!--/.l-messages -->
  <?php endif; ?>
  <?php if (!empty($page['help'])): ?>
  <!--/.l-help -->
  <section class="l-help row">
    <div class="large-12 columns"> <?php print render($page['help']); ?> </div>
  </section>
  <!--/.l-help -->
  <?php endif; ?>
  <?php if ($title && !$is_front): ?>
  <div class="h1-bg"> <?php print render($title_prefix); ?>
    <h1 id="page-title" class="title main"><span>CASE STUDIES</span></h1>
    <?php print render($title_suffix); ?>
    <?php endif; ?>
  </div>
  <?php if ($sub_header_1 & $sub_header_2): ?>
  <div class="sub-headers"> <?php print $sub_header_1; ?> <?php print $sub_header_2; ?> </div>
  <?php endif; ?>
  <main role="main" class="row l-main page-row">
    <div class="<?php print $main_grid; ?> main columns">
      <?php if (!empty($page['highlighted'])): ?>
      <div class="highlight panel callout"> <?php print render($page['highlighted']); ?> </div>
      <?php endif; ?>
      <a id="main-content"></a>
      <?php if (!empty($tabs)): ?>
      <?php print render($tabs); ?>
      <?php if (!empty($tabs2)): print render($tabs2); endif; ?>
      <?php endif; ?>
      <?php if ($action_links): ?>
      <ul class="action-links">
        <?php print render($action_links); ?>
      </ul>
      <?php endif; ?>
      <?php print render($page['content']); ?> </div>
    <!--/.main region -->
    
    <?php if (!empty($page['sidebar_first'])): ?>
    <aside role="complementary" class="<?php print $sidebar_first_grid; ?> sidebar-first columns sidebar"> <?php print render($page['sidebar_first']); ?> </aside>
    <?php endif; ?>
    <?php if (!empty($page['sidebar_second'])): ?>
    <aside role="complementary" class="<?php print $sidebar_sec_grid; ?> sidebar-second columns sidebar"> <?php print render($page['sidebar_second']); ?> </aside>
    <?php endif; ?>
  </main>
  <!--/.main-->
  <?php if (!empty($page['fw_callouts'])): ?>
  <div class="fw-callouts"> <?php print render($page['fw_callouts']); ?> </div>
  <?php endif; ?>
  <?php if (!empty($page['triptych_first']) || !empty($page['triptych_middle']) || !empty($page['triptych_last'])): ?>
  <!--.triptych-->
  <section class="l-triptych row">
    <div class="triptych-first large-4 small-12 left"> <?php print render($page['triptych_first']); ?> </div>
    <div class="triptych-middle large-4  small-12 left"> <?php print render($page['triptych_middle']); ?> </div>
    <div class="triptych-last large-4 small-12 left"> <?php print render($page['triptych_last']); ?> </div>
  </section>
  <!--/.triptych -->
  <?php endif; ?>
  <?php if (!empty($page['footer_firstcolumn']) || !empty($page['footer_secondcolumn']) || !empty($page['footer_thirdcolumn']) || !empty($page['footer_fourthcolumn'])): ?>
  <!--.footer-columns -->
  <section class="row l-footer-columns">
    <?php if (!empty($page['footer_firstcolumn'])): ?>
    <div class="footer-first large-6 columns"> <?php print render($page['footer_firstcolumn']); ?> </div>
    <?php endif; ?>
    <?php if (!empty($page['footer_secondcolumn'])): ?>
    <div class="footer-second large-6 columns"> <?php print render($page['footer_secondcolumn']); ?> </div>
    <?php endif; ?>
  </section>
  <!--/.footer-columns-->
  <?php endif; ?>
  <?php if (!empty($page['email_signup'])): ?>
  <div class="large-12 left small-12 email-signup"> <?php print render($page['email_signup']); ?> </div>
  <?php endif; ?>
  <!--.l-footer-->
  <footer class="l-footer  row" role="contentinfo">
    <?php if (!empty($page['footer'])): ?>
    <div class="footer large-12 columns"> <?php print render($page['footer']); ?>
      <div class="copyright large-12 columns"> &copy; <?php print date('Y') . '  ' . t('Effective Data. All rights reserved.'); ?> | <a href="/sitemap">Sitemap</a> | <a href="/privacy-policy">Privacy Policy</a> | <a href="/terms-of-use">Terms of use</a> </div>
    </div>
    <?php endif; ?>
  </footer>
  <!--/.footer-->
  
  <?php if ($messages && $zurb_foundation_messages_modal): print $messages; endif; ?>
</div>
<!--/.page --> 
