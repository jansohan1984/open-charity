<?php
/**
 * Implements hook_theme_registry_alter().
 *
 * Alters the theme registry to insert our preprocess function before
 * menu_tree's default preprocess function.
 */

function oc_preprocess_page(&$variables) {
    if (isset($variables['node']->type)) {
        $nodetype = $variables['node']->type;
        $variables['theme_hook_suggestions'][] = 'page__' . $nodetype;
    }
}

function oc_css_alter(&$css) {
	// Remove Drupal core css
	$exclude = array('modules/system/system.menus.css' => FALSE,);
	$css = array_diff_key($css, $exclude);
}