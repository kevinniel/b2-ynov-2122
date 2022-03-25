<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soft extends Model
{
    use HasFactory;

    protected $table = "softs";

    protected $fillable = [
        "name",
        "category_id"
    ];

    public function category()
    {
        return $this->belongsTo('App\Models\Category', "category_id");
    }

}
