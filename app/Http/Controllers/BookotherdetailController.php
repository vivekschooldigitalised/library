<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bookotherdetail;
use App\Models\newbook;
use App\Models\user;
use App\Models\issuebook;

class BookotherdetailController extends Controller
{

    public function BookotherdetailView(Request $request)
	{
        $data['isbnno2'] = $request->isbn;
		$data['allData'] = newbook::where('isbn', $request->isbn)->get();
		
		return view('bookotherdetail', $data);
	}

    public function AssignbookView(Request $request)
	{
      
        //$url = 'https://api2.isbndb.com/book/9789389931495';
        $url = 'https://api2.isbndb.com/book/9789389931495';  

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

        $data['isbnno'] = $request->admission;
        $data['isbnno1'] = $request->isbn;

		$data['allStudent'] = user::where('admissionnumber', $request->admission)->get();

		$data['allData'] = newbook::where('isbn', $request->isbn)->get();
		
		return view('assignbook', $data);
	}

    public function BookotherdetailStore(Request $reqq)
    {
        $bookothdtl = new bookotherdetail();
        $bookothdtl -> isbnid = $reqq->isbn;
        $bookothdtl -> title = $reqq->title;
        $bookothdtl -> bookseries = $reqq->bookseries;
        $bookothdtl -> volume = $reqq->volume;
        $bookothdtl -> purchasedate = $reqq->purchasedate;
        $bookothdtl -> billnumber = $reqq->billnumber;
        $bookothdtl -> currency = $reqq->currency;
        $bookothdtl -> currentprice = $reqq->currentprice;
        $bookothdtl -> save();
        return redirect()->back()->with('success','New Detail for this book is inserted successfully'); 
    }

    public function IssueBookStore(Request $reqqq)
    {
        $bookothdt2 = new issuebook();
        $bookothdt2 -> admissionnumberid = $reqqq->admissionnumberid;
        $bookothdt2 -> isbn = $reqqq->isbn;
        $bookothdt2 -> duedate = $reqqq->duedate;
        $bookothdt2 -> save();
        return redirect()->back()->with('success','New Detail for this book is inserted successfully'); 
    }


}