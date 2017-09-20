<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Loader Extends CI_Loader {

  public function __construct()
  {
    parent::__construct();
  }

  /**
   * View Loader
   *
   * Loads "view" files.
   *
   * @param string  $view View name ( Con o senza .twig )
   * @param array $vars An associative array of data
   *        to be extracted for use in the view
   * @param bool  $return Whether to return the view output
   *        or leave it to the Output class
   * @return  object|string
   */
  public function view($view, $vars = array(), $return = FALSE)
  {
    $this->config =& load_class('Config', 'core');

    if(!preg_match('/\.twig$/', $view))
      $view = $view . '.twig';

    $template = $this->config->twig->render($view, $vars);

    if ($return)
      return $template;
    else {
      print($template);
      return;
    }
  }
}
