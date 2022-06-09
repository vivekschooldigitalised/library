<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\newbook;
use App\Models\issuebook;

class ReturnController extends Controller
{
    public function ReturnBookView()
	{
            $data1['newbook1'] = issuebook::all();
            return view('return', $data1);  
    }

    public function ReturnbookStore(Request $request)
	{
			$bookreturn = new newbook();
            $bookreturn->isbn = $request->isbn;
            $bookreturn->name = $request->title;
            $bookreturn->author = $request->author;
            $bookreturn->publisher = $request->publisher;
            $bookreturn->language = $request->language;
            $bookreturn->edition = $request->edition;
            $bookreturn->numofpages = $request->numofpages;
            $bookreturn->price = $request->price;
            $bookreturn->category = $request->category;
            $bookreturn->shelf = $request->newshelf;
            $bookreturn->totalbooks = $request->numofbooks;
			// $newbooks->name = $request->newbook;
            // $newbooks->isbn = $request->newbooks;
            // $newbooks->category = $request->category;
            // $newbooks->publisher = $request->publisher;
            // $newbooks->author = $request->author;
            // $newbooks->asignbookwithshelf = $request->newshelf;
			$bookreturn->save();

            return redirect()->back()->with('success','New Book is inserted successfully');
    }

}
