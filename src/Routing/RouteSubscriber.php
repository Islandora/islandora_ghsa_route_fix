<?php

namespace Drupal\islandora_ghsa_route_fix\Routing;

use Drupal\Core\Routing\RouteSubscriberBase;
use Symfony\Component\Routing\RouteCollection;

/**
 * Alters a leaky route.
 */
class RouteSubscriber extends RouteSubscriberBase {

  /**
   * {@inheritdoc}
   */
  protected function alterRoutes(RouteCollection $collection) {
    if ($route = $collection->get('islandora.upload_children')) {
      $route->setRequirement('_custom_access', '\Drupal\islandora\Form\AddChildrenForm::access');
    }
  }

}
