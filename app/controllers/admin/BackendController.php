<?php namespace App\Controllers\Admin;

use Input, Sentry;

/**
 * Class BackendController
 * @package App\Controllers\Admin
 * The main controller for backend, every admin controller should extends this one
 * and must call parent::__construct() method in __construct() method
 */
class BackendController extends \BaseController {

    public $layout = null;

    public function __construct(){
        parent::setupLayout();
    }

}
