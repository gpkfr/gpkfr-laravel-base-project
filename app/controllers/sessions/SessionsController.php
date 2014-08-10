<?php

class SessionsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
				if (Auth::check()) {
			# redirect to main page
			return Redirect::to ('/');
		}
		return Redirect::to ('/login');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		if (Auth::check()) {
			# redirect to main page
			return Redirect::to ('/');
		}
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
			return Redirect::to('/');
		}

		  return Redirect::back()->withInput();

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
