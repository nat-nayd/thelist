<?php

namespace Api;

class HouseController extends \BaseController {

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
				'house' => []
			];

			$data = \House::find($id);
			$response = [
				'id' => $data->id,
				'name' => $data->name,
				'motto' => $data->motto
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
				'houses' => []
			];

			$data = \House::all();
			foreach ($data as $obj) {
				$response['houses'][] = [
					'id' => $obj->id,
					'name' => $obj->name,
					'motto' => $obj->motto
				];
			}

		} catch(\Exception $e) {
			$statusCode = 400;
		} finally {
			return \Response::json($response, $statusCode);
		}
	}


}