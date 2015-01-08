<?php

class House extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'house';

	/**
	 * Disable `updated_at` and `created_at` fields
	 */
	public $timestamps = false;

	public function character()
	{
		return $this->hasMany('Character');
	}
}