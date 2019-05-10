<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;

class PostsController extends Controller
{
    public function store(Request $request){

    	$user = Sentinel::getUser();

    	if($user->hasAccess('posts.create'))
	    	return $request->all();

	    abort(403, 'Unauthorized action.');
    }
}
