<?php

namespace App\Exports;

use App\Models\Users;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UsersExport implements FromCollection, WithCustomCsvSettings, WithHeadings
{
    public function getCsvSettings(): array
    {
        return [
            'delimiter' => ','
        ];
    }

    public function headings(): array
    {
        return ["ISBN Number", "Category","Shelf","School Book Id","Book Series","Volume","Purchase Date","Bill Number","Currency","Current Price","Issue Permission","Book Remarks"];
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return User::select('isbn_id','category','shelf','schoolbookid','bookseries','volume','purchasedate','billnumber','currency','currentprice','issuepermission','bookremarks')->get();
    }
} 