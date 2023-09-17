<?php

namespace Drupal\helloworld\Controller;

use Drupal\Core\Controller\ControllerBase;

class HelloController extends ControllerBase
{
    public function hello()
    {
        $config = $this->config('helloworld.message');
        return
        [
            '#value' => $this->t('Hello @message', ['@message'
            => $config->get('message')]),
            '#theme' => 'helloworld_world',
        ];
    }
}

// Kell másik settings, új config másik szöveg,