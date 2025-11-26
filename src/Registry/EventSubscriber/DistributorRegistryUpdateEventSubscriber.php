<?php

namespace Drupal\dmf_distributor_request\Registry\EventSubscriber;

use DigitalMarketingFramework\Distributor\Request\DistributorRequestInitialization;
use Drupal\dmf_distributor_core\Registry\EventSubscriber\AbstractDistributorRegistryUpdateEventSubscriber;

/**
 * Event subscriber for distributor registry updates.
 */
class DistributorRegistryUpdateEventSubscriber extends AbstractDistributorRegistryUpdateEventSubscriber {

  /**
   * Constructs a DistributorRegistryUpdateEventSubscriber object.
   */
  public function __construct() {
    parent::__construct(new DistributorRequestInitialization('dmf_distributor_request'));
  }

}