<?php namespace App\Controllers\Admin;

//use App\Models\Player; //uncom
use Input, Notification, Redirect, Sentry, Str;



class PlayerController extends BackendController {

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


	public function show($id)
	{
		return \View::make('admin.pages.show')->with('page', Page::find($id));
	}

	public function create()
	{
		return \View::make('admin.pages.create');
	}

	public function store()
	{
		$page = new Page;
		$page->title   = Input::get('title');
		$page->slug    = Str::slug(Input::get('title'));
		$page->body    = Input::get('body');
		$page->user_id = Sentry::getUser()->id;
		$page->save();

		Notification::success('The page was saved.');

		return Redirect::route('admin.pages.edit', $page->id);
	}

	public function edit($id)
	{
		return \View::make('admin.pages.edit')->with('page', Page::find($id));
	}

	public function update($id)
	{
		$page = Page::find($id);
		$page->title   = Input::get('title');
		$page->slug    = Str::slug(Input::get('title'));
		$page->body    = Input::get('body');
		$page->user_id = Sentry::getUser()->id;
		$page->save();

		Notification::success('The page was saved.');

		return Redirect::route('admin.pages.edit', $page->id);
	}

	public function destroy($id)
	{
		$page = Page::find($id);
		//$page->delete();

		Notification::success('The page was deleted.');

		return Redirect::route('admin.pages.index');
	}

}
