<?php

/**
 * Implements template_preprocess_html().
 *
 */
//function effective_data_preprocess_html(&$variables) {
//  // Add conditional CSS for IE. To use uncomment below and add IE css file
//  drupal_add_css(path_to_theme() . '/css/ie.css', array('weight' => CSS_THEME, 'browsers' => array('!IE' => FALSE), 'preprocess' => FALSE));
//
//  // Need legacy support for IE downgrade to Foundation 2 or use JS file below
//  // drupal_add_js('http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE7.js', 'external');
//}

/**
 * Implements template_preprocess_page
 *
 */
//function effective_data_preprocess_page(&$variables) {
//}

/**
 * Implements template_preprocess_node
 *
 */
//function effective_data_preprocess_node(&$variables) {
//}

/**
 * Implements hook_preprocess_block()
 */
//function effective_data_preprocess_block(&$variables) {
//  // Add wrapping div with global class to all block content sections.
//  $variables['content_attributes_array']['class'][] = 'block-content';
//
//  // Convenience variable for classes based on block ID
//  $block_id = $variables['block']->module . '-' . $variables['block']->delta;
//
//  // Add classes based on a specific block
//  switch ($block_id) {
//    // System Navigation block
//    case 'system-navigation':
//      // Custom class for entire block
//      $variables['classes_array'][] = 'system-nav';
//      // Custom class for block title
//      $variables['title_attributes_array']['class'][] = 'system-nav-title';
//      // Wrapping div with custom class for block content
//      $variables['content_attributes_array']['class'] = 'system-nav-content';
//      break;
//
//    // User Login block
//    case 'user-login':
//      // Hide title
//      $variables['title_attributes_array']['class'][] = 'element-invisible';
//      break;
//
//    // Example of adding Foundation classes
//    case 'block-foo': // Target the block ID
//      // Set grid column or mobile classes or anything else you want.
//      $variables['classes_array'][] = 'six columns';
//      break;
//  }
//
//  // Add template suggestions for blocks from specific modules.
//  switch($variables['elements']['#block']->module) {
//    case 'menu':
//      $variables['theme_hook_suggestions'][] = 'block__nav';
//    break;
//  }
//}

//function effective_data_preprocess_views_view(&$variables) {
//}

/**
 * Implements template_preprocess_panels_pane().
 *
 */
//function effective_data_preprocess_panels_pane(&$variables) {
//}

/**
 * Implements template_preprocess_views_views_fields().
 *
 */
//function effective_data_preprocess_views_view_fields(&$variables) {
//}

/**
 * Implements theme_form_element_label()
 * Use foundation tooltips
 */
//function effective_data_form_element_label($variables) {
//  if (!empty($variables['element']['#title'])) {
//    $variables['element']['#title'] = '<span class="secondary label">' . $variables['element']['#title'] . '</span>';
//  }
//  if (!empty($variables['element']['#description'])) {
//    $variables['element']['#description'] = ' <span data-tooltip="top" class="has-tip tip-top" data-width="250" title="' . $variables['element']['#description'] . '">' . t('More information?') . '</span>';
//  }
//  return theme_form_element_label($variables);
//}

/**
 * Implements hook_preprocess_button().
 */
//function effective_data_preprocess_button(&$variables) {
//  $variables['element']['#attributes']['class'][] = 'button';
//  if (isset($variables['element']['#parents'][0]) && $variables['element']['#parents'][0] == 'submit') {
//    $variables['element']['#attributes']['class'][] = 'secondary';
//  }
//}

/**
 * Implements hook_form_alter()
 * Example of using foundation sexy buttons
 */
//function effective_data_form_alter(&$form, &$form_state, $form_id) {
//  // Sexy submit buttons
//  if (!empty($form['actions']) && !empty($form['actions']['submit'])) {
//    $form['actions']['submit']['#attributes'] = array('class' => array('primary', 'button', 'radius'));
//  }
//}

// Sexy preview buttons
//function effective_data_form_comment_form_alter(&$form, &$form_state) {
//  $form['actions']['preview']['#attributes']['class'][] = array('class' => array('secondary', 'button', 'radius'));
//}


/**
 * Implements template_preprocess_panels_pane().
 */
// function zurb_foundation_preprocess_panels_pane(&$variables) {
// }

/**
* Implements template_preprocess_views_views_fields().
*/
/* Delete me to enable
function THEMENAME_preprocess_views_view_fields(&$variables) {
 if ($variables['view']->name == 'nodequeue_1') {

   // Check if we have both an image and a summary
   if (isset($variables['fields']['field_image'])) {

     // If a combined field has been created, unset it and just show image
     if (isset($variables['fields']['nothing'])) {
       unset($variables['fields']['nothing']);
     }

   } elseif (isset($variables['fields']['title'])) {
     unset ($variables['fields']['title']);
   }

   // Always unset the separate summary if set
   if (isset($variables['fields']['field_summary'])) {
     unset($variables['fields']['field_summary']);
   }
 }
}

// */

/**
 * Implements hook_css_alter().
 */
//function effective_data_css_alter(&$css) {
//  // Always remove base theme CSS.
//  $theme_path = drupal_get_path('theme', 'zurb_foundation');
//
//  foreach($css as $path => $values) {
//    if(strpos($path, $theme_path) === 0) {
//      unset($css[$path]);
//    }
//  }
//}

/**
 * Implements hook_js_alter().
 */
