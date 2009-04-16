<?php

/**
 * sfHoptoadNotifierPlugin configuration.
 *
 * @package     sfHoptoadNotifierPlugin
 * @subpackage  config
 * @author      Your name here
 * @version     SVN: $Id: PluginConfiguration.class.php 12675 2008-11-06 08:07:42Z Kris.Wallsmith $
 */
class sfHoptoadNotifierPluginConfiguration extends sfPluginConfiguration
{
  /**
   * @see sfPluginConfiguration
   */
  public function initialize()
  {
  }

  public function configure()
  {
    require_once($this->getRootDir() . '/lib/Horde/Yaml.php');
    require_once($this->getRootDir() . '/lib/Horde/Yaml/Dumper.php');
    require_once($this->getRootDir() . '/lib/rich-php-hoptoad-notifier/Hoptoad.php');

    $this->dispatcher->connect(
      'application.throw_exception',
      array('sfHoptoadNotifier', 'listenToApplicationThrowExceptionEvent')
    );
  }
}
