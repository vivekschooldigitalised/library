<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\newbook;
use App\Models\category;
use App\Models\Author;
use App\Models\publisher;
use App\Models\newshelf;
use App\Models\bookotherdetail;
use App\Models\createremarks;
use DB;


class NewbookController extends Controller
{

    public function BookView()
	{
        $data['data7'] = DB::select(DB::raw("SELECT newbooks.*,bookotherdetails.*, newbooks.id AS nbidd, bookotherdetails.id AS bodidd from newbooks
        JOIN bookotherdetails ON newbooks.id=bookotherdetails.isbn_id"));
   
   
   
   $data['allData101'] = newbook::all();
   return view('allbook', $data);  


   $data['allData102'] = bookotherdetail::all();
   return view('allbook', $data);

}
    public function BookView11()
	{
        $data['data11'] = DB::select(DB::raw("SELECT newbooks.*,bookotherdetails.* from newbooks
        JOIN bookotherdetails ON newbooks.id=bookotherdetails.isbn_id"));
            return view('bookdetailreport', $data);  
    }

    public function editAllbook($id)
	{

       
            // $data['categories'] = category::orderBy('id','DESC')->get();
   

        $newbookss = newbook::find($id);

        return view("edit-newbook",
         [
            "newbook" =>  $newbookss
         ]);
    }

    public function updateNewbook(Request $requestttt)
	{
		$newbook_update = newbook::find($requestttt->id);
		$newbook_update->isbn = $requestttt->isbn;
        $newbook_update->name = $requestttt->name;
        $newbook_update->authors = $requestttt->authors;
        $newbook_update->publisher = $requestttt->publisher;
        $newbook_update->language = $requestttt->language;
        $newbook_update->edition = $requestttt->edition;
        $newbook_update->pages = $requestttt->pages;
        $newbook_update->prices = $requestttt->prices;

		$newbook_update->save();
		return redirect()->back()->with('message',"This is Success Message");
	}




    public function editotherbookdetail($id)
	{

        $data['categoriesw'] = category::all();
    
        $data['newshelfw'] = newshelf::all();

        $data['newshelfw'] = newshelf::all();

        $data['get_Data'] = bookotherdetail::where('id', $id)->get();

        $data['newbookremarks1'] = createremarks::orderBy('id','ASC')->get();

         return view('edit-otherbookdetail', $data);  
    }

    public function updateotherbookdetail(Request $requesttttt)
	{
        $check = bookotherdetail::where([
            ['schoolbookid', '=', $requesttttt->schoolbookid],
            ])->first();
    
            if($check)
                {
                    return "School Book Id is - Already Exists";
                    
            }
    else
    {
		$newbook_update1 = bookotherdetail::find($requesttttt->id);
		$newbook_update1->category = $requesttttt->category;
        $newbook_update1->shelf = $requesttttt->shelf;
        $newbook_update1->schoolbookid = $requesttttt->schoolbookid;
        $newbook_update1->bookseries = $requesttttt->bookseries;
        $newbook_update1->volume = $requesttttt->volume;
        $newbook_update1->purchasedate = $requesttttt->purchasedate;
        $newbook_update1->billnumber = $requesttttt->billnumber;
        $newbook_update1->currency = $requesttttt->currency;
        $newbook_update1->currentprice = $requesttttt->currentprice;
        $newbook_update1->issuepermission = $requesttttt->issuepermission;
        $newbook_update1->bookremarks = $requesttttt->bookremarks;
        

		$newbook_update1->save();
		return redirect()->back()->with('message',"This is Success Message");
	}
}







    

    public function issuebookView()
	{
            $data['newbook'] = newbook::where('isbn', $request->isbn)->get();
            return view('assignbook', $data);  
    }

    public function BookView1(Request $request)
	{

        #$isb1 = '9789389931495';
        $isb1 = $request->isbn;
        $url = 'https://api2.isbndb.com/book/'.$isb1.'';  

        $restKey = '47906_0b0bccc1fa56a3032c77169bcde3ed76';  
        
        $headers = array(  
        "Content-Type: application/json",  
        "Authorization: " . $restKey  
        );  
        
        $rest = curl_init();  
        curl_setopt($rest,CURLOPT_URL,$url);  
        curl_setopt($rest,CURLOPT_HTTPHEADER,$headers);  
        curl_setopt($rest,CURLOPT_RETURNTRANSFER, true);  
        
        $response = curl_exec($rest);  
        
        //echo $response;   
        curl_close($rest);


        //Test Code Start

        $data['res'] = json_decode($response);

        $isbn = $request->isbn;
        
            $data['isbn'] = newbook::where('isbn', $request->isbn)->get();
            return view('scanbook', $data);  
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
      
        $check = newbook::where([
        ['isbn', '=', $request->isbn],
        ])->first();

        if($check)
            {
                return "Already Exists";
        }
else
{
    $newbooks = new newbook();
    $newbooks->isbn = $request->isbn;
    $newbooks->name = $request->titlelong;
    $newbooks->publisher = $request->publisher;
    $newbooks->language = $request->language;
    $newbooks->authors = $request->authors;
    $newbooks->edition = $request->edition;
    $newbooks->pages = $request->pages;
    $newbooks->prices = $request->prices;
    $newbooks->image = $request->imagesrc;

    $newbooks->save();
    return redirect()->back()->with('success','New Book is inserted successfully');

}
        
                
    }

    public function ScannedBookView()
	{
        $isb1 = '9789389931495';
        $url = 'https://api2.isbndb.com/book/'.$isb1.'';  

        $restKey = '47906_0b0bccc1fa56a3032c77169bcde3ed76';  
        
        $headers = array(  
        "Content-Type: application/json",  
        "Authorization: " . $restKey  
        );  
        
        $rest = curl_init();  
        curl_setopt($rest,CURLOPT_URL,$url);  
        curl_setopt($rest,CURLOPT_HTTPHEADER,$headers);  
        curl_setopt($rest,CURLOPT_RETURNTRANSFER, true);  
        
        $response = curl_exec($rest);  
        
        //echo $response;   
        curl_close($rest);


        //Test Code Start

        $data['res'] = json_decode($response);

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
            // $newbooks->totalbooks = $request->numofbooks;
            $newbooks->book_series = $request->book_series;
            $newbooks->volume = $request->volume;
            $newbooks->purchasedate = $request->purchasedate;
            $newbooks->billnumber = $request->billnumber;
            $newbooks->currency = $request->currency;
            $newbooks->currentprice = $request->currentprice;
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