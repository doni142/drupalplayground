<?php

namespace Drupal\helloworld\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * @Block(
 *   id = "helloword_wednesday",
 *   admin_label = @Translation("Wednesday"),
 *   category = @Translation("Block")
 * ) 
 */

class Wednesdayblock extends BlockBase
{
    public function build()
    {
        return ['#markup' => 'WEDNESDAY'];
    }
}