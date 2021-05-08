<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character_part extends Model
{
    use HasFactory;

    protected $fillable = [
    	'gender_id',
    	'part_category_id',
    	'content'
    ];

    public function category()
    {
    	return $this->hasMany(Part_category::class,'id','part_category_id');
    }
}
