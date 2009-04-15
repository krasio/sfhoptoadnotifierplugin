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
    $r = $event->getSubject();

    echo '<xmp>';
    var_dump($r);
    exit;
  }
}