<?php

namespace App\Http\Controllers;

use App\Nice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class NiceController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}
    public function nice(){
        $nice=New Nice();
        $nice->article_id = request()->article_id;
        $nice->user_id = auth()->user()->id;
        ++$nice->like;
        $nice->save();
        return back();
    }
    public function unnice($id){
        $user=Auth::user()->id;
        $nice=Nice::where('post_id', $post->id)->where('user_id', $user)->first();
        $nice->delete();
        return back();
    }
}
