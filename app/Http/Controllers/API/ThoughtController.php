<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Thought;
use Illuminate\Http\Request;

class ThoughtController extends Controller
{
	/**
	 * __construct
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Display a listing of the resource.
	 *
	 */
	public function index()
	{
		return Thought::where('user_id', auth()->id())->latest()->get();
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 */
	public function store(Request $request)
	{
		// return 'store!';
		$validatedRequest = [
								 'description' => $request->description,
								 'user_id'     => auth()->id()
						];

		return Thought::create($validatedRequest);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 */
	public function update(Request $request, $id)
	{
		$thought              = Thought::findOrFail($id);
		$thought->description = $request->description;
		$thought->save();

		return $thought;
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		$thought = Thought::findOrFail($id);
		$thought->delete();
	}
}
