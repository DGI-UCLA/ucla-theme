<?php

/**
 * Template.php for UCLA
 */

/**
 * template_preprocess_page
 */
function ucla_preprocess_page(&$variables) {
  
  global $base_url;
  

  
  // set main title link
  $variables['main_title'] = l(t('UCLA Library'), 'http://library.ucla.edu/', $options = array('attributes' => array('class' => 'main-title', 'title' => t('UCLA Library')))); 
  
  // set local site title link
  $variables['local_title'] = l(t('Digital Collections'), $base_url, $options = array('attributes' => array('class' => 'local-title', 'title' => t('Digital Collections')))); 

//  dsm($variables);
}