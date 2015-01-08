<?php

class Character extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'character';

	/**
	 * Disable `updated_at` and `created_at` fields
	 */
	public $timestamps = false;

	public function house()
	{
		return $this->belongsTo('Character');
	}
}