<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recepion extends Model
{
    use HasFactory;
    public function booktables(){
        return $this->hasMany(BookTable::class);
}
}