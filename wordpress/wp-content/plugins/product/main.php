<?php
/*
Plugin Name: Custom Post Type with  woocommerce 
Description: Admin panel for creating custom post types and custom taxonomies and small woo-coomerce functionality
Author: Sourabh Godha
Version: 1.0
*/

defined( 'ABSPATH' ) OR exit;
include("inc.php");
if(!class_exists('customposttype')):
class customposttype
{
   
	public function __construct()
	{
      $this->requirefiles();		    
	}
	
   /*
   * Function to add the required files
   */
   public function requirefiles()
   {
      //include custom post, taxonomy and meta boxes files
      require_once(CPT_PLUGIN_DIR .'cspost.php');
      require_once(CPT_PLUGIN_DIR .'cs_taxonomy.php');
      require_once(CPT_PLUGIN_DIR. 'metaboxes/metabox_for_product.php');
   }

   
}//end class
endif;
if(class_exists('customposttype')) {
	$customposttype = new customposttype;	
}