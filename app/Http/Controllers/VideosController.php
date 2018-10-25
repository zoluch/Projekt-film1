<?php

namespace App\Http\Controllers;

use Request;

use App\Http\Requests;
use App\Http\Requests\CreateVideoRequest;
use App\Http\Controllers\Controller;
use App\Video;
use App\Category;
use Auth;
use Session;

class VideosController extends Controller
{	
	public function __construct()
	{
		$this->middleware('auth', ['only'=>'create']);
	}
	
    //Pobieranie listy filmow
    public function index()
    {	
    	$videos = Video::latest()->get();
    	return view('videos.index')->with('videos', $videos);
    }

    public function show($id)
	{
	$video = Video::findOrFail($id);
	return view('videos.show')->with('video', $video);
	}
	// Dodaj film
	public function create()
	{	
		$categories = Category::pluck('name', 'id');
		return view('videos.create')->with('categories', $categories);
	}
	//Zapisz film
	public function store(CreateVideoRequest $request)
	{	
		$video = new Video($request->all());
		Auth::user()->videos()->save($video);
		$categoryIds = $request->input('CategoryList');
		$video->categories()->attach($categoryIds);
		//Musimy wykonac requesty
		return redirect('videos');
	}
	public function edit($id)
	{	
		$categories = Category::pluck('name', 'id');
		$video = Video::findOrFail($id);
		return view('videos.edit')->compact('video', 'categories');
	}

	//Edycja filmu
	public function update($id, CreateVideoRequest $request)
	{
		$video = Video::findOrFail($id);
		$video->update($request->all());
		$video->categories()->sync($request->input('CategryList'));
		return redirect('videos');
	}
}
