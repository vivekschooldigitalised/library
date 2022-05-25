<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bookotherdetail;

class BookotherdetailController extends Controller
{
    public function BookotherdetailStore(Request $reqq)
{
    $bookothdtl = new bookotherdetail();
    $bookothdtl -> bookseries = $reqq->bookseries;
    $bookothdtl -> volume = $reqq->volume;
    $bookothdtl -> purchasedate = $reqq->purchasedate;
    $bookothdtl -> billnumber = $reqq->billnumber;
    $bookothdtl -> currency = $reqq->currency;
    $bookothdtl -> currentprice = $reqq->currentprice;
    $bookothdtl -> save();
    return redirect()->back()->with('success','New Detail for this book is inserted successfully'); 
}


}
