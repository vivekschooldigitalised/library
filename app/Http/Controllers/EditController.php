<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditController extends Controller
{
    public function editalldata($isbn)
    {
        return newbook:: find($isbn);
        
    }
}
