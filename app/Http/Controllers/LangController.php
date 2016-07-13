<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Response;
use App\Models\Language;
use Auth;

class LangController extends Controller
{
    public function lang($slug, Request $request)
    {
    	$words = Language::where('user_id', Auth::user()->id)
    						->where('lang', $slug)->get();	
	    $nouns = $words->where('part', 1);
	    $verbs = $words->where('part', 2);
	    $sub = $words->where('part', 3);
	    $numbers = $words->where('part', 4);	
	    $days = $words->where('part', 5);
	    $colors = $words->where('part', 6);
	    $sentences = $words->where('part', 7);
	    $times = $words->where('part', 8);

	    //dd($numbers);

    	return view('pages.lang', compact('nouns', 'verbs', 'sub', 'numbers', 'days', 'colors', 'sentences', 'times'));
    }

    public function langPost(Request $request)
    {
    	$this->validate($request, [
    		'field1' => 'required|max:1000',
    		'field2' => 'required|max:1000',
    		'part' => 'required',
    		'lang' => 'required|max:10'
    	]);

    	$id = Auth::user()->id;

	    $newWord = Language::create([
    		'user_id' => $id,
    		'lang' => $request->input('lang'),
    		'part' => $request->input('part'),
    		'field1' => $request->input('field1'),
    		'field2' => $request->input('field2'),
    	]);

        return Response::json(['id' => $newWord->id]);
    }

    public function langDelete(Request $request)
    {
    	$id = $request->input('id');

    	Language::find($id)->delete();

    	return redirect()->back();
    }

    public function langEdit(Request $request)
    {
    	$id = $request->input('id');
    	$word = Language::find($id);

    	if(!$word) {
    		return abort(404);
    	}

    	$word->update([
    		'field1' => $request->input('field1'),
    		'field2' => $request->input('field2'),
    	]);

    	return Response::json(['data' => 'ok']);

    }
}
