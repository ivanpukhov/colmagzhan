<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Photo;
use Illuminate\Http\Request;

class NewsController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		 $post = News::paginate(10);
		return view('news', compact('post'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\News  $news
	 * @return \Illuminate\Http\Response
	 */
	public function show(News $news)
	{
		 return view('news__item', compact('news'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Models\News  $news
	 * @return \Illuminate\Http\Response
	 */
	public function edit(News $news)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Models\News  $news
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, News $news)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\News  $news
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(News $news)
	{
		//
	}
}
