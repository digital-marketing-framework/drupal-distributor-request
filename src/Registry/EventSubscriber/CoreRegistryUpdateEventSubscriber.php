<?php

namespace Drupal\dmf_distributor_request\Registry\EventSubscriber;

use DigitalMarketingFramework\Distributor\Request\DistributorRequestInitialization;
use Drupal\dmf_core\Registry\EventSubscriber\AbstractCoreRegistryUpdateEventSubscriber;

/**
 * Event subscriber for core registry updates.
 */
class CoreRegistryUpdateEventSubscriber extends AbstractCoreRegistryUpdateEventSubscriber {

  /**
   * Constructs a CoreRegistryUpdateEventSubscriber object.
   */
  public function __construct() {
    parent::__construct(new DistributorRequestInitialization('dmf_distributor_request'));
  }

}