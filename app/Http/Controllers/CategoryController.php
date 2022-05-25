<?php

namespace App\Http\Controllers;
use App\Models\category;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function CategoryStore(Request $request)
	{
			$category = new category();
			$category->name = $request->category;
			$category->save();

			// $notification = array(
			// 	'message' => 'Category Inserted Successfully',
			// 	'alert-type' => 'success'
			// );

			return redirect()->back()->with('success','New Category is inserted successfully'); 
			//return redirect()->back()->with('message',"This is Success Message");
		//return redirect()->back()->with($notification);
	} // End Method 

	public function CategoryView(Request $request)
	{
			
		$data['categories'] = category::orderBy('id','DESC')->get();
		// $data['author'] = Author::orderBy('id','DESC')->get();
		// $data['publisher'] = publisher::orderBy('id','DESC')->get();
		// $data['newshelf'] = newshelf::orderBy('id','DESC')->get();

			return view('viewcategory',$data);
			//return redirect()->back()->with('message',"This is Success Message");
		//return redirect()->back()->with($notification);
	} // End Method 
}
