<?php

class sfHoptoadNotifier
{
  /**
    * Listens to the routing.load_configuration event.
    *
    * @param sfEvent An sfEvent instance
    */
  static public function listenToApplicationThrowExceptionEvent(sfEvent $event)
  {
    $apiKey = sfConfig::get('app_sf_hoptoad_notifier_plugin_api_key', false);

    if ($apiKey)
    {
      if (!defined('HOPTOAD_API_KEY'))
      {
        define('HOPTOAD_API_KEY', $apiKey);
      }

      $r = $event->getSubject();

      Hoptoad::exceptionHandler($r);
    }
  }
}