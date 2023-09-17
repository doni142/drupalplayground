<?php

namespace Drupal\helloworld\Plugin\Filter;

use Drupal\filter\FilterProcessResult;
use Drupal\filter\Plugin\FilterBase;

/**
 * @Filter(
 *   id = "helloworld",
 *   type = Drupal\filter\Plugin\FilterInterface::TYPE_TRANSFORM_IRREVERSIBLE,
 *   title = "Esperente" 
 * )
 */
class Esperente extends FilterBase
{
    public function process($text, $langcode)
    {
        $text = strtr($text,
        [
            'a' => 'e',
            'A' => 'E',
            'fuck' => 'macska',
        ]);
        return new FilterProcessResult($text);
    }
}