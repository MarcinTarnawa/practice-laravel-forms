<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;

class Expenses extends Model
{
    protected $table = 'expenses';

    // protected $fillable = [
    //     'description',
    //     'amount',
    //     'date'
    // ];
    
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
