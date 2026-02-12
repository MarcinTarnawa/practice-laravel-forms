<?php

namespace App\Models;

use App\Models\Expenses;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];

    public function expenses()
    {
        return $this->hasMany(Expenses::class);
    }
}
