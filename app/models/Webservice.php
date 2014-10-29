<?php

class Webservice extends \Eloquent {
	protected $fillable = [];
	public function profile () {
		return $this->hasMany('Profile');
	}
}