<?php

namespace Drupal\commerce_order\Plugin\Commerce\Condition;

use Drupal\commerce\Plugin\Commerce\Condition\EntityBundleBase;

/**
 * Provides the type condition for orders.
 *
 * @CommerceCondition(
 *   id = "order_type",
 *   label = @Translation("Type"),
 *   display_label = @Translation("Limit by type"),
 *   category = @Translation("Order"),
 *   entity_type = "commerce_order",
 * )
 */
class OrderType extends EntityBundleBase {}
