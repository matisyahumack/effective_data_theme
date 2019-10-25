<?php

/**
 * @file
 * Default theme implementation to display the basic html structure of a single
 * Drupal page.
 *
 * Variables:
 * - $css: An array of CSS files for the current page.
 * - $language: (object) The language the site is being displayed in.
 *   $language->language contains its textual representation.
 *   $language->dir contains the language direction. It will either be 'ltr' or 'rtl'.
 * - $rdf_namespaces: All the RDF namespace prefixes used in the HTML document.
 * - $grddl_profile: A GRDDL profile allowing agents to extract the RDF data.
 * - $head_title: A modified version of the page title, for use in the TITLE
 *   tag.
 * - $head_title_array: (array) An associative array containing the string parts
 *   that were used to generate the $head_title variable, already prepared to be
 *   output as TITLE tag. The key/value pairs may contain one or more of the
 *   following, depending on conditions:
 *   - title: The title of the current page, if any.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site, if any, and if there is no title.
 * - $head: Markup for the HEAD section (including meta tags, keyword tags, and
 *   so on).
 * - $styles: Style tags necessary to import all CSS files for the page.
 * - $scripts: Script tags necessary to load the JavaScript files and settings
 *   for the page.
 * - $page_top: Initial markup from any modules that have altered the
 *   page. This variable should always be output first, before all other dynamic
 *   content.
 * - $page: The rendered page content.
 * - $page_bottom: Final closing markup from any modules that have altered the
 *   page. This variable should always be output last, after all other dynamic
 *   content.
 * - $classes String of classes that can be used to style contextually through
 *   CSS.
 *
 * @see template_preprocess()
 * @see template_preprocess_html()
 * @see template_process()
 */
?>
<!DOCTYPE html>
<!-- Sorry no IE7 support! -->
<!-- @see http://foundation.zurb.com/docs/index.html#basicHTMLMarkup -->

<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
<script>
  function dynamic_persistent_menu_reset() {
  dpms = Drupal.settings.dynamic_persistent_menu;
  // Hide menu's only if the mouse is not over one of the submenus
  // and if we are waiting to process a click on one of the links
  if (!dpms.overStatus && !dpms.clicked) {
    jQuery('#' + dynamic_persistent_menu_get_sub_menu(dpms.overMenu[dpms.settings_id])).hide();
    jQuery('#' + dpms.overMenu[dpms.settings_id]).removeClass('dynamic-persistent-menu-children-active');
    dpms.overMenu[dpms.settings_id] = 'dynamic-persistent-menu-menu' + dpms.menus[dpms.settings_id]['default'];
    jQuery('#' + dynamic_persistent_menu_get_sub_menu(dpms.overMenu[dpms.settings_id])).show();
  }
}
</script>
<?php print $head; ?>
<title><?php print $head_title; ?></title>
<?php print $styles; ?><?php print $scripts; ?>
<!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
<div class="skip-link"> <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a> </div>
<?php print $page_top; ?> <?php print $page; ?> <?php print $page_bottom; ?> <?php print _zurb_foundation_add_reveals(); ?> 

<!-- Google Code for Remarketing Tag -->
<!--------------------------------------------------
Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. See more information and instructions on how to setup the tag on: http://google.com/ads/remarketingsetup
--------------------------------------------------->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1071955720;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/1071955720/?value=0&amp;guid=ON&amp;script=0"/>
</div>
</noscript>

<!-- Begin Mongoose Metrics Tracking Code -->
<script type="text/javascript">
window.do_mongoose = true;

(function() {

  function getParameterByName(name) {
      var match = RegExp('[?&]' + name + '=([^&]*)').exec(window.location.search);
      return match && decodeURIComponent(match[1].replace(/\+/g, ' '));
  }

  if(getParameterByName('sncid') == 0) {
    window.do_mongoose = false;
  }
  
})();

if(do_mongoose) {
  var mm_c = 'f4c05828ff7743b02fb83906a973acf8';
  var mm_protocol = (("https:" == document.location.protocol) ? "https://" : "http://");
  document.write(unescape("%3Cscript src='" + mm_protocol + "www.mongoosemetrics.com/jsfiles/js-correlation/mm-getvar.js' type='text/javascript'%3E%3C/script%3E"));

  /* Custom Parameters */
  /* MANDATORY default_number Setup Parameter DO NOT REMOVE */
  var default_number='8663840944'; /* 10 Digits Only i.e. 8881234567 */
  var overwrite_default_number = 'N';

  /////////////////////////////////////
  //  Mongoose added 08/27/2012
  /////////////////////////////////////
  var enable_organic_encrypted = true;
  var enable_affiliate_tracking = true;
}
</script>
<script type="text/javascript">
if(do_mongoose) {
  /* Custom Parameters */
  document.write(unescape("%3Cscript src='" + mm_protocol + "www.mongoosemetrics.com/jsfiles/js-correlation/mm-control.php%3F" + mm_variables + "' type='text/javascript'%3E%3C/script%3E"));
}
</script>
<!-- End Mongoose Metrics Tracking Code -->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-3201365-1', 'auto');
  ga('send', 'pageview');

</script>

<!-- marpro scirpt -->
    <script>
  (function(w,pk){var s=w.createElement('script');s.type='text/javascript';s.async=true;s.src='//pumpkin.contentlead.com/pumpkin.js';var f=w.getElementsByTagName('script')[0];f.parentNode.insertBefore(s,f);if(!pk.__S){window._pk=pk;pk.__S = 1.1;}pk.host='conversion.contentlead.com';pk.clientId='16001320';})(document,window._pk||[])
</script>
<script>
    (function ($, Drupal, window, document, undefined) {
      $(document).foundation();
    })(jQuery, Drupal, this, this.document);
  </script> 
<script type="text/javascript" async="async" defer="defer" data-cfasync="false" src="https://mylivechat.com/chatinline.aspx?hccid=65173379"></script>

<script type="text/javascript" src="http://www.ape78cn2.com/js/118598.js" ></script>
<noscript><img alt="" src="http://www.ape78cn2.com/118598.png" style="display:none;" /></noscript>

</body>
</html>