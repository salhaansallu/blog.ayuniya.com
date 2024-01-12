<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;

    public function subcategories()
    {
        return $this->hasMany(SubCategories::class, 'category_id', 'id'); 
    }

    protected $fillable = [
        'category_name',
    ];
}
