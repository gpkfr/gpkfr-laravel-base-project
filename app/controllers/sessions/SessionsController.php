<?php

class SessionsController extends \BaseController {

	/**
	* User Repository
	**/
	protected $user;


  public function __construct(User $user)
  {
  	$this->user = $user;
  }

	/*
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// 		if (Auth::check()) {
		// 	# redirect to main page
		// 	return Redirect::to ('/');
		// }
		// return Redirect::to ('/login');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return sessions.create views or redirect if logged in
	 */
	public function create()
	{
		if (Auth::check()) {
			// redirect to main page
			return Redirect::to ('/');
		}

		// Login Page
		return View::make('sessions.create');
	}


	/**
	 * Login the user.
	 *
	 * @return void
	 */
	public function store()
	{
		//
		if (Auth::attempt(Input::only('email','password')))
		{
			return Redirect::intended('/');
		}

		  return Redirect::back()
		         ->withInput()
		         ->with('login_errors',true);
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy()
	{
		//
		Auth::logout();

		return Redirect::to('/login');
	}
}
