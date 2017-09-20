<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Includo autoload path ( Composer )
 *
 * Installando Twig da composer viene generato in automatico un file
 * autoload.php per il caricamento dei componenti necessari al funzionamento
 * delle librerie di template engine.
 * il require_once di seguito ha lo scopo di includere in CI twig.
 */
require_once FCPATH . LIBPATH . DIRECTORY_SEPARATOR . 'autoload.php';

/**
 * MY_Config Class
 *
 * Estende la classe Config di sistema includendo una variabile $twig
 * che verrà utilizzata al posto del preistorico template engine di sistema di CodeIgniter.
 *
 * @author Federico Maffucci
 */
class MY_Config Extends CI_Config {

  public $twig;

  public function __construct()
  {
    parent::__construct();

    /**
     * Istanzio il motore di template Twig.
     */
    $TwigLoader = new Twig_Loader_Filesystem(VIEWPATH);
    $this->twig = new Twig_Environment($TwigLoader, array('debug' => TRUE, 'cache' => FALSE));

    /**
     * Istanzio variabili globali.
     */
    $this->twig->addGlobal('baseurl', $this->base_url());
    $this->twig->addGlobal('astpath', $this->base_url(ASTPATH));
    $this->twig->addGlobal('csspath', $this->base_url(CSSPATH));
    $this->twig->addGlobal('imgpath', $this->base_url(IMGPATH));
    $this->twig->addGlobal('jspath', $this->base_url(JSPATH));
    $this->twig->addGlobal('project', PROJECTNAME);
  }
}
