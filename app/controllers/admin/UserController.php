<?php namespace App\Controllers\Admin;

use App\Models\User;
use Input, Notification, Redirect, Sentry, Str;

class UserController extends BackendController {

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @param $user
     * @return mixed
     * Edit user info
     */
    public function edit($user)
	{
		return \View::make('admin.user.edit')->with('user', User::find($user));
	}


    public function update($id)
	{

		$user = User::find($id);
        $user->first_name   = Input::get('first_name');
        $user->last_name    = Input::get('last_name');
        $user->id = Sentry::getUser()->id;
        $user->save();

		Notification::success('The user was saved.');

		return Redirect::route('admin.user.edit', $user->id);
	}


}
