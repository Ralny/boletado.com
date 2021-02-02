<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * TRIVEE SERVICES IT
 * 
 * @package   Zata
 * @author    Ralny Andrade | <ra@trivee.com.br> | https://github.com/ralny
 * @copyright TRIVEE SERVICES IT | Copyright (c) 2015 - 2020
 * @license   MIT <https://opensource.org/licenses/MIT>
 * @link      http://www.trivee.com.br
 * @since     Versão 1.0.0 
 */

/**
 * Class Home
 *
 * Camada responsável por controlar o fluxo da pagina principal, contem a logica e as regras do negocio.
 *
 * @category  Controllers
 * @author    Ralny Andrade | <ra@trivee.com.br> | https://github.com/ralny
 */
class Site extends CI_Controller
{

     /**
      * Constructor
      *
      * @author    Ralny Andrade | <ra@trivee.com.br> | https://github.com/ralny
      * @return    void
      */
     public function __construct()
     {
          parent::__construct();

          /**
           * Carregando Model
           * Loading Model
           */
          //$this->load->model('zata/UserAccount_model');
     }

     /**
      * Index
      *
      * Pagina inicial
      *
      * @author    Ralny Andrade | <ra@trivee.com.br> | https://github.com/ralny
      */
     public function index()
     {
          /**
           * View
           */
          $page_data['page'] = 'lander/pages/index';

          /**
           * Carregando tudo na view
           * Loading everything on the view
           */
          $this->load->view('lander/index', $page_data);
     }
}
