<?php
/**
* The left sidebar.
*
* @package wp-tp
*/



if (is_active_sidebar('sidebar-left')) {
  ?>
  <div id="sidebar-left" class="col-md-2">
    <?php do_action('before_sidebar'); ?>
    <?php dynamic_sidebar('sidebar-left'); ?> 
  </div>
  <?php
}
