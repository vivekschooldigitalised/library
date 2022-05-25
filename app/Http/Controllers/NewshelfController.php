<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\newshelf;
class NewshelfController extends Controller
{
    public function ShelfStore(Request $request)
	{
			$shelf = new newshelf();
			$shelf->name = $request->newshelf;
			$shelf->save();

			// $notification = array(
			// 	'message' => 'Category Inserted Successfully',
			// 	'alert-type' => 'success'
			// );

			return redirect()->back()->with('success','New Shelf is created successfully'); 
			//return redirect()->back()->with('message',"This is Success Message");
		//return redirect()->back()->with($notification);
	} // End Method

	

	public function ShelfView(Request $request)
	{
			
		$data['shelf'] = newshelf::all();
		// $data['author'] = Author::orderBy('id','DESC')->get();
		// $data['publisher'] = publisher::orderBy('id','DESC')->get();
		// $data['newshelf'] = newshelf::orderBy('id','DESC')->get();

			return view('viewshelf',$data);
			//return redirect()->back()->with('message',"This is Success Message");
		//return redirect()->back()->with($notification);
	} // End Method 
}
