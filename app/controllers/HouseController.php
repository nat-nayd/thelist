<?php

class HouseController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data = House::all();
		return View::make('houses.index')
			->with('data', $data);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('houses.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$rules = array(
			'name' => 'required'
		);

		$input = Input::all();
		$v = Validator::make($input, $rules);

		if($v->fails()) {
			return Redirect::to('houses/create')->withErrors($v);
		} else {

			$data = new House;
			$data->name = Input::get('name');
			$data->motto = Input::get('motto');
			$data->save();

			Session::flash('message', 'Created Successfully!');
			return Redirect::to('houses');
		}
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$data = House::find($id);
		return View::make('houses.show')->with('data', $data);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$data = House::find($id);
		return View::make('houses.edit')->with('data', $data);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$rules = array(
			'name' => 'required'
		);

		$input = Input::all();
		$v = Validator::make($input, $rules);

		if($v->fails()) {
			return Redirect::to('houses/' . $id . '/edit')->withErrors($v);
		} else {

			$data = House::find($id);
			$data->name = Input::get('name');
			$data->motto = Input::get('motto');
			$data->save();

			Session::flash('message', 'Successfully updated!');
			return Redirect::to('houses');
		}
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$data = House::find($id);
		$data->delete();

		Session::flash('message', 'Successfully deleted!');
		return Redirect::to('houses');
	}


}
