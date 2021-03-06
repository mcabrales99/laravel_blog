<?php

class PostsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function __construct ()

	{
		$this->beforeFilter('auth',array('except' => array(
													'index', 
													'show')
										)
							);
	}


	public function index()

	{	
		$posts = Post::paginate(10);
		return View::make('posts.index')->with('posts', $posts);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		 return View::make('posts.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{	
		$validator = Validator::make(Input::all(), Post::$rules);

		if($validator->fails()) {
	        // validation failed, redirect to the post create page with validation errors and old inputs
	        Session::flash('errorMessage', 'Your post has not been saved');
	        $value = Session::get('successMessage');
	        return Redirect::back()->withInput()->withErrors($validator);
	    } 
	    else 
	    {
	       // validation succeeded, create and save the post

			$post = new Post();
			$post->title =Input::get('title');
			$post->content =Input::get('content');
			$post->user_id = Auth::id();
			$post->save();

			Session::flash('successMessage', 'Your post has been saved');
			$value = Session::get('successMessage');
			return Redirect::action ('PostsController@show', $post->id);
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
		$post = Post::find($id);
		return View::make('posts.show')->with('post', $post);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post = Post::find($id);
		return View::make('posts.edit')->with(['post'=>$post]);
	}
	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$post = Post::find($id);
		$post->title =Input::get('title');
		$post->content =Input::get('content');

		if($post -> save())	

			{
			return Redirect::action('PostsController@show', $post->id);
			}
			else
			{
			return Redirect::back()->withInput();
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
		$post = Post::find($id);
		$post->delete();
		return Redirect::action ('PostsController@index');
	}

	public function search()
	{
		$posts = Post::where('title','like', Input::get('search'))->paginate(10);
		return View::make('posts.index')->with('posts', $posts);
		
	}
}
