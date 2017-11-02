<?php

class Offline_Shell_DB {

  private static $instance;
  const VERSION = '0.4.0';
  public static $options = array(
    // For v1 we'll prompt the user enable the plugin manually upon activation
    'offline_shell_enabled' => 0,
    // The "style.css" file is a standard WordPress file, so we can safely assume this exists
    'offline_shell_files' => array('styles.css'),
    // Create an initial SW version
    'offline_shell_version' => self::VERSION,
    // Setting debug initially will help the user understand what the SW is doing via the console
    'offline_shell_debug' => 0,
    // Whether to race cache-network or only cache
    'offline_shell_race_enabled' => 0,
  );

  public function __construct() {
    add_action('plugins_loaded', array($this, 'update'));
  }

  public static function init() {
    if (!self::$instance) {
      self::$instance = new self();
    }
    return self::$instance;
  }

  public static function on_activate() {
  }

  public static function on_deactivate() {
  }

  public static function on_uninstall() {
    foreach(self::$options as $option => $default) {
      delete_option($option);
    }
  }

  public static function update() {
    if(self::VERSION == get_option('offline_shell_version')) {
      return;
    }

    // Set defaults
    foreach(self::$options as $option => $default) {
      add_option($option, $default);
    }

    update_option('offline_shell_version', self::VERSION);
  }

}

?>
