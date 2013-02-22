<?php

class PostsController extends BaseController {
	public $restful = true;

	public function getIndex() {
		return View::make('posts.index')
			->with('title', 'Latest Posts')
			->with('posts', Post::with(array('category', 'comment'))->get());
	}

	public function getPost($id) {

	}
}