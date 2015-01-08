<?php

class CharacterController extends \BaseController {


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data = Character::all();
		$houses = House::all();
		return View::make('characters.index')
			->with(array(
				'data' => $data,
				'houses' => $houses
			)
		);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$label = array(0 => '- Select a House -');
		$houses = $label + House::lists('name', 'id');

		return View::make('characters.create', compact('houses'));
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$rules = array(
			'name' => 'required',
			'house_id' => 'required|integer|min:1'
		);
		$messages = array(
			'min' => 'Please, select a House'
		);
		$input = Input::all();
		$v = Validator::make($input, $rules, $messages);

		if($v->fails()) {
			return Redirect::to('characters/create')->withErrors($v);
		} else {
			$data = new Character;
			$data->name = Input::get('name');
			$data->house_id = Input::get('house_id');
			$data->save();

			Session::flash('message', 'Successfully created!');
			return Redirect::to('characters');
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
		$data = Character::find($id);
		$house = House::find($data->house_id);

		return View::make('characters.show')
			->with(array(
				'data' => $data,
				'house' => $house
		));
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$label = array(0 => '- Select a House -');
		$houses = $label + House::lists('name', 'id');

		$data = Character::find($id);

		return View::make('characters.edit')
			->with(array(
				'data' => $data,
				'houses' => $houses
		));

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
			'name' => 'required',
			'house_id' => 'required|integer|min:1'
		);
		$messages = array(
			'min' => 'Please, select a House'
		);
		$input = Input::all();
		$v = Validator::make($input, $rules, $messages);

		if($v->fails()) {
			return Redirect::to('characters/' . $id . '/edit')->withErrors($v);
		} else {

			$data = Character::find($id);
			$data->name = Input::get('name');
			$data->house_id = Input::get('house_id');
			$data->save();

			Session::flash('message', 'Successfully updated!');
			return Redirect::to('characters');
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
		$data = Character::find($id);
		$data->delete();

		Session::flash('message', 'Successfully deleted!');
		return Redirect::to('characters');
	}


}