//function effective_data_js_alter(&$js) {
//  // Always remove base theme JS.
//  $theme_path = drupal_get_path('theme', 'zurb_foundation');
//
//  foreach($js as $path => $values) {
//    if(strpos($path, $theme_path) === 0) {
//      unset($js[$path]);
//    }
//  }
//}
function effective_data_preprocess_page(&$vars){
  // Make the field "field_stage_images" of content type "page" 
  // available as variable to use in page.tpl.php
  $vars['sub_header_1'] = '';
  // Get the object and do some other checks based on what you need.
  if (($node = menu_get_object()) && $node->type) {
    // Generate a render array for the node.
    $view = node_view($node);
    // "Create" a new variable for the page.tpl.php.
    // This will expose $VAR_NAME in the page template.
    // You will most likely have to clear your cache.
    $vars['sub_header_1'] = drupal_render($view['field_sub_title_line_1']);
  }
	$vars['sub_header_2'] = '';
  // Get the object and do some other checks based on what you need.
  if (($node = menu_get_object()) && $node->type) {
    // Generate a render array for the node.
    $view = node_view($node);
    // "Create" a new variable for the page.tpl.php.
    // This will expose $VAR_NAME in the page template.
    // You will most likely have to clear your cache.
    $vars['sub_header_2'] = drupal_render($view['field_sub_title_line_2']);
  }
}
function effective_data_links__topbar_main_menu($variables) {
  // We need to fetch the links ourselves because we need the entire tree.
  $links = menu_tree_output(menu_tree_all_data(variable_get('menu_main_links_source', 'main-menu')));
  $output = _zurb_foundation_links($links);
  $variables['attributes']['class'][] = 'right';

  return '<ul' . drupal_attributes($variables['attributes']) . '>' . $output . '</ul>';
}
function _effective_data_links($links) {
  $output = '';

  foreach (element_children($links) as $key) {
    $output .= _zurb_foundation_render_link($links[$key]);
  }

  return $output;
}
function effective_data_dynamic_persistent_menu($args) {
  $id = $args['id'];
  $menu_name = $args['menu'];
  $mlid = $args['parent'];
  $timeout = $args['timeout'];
  $submenu = '';

  global $language;
  static $settings;

  if (!isset($settings)) {
    $settings = array(
      "menus" => array()
    );
    $settings_js = drupal_json_encode($settings);
    // #D7UP Why do we need that drupal_add_js call?
    //drupal_add_js("DynamicPersistentMenu =  $settings_js;", array('type' => 'inline', 'scope' => JS_DEFAULT));
  }
  $item_class = "dynamic-persistent-menu-menu-item";
  $sub_item_class = "dynamic-persistent-menu-sub-menu-item";

  // Find menu item in the menu tree

  $tree = dynamic_persistent_menu_tree_page_data($menu_name, $mlid);

  // Pull out just the menu items we are going to render so that we
  // get an accurate count for the first/last classes.

  foreach ($tree as $data) {
    if (!$data['link']['hidden']) {
      $menu_tree[] = $data;
    }
  }

  $menu_link = menu_link_load($mlid);

  // Don't display anything if the selected menu has no children
  if (!isset($menu_tree) || !$menu_tree) {
    return;
  }

  // Build the menus
  $output = '<ul id="dynamic-persistent-menu-' . $id . '" style="display:block" class="dynamic-persistent-menu-menu">';

  $num_items = count($menu_tree);
  $k = 0;

  foreach ($menu_tree as $menu_item) {
    $link = $menu_item['link'];
    if ($link['hidden'] == 0 && (empty($link['options']['langcode']) || $link['options']['langcode'] == $language->language)) {
      if ($link['has_children']) {
        if ($link['in_active_trail']) {
          $display = 'block';
          $over_menu_default = $link['mlid'];
        }
        else {
          $display = 'none';
        }
      }

      if ($k == 0) {
        $extra_class = 'first';
      }
      if ($k == $num_items - 1) {
        $extra_class = 'last';
      }

      $output .= theme('dynamic_persistent_menu_menu_item', array('link' => $link, 'extra_class' => 'dynamic-persistent-menu-menu-item ' . $extra_class, 'id' => 'dynamic-persistent-menu-menu' . $link['mlid']));
      $extra_class = '';

      if ($menu_item['link']['has_children'] && is_array($menu_item['below'])) {
        $submenu_items ='';

        $num_sub_items = 0;
        foreach ($menu_item['below'] as $submenu_item) {
          if ($submenu_item['link']['hidden'] == 0) {
            $num_sub_items++;
          }
        }
        $i = 0;

        foreach ($menu_item['below'] as $submenu_item) {
          $link2 = $submenu_item['link'];
          if ($link2['hidden'] == 0) {
            if ($i == 0) {
              $extra_class = 'first';
            }
            if ($i == $num_sub_items - 1) {
              $extra_class = 'last';
            }
            $submenu_items .= theme('dynamic_persistent_menu_menu_item', array('link' => $link2, 'extra_class' => 'dynamic-persistent-menu-sub-menu-item ' . $extra_class, 'id' => 'dynamic-persistent-menu-sub-menu-item' . $link2['mlid']));
            $i++;
          }
          $extra_class = '';
        }

        if ($submenu_items !='') {
					
          $submenu .= '<div class="ed-sub-menu"> <ul class="dynamic-persistent-menu-sub-menu" id="dynamic-persistent-menu-sub-menu' . $link['mlid'] . '" style="display:' . $display . '">';
          $submenu .= $submenu_items;
          $submenu .= '</ul> </div>';
        }
      }
    }
    $k++;
  }
  $output .= '</ul>';
  $output .= $submenu;
  $menu = array(
    'default' => isset($over_menu_default) ? $over_menu_default : NULL,
    'over' => isset($over_menu_default) ? $over_menu_default : NULL,
    'timeout' => $timeout,
  );
  drupal_add_js(array("dynamic_persistent_menu" => array("menus" => array($id => $menu))), 'setting');
  drupal_add_js(drupal_get_path('module', 'dynamic_persistent_menu') . '/dynamic_persistent_menu.js');
  return $output;
}
