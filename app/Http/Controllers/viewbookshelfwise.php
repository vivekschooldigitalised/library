<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class viewbookshelfwise extends Controller
{
    public function ViewbookshelfwiseView()
	{
            $data['book'] = newbook::orderBy('id','DESC')->get();
            $data['shelf'] = newshelf::orderBy('id','DESC')->get();
            return view('asignshelfbook', $data);
    } 
}
