<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bookotherdetail extends Model
{
    public function isbn_no()
    {
        return $this->belongsTo(newbook::class, 'isbn_id', 'id');
    }
}
