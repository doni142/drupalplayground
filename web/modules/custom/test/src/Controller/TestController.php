<?php

namespace Drupal\test\Controller;

use Drupal\Core\Controller\ControllerBase;
use PhpParser\Node\Stmt\Echo_;

class TestController extends ControllerBase
{
    public function Test()
    {
        return ['#markup' => 'Test'];
    }
}