<?php

namespace App\Http\Controllers;
use App\Models\publisher;

use Illuminate\Http\Request;

class PublisherController extends Controller
{
    public function PublisherStore(Request $request)
	{
			$publisher = new publisher();
			$publisher->name = $request->publisher;
			$publisher->save();

		// 	$notification = array(
		// 		'message' => 'Student Fee Inserted Successfully',
		// 		'alert-type' => 'success'
		// 	);
		return redirect()->back()->with('success','New Publisher is inserted successfully');
		// return redirect()->back()->with($notification);
	} // End Method 
}
