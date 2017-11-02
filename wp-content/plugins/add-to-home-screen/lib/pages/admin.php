<div class="wrap">
  <h1><?php _e('Add to Home Screen', 'add-to-homescreen'); ?></h1>
  <form method="post" action="options.php" enctype="multipart/form-data">
    <?php settings_fields(self::$options_group); ?>
    <?php do_settings_sections(self::$options_page_id); ?>
    <?php submit_button(__('Save Changes', 'add-to-homescreen'), 'primary'); ?>
  </form>
</div>
