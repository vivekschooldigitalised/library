<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\newshelf;

class viewbookshelfwise extends Controller
{
    public function ViewbookshelfwiseView()
	{
            $data['book'] = newbook::orderBy('id','DESC')->get();
            $data['shelf'] = newshelf::orderBy('id','DESC')->get();
            return view('asignshelfbook', $data);
    } 

    public function editShelf($id)
    {
        $shelf_data = newshelf::find($id);

        return view("edit-shelf",
         [
            "shelf" => $shelf_data
        ]
    );
    }



	public function updateShelf(Request $requesttt)
	{
		$shelf_update = newshelf ::find($requesttt->id);
		$shelf_update->name = $requesttt->name;

		$shelf_update->save();
		return redirect()->back()->with('message',"This is Success Message");
	}





    
}