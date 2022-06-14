<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bookotherdetail;
use App\Models\newbook;
use App\Models\user;
use App\Models\issuebook;
use App\Models\category;
use App\Models\newshelf;

use DB;
#use Illuminate\Support\Facades\DB;

class BookotherdetailController extends Controller
{

    public function BookotherdetailView(Request $request)
	{
        // $data['categories'] = category::orderBy('id','DESC')->get();
        $data['categories'] = category::all();

    $data['newshelf'] = newshelf::orderBy('id','ASC')->get();
        $data['isbnno2'] = $request->isbn;
		$data['allData'] = newbook::where('isbn', $request->isbn)->get();
		
		return view('bookotherdetail', $data);
	}


    public function AssignbookView(Request $request)
	{

        if ($request->isbn == true) {
            $isbnGet = $request->isbn;
        }else{
            $isbnGet = '123';
        }
       
        
        $data['isbnno'] = $request->admission;
        $data['isbnno1'] = $request->isbn;
		$data['allStudent'] = user::where('admissionnumber', $request->admission)->get();
		$data['allData'] = newbook::where('isbn', $request->isbn)->get();

$data['data1'] = DB::select(DB::raw("SELECT newbooks.*,bookotherdetails.* from newbooks
            JOIN bookotherdetails ON newbooks.id=bookotherdetails.isbn_id     
            WHERE newbooks.isbn=$isbnGet"));

        $data['allData2'] = bookotherdetail::where('isbn_id', $request->schoolbookid)->get();

        // $data['allData1'] = issuebook::all();
        $data['data5'] = DB::select(DB::raw("SELECT *,issuebooks.id AS idd  FROM issuebooks INNER JOIN users
ON issuebooks.admissionnumber=users.id INNER JOIN newbooks ON issuebooks.isbn=newbooks.id
INNER JOIN bookotherdetails ON issuebooks.schoolbookid=bookotherdetails.id ORDER BY issuebooks.id DESC LIMIT 12 "));



        $data['allData11'] = issuebook::where('duedate', $request->duedate)->get();


   
       
       
        
		#dd($data);
		return view('assignbook', $data);
	}


    public function AssignbookView11(Request $reqst)
	{
   
        $data['data11'] = DB::select(DB::raw("SELECT *,issuebooks.id AS idd  FROM issuebooks INNER JOIN users
            ON issuebooks.admissionnumber=users.id INNER JOIN newbooks ON issuebooks.isbn=newbooks.id
            INNER JOIN bookotherdetails ON issuebooks.schoolbookid=bookotherdetails.id"));

            return view('bookissuereport', $data);
	}

   
    public function BookotherdetailStore(Request $reqq)
    {
        $id_get = newbook::where('isbn', $reqq->isbn)->first();
        $bookothdtl = new bookotherdetail();
        $bookothdtl -> isbn_id = $id_get->id;
        // $bookothdtl -> title = $reqq->title;
        $bookothdtl  -> category = $reqq->category;
        $bookothdtl  -> shelf = $reqq->shelf;
        $bookothdtl  -> schoolbookid = $reqq->schoolbookid;
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

    public function IssueBookStore1(Request $request)
    {
        $check1 = issuebook::where([
            ['returndate' == NULL],
        ])->first();

        if($check1)
        {
            return "This book is already issued";
        }
        else
        {
            $bookothdt6 = new issuebook();
            $bookothdt6 -> admissionnumber = $request->admissionnumber1;
            $bookothdt6 -> isbn = $request->isbn1;
            // $bookothdt6 -> name = $request->name;
            $bookothdt6 -> schoolbookid = $request->schoolbookid1;
            $bookothdt6 -> duedate = $request->duedate;
            $bookothdt6 -> returndate = $request->returndate;
           // $bookothdt6 -> status = 'return';
            $bookothdt6 -> save();
                
            return redirect()->back()->with('success','New Detail for this book is inserted successfully'); 
            return view('assignbook', $data);
        }
        


        $data['data112'] = DB::select(DB::raw("SELECT * FROM issuebooks INNER JOIN bookotherdetails
        ON issuebooks.schoolbookid=bookotherdetails.id"));


           
	}



    public function ReturnBookStore1(Request $request)
    {
        $bookothdt6 = new issuebook();
      
        $bookothdt6 -> returndate = $request->returndate;
      
        $bookothdt6 -> save();
        
        return redirect()->back()->with('success','New Detail for this book is inserted successfully'); 
    }


    public function ReturnBookEdit($id){
        $editData = issuebook::find($id);
$data['edi'] = $id;
       
$data['data9'] = DB::select(DB::raw("SELECT * FROM issuebooks INNER JOIN newbooks ON issuebooks.isbn=newbooks.id 
        INNER JOIN bookotherdetails ON issuebooks.schoolbookid=bookotherdetails.id "));
        return view('assignbookreturn',$data);
    }

        public function ReturnBookUpdate(Request $request,$id){

            $date = date("d-m-Y");
           $data = issuebook::find($id);
           $data->returndate = $date;
           $data->save();
        
           return  redirect()->back()->with('success','Book is inserted successfully'); 
           
        }

    


}