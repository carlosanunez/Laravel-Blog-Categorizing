<?php

class Post extends Eloquent {
	protected $table = 'posts';

	public function category() {
		return $this->belongsTo('Category');
	}

	public function comment() {
		return $this->hasMany('Comment');
	}
}