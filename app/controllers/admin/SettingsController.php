<?php namespace App\Controllers\Admin;

#use App\Models\Settings;

use Input, BackendController, Notification, Redirect, Sentry, Str;


class SettingsController extends BackendController {

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return mixed
     * Show settings page
     */
    public function index()
    {
        return \View::make('admin.settings.index')->with('pages', '');
    }

}
