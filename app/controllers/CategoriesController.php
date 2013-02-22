<?php

class CategoriesController extends BaseController {
	public $restful = true;

	public function index() {
		return View::make('categories.index')
			->with('title', 'Categories')
			->with('categories', Category::all());
	}

	public function show($id) {
		$cat = Category::find($id);

		if(!$cat) {
			return View::make('errors.index')
				->with('title', 'Category not Found!')
				->with('error', 'Category not Found!');
		} else {
			return View::make('categories.show')
				->with('title', $cat->name . ' Category')
				->with('category', $cat)
				->with('posts', Post::with('category')->where('category_id', '=', $id)->get());
		}
	}
}