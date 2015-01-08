<?php

namespace Api;

class CharacterController extends \BaseController {

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		try {

			$statusCode = 200;
			$response = [
				'character' => []
			];

			$data = \Character::find($id);
			$house = \House::find($data->house_id);

			$response = [
				'id' => $data->id,
				'name' => $data->name,
				'house_id' => $data->house_id,
				'house_name' => $house->name,
			];

		} catch(\Exception $e) { # GLOBAL NAMESPACE !!!

			$statusCode = 404;
			$response = [
				'error' => 'Resourse not found!'
			];

		} finally {
			return \Response::json($response, $statusCode);
		}
	}


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		try {

			$statusCode = 200;
			$response = [
				'characters' => []
			];

			$data = \Character::all();
			$house = \House::all();

			foreach ($data as $obj) {
				$response['characters'][] = [
					'id' => $obj->id,
					'name' => $obj->name,
					'house_id' => $obj->house_id,
					'house_name' => $house->find($obj->house_id)->name
				];
			}

		} catch(\Exception $e) {
			$statusCode = 400;
		} finally {
			return \Response::json($response, $statusCode);
		}
	}


}
