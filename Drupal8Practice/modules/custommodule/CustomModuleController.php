<?php

namespace Drupal\custommodule\Controller;

use Drupal\Core\COntroller\ControllerBase;

class CustomModuleController extends ControllerBase {

  public function content() {
    return array(
      '#type' => 'markup',
      '#markup' => $this->t('Hello world!'),
    );
  }
}
