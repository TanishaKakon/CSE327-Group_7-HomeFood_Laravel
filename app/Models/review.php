<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class review extends Model
{
    use HasFactory;
    public $table="review";  

    public function review()
    {
        return $this->hasMany('App\Models\review');
    }
}
