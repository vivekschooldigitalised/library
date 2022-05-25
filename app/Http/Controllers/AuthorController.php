<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
    public function AuthorStore(Request $request)
	{
			$payment_all = new Author();
			$payment_all->name = $request->author;
			$payment_all->save();

		// $notification = array(
		// 	'message' => 'Student Fee Inserted Successfully',
		// 	'alert-type' => 'success'
		// );
		return redirect()->back()->with('success','New Author is inserted successfully');
		// return redirect()->back()->with($notification);
	} // End Method 


}
