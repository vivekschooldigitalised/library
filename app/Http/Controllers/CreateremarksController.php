<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\createremarks;


class CreateremarksController extends Controller
{
    public function createremarksView()
	{
        return view('createremarks');

	} 

    public function createremarksStore(Request $request)
	{
        $createremarks = new createremarks();
			$createremarks->name = $request->createremarks;
			$createremarks->save();

			return redirect()->back()->with('success','New Category is inserted successfully'); 

	}
    public function createremarksViewupdate()
	{
		$data['createremarks'] = createremarks::orderBy('id','ASC')->get();
    	return view('viewcreateremarks',$data);
	} 
    public function editbookremarks($id)
	{
			$createremarks_data = createremarks::find($id);

			return view("edit-createremarks", [
			 "createremarks" => $createremarks_data ]);
		
	} 

	public function updateCreateRemarks(Request $requestt)
	{
		$createremarks_update = createremarks::find($requestt->id);
		$createremarks_update->name = $requestt->name;

		$createremarks_update->save();
		return redirect()->back()->with('message',"This is Success Message");
	}
}
