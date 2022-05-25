<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\assignshelfbook;
use App\Models\newbook;
use App\Models\newshelf;

class AssignshelfbookController extends Controller
{
    public function AssignshelfbookView()
	{
            $data['book'] = newbook::orderBy('id','DESC')->get();
            $data['shelf'] = newshelf::orderBy('id','DESC')->get();
            return view('asignshelfbook', $data);
    }


    public function shelfassignbookStore(Request $request)
	{
			$shelfassign = new assignshelfbook();
			$shelfassign->bookid = $request->book;
            $shelfassign->shelfid = $request->shelf;
			$shelfassign->save();

            return redirect()->back()->with('success','New Book is inserted successfully');
    }
}
