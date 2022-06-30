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

			return redirect()->back()->with('success','New Category is inserted successfully'); 
			
	} 
	public function CategoryView(Request $request)
	{
			
		$data['categories'] = category::orderBy('id','DESC')->get();
		
			return view('viewcategory',$data);
	
	}  

	public function editCategory($id)
	{
			$category_data = category::find($id);

			return view("edit-category", [
			 "category" => $category_data ]);
		
	} 

	public function updateCategory(Request $requestt)
	{
		$category_update = category::find($requestt->id);
		$category_update->name = $requestt->name;

		$category_update->save();
		return redirect()->back()->with('message',"This is Success Message");
	}









}
