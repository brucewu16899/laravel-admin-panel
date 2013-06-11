<?php namespace App\Controllers\Admin;

use Input, Notification, Redirect, Sentry, Str;

class MainController extends BackendController {

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return mixed
     * Show admin main page
     */
    public function index()
	{
		return \View::make('admin.main.index')->with('pages', '');
	}


}
