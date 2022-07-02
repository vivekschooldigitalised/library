<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bookotherdetail;
use App\Models\newbook;
use App\Models\User;
use App\Models\issuebook;
use App\Models\category;
use App\Models\newshelf;
use App\Models\createremarks;

use DB;
#use Illuminate\Support\Facades\DB;

class BookotherdetailController extends Controller
{

    public function BookotherdetailView(Request $request)
	{
        // $data['categories'] = category::orderBy('id','DESC')->get();
        
        $data['categories'] = category::all();

    $data['newshelf'] = newshelf::orderBy('id','ASC')->get();
    $data['newbookremarks'] = createremarks::orderBy('id','ASC')->get();

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
        
		$data['allStudent'] = user::where('id_no', $request->admission)->get();
		$data['allData'] = newbook::where('isbn', $request->isbn)->get();

        if ($request->isbn == true) {
           
            $data123 = newbook::where('isbn', $request->isbn)->first();
            $data['get'] = bookotherdetail::where('isbn_id', $data123->id)->first();
        }else{
            $data123 = newbook::where('isbn', 9789389931495)->first();
            $data['get'] = bookotherdetail::where('isbn_id', $data123->id)->first();

        }

$data['data1'] = DB::select(DB::raw("SELECT newbooks.*,bookotherdetails.*, bookotherdetails.id from newbooks
            LEFT JOIN bookotherdetails ON newbooks.id=bookotherdetails.isbn_id     
            WHERE newbooks.isbn=$isbnGet AND bookotherdetails.status=1 AND bookotherdetails.issuepermission='YES'"));

        $data['allData2'] = bookotherdetail::where('isbn_id', $request->schoolbookid)->get();

       

        // $data['allData1'] = issuebook::all();
        $data['data5'] = DB::select(DB::raw("SELECT *, issuebooks.id AS idd  FROM issuebooks 
        INNER JOIN users
ON issuebooks.admissionnumber=users.id 

INNER JOIN bookotherdetails ON issuebooks.schoolbookid=bookotherdetails.id
LEFT JOIN newbooks ON newbooks.id=issuebooks.isbn 
WHERE newbooks.isbn=$isbnGet AND bookotherdetails.status=0 AND returndate IS NULL
ORDER BY issuebooks.id   "));



        $data['allData11'] = issuebook::where('duedate', $request->duedate)->get();


   
       
        return view('assignbook', $data);
        
		#dd($data);
		
	}

    public function viewotherbookdetail()
	{
    $data['allData222'] = bookotherdetail::all();
    

    return view('viewbookotherdetail', $data);
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

        
      
            $check = bookotherdetail::where([
            ['schoolbookid', '=', $reqq->schoolbookid],
            ])->first();
    
            if($check)
                {
                    return "Already Exists";
            }
    else
    {
        $bookothdtl = new bookotherdetail() ;
        $bookothdtl -> isbn_id = $id_get->id;
       
        $bookothdtl  -> category = $reqq->category;
        $bookothdtl  -> shelf = $reqq->shelf;
        $bookothdtl  -> schoolbookid = $reqq->schoolbookid;
        $bookothdtl -> bookseries = $reqq->bookseries;
        $bookothdtl -> volume = $reqq->volume;
        $bookothdtl -> purchasedate = $reqq->purchasedate;
        $bookothdtl -> billnumber = $reqq->billnumber;
        $bookothdtl -> currency = $reqq->currency;
        $bookothdtl -> currentprice = $reqq->currentprice;
        $bookothdtl -> status = $reqq->status;
        $bookothdtl -> issuepermission = $reqq->issuepermission;
        $bookothdtl -> bookremarks = $reqq->bookremarks;
      
       
        $bookothdtl -> save();
        
        return redirect()->back()->with('message','New Detail for this book is inserted successfully'); 
    }
}

    public function IssueBookStore(Request $reqqq)
    {
        
        $bookothdt2 = new issuebook();
        $bookothdt2 -> admissionnumberid = $reqqq->admissionnumberid;
        $bookothdt2 -> isbn = $reqqq->isbn;
        $bookothdt2 -> duedate = $reqqq->duedate;
        $bookothdt2 -> save();
        return redirect()->back()->with('message','New Detail for this book is inserted successfully'); 
    }

    public function IssueBookStore1(Request $request, $id)
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

            $bookothdt23 = bookotherdetail::find($id);
            $bookothdt23 -> status = '0';           
            $bookothdt23 -> save();
                
            return redirect()->back()->with('message','Book Issued Successfully');  
            return view('assignbook', $data);
        }
        





    public function ReturnBookStore1(Request $request)
    {
        $bookothdt6 = new issuebook();
      
        $bookothdt6 -> returndate = $request->returndate;
      
        $bookothdt6 -> save();
        
       
  

    }


    public function ReturnBookEdit($id){
        $editData = issuebook::find($id);
$data['edi'] = $id;
       
$data['data9'] = DB::select(DB::raw("SELECT * FROM issuebooks INNER JOIN newbooks ON issuebooks.isbn=newbooks.id 
        INNER JOIN bookotherdetails ON issuebooks.schoolbookid=bookotherdetails.id "));
        return view('assignbookreturn',$data);
    }

        public function ReturnBookUpdate(Request $request,$id){

            $get = issuebook::where('id', $id)->first();

            $date = date("d-m-Y");
           $data = issuebook::find($id);
           $data->returndate = $date;
           $data->save();

           $bookothdt231 = bookotherdetail::find($get->schoolbookid);
           $bookothdt231 -> status = '1';           
           $bookothdt231 -> save();
        
         

           return redirect()->back()->with('message','Return Successfully'); 
           
        }

       
    


}