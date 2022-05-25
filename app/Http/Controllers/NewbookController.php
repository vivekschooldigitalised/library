<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\newbook;
use App\Models\category;
use App\Models\Author;
use App\Models\publisher;
use App\Models\newshelf;

class NewbookController extends Controller
{

    public function BookView()
	{
            $data['newbook'] = newbook::all();
            return view('allbook', $data);  
    }


    public function NewbookView()
	{
            $data['categories'] = category::orderBy('id','DESC')->get();
           // $data['author'] = Author::orderBy('id','DESC')->get();
           // $data['publisher'] = publisher::orderBy('id','DESC')->get();
            $data['newshelf'] = newshelf::orderBy('id','DESC')->get();
            return view('addbook', $data);  
    }


    public function NewbookStore(Request $request)
	{
			$newbooks = new newbook();
            $newbooks->isbn = $request->isbn;
            $newbooks->name = $request->title;
            $newbooks->author = $request->author;
            $newbooks->publisher = $request->publisher;
            $newbooks->language = $request->language;
            $newbooks->edition = $request->edition;
            $newbooks->numofpages = $request->numofpages;
            $newbooks->price = $request->price;
            $newbooks->category = $request->category;
            $newbooks->shelf = $request->newshelf;
            $newbooks->totalbooks = $request->numofbooks;
			// $newbooks->name = $request->newbook;
            // $newbooks->isbn = $request->newbooks;
            // $newbooks->category = $request->category;
            // $newbooks->publisher = $request->publisher;
            // $newbooks->author = $request->author;
            // $newbooks->asignbookwithshelf = $request->newshelf;
			$newbooks->save();

            return redirect()->back()->with('success','New Book is inserted successfully');
    }

    public function ScannedBookView()
	{
            $data['categories'] = category::orderBy('id','DESC')->get();
           // $data['author'] = Author::orderBy('id','DESC')->get();
           // $data['publisher'] = publisher::orderBy('id','DESC')->get();
            $data['newshelf'] = newshelf::orderBy('id','DESC')->get();
            return view('scanbook', $data);  
    }


    public function ScannedbookStore(Request $request)
	{


			$newbooks = new newbook();
            $newbooks->isbn = $request->isbn;
            $newbooks->name = $request->title;
            $newbooks->author = $request->author;
            $newbooks->publisher = $request->publisher;
            $newbooks->language = $request->language;
            $newbooks->edition = $request->edition;
            $newbooks->numofpages = $request->numofpages;
            $newbooks->price = $request->price;
            $newbooks->category = $request->category;
            $newbooks->shelf = $request->newshelf;
            $newbooks->totalbooks = $request->numofbooks;
			// $newbooks->name = $request->newbook;
            // $newbooks->isbn = $request->newbooks;
            // $newbooks->category = $request->category;
            // $newbooks->publisher = $request->publisher;
            // $newbooks->author = $request->author;
            // $newbooks->asignbookwithshelf = $request->newshelf;
			$newbooks->save();

            return redirect()->back()->with('success','New Book is inserted successfully ' );
    }

    
}
