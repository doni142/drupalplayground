<?php

namespace Drupal\helloworld\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * @Block(
 *   id = "helloword",
 *   admin_label = @Translation("Say Hello"),
 *   category = @Translation("Block")
 * ) 
 */
class Helloblock extends BlockBase
{
    public function build()
    {
        return ['#markup' => 'HELLO'];
    }
}