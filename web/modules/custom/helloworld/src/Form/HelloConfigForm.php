<?php

namespace Drupal\helloworld\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

class HelloConfigForm extends ConfigFormBase
{
    public function getFormId()
    {
        return 'helloworld';
    }
    protected function getEditableConfigNames()
    {
        return [
            'helloworld.message',
        ];
    }
    public function buildForm(array $form, FormStateInterface $form_state)
    {
        $config = $this->config('helloworld.message');
        $form ['message'] = [
            '#type' => 'textfield',
            '#title' => 'üzenet',
            '#default_value' => $config->get('message'),
        ];
        return parent::buildForm($form, $form_state);
    }
    public function submitForm(array &$form, FormStateInterface $form_state)
    {
        $this->config('helloworld.message')
        ->set('message', $form_state->getValue('message'))
        ->save();
        parent::submitForm($form, $form_state);
    }
}
