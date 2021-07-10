<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subsubcategory extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'category_id',
    //     'subcategory_id',
    //     'subsubcategory_name_en',
    //     'subsubcategory_name_ben',
    //     'subsubcategory_name_hin',
    //     'subsubcategory_slug_en',
    //     'subsubcategory_slug_ben',
    //     'subsubcategory_slug_hin',
    // ];

    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class, 'subcategory_id', 'id');
    }
}