<?php


class Membre extends Eloquent {

	protected $fillable = array('name', 'mail', 'password', 'address', 'number');
	
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'membres';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

}