<?php
  /**
  * Customi18n extension - adds custom i18n strings as a cleanly packed plugin
  *
  * For more info see https://github.com/martinseener/mediawiki-customi18n
  *
  * @file
  * @ingroup Extensions
  * @author Martin Seener
  * @copyright © 2015 Martin Seener
  * @license MIT License - http://opensource.org/licenses/MIT
  */

  if (!defined('MEDIAWIKI')) {
    echo("This file is an extension for the MediaWiki software and cannot be used standalone.\n");
    die(1);
  }

  if (version_compare($wgVersion, '1.19.0', '<')) {
    die("This version of Customi18n has been tested with MediaWiki 1.19.0 or higher\n");
  }

  $wgExtensionCredits['specialpage'][] = array(
    'path'            => __FILE__,
    'name'            => 'Customi18n',
    'author'          => 'Martin Seener',
    'url'             => 'https://github.com/martinseener/mediawiki-customi18n',
    'descriptionmsg'  => 'customi18n-desc',
    'version'         => '1.0.0',
  );

  # Internationalization
  $dir = dirname( __FILE__ ) . '/';
  $wgExtensionMessagesFiles['Customi18n'] = $dir . 'Customi18n.i18n.php';
?>