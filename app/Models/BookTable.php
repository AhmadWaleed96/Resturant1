<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BookTable extends Model
{
    use HasFactory , SoftDeletes;
    public function recepion(){
        return $this->belongsTo(Recepion::class , 'recepion_id' , 'id');
}
}