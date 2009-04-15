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
    $this->checkDependencies();

    $this->dispatcher->connect(
      'application.throw_exception',
      array('sfHoptoadNotifier', 'listenToApplicationThrowExceptionEvent')
    );
  }

  private function checkDependencies()
  {
    /*$plugins = $this->configuration->getPlugins();

    if (!in_array('sfPropelPlugin', $plugins))
    {
      throw new sfConfigurationException('sfRestfulAuthenticationPlugin requires sfPropelPlugin. Enable sfPropelPlugin in sfProjectConfiguration.class.php');
    }*/
  }
}
